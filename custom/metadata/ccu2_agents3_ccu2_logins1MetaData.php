<?php
// created: 2016-04-26 16:56:09
$dictionary["ccu2_agents3_ccu2_logins1"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'ccu2_agents3_ccu2_logins1' => 
    array (
      'lhs_module' => 'CCU2_Agents3',
      'lhs_table' => 'ccu2_agents3',
      'lhs_key' => 'id',
      'rhs_module' => 'CCU2_Logins1',
      'rhs_table' => 'ccu2_logins1',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ccu2_agents3_ccu2_logins1_c',
      'join_key_lhs' => 'ccu2_agents3_ccu2_logins1ccu2_agents3_ida',
      'join_key_rhs' => 'ccu2_agents3_ccu2_logins1ccu2_logins1_idb',
    ),
  ),
  'table' => 'ccu2_agents3_ccu2_logins1_c',
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
      'name' => 'ccu2_agents3_ccu2_logins1ccu2_agents3_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ccu2_agents3_ccu2_logins1ccu2_logins1_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ccu2_agents3_ccu2_logins1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ccu2_agents3_ccu2_logins1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ccu2_agents3_ccu2_logins1ccu2_agents3_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ccu2_agents3_ccu2_logins1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ccu2_agents3_ccu2_logins1ccu2_logins1_idb',
      ),
    ),
  ),
);