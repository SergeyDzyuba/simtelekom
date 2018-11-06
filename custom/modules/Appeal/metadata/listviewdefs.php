<?php
$module_name = 'Appeal';
$listViewDefs [$module_name] = 
array (
  'ID' => 
  array (
    'label' => 'LBL_ID',
    'width' => '10%',
    'default' => true,
    'link' => true,
    // 'customCode' => '{ID}',
  ),
  'DATE_ENTERED' => 
  array (
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => true,
  ),
  'SOURCE' => 
  array (
    'label' => 'LBL_SOURCE',
    'width' => '15%',
    'default' => true,
  ),
  'TYPE' => 
  array (
    'link' => true,
    'label' => 'LBL_TYPE',
    'width' => '15%',
    'default' => true,
  ),
  'THEME' => 
  array (
    'label' => 'LBL_THEME',
    'width' => '15%',
    'default' => true,
  ),
  'SUBTHEME' => 
  array (
    'label' => 'LBL_SUBTHEME_A',
    'width' => '15%',
    'default' => true,
  ),
  'COMMENT' => 
  array (
    'type' => 'text',
    'label' => 'LBL_COMMENT',
    'sortable' => false,
    'width' => '20%',
    'default' => true,
  ),
  'STATE' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_STATE',
    'width' => '10%',
    'default' => true,
  ),
);
?>
