<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point'); 

global $mod_strings, $app_strings, $sugar_config;
	if(ACLController::checkAccess('Appeal', 'edit', true))$module_menu[] = Array("index.php?module=Appeal&action=EditView&return_module=Appeal&return_action=index", $mod_strings['LNK_NEW_APPEAL'],"CreateContacts", 'Appeal');

	if(ACLController::checkAccess('Appeal', 'list', true))$module_menu[] =Array("index.php?module=Appeal&action=index&return_module=Appeal&return_action=index", $mod_strings['LNK_APPEAL_LIST'],"Contacts", 'Appeal');
	if(ACLController::checkAccess('Appeal', 'import', true))$module_menu[] =Array("index.php?module=Home&action=linkedLists&return_module=Appeal&return_action=index", $mod_strings['LNK_CLASSIFICATOR'],"CreateContacts", 'Appeal');
	// if(ACLController::checkAccess('Appeal', 'import', true))$module_menu[] =Array("index.php?module=Import&action=Step1&import_module=Appeal&return_module=Appeal&return_action=index", $mod_strings['LNK_IMPORT_APPEAL'],"Import", 'Appeal');
	if(ACLController::checkAccess('Appeal', 'import', true))$module_menu[] =Array("index.php?module=Appeal&action=importCsv&return_module=Appeal&return_action=index", 'Импорт обращений CSV', "Import", 'Appeal');

?>