<?php

//$dictionary["Documents"]["fields"]["appeal_documents"] =
//    array(
//        'name' => 'appeal_documents',
//        'type' => 'link',
//        'relationship' => 'appeal_documents',
//        'module' => 'Appeal',
//        'bean_name' => 'Appeal',
//        'source' => 'non-db',
//        'vname' => 'LBL_APPEAL',
//    );
//
//$dictionary['Documents']['relationships']['appeal_documents'] =
//    array(
//        'lhs_module' => 'Appeal',
//        'lhs_table' => 'appeal',
//        'lhs_key' => 'id',
//        'rhs_module' => 'Documents',
//        'rhs_table' => 'documents',
//        'rhs_key' => 'appeal_id',
//        'relationship_type' => 'one-to-many'
//    );
//
//$dictionary['Documents']['fields']['appeal_id'] =
//    array(
//        'lhs_module' => 'Appeal',
//        'lhs_table' => 'appeal',
//        'lhs_key' => 'id',
//        'rhs_module' => 'Documents',
//        'rhs_table' => 'documents',
//        'rhs_key' => 'appeal_id',
//        'relationship_type' => 'one-to-many'
//    );
//
//$dictionary['Documents']['fields']['appeal_name'] = array(
//    'required' => false,
//    'source' => 'non-db',
//    'name' => 'appeal_name',
//    'vname' => 'LBL_APPEAL_NAME',
//    'type' => 'relate',
//    'massupdate' => 0,
//    'comments' => '',
//    'help' => '',
//    'audited' => 1,
//    'len' => '100',
//    'id_name' => 'appeal_id',
//    'ext2' => 'Appeal',
//    'module' => 'Appeal',
//    'rname' => 'name',
//    'studio' => 'visible',
//);

$dictionary['Document']['fields']['appeal_name'] = array(
    'required'  => true,
    'source'    => 'non-db',
    'name'      => 'appeal_name',
    'vname'     => 'LBL_APPEAL_NAME',
    'type'      => 'relate',
    'rname'     => 'name',
    'id_name'   => 'appeal_id',
    'join_name' => 'appeal',
    'link'      => 'appeal',
    'table'     => 'appeal',
    'isnull'    => 'true',
    'module'    => 'Appeal',
);

$dictionary['Document']['fields']['appeal_id'] = array(
    'name'              => 'appeal_id',
    'rname'             => 'id',
    'vname'             => 'LBL_APPEAL_ID',
    'type'              => 'id',
    'table'             => 'appeal',
    'isnull'            => 'true',
    'module'            => 'Appeal',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
);

$dictionary['Document']['fields']['appeal'] = array(
    'name'          => 'appeal_documents',
    'type'          => 'link',
    'relationship'  => 'appeal_documents',
    'module'        => 'Appeal',
    'bean_name'     => 'Appeal',
    'source'        => 'non-db',
    'vname'         => 'LBL_APPEAL',
);
//Demo_SupplierContactDetails - Documents
//Demo_Suppliers - Appeal
$dictionary['Document']['relationships']['appeal_documents'] = array(
    'lhs_module'        => 'Appeal',
    'lhs_table'         => 'appeal',
    'lhs_key'           => 'id',
    'rhs_module'        => 'Documents',
    'rhs_table'         => 'documents',
    'rhs_key'           => 'appeal_id',
    'relationship_type' => 'one-to-many',
);