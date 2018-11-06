<?php
$module = 'TMonitor';
$dictionary['TMonitor'] = array (
	'table'=>'tmonitor',
	'audited'=>true,
	'duplicate_merge'=>true,
	'fields'=>array (
		'by_email'=> array (
			'name' => 'by_email',
			'vname' => 'LBL_BY_EMAIL',
			'type' => 'bool',
		),
		'by_sms'=> array (
			'name' => 'by_sms',
			'vname' => 'LBL_BY_SMS',
			'type' => 'bool',
		),
		'linked_code' => array (
			'name' => 'linked_code',
			'vname' => 'LBL_LINKED_CODE',
			'type' => 'int',
			'default' => '0',
    		'isnull' => false,
		),
		'amount_appeals' => array (
			'name' => 'amount_appeals',
			'vname' => 'LBL_AMOUNT_APPEALS',
			'type' => 'int',
			'default' => '0',
    		'isnull' => false,
		),
		'period' => array (
			'name' => 'period',
			'vname' => 'LBL_PERIOD',
			'type' => 'int',
			'default' => '0',
    		'isnull' => false,
		),

		'tmonitor_users' =>array (
			'name' => 'tmonitor_users',
			'type' => 'link',
			'relationship' => 'tmonitor_users',
		    'source'=>'non-db',
		    'vname'=>'LBL_MONITOR_USERS',
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
VardefManager::createVardef('TMonitor','TMonitor', array('basic','assignable'));
