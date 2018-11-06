<?php
$module_name = 'CCU2_Logins1';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'VK_VDI_LOGIN' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_VK_VDI_LOGIN',
    'width' => '10%',
    'default' => true,
  ),
  'VK_CTI_LOGIN' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_VK_CTI_LOGIN',
    'width' => '10%',
    'default' => true,
  ),
  'SS_CRM_LOGIN' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SS_CRM_LOGIN',
    'width' => '10%',
    'default' => true,
  ),
  'SS_QN_LOGIN' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SS_QN_LOGIN',
    'width' => '10%',
    'default' => true,
  ),
  'SK_SBMS_LOGIN' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SK_SBMS_LOGIN',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
);
?>
