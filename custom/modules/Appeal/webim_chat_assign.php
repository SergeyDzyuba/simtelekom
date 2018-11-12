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
$str = preg_replace_callback('/\\\\u([0-9a-fA-F]{4})/', function ($match) {
    return mb_convert_encoding(pack('H*', $match[1]), 'UTF-8', 'UCS-2BE');
}, $str);
$_POST['chat'] = $str;

//$response = json_decode(str_replace('&quot;','"',$_POST['chat']),true);
$response = json_decode($_POST['chat'],true);

//$response_json = str_replace('&quot;','"',$_POST['chat']);
$response_json = $_POST['chat'];
$chat_history = decodeHistory($response_json,true);
$chat_id = $response['id'];
$operator_id = $response['operator']['id'];
$action = 'operator_assign';
//$visitor_id = '';
//$visitor_name = '';
if (isset($response['visitor']['channel']['type']) && !empty($response['visitor']['channel']['type'])){
    $source = $response['visitor']['channel']['type'];
}
else{
    $source = 'Сайт';
}
$visitor_phone = str_replace(array('+7',' ','(',')','-'),'',$response['visitor']['fields']['phone']);
$query = "INSERT INTO webim_chat_heap VALUES ('$record_id','$operator_id','$chat_id','$visitor_phone','$date_entered','$date_entered','$response_json','$chat_history','0','$action','0')";
$result = $db->query($query);