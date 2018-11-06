<?php
// created: 2016-04-26 16:33:31
$dictionary["ccu2_logins_ccu2_agents3"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'ccu2_logins_ccu2_agents3' => 
    array (
      'lhs_module' => 'CCU2_Agents3',
      'lhs_table' => 'ccu2_agents3',
      'lhs_key' => 'id',
      'rhs_module' => 'CCU2_Logins',
      'rhs_table' => 'ccu2_logins',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ccu2_logins_ccu2_agents3_c',
      'join_key_lhs' => 'ccu2_logins_ccu2_agents3ccu2_agents3_ida',
      'join_key_rhs' => 'ccu2_logins_ccu2_agents3ccu2_logins_idb',
    ),
  ),
  'table' => 'ccu2_logins_ccu2_agents3_c',
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
      'name' => 'ccu2_logins_ccu2_agents3ccu2_agents3_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ccu2_logins_ccu2_agents3ccu2_logins_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ccu2_logins_ccu2_agents3spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ccu2_logins_ccu2_agents3_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ccu2_logins_ccu2_agents3ccu2_agents3_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ccu2_logins_ccu2_agents3_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ccu2_logins_ccu2_agents3ccu2_logins_idb',
      ),
    ),
  ),
);