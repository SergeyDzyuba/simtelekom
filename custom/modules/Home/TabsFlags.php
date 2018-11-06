<?php
class TabsFlags
{
	function emailCounter()
	{
		if(isset($_REQUEST['to_pdf']) || isset($_REQUEST['sugar_body_only']) || isset($_REQUEST['body_only']) || isset($_REQUEST['print'])) return false;

		global $db, $current_user;
		$val = 0;
		$ieX = new InboundEmail();
		$q = 'SELECT id, name FROM inbound_email WHERE group_id = "'.$current_user->id.'" AND is_personal=1 AND deleted=0 AND status=\'Active\' AND mailbox_type != \'bounce\'';
		$r = $db->query($q);
		while($a = $db->fetchByAssoc($r)) {
			$ieX->retrieve($a['id']);
			/* $current_user->team_id = $ieX->team_id;
			$current_user->team_set_id = $ieX->team_set_id; */
			$mailboxes = $ieX->mailboxarray;
			foreach($mailboxes as $mbox) {
				$ieX->mailbox = $mbox;
				$newMsgs = array();
				$msgNoToUIDL = array();
				if ($ieX->isPop3Protocol()) {
					$msgNoToUIDL = $ieX->getPop3NewMessagesToDownloadForCron();
					$newMsgs = array_keys($msgNoToUIDL);
				}
				if($ieX->connectMailserver() == 'true' && !$ieX->isPop3Protocol()) {
					$newMsgs = $ieX->getNewMessageIds();
				}
				if(is_array($newMsgs)) {
					$val += count($newMsgs);
				}
			}
			imap_expunge($ieX->conn);
			imap_close($ieX->conn, CL_EXPUNGE);
		}
		// echo "<script>$('#grouptab_7').append('<font color=#ffff00>({$val})</font>')</script>";
		echo "<script>$('#welcome').append('<font color=\"#222\" id=\"emailCounter\"><br/> Непрочитанных писем: {$val}</font>')</script>";
	}
}