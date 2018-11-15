<?php
global $current_user, $db, $timedate;
//$GLOBALS['log']->fatal($_POST);
//$GLOBALS['log']->fatal($_REQUEST);

if (isset($_REQUEST['chat_id']) && !empty($_REQUEST['chat_id'])) {//если в запросе пришел id чата
    //получение 10 нерассмотренных обращений-чатов для текущего оператора, которые откроются в новых вкладках
    $first_mess = false;
    if (isset($_REQUEST['first_message']) && !empty($_REQUEST['first_message'])) {
        $action = ($_REQUEST['first_message'] === '1') ? 'operator_assign' : 'chat_close';
        $first_mess = true;
    }
    $query = "SELECT * FROM webim_chat_heap WHERE action='$action' AND deleted=0 AND chat_id='{$_REQUEST['chat_id']}'";
    $result = $db->query($query);
    $row = $db->fetchByAssoc($result);
    if (isset($row) && !empty($row['response'])) {
//        $chat = decodeHistory($row['response'], $first_mess);
        $chat = $row['chat_history'];
        $chat = preg_replace('/[\\\\]{1,2}n/','',$chat);
        echo $chat;
    } else 'false';

} else
    echo 'false';
