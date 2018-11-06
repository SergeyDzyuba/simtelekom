<?php
$module_name = 'ps_empl';
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
  'START_DT' => 
  array (
    'type' => 'date',
    'label' => 'LBL_START_DT',
    'width' => '10%',
    'default' => true,
  ),
);
?>
