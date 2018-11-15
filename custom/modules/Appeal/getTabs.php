<?php
global $current_user, $db, $timedate;
//$user = new User();
//$user->retrieve($current_user->id);
if (!empty($current_user->webim_operator_id)) {//если у текущего пользователя есть id оператора webim
    //получение 10 нерассмотренных обращений-чатов для текущего оператора, которые откроются в новых вкладках
    $query = "SELECT * FROM webim_chat_heap WHERE action='operator_assign' AND deleted=0 AND processed=0 AND operator_id='$current_user->webim_operator_id' ORDER BY date_entered LIMIT 10";
    $result = $db->query($query);
    $heap = array();
    $contact = new Contact();
    while ($row = $db->fetchByAssoc($result)) {
        $upd_query = "UPDATE webim_chat_heap  SET processed='1' WHERE id='{$row['id']}'";
        $upd_result = $db->query($upd_query);
//        $contact->retrieve_by_string_fields(array('phone_mobile' => $row['client_mobile_phone'], 'deleted' => 0));
        $query_contact = "SELECT id FROM contacts WHERE deleted=0 AND phone_mobile LIKE '%" . $row['client_mobile_phone'] . "' LIMIT 0,1";
        if (!empty($row['client_mobile_phone'])) {
            $result = $db->query($query_contact);
            $row_contact = $db->fetchByAssoc($result);
            $row['contact_id'] = $row_contact['id'];
//            $row['contact_id'] = $contact->id;
            $row['assigned_user_id'] = $current_user->id;
            if (isset($row['contact_id']) && !empty($row['contact_id'])) {//если не был найден контакт по номеру телефона
                // то откроем карточку
                $heap[] = $row;
            }
        }
    }
    if (empty($heap) || count($heap) == 0)
        echo 'false';
    else {
        $json_response = json_encode($heap);
        echo $json_response;
    }
} else {//уведомление на общую почту, т.к. оператор не авторизован
    echo 'false';
}