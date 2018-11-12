<?php
// created: 2016-05-17 14:14:13
$dictionary["ps_empl_ps_skills"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'ps_empl_ps_skills' => 
    array (
      'lhs_module' => 'ps_empl',
      'lhs_table' => 'ps_empl',
      'lhs_key' => 'id',
      'rhs_module' => 'ps_skills',
      'rhs_table' => 'ps_skills',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ps_empl_ps_skills_c',
      'join_key_lhs' => 'ps_empl_ps_skillsps_empl_ida',
      'join_key_rhs' => 'ps_empl_ps_skillsps_skills_idb',
    ),
  ),
  'table' => 'ps_empl_ps_skills_c',
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
      'name' => 'ps_empl_ps_skillsps_empl_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ps_empl_ps_skillsps_skills_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ps_empl_ps_skillsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ps_empl_ps_skills_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ps_empl_ps_skillsps_empl_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ps_empl_ps_skills_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ps_empl_ps_skillsps_skills_idb',
      ),
    ),
  ),
);