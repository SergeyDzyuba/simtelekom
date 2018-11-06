<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point'); 


global $mod_strings, $app_strings, $sugar_config;
if(ACLController::checkAccess('TMonitor', 'edit', true))$module_menu[] = Array("index.php?module=TMonitor&action=EditView&return_module=TMonitor&return_action=index", $mod_strings['LNK_NEW_TMONITOR'],"TMonitor", 'TMonitor');
if(ACLController::checkAccess('TMonitor', 'list', true))$module_menu[] =Array("index.php?module=TMonitor&action=index&return_module=TMonitor&return_action=DetailView", $mod_strings['LNK_TMONITOR_LIST'],"TMonitor", 'TMonitor');
if(ACLController::checkAccess('TMonitor', 'import', true))$module_menu[] =Array("index.php?module=Import&action=Step1&import_module=TMonitor&return_module=TMonitor&return_action=index", $mod_strings['LNK_IMPORT_TMONITOR'],"Import", 'TMonitor');

?>