<?php
global $current_user, $db, $timedate;
//$GLOBALS['log']->fatal($_REQUEST);

if (isset($_REQUEST['chat_id']) && !empty($_REQUEST['chat_id'])) {//если в запросе пришел id чата
    $query = "SELECT * FROM webim_chat_heap WHERE deleted=0 AND chat_id='{$_REQUEST['chat_id']}' LIMIT 0,1";
    $result = $db->query($query);
    $result = $db->fetchByAssoc($result);
    $result['response'] = str_replace('&quot;', '"', $result['response']);
    $response = json_decode($result['response'], true);

    if (isset($response['visitor']['channel']['type']) && !empty($response['visitor']['channel']['type'])) {
        $source = $response['visitor']['channel']['type'];
    } else {
        if (empty($response['start_page']['url']) && strpos($response['messages'][0]['message'], 'Браузер: Android')) {
            $source = 'mobile';
        } else
            $source = 'site';
    }
    switch ($source) {
        case 'mobile':
            echo 'Чат в мобильном приложении';
            break;
        case 'site':
            echo 'Чат на сайте';
            break;
        default:
            echo ucfirst($source);
            break;
    }
} else
    echo 'false';
