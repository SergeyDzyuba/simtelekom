<?php 
function genMail($tos, $subject, $body, $user_id, $send = true, $attach='', $nameToSend=''){
	require_once('include/SugarPHPMailer.php');
	require_once('modules/Administration/Administration.php');

	global $current_user;
	$mail = new SugarPHPMailer();
	$admin = new Administration();
	$admin->retrieveSettings();
	$user = new User();
	$user->retrieve($user_id);

	$oe = new OutboundEmail();

	$userSettings = $oe->getUserMailerSettings($user);
	
	if ($userSettings->mail_sendtype == "SMTP") {
		$mail->Host = $admin->settings['mail_smtpserver'];
		$mail->Port = $admin->settings['mail_smtpport'];
		
		// if ($admin->settings['mail_smtpauth_req']) 
		if ($userSettings->mail_smtpauth_req) 
		{
			$mail->SMTPAuth = TRUE;
			$mail->Username = $userSettings->mail_smtpuser;
			$mail->Password =$userSettings->mail_smtppass;
			// $mail->Username = $admin->settings['mail_smtpuser'];
			// $mail->Password =$admin->settings['mail_smtppass'];
		}

		$mail->Mailer   = "smtp";
		$mail->SMTPKeepAlive = true;

	}
	else{
		$mail->mailer = 'sendmail';
	}

	$mail->IsSMTP(); // send via SMTP
	if ($admin->settings['mail_smtpssl'] == '2') $mail->SMTPSecure = "tls";
	elseif ($admin->settings['mail_smtpssl'] == '1') $mail->SMTPSecure = "ssl";
	$mail->Body = $body;
	// $mail->From = $user->email1;
	$mail->From = $admin->settings['notify_fromaddress'];
	
	//$user->retrieve();
	$mail->CharSet='UTF-8';
   
	$mail->FromName = $admin->settings['notify_fromname'];
	$mail->ContentType = "text/html"; //"text/plain"
	$mail->IsHTML(true);

	$mail->Subject = $subject;
	
	$mail->AddAttachment($attach, $nameToSend);
	
	foreach ($tos as $name => $address){
		$mail->AddAddress("{$address}", "{$name}");
	}

	if($send){
		if (!$mail->send()){
			$GLOBALS['log']->info("sendSugarPHPMail - Mailer error: " . $mail->ErrorInfo);
			echo $mail->ErrorInfo;
			return false;
		}
		else{
			return true;
		}
	}
	else{
		return $mail;
	}
}
?>