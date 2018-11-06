<?php
$module_name = 'ps_vacation';
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
      'start_vacation' => 
      array (
        'type' => 'date',
        'label' => 'LBL_START_VACATION',
        'width' => '10%',
        'default' => true,
        'name' => 'start_vacation',
      ),
      'num_days_vacation' => 
      array (
        'type' => 'int',
        'label' => 'LBL_NUM_DAYS_VACATION',
        'width' => '10%',
        'default' => true,
        'name' => 'num_days_vacation',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
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
      'start_vacation' => 
      array (
        'type' => 'date',
        'label' => 'LBL_START_VACATION',
        'width' => '10%',
        'default' => true,
        'name' => 'start_vacation',
      ),
      'num_days_vacation' => 
      array (
        'type' => 'int',
        'label' => 'LBL_NUM_DAYS_VACATION',
        'width' => '10%',
        'default' => true,
        'name' => 'num_days_vacation',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
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
