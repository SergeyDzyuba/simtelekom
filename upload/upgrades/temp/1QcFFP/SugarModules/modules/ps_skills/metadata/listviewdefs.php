<?php
$module_name = 'ps_skills';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'IMYA_SISTEMY' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_IMYA_SISTEMY',
    'width' => '10%',
  ),
  'LOGIN' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LOGIN',
    'width' => '10%',
    'default' => true,
  ),
);
?>
