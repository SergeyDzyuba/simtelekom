<?php 

include "smsc_smpp.php";
try {
		$S = new SMSC_SMPP();
		//$S->send_sms("79005558585", "This is test message!", "SIM SIM");
		//$S->send_sms("79006199842", "This is test message!", "SIM SIM");
		$S->send_sms("79006199801", "Тестовое сообщение", "SIM SIM");
		//$S->send_sms("79788699569", "This is test message!", "SugarTalk");
		echo "<center><h1 style='padding-top:300px;color:green;' >Сообщение успешно отправлено</h1></center>";
}
catch (Exception $e) {
		echo $e->getMessage();
}

