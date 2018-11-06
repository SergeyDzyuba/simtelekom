<?php
global $current_user, $db;
require_once('custom/include/send_sms_smpp.php');
echo '<h3>Отправка сообщения</h3><br/>';
$back_link='<br/><a onclick="history.back()" href="#">Назад</a>';

$q = "SELECT id FROM contacts WHERE phone_mobile = '{$_REQUEST['_s_phone_mobile']}' AND deleted <> 1 LIMIT 1";
$r = $db->query($q);
if($row = $db->fetchByAssoc($r)){
	$contact_id = $row['id'];
}
else{
	$contact_id = '2dd1996c-5c8b-9547-a4cd-551159968160';
}
$q = "UPDATE contacts SET smstemplate_id = '{$_REQUEST['_s_smstemplate_id']}' WHERE id='{$contact_id}'";
$db->query($q);

$contact = loadBean('Contacts');
$contact->retrieve($contact_id);
// $contact->smstemplate_id=$_REQUEST['_s_smstemplate_id'];
// $contact->save();
if($_REQUEST['_s_phone_mobile']/*$contact->phone_mobile*/==''){
	echo 'Ошибка. Мобильный номер не указан';
	echo $back_link;
	return;
}
if($contact->smstemplate_id==''){
	echo 'Ошибка. Шаблон СМС не указан';
	echo $back_link;
	return;
}
$sms_tpl = loadBean('SmsTemplates');
$sms_tpl->retrieve($_REQUEST['_s_smstemplate_id']/*$contact->smstemplate_id*/);


// echo "'".$contact_id."' '".$_REQUEST['_s_smstemplate_id']."' '".$contact->smstemplate_id."' '".$sms_tpl->id;
// exit;
$phones	= '7'.$_REQUEST['_s_phone_mobile']/*$contact->phone_mobile*/;
$message= $sms_tpl->description;

if($res = send_sms($phones, $message)){
	$appeal = loadBean('Appeal');
	$appeal->source		= $sms_tpl->source;
	$appeal->type		= $sms_tpl->type;
	$appeal->theme		= $sms_tpl->theme;
	$appeal->subtheme	= $sms_tpl->subtheme;
	$appeal->contact_id = $contact->id;
	$appeal->assigned_user_id = $current_user->id;
	$appeal_id = $appeal->save();

	echo 'Сообщение успешно отправлено! Обращение '.(($appeal_id)?'не':'').' создано ';
	if($appeal_id){
		echo "<a href='index.php?module=Appeal&action=DetailView&record={$appeal_id}'>Карточка обращения</a>";
	}
}
else{
	echo 'Не удалось отправить сообщение';
}
echo $back_link;
