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
  'POL' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_POL',
    'width' => '10%',
  ),
  'ROJDENIE_DT' => 
  array (
    'type' => 'date',
    'label' => 'LBL_ROJDENIE_DT',
    'width' => '10%',
    'default' => true,
  ),
  'SKILLS_LANG' => 
  array (
    'type' => 'multienum',
    'studio' => 'visible',
    'label' => 'LBL_SKILLS_LANG',
    'width' => '10%',
    'default' => true,
  ),
  'GRUPPA' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_GRUPPA',
    'width' => '10%',
    'default' => true,
  ),
  'START_DT' => 
  array (
    'type' => 'date',
    'label' => 'LBL_START_DT',
    'width' => '10%',
    'default' => true,
  ),
  'GRAZHDANSTVO' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_GRAZHDANSTVO',
    'width' => '10%',
  ),
  'STATUS' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
  ),
);
?>
