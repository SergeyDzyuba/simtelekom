<?php
$GLOBALS['log']->fatal('Chat close:');
$GLOBALS['log']->fatal($_POST);
/*TODO:
*  1. добавить проверку на наличие в базе обработанной или удаленной какой-либо??? записи
*     если есть, то обновляем данные, иначе - делаем вставку новой строки???
 * 2. Добавить обработку чата, запись его в обращение по id чата
 * 3.
*/
global $db, $timedate, $current_user;
//$user = BeanFactory::getBean('Users', $current_user->id);
//header('Content-Type: application/json; charset=utf-8');
$date_entered = $timedate->nowDb();
//$date_modified = '';
$record_id = create_guid();

$str = html_entity_decode($_POST['chat']);
$str = preg_replace_callback('/[\\\\]*u([0-9a-fA-F]{4})/', function ($match) {
    return mb_convert_encoding(pack('H*', $match[1]), 'UTF-8', 'UCS-2BE');
}, $str);
$_POST['chat'] = $str;

//$response = json_decode(str_replace('&quot;','"',$_POST['chat']),true);
$response = json_decode($_POST['chat'], true);

$response_json = $_POST['chat'];
$chat_id = $response['id'];
$operator_id = $response['operator']['id'];
$action = 'chat_close';
$chat_history = decodeHistory($response_json);
//$visitor_id = '';
//$visitor_name = '';

$visitor_phone = str_replace(array('+7', ' ', '(', ')', '-'), '', $response['visitor']['fields']['phone']);
if (isset($response['visitor']['channel']['type']) && !empty($response['visitor']['channel']['type'])) {
    $source = $response['visitor']['channel']['type'];
} else {
    $source = 'Сайт';
}
// добавляем запись о закрытии чата
$query = "INSERT INTO webim_chat_heap VALUES ('$record_id','$operator_id','$chat_id','$visitor_phone','$date_entered','$date_entered','$response_json','$chat_history','0','$action','0')";
$result = $db->query($query);
//запись о присоединении оператора делаем "обработанной"
$query = "UPDATE webim_chat_heap SET processed=1 /*AND deleted=1*/ WHERE chat_id='$chat_id' AND deleted=0 AND action='operator_assign'";
$result = $db->query($query);
/*
 * TODO:
 * 0. Сделать в краткой форме поле истории чата нередактируемым??
 */
$docs = array();
$counter = 0;
foreach ($response['messages'] as $key => $item) {
    if ($item['kind'] === 'file_operator' || $item['kind'] === 'file_visitor') {//если есть файлы в очередном сообщении
        $file_params = json_decode($item['message'], true);
        //filename, content_type, guid
        $docs[$counter]['filename'] = $file_params['filename'];
        $docs[$counter]['file_guid'] = $file_params['guid'];
        $docs[$counter]['file_content_type'] = $file_params['content_type'];
        $docs[$counter]['file_source'] = $item['kind'];//file_visitor OR file_operator
        $docs[$counter]['file_timestamp'] = $item['created_at'];
        $account_name = 'simsimcom';
        $docs[$counter]['file_url'] = 'https://' . $account_name . '.webim.ru/l/o/download/' . $file_params['guid'] . '/' . $file_params['filename'];//исправить на что-то универсальное
        $counter++;
    }
}
//сформировали массив доков, создаем сущности в модуле  и связываем их с контактом и обращением
//global $timedate,$db,$current_user;
$doc_ids = array();
foreach ($docs as $item) {
    $doc = new Document();
    $docRev = new DocumentRevision();
    $doc->date_entered = $timedate->nowDb();
    $doc->date_modified = $timedate->nowDb();
    $doc->assigned_user_id = '1';
    $doc->modified_user_id = '1';
    $doc->created_by = '1';
    $doc->description = '';
    $doc->document_name = $item['filename'];
    $doc->doc_id = $item['file_guid'];
    $doc->doc_type = 'Webim_doc';
    $doc->doc_url = $item['file_url'];
    $doc->active_date = date("Y-m-d");;
    $doc->status_id = 'Active';
    $doc->description = ($item['file_source'] === 'file_visitor') ? 'Файл передан клиентом' : 'Файл передан оператором';
    $doc_id = $doc->save();
    $doc_ids[] = $doc_id;

    $docRev->retrieve_by_string_fields(array('document_id' => $doc_id, 'change_log' => 'Документ создан'));
    $docRev->change_log = 'Документ прикреплен';
    $docRev->document_id = $doc_id;
    $docRev->doc_id = $item['file_guid'];
    $docRev->doc_type = 'Webim_doc';
    $docRev->doc_url = $item['file_url'];
    $docRev->date_entered = $timedate->nowDb();
    $docRev->date_modified = $timedate->nowDb();
    $docRev->created_by = '1';
    $buf = explode('.', $item['filename']);
    $docRev->filename = $item['filename'];
    $docRev->file_ext = $buf[count($buf) - 1];
    $docRev->file_mime_type = $item['file_content_type'];
    $docRev->revision = 1;
    $docRev_id = $docRev->save();
    $doc->retrieve($doc_id);
    $doc->document_revision_id = $docRev_id;
    $doc->save();
}
$contact = new Contact();
$document = new Document();
$appeal = new Appeal();
$appeal->retrieve_by_string_fields(array('webim_appeal_id' => $chat_id));
//$contact->retrieve_by_string_fields(array('phone_mobile' => $visitor_phone));
$query_contact = "SELECT id FROM contacts WHERE deleted=0 AND phone_mobile LIKE '%" . $visitor_phone . "' LIMIT 0,1";
$result = $db->query($query_contact);
$row_contact = $db->fetchByAssoc($result);
if (isset($row_contact['id']) && !empty($row_contact['id'])) {//если найден контакт по номеру телефона
    // то связываем его с документами
    foreach ($doc_ids as $item) {
        $query = "INSERT INTO documents_contacts VALUES ('" . create_guid() . "','" . $timedate->nowDb() . "','0','$item','" . $row_contact['id'] . "');";
        $db->query($query);
    }
}
//если обращение уже сохранено из субпанели, иначе добавить в хук на сохранение новой записи
if (!empty($appeal->id)) {//связываем обращения с документами
    foreach ($doc_ids as $item) {
        $document->retrieve($item);
        if (!empty($document->id)) {
            $document->appeal_id = $appeal->id;
            $document->save();
        }
    }
    $appeal->webim_appeal_history = $chat_history;
    $appeal->webim_appeal_source = $source;
    $appeal->save();
} //если обращения еще нет в системе, у оператора нет id из webim и найден контакт по номеру телефона
elseif (isset($row_contact['id']) && !empty($row_contact['id'])) {
    $appeal->date_entered = $timedate->nowDb();
    $appeal->date_modified = $timedate->nowDb();
    $appeal->modified_user_id = '1';
    $appeal->created_by = '1';
    $appeal->source = '656';
    $appeal->type = '657';
    $appeal->theme = '658';
    $appeal->state = 'transferred';
    $appeal->contact_id = $row_contact['id'];
    $appeal->subtheme = '659';
    $appeal->webim_appeal_id = $chat_id;
    $appeal->contact_phone = $visitor_phone;
    $appeal->webim_appeal_source = $source;
    $appeal->webim_appeal_history = $chat_history;
    $appeal->save();
}
