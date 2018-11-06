<?php
$dictionary['tmonitor_users'] = array (
	'table' => 'tmonitor_users',
	'fields' => array (
       array('name' =>'id', 'type' =>'varchar', 'len'=>'36')
      , array('name' =>'users_id', 'type' =>'varchar', 'len'=>'36', )
      , array('name' =>'tmonitor_id', 'type' =>'varchar', 'len'=>'36', )
      , array('name' => 'date_modified','type' => 'datetime')
      , array('name' =>'deleted', 'type' =>'bool', 'len'=>'1', 'default'=>'0', 'required'=>false)
	),
 
	'indices' => array (
       array('name' =>'idx', 'type' =>'primary', 'fields'=>array('id'))
      , array('name' => 'rel_idx', 'type'=>'alternate_key', 'fields'=>array('users_id', 'tmonitor_id'))
      , array('name' => 'real_del_idx', 'type' => 'index', 'fields'=> array('users_id', 'deleted', 'tmonitor_id'))
	)
 
	,'relationships' => array (
		'tmonitor_users' => array(
			'join_table'=> 'tmonitor_users',
			'relationship_type'=>'many-to-many',
			
			'lhs_module'=> 'Users',
			'lhs_table'=> 'users',
			'lhs_key' => 'id',
			'join_key_lhs'=>'users_id',

			'rhs_module'=> 'TMonitor',
			'rhs_table'=> 'tmonitor',
			'rhs_key' => 'id',
			'join_key_rhs'=>'tmonitor_id',
		),
	),
);