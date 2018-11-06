<?php
$popupMeta = array (
    'moduleMain' => 'Appeal',
    'varName' => 'Appeal',
    'orderBy' => 'Appeal.name',
    'whereClauses' => array (
  'name' => 'Appeal.name',
),
    'searchInputs' => array (
  0 => 'Appeal_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
),
    'listviewdefs' => array (
  'DATE_ENTERED' => 
  array (
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
    'name' => 'date_entered',
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => true,
    'name' => 'created_by_name',
  ),
  'SOURCE' => 
  array (
    'label' => 'LBL_SOURCE',
    'width' => '15%',
    'default' => true,
    'name' => 'source',
  ),
  'TYPE' => 
  array (
    'link' => true,
    'label' => 'LBL_TYPE',
    'width' => '15%',
    'default' => true,
    'name' => 'type',
  ),
  'THEME' => 
  array (
    'label' => 'LBL_THEME',
    'width' => '15%',
    'default' => true,
    'name' => 'theme',
  ),
  'SUBTHEME' => 
  array (
    'label' => 'LBL_SUBTHEME_A',
    'width' => '15%',
    'default' => true,
    'name' => 'subtheme',
  ),
  'COMMENT' => 
  array (
    'type' => 'text',
    'label' => 'LBL_COMMENT',
    'sortable' => false,
    'width' => '20%',
    'default' => true,
    'name' => 'comment',
  ),
  'STATE' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_STATE',
    'width' => '10%',
    'default' => true,
    'name' => 'state',
  ),
  'CONTACT_NAME' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_CONTACT_NAME',
    'id' => 'CONTACT_ID',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'contact_name',
  ),
),
);
