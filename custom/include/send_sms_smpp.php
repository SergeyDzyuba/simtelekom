<?php



require_once("smsc_smpp.php");

function send_sms($phones, $message)
{

	try {
		$S = new SMSC_SMPP();
		$result = $S->send_sms($phones, $message, "SIM SIM");
		if($result){
			return $result;//success
		}
		else{
			return false;
		}
	}
	catch (Exception $e) 
	{
		echo $e->getMessage();
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