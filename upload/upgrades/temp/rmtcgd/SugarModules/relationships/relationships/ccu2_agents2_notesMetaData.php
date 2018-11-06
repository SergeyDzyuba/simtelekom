<?php
// created: 2016-04-12 15:05:40
$dictionary["ccu2_agents2_notes"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'ccu2_agents2_notes' => 
    array (
      'lhs_module' => 'CCU2_Agents2',
      'lhs_table' => 'ccu2_agents2',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ccu2_agents2_notes_c',
      'join_key_lhs' => 'ccu2_agents2_notesccu2_agents2_ida',
      'join_key_rhs' => 'ccu2_agents2_notesnotes_idb',
    ),
  ),
  'table' => 'ccu2_agents2_notes_c',
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
      'name' => 'ccu2_agents2_notesccu2_agents2_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ccu2_agents2_notesnotes_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ccu2_agents2_notesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ccu2_agents2_notes_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ccu2_agents2_notesccu2_agents2_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ccu2_agents2_notes_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ccu2_agents2_notesnotes_idb',
      ),
    ),
  ),
);