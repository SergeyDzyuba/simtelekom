<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point'); 

global $mod_strings, $app_strings, $sugar_config;
if(ACLController::checkAccess('SendLog', 'edit', true))
	$module_menu[] = Array("index.php?module=SendLog&action=index", 'Список логов',"SendLogImage", 'SendLog');

?>