<?php

$dictionary['SendLog'] = array(
	'table'=>'sendlog',
	'audited'=>true,
	'duplicate_merge'=>true,
	'fields'=>array (
		'contact_name' => array (
			'name' => 'contact_name',
			'vname' => 'LBL_CONTACT_NAME',
			'id_name' => 'contact_id',
			'rname' => 'full_name',
			'module' => 'Contacts', //ModuleName
			'ext2' => 'Contacts', //ModuleName
			'type' => 'relate',
			'source'=>'non-db',
		),
		'contact_id' =>array (
			'name' => 'contact_id',
			'vname' => 'LBL_CONTACT_NAME_ID',
			'type' => 'id',
		),

		'phone_mobile' => array(
			'name' => 'phone_mobile',
			'vname' => 'LBL_PHONE_MOBILE',
			'type' => 'phone',
			'dbType' => 'varchar'
		),
	),
	'relationships'=>array (

	),
	'indices' => array (

	),
	'optimistic_locking'=>true,
	'unified_search'=>true,
);
if (!class_exists('VardefManager'))
{
	require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('SendLog','SendLog', array('basic','assignable'));
