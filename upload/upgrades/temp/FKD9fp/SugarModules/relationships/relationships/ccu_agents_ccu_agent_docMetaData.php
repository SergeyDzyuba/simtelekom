<?php
// created: 2016-04-07 15:47:56
$dictionary["ccu_agents_ccu_agent_doc"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'ccu_agents_ccu_agent_doc' => 
    array (
      'lhs_module' => 'CCU_Agents',
      'lhs_table' => 'ccu_agents',
      'lhs_key' => 'id',
      'rhs_module' => 'CCU_Agent_doc',
      'rhs_table' => 'ccu_agent_doc',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ccu_agents_ccu_agent_doc_c',
      'join_key_lhs' => 'ccu_agents_ccu_agent_docccu_agents_ida',
      'join_key_rhs' => 'ccu_agents_ccu_agent_docccu_agent_doc_idb',
    ),
  ),
  'table' => 'ccu_agents_ccu_agent_doc_c',
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
      'name' => 'ccu_agents_ccu_agent_docccu_agents_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ccu_agents_ccu_agent_docccu_agent_doc_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ccu_agents_ccu_agent_docspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ccu_agents_ccu_agent_doc_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ccu_agents_ccu_agent_docccu_agents_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ccu_agents_ccu_agent_doc_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ccu_agents_ccu_agent_docccu_agent_doc_idb',
      ),
    ),
  ),
);