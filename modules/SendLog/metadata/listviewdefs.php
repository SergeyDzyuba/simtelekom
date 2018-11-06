<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$module_name = 'SendLog';
$listViewDefs[$module_name] = array(
	'NAME' => array(
		'width' => '32', 
		'label' => 'LBL_NAME', 
		'default' => true,
        'link' => true
	),
	'DESCRIPTION' => array(
		'width' => '32', 
		'label' => 'LBL_DESCRIPTION', 
		'default' => true
	),  
	'DATE_ENTERED' => array(
		'width' => '32', 
		'label' => 'LBL_DATE_ENTERED', 
		'default' => true
	),
	'CONTACT_NAME' => array(
		'width' => '9', 
		'label' => 'LBL_CONTACT_NAME',
		'module' => 'Contacts',
        'id' => 'CONTACT_ID',
        'default' => true
	),
	'ASSIGNED_USER_NAME' => array(
		'width' => '9', 
		'label' => 'LBL_ASSIGNED_TO_NAME',
		'module' => 'Employees',
        'id' => 'ASSIGNED_USER_ID',
        'default' => true
	),
	
);
?>
