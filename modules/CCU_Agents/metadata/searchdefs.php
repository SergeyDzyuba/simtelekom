<?php
$module_name = 'CCU_Agents';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'agent_name' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_AGENT_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'agent_name',
      ),
      'agent_last_name' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_AGENT_LAST_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'agent_last_name',
      ),
      'stud_start_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_STUD_START_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'stud_start_date',
      ),
      'agent_citizen' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_AGENT_CITIZEN',
        'width' => '10%',
        'name' => 'agent_citizen',
      ),
      'agent_doc' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_AGENT_DOC',
        'width' => '10%',
        'name' => 'agent_doc',
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
