<?php
$GLOBALS['log']->fatal('Chat assign:');
$GLOBALS['log']->fatal($_POST);
// телефон пользователя - необходимо. возможно нужен фио пользователя
global $db, $timedate;
header('Content-Type: application/json; charset=utf-8');
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

//$response_json = str_replace('&quot;','"',$_POST['chat']);
$response_json = $_POST['chat'];
$chat_history = decodeHistory($response_json, true);
$chat_id = $response['id'];
$operator_id = $response['operator']['id'];
$action = 'operator_assign';
//$visitor_id = '';
//$visitor_name = '';
if (isset($response['visitor']['channel']['type']) && !empty($response['visitor']['channel']['type'])) {
    $source = $response['visitor']['channel']['type'];
} else {
    $source = 'Сайт';
}
$visitor_phone = str_replace(array('+7', ' ', '(', ')', '-'), '', $response['visitor']['fields']['phone']);
$query = "INSERT INTO webim_chat_heap VALUES ('$record_id','$operator_id','$chat_id','$visitor_phone','$date_entered','$date_entered','$response_json','$chat_history','0','$action','0')";
$result = $db->query($query);

//ищем пользователя в системе по id оператора из webim, если нет, то создаем имейл уведомление
$user = new User();
$user->retrieve_by_string_fields(array('webim_operator_id' => $operator_id));
if (empty($user->id)) {
    sendEmailNotification($operator_id);
}

function sendEmailNotification($operator_id = '')
{
    // include Email class
    include_once('include/SugarPHPMailer.php');
    include_once('include/utils/db_utils.php'); // for from_html function

    $mail = new SugarPHPMailer();
// Add details
//    $mail->From = "simsim24h@yandex.ru";
    $mail->From = "chief.for-steam@yandex.ru";
    $mail->FromName = "SIM-SIM";
// Clear recipients
    $mail->ClearAllRecipients();
    $mail->ClearReplyTos();
// Add recipient
//    $mail->AddAddress('a.beresnev@sim-sim.com', 'A Beresnev');
    $mail->AddAddress('qpopuk@yandex.ru', 'A Beresnev');
// Add subject
    $mail->Subject = "Оповещение от CRM. Не найден оператор в CRM";
// Add mail content
    $email_text = 'Не удалось идентифицировать оператора <b>' . $operator_id . '</b> в чате';
    $mail->Body_html = from_html($email_text);
    $mail->Body = wordwrap($email_text, 900);
    $mail->isHTML(true); // set to true if content has html tags

// This portion will get all the attachments from related notes
//    include_once('module/Notes/Note.php');
//    $note = new Note();
//    $where = "notes.parent_id = '<ID_OF_THE_RECORD>'";
//// Get full list gets all attachments of all notes related to the record
//    $attachments = $note->get_full_list("", $where, true);
//    $all_attachments = array();
//    $all_attachments = array_merge($all_attachments, $attachments);
//// Loop through record
//    foreach($all_attachments as $attachment) {
//        $file_name = $attachment->filename;
//        $location = "upload/{$attachment->id}";
//        $mime_type = $attachment->file_mime_type;
//        // Add attachment to email
//        $mail->AddAttachment($location, $file_name, 'base64', $mime_type);
//    }

// Prepare for sending
    $mail->prepForOutbound();
    $mail->setMailerForSystem();

//Send mail, log if there is error
    if (!$mail->Send()) {
        $GLOBALS['log']->fatal("ERROR: Mail sending failed!");
    }
}