<?php
$popupMeta = array (
    'moduleMain' => 'ps_empl',
    'varName' => 'ps_empl',
    'orderBy' => 'ps_empl.name',
    'whereClauses' => array (
  'start_dt' => 'ps_empl.start_dt',
  'name' => 'ps_empl.name',
  'grazhdanstvo' => 'ps_empl.grazhdanstvo',
  'skills_lang' => 'ps_empl.skills_lang',
  'rojdenie_dt' => 'ps_empl.rojdenie_dt',
  'pol' => 'ps_empl.pol',
  'status' => 'ps_empl.status',
  'gruppa' => 'ps_empl.gruppa',
),
    'searchInputs' => array (
  4 => 'start_dt',
  5 => 'name',
  6 => 'grazhdanstvo',
  7 => 'skills_lang',
  8 => 'rojdenie_dt',
  9 => 'pol',
  10 => 'status',
  11 => 'gruppa',
),
    'searchdefs' => array (
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
  ),
  'grazhdanstvo' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_GRAZHDANSTVO',
    'width' => '10%',
    'name' => 'grazhdanstvo',
  ),
  'skills_lang' => 
  array (
    'type' => 'multienum',
    'studio' => 'visible',
    'label' => 'LBL_SKILLS_LANG',
    'width' => '10%',
    'name' => 'skills_lang',
  ),
  'rojdenie_dt' => 
  array (
    'type' => 'date',
    'label' => 'LBL_ROJDENIE_DT',
    'width' => '10%',
    'name' => 'rojdenie_dt',
  ),
  'pol' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_POL',
    'width' => '10%',
    'name' => 'pol',
  ),
  'status' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
    'name' => 'status',
  ),
  'gruppa' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_GRUPPA',
    'width' => '10%',
    'name' => 'gruppa',
  ),
  'start_dt' => 
  array (
    'type' => 'date',
    'label' => 'LBL_START_DT',
    'width' => '10%',
    'name' => 'start_dt',
  ),
),
    'listviewdefs' => array (
  'START_DT' => 
  array (
    'type' => 'date',
    'label' => 'LBL_START_DT',
    'width' => '10%',
    'default' => true,
    'name' => 'start_dt',
  ),
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
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
  'POL' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_POL',
    'width' => '10%',
  ),
  'GRUPPA' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_GRUPPA',
    'width' => '10%',
    'default' => true,
  ),
),
);
