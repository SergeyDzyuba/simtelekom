<?php
$module_name = 'CCU_Agents';
$listViewDefs [$module_name] = 
array (
  'AGENT_LAST_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_AGENT_LAST_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'AGENT_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_AGENT_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'AGENT_SECOND_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_AGENT_SECOND_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'AGENT_DATE_BIRTH' => 
  array (
    'type' => 'date',
    'label' => 'LBL_AGENT_DATE_BIRTH',
    'width' => '10%',
    'default' => true,
  ),
  'AGENT_CITIZEN' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_AGENT_CITIZEN',
    'width' => '10%',
  ),
);
?>
