<?php
$dictionary['webim_chat_heap'] = array(
    'table' => 'webim_chat_heap',
    'fields' => array(
        array('name' => 'id', 'type' => 'varchar', 'len' => '36')
    , array('name' => 'operator_id', 'type' => 'varchar', 'len' => '36',)
    , array('name' => 'chat_id', 'type' => 'varchar', 'len' => '36',)
    , array('name' => 'client_mobile_phone', 'type' => 'varchar', 'len' => '36',)
    , array('name' => 'date_entered', 'type' => 'datetime')
    , array('name' => 'date_modified', 'type' => 'datetime')
    , array('name' => 'response', 'type' => 'longtext', 'default' => 'NULL')
    , array('name' => 'chat_history', 'type' => 'longtext', 'default' => 'NULL')
    , array('name' => 'processed', 'type' => 'varchar', 'len' => '36', 'default' => '0', 'required' => false)
    , array('name' => 'action', 'type' => 'varchar', 'len' => '255',)
    , array('name' => 'deleted', 'type' => 'bool', 'len' => '1', 'default' => '0', 'required' => false)
    ),

    'indices' => array(
        array('name' => 'idx', 'type' => 'primary', 'fields' => array('id'))
    , array('name' => 'rel_idx', 'type' => 'alternate_key', 'fields' => array('operator_id'))
    , array('name' => 'real_del_idx', 'type' => 'index', 'fields' => array('operator_id', 'deleted'))
    )

,
//    'relationships' => array(
//        'tmonitor_users' => array(
//            'join_table' => 'tmonitor_users',
//            'relationship_type' => 'many-to-many',
//
//            'lhs_module' => 'Users',
//            'lhs_table' => 'users',
//            'lhs_key' => 'id',
//            'join_key_lhs' => 'users_id',
//
//            'rhs_module' => 'TMonitor',
//            'rhs_table' => 'tmonitor',
//            'rhs_key' => 'id',
//            'join_key_rhs' => 'tmonitor_id',
//        ),
//    ),
);