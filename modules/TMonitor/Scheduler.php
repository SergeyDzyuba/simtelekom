<?php
global $db, $timedate, $sugar_config;
$tms = array ();
$now = $timedate->nowDb();

$q = "SELECT * FROM tmonitor WHERE deleted <> 1";
$r = $db->query($q);
while ($row = $db->fetchByAssoc($r)) {
	$tms[$row['id']] = $row;
}
// file_put_contents('sms.log', $q." \n", FILE_APPEND);
// $exp = var_export($tms, true);
// file_put_contents('sms.log', $exp." \n", FILE_APPEND);

foreach ($tms as $id=>$tm) {
	$appeals = array();
	$q="SELECT `appeal`.id AS `c` FROM appeal
	LEFT JOIN tmonitor_appeals_offset AS aoffset ON `aoffset`.appeal_id = `appeal`.id AND `aoffset`.tmonitor_id = '{$id}'
	WHERE
		`appeal`.deleted <> 1
		AND `aoffset`.id IS NULL
		AND `appeal`.code = '{$tm['linked_code']}'
		AND `appeal`.date_entered >= ('{$now}' - INTERVAL {$tm['period']} MINUTE) ";//HOUR
	// echo $q;
	// file_put_contents('sms.log', $q." \n", FILE_APPEND);
	$r=$db->query($q);
	while($row = $db->fetchByAssoc($r)){
		$appeals[]=$row['id'];
	}
	if(/*$row['c']*/count($appeals)>$tm['amount_appeals']){
		$tms[$id]['need_send']=1;
		foreach ($appeals as $appeal_id) {
			$q = "INSERT INTO tmonitor_appeals_offset SET id = UUID(), tmonitor_id = '{$id}', appeal_id = {$appeal_id}, date_modified = '{$now}'";
			$db->query($q);
		}
	}
}


// $exp = var_export($tms, true);
// file_put_contents('sms.log', $exp." \n", FILE_APPEND);
foreach ($tms as $id=>$tm) {
	if(isset($tm['need_send'])){
		$q="SELECT users_id FROM tmonitor_users WHERE deleted <> 1 AND tmonitor_id = '{$id}'";
		$r=$db->query($q);
		while ($row = $db->fetchByAssoc($r)) {
			if(!isset($tms[$id]['users'])){
				$tms[$id]['users'] = array ();
			}
			$tms[$id]['users'][]=$row['users_id'];
			$q="SELECT id FROM users WHERE deleted <> 1 AND reports_to_id = '{$row['users_id']}'";
			$rr=$db->query($q);
			while ($row = $db->fetchByAssoc($rr)) {
				$tms[$id]['users'][]=$row['id'];
			}
		}
		if(!isset($tms[$id]['users'])){
			unset($tms[$id]);
		}
	}
	else{
		unset($tms[$id]);
	}
}

//require_once('custom/include/send_sms.php');
require_once('custom/include/send_sms_smpp.php');
require_once('custom/include/send_mail.php');
foreach ($tms as $id=>$tm) {
	if($tm['by_email'] || $tm['by_sms']){
		foreach ($tms[$id]['users'] as $k => $v) {
			$user = loadBean('Users');
			$user->retrieve($v);
			$tms[$id]['users'][$k]=$user;
		}
	}
	else{
		unset($tms[$id]);
	}
}

// $exp = var_export($tms, true);
// file_put_contents('sms.log', $exp." \n", FILE_APPEND);

foreach ($tms as $id=>$tm) {
	foreach ($tms[$id]['users'] as $k => $user) {
		if($tm['by_email'])
		{
			$mail = genMail(array ($user->full_name, $user->email1), 'Монитор проблем', $tm['description'], $user->id, false);
			if($mail->send()){
				echo $user->email1.' email ok<br/>';
			}
			else{
				$GLOBALS['log']->info("Mailer error: " . $mail->ErrorInfo);
				echo $mail->ErrorInfo.'<br/>';
			}
		}
		if($tm['by_sms']){
			
			/*if($user->phone_work){
				if(!send_sms($user->phone_work, $tm['description'])){
					$GLOBALS['log']->info("sms_sender error");
					echo $user->email1.' email fail<br/>';
				}
				else{
					echo $user->email1.' sms ok<br/>';
				}
			}
			else*/
			if($user->phone_mobile){
			
				if(!send_sms($user->phone_mobile, $tm['description'])){
					$GLOBALS['log']->info("sms_sender error");
					echo $user->email1.' email fail<br/>';
					file_put_contents('sms.log', $user->phone_mobile." fail \n", FILE_APPEND);
				}
				else{
					echo $user->email1.' sms ok<br/>';
					file_put_contents('sms.log', $user->phone_mobile." ok \n", FILE_APPEND);
				}
			}
		}
	}
}

if($_REQUEST['module']=='TMonitor'){
	echo '<pre>';
	print_r($tms);
}

return true;
