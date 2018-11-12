<?php
// created: 2016-04-07 16:05:00
$dictionary["ccu_agents_notes"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'ccu_agents_notes' => 
    array (
      'lhs_module' => 'CCU_Agents',
      'lhs_table' => 'ccu_agents',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ccu_agents_notes_c',
      'join_key_lhs' => 'ccu_agents_notesccu_agents_ida',
      'join_key_rhs' => 'ccu_agents_notesnotes_idb',
    ),
  ),
  'table' => 'ccu_agents_notes_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'ccu_agents_notesccu_agents_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ccu_agents_notesnotes_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ccu_agents_notesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ccu_agents_notes_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ccu_agents_notesccu_agents_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ccu_agents_notes_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ccu_agents_notesnotes_idb',
      ),
    ),
  ),
);