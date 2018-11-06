<?php

$params = retrieve_settings('custom/include/sms_config.php');

define("SMSC_LOGIN", $params['login']);			// логин клиента
define("SMSC_PASSWORD", $params['password']);	// пароль или MD5-хеш пароля в нижнем регистре
define("SMSC_SENDER", ($params['sender']=='')?false:$params['sender']);     // e-mail адрес отправителя
define("SMSC_POST", 0);					// использовать метод POST
define("SMSC_HTTPS", 0);				// использовать HTTPS протокол
define("SMSC_CHARSET", "utf-8");		// кодировка сообщения: utf-8, koi8-r или windows-1251 (по умолчанию)
define("SMSC_DEBUG", 1);				// флаг отладки
define("SMTP_FROM", "api@smsc.ru");     // e-mail адрес отправителя

require_once('custom/include/smslibs/smsc.php');

function send_sms($phones, $message){
	$smslib = new SMSC();
	$result = $smslib->send_sms($phones, $message, 0, 0, 0, 0, SMSC_SENDER);

	if($result[1]>0){
		return $result[0];//success
	}
	else{
		return false;
	}
}

function retrieve_settings($config_file) {
	if (file_exists($config_file)) {
		include($config_file);
		if (isset($sms_config)) {
			return $sms_config;
		}
	}
}