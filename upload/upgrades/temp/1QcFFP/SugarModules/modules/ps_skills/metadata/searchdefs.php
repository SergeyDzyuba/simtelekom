<?php
$module_name = 'ps_skills';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'imya_sistemy' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_IMYA_SISTEMY',
        'width' => '10%',
        'name' => 'imya_sistemy',
      ),
      'login' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_LOGIN',
        'width' => '10%',
        'default' => true,
        'name' => 'login',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'imya_sistemy' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_IMYA_SISTEMY',
        'width' => '10%',
        'name' => 'imya_sistemy',
      ),
      'login' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_LOGIN',
        'width' => '10%',
        'default' => true,
        'name' => 'login',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
