<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

if(ACLController::checkAccess('Contacts', 'import', true)) {
    $module_menu[]=Array("index.php?module=Contacts&action=ImportContactData","Импорт контактов","Contacts");
}
