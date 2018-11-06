<?php
$module_name = 'ps_vacation';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'START_VACATION' => 
  array (
    'type' => 'date',
    'label' => 'LBL_START_VACATION',
    'width' => '10%',
    'default' => true,
  ),
  'NUM_DAYS_VACATION' => 
  array (
    'type' => 'int',
    'label' => 'LBL_NUM_DAYS_VACATION',
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
