<?php
$popupMeta = array (
    'moduleMain' => 'ps_vacation',
    'varName' => 'ps_vacation',
    'orderBy' => 'ps_vacation.name',
    'whereClauses' => array (
  'start_vacation' => 'ps_vacation.start_vacation',
  'num_days_vacation' => 'ps_vacation.num_days_vacation',
),
    'searchInputs' => array (
  4 => 'start_vacation',
  5 => 'num_days_vacation',
),
    'searchdefs' => array (
  'start_vacation' => 
  array (
    'type' => 'date',
    'label' => 'LBL_START_VACATION',
    'width' => '10%',
    'name' => 'start_vacation',
  ),
  'num_days_vacation' => 
  array (
    'type' => 'int',
    'label' => 'LBL_NUM_DAYS_VACATION',
    'width' => '10%',
    'name' => 'num_days_vacation',
  ),
),
    'listviewdefs' => array (
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
),
);
