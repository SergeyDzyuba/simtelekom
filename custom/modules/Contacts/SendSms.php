<?php

global $current_user;
require_once('custom/include/send_sms_smpp.php');
echo '<h3>Отправка сообщения</h3><br/>';
$back_link='<br/><a onclick="history.back()" href="#">Назад</a>';

$contact = loadBean('Contacts');
$contact->retrieve($_REQUEST['record']);
if($contact->phone_mobile==''){
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
$sms_tpl->retrieve($contact->smstemplate_id);

$phones	= '7'.$contact->phone_mobile;
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
