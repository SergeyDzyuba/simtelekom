<?php
$dictionary['Appeal']['fields']['webim_appeal_id'] = array(
    'name' => 'webim_appeal_id',
    'type' => 'varchar',
    'len' => '255',
    'vname' => 'LBL_WEBIM_APPEAL_ID',
    'massupdate' => 0,
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'reportable' => 0,
);

$dictionary['Appeal']['fields']['contact_phone'] = array(
    'name' => 'contact_phone',
    'type' => 'varchar',
    'len' => '255',
    'vname' => 'LBL_CONTACT_PHONE',
    'massupdate' => 0,
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'reportable' => 0,
);

$dictionary['Appeal']['fields']['webim_appeal_source'] = array(
    'name' => 'webim_appeal_source',
    'type' => 'varchar',
    'len' => '255',
    'vname' => 'LBL_APPEAL_SOURCE',
    'massupdate' => 0,
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'reportable' => 0,
);

$dictionary['Appeal']['fields']['webim_appeal_history'] = array(
    'name' => 'webim_appeal_history',
    'type' => 'text',
    'rows' => 10,
    'cols' => 180,
    'vname' => 'LBL_APPEAL_HISTORY',
    'massupdate' => 0,
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'reportable' => 0,
);

//$dictionary["Appeal"]["fields"]["appeal_documents"] =
//    array(
//        'name' => 'appeal_documents',
//        'type' => 'link',
//        'relationship' => 'appeal_documents',
//        'module' => 'Documents',
//        'bean_name' => 'Documents',
//        'source' => 'non-db',
//        'vname' => 'LBL_DOCUMENTS',
//    );

$dictionary['Appeal']['fields']['documents'] = array(
    'name'         => 'documents',
    'type'         => 'link',
    'relationship' => 'appeal_documents',
    'module'       => 'Documents',
    'bean_name'    => 'Documents',
    'source'       => 'non-db',
    'vname'        => 'LBL_DOCUMENTS',
);

//$dictionary['Account']['fields']['tasks'] =
//    array (
//        'name' => 'tasks',
//        'type' => 'link',
//        'relationship' => 'account_tasks',
//        'module'=>'Tasks',
//        'bean_name'=>'Tasks',
//        'source'=>'non-db',
//        'vname'=>'LBL_TASKS',
//    );
//
//
//$dictionary['Appeal']['relationships']['account_tasks'] =
//    array (
//        'lhs_module'=> 'Accounts',
//        'lhs_table'=> 'accounts',
//        'lhs_key' => 'id',
//        'rhs_module'=> 'Tasks',
//        'rhs_table'=> 'tasks',
//        'rhs_key' => 'id',
//        'relationship_type'=>'one-to-many'
//    );