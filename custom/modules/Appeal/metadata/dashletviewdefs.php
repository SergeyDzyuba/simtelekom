<?php
$dashletData['AppealDashlet']['searchFields'] = array (
  'date_entered' => 
  array (
    'default' => '',
  ),
  'date_modified' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'default' => '',
  ),
  'created_by_name' => 
  array (
    'default' => '',
  ),
  'state' => 
  array (
    'default' => '',
  ),
  'assigned_user_name' => 
  array (
    'default' => '',
  ),
);
$dashletData['AppealDashlet']['columns'] = array (
  'date_entered' => 
  array (
    'label' => 'LBL_DATE_ENTERED',
    'width' => '20%',
    'default' => true,
    'name' => 'date_entered',
  ),
  'source' => 
  array (
    'label' => 'LBL_SOURCE',
    'width' => '20%',
    'default' => true,
    'name' => 'source',
  ),
  'type' => 
  array (
    'link' => true,
    'label' => 'LBL_TYPE',
    'width' => '20%',
    'default' => true,
    'name' => 'type',
  ),
  'theme' => 
  array (
    'label' => 'LBL_THEME',
    'width' => '20%',
    'default' => true,
    'name' => 'theme',
  ),
  'subtheme' => 
  array (
    'label' => 'LBL_SUBTHEME_A',
    'width' => '20%',
    'default' => true,
    'name' => 'subtheme',
  ),
  'state' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_STATE',
    'width' => '10%',
    'default' => true,
    'name' => 'state',
  ),
  'code' => 
  array (
    'type' => 'int',
    'label' => 'LBL_CODE',
    'width' => '10%',
    'default' => true,
  ),
  'contact_name' => 
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
);
