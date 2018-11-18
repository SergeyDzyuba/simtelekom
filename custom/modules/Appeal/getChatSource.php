<?php
global $current_user, $db, $timedate;
//$GLOBALS['log']->fatal($_REQUEST);

if (isset($_REQUEST['chat_id']) && !empty($_REQUEST['chat_id'])) {//если в запросе пришел id чата
    $query = "SELECT * FROM webim_chat_heap WHERE deleted=0 AND chat_id='{$_REQUEST['chat_id']}' LIMIT 0,1";
    $result = $db->query($query);
    $result = $db->fetchByAssoc($result);
    $result['response'] = str_replace('&quot;', '"', $result['response']);
    $response = json_decode($result['response'],true);
    if (isset($response['visitor']['channel']['type']) && !empty($response['visitor']['channel']['type'])) {
        echo $response['visitor']['channel']['type'];
    } else {
        echo 'Сайт';
    }

} else
    echo 'false';
