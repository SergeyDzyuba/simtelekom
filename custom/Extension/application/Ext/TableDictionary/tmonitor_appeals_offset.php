<?php
$dictionary['tmonitor_appeals_offset'] = array (
	'table' => 'tmonitor_appeals_offset',
	'fields' => array (
       array('name' =>'id', 'type' =>'varchar', 'len'=>'36')
      , array('name' =>'appeal_id', 'type' =>'varchar', 'len'=>'36', )
      , array('name' =>'tmonitor_id', 'type' =>'varchar', 'len'=>'36', )
      , array('name' => 'date_modified','type' => 'datetime')
	),
 
	'indices' => array (
       array('name' =>'idx', 'type' =>'primary', 'fields'=>array('id'))
      , array('name' => 'real_del_idx', 'type' => 'index', 'fields'=> array('appeal_id', 'tmonitor_id'))
	)
);