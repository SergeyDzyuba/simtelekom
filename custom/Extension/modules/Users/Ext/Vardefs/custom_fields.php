<?php
$dictionary['User']['fields']['tmonitor_users'] =array (
    'name' => 'tmonitor_users',
    'type' => 'link',
    'relationship' => 'tmonitor_users',
    'source'=>'non-db',
    'vname'=>'LBL_MONITOR_USERS',
);

$dictionary['User']['fields']['webim_operator_id'] =array (
    'name' => 'webim_operator_id',
    'type' => 'varchar',
    'len' => '255',
    'vname' => 'LBL_OPERATOR_ID',
    'massupdate' => 0,
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'reportable' => 0,
);