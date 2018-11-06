<?php
$dashletData['ps_emplDashlet']['searchFields'] = array (
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
  'status' => 
  array (
    'default' => '',
  ),
  'gruppa' => 
  array (
    'default' => '',
  ),
  'grazhdanstvo' => 
  array (
    'default' => '',
  ),
  'skills_lang' => 
  array (
    'default' => '',
  ),
  'start_dt' => 
  array (
    'default' => '',
  ),
);
$dashletData['ps_emplDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
  ),
  'rojdenie_dt' => 
  array (
    'type' => 'date',
    'label' => 'LBL_ROJDENIE_DT',
    'width' => '10%',
    'default' => true,
  ),
  'pol' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_POL',
    'width' => '10%',
  ),
  'grazhdanstvo' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_GRAZHDANSTVO',
    'width' => '10%',
  ),
  'status' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
  ),
  'skills_lang' => 
  array (
    'type' => 'multienum',
    'studio' => 'visible',
    'label' => 'LBL_SKILLS_LANG',
    'width' => '10%',
    'default' => true,
  ),
  'start_dt' => 
  array (
    'type' => 'date',
    'label' => 'LBL_START_DT',
    'width' => '10%',
    'default' => true,
    'name' => 'start_dt',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
