<?php
$module_name = 'ps_docs';
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
  'DOCUMENT_TYPE' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_DOCUMENT_TYPE',
    'width' => '10%',
    'default' => true,
  ),
  'DATA_VYDACHI' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATA_VYDACHI',
    'width' => '10%',
    'default' => true,
  ),
  'SROK_DEISTVIA' => 
  array (
    'type' => 'date',
    'label' => 'LBL_SROK_DEISTVIA',
    'width' => '10%',
    'default' => true,
  ),
);
?>
