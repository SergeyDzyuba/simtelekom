<?php
// created: 2016-04-07 16:05:00
$dictionary["Note"]["fields"]["ccu_agents_notes"] = array (
  'name' => 'ccu_agents_notes',
  'type' => 'link',
  'relationship' => 'ccu_agents_notes',
  'source' => 'non-db',
  'module' => 'CCU_Agents',
  'bean_name' => 'CCU_Agents',
  'vname' => 'LBL_CCU_AGENTS_NOTES_FROM_CCU_AGENTS_TITLE',
  'id_name' => 'ccu_agents_notesccu_agents_ida',
);
$dictionary["Note"]["fields"]["ccu_agents_notes_name"] = array (
  'name' => 'ccu_agents_notes_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CCU_AGENTS_NOTES_FROM_CCU_AGENTS_TITLE',
  'save' => true,
  'id_name' => 'ccu_agents_notesccu_agents_ida',
  'link' => 'ccu_agents_notes',
  'table' => 'ccu_agents',
  'module' => 'CCU_Agents',
  'rname' => 'name',
);
$dictionary["Note"]["fields"]["ccu_agents_notesccu_agents_ida"] = array (
  'name' => 'ccu_agents_notesccu_agents_ida',
  'type' => 'link',
  'relationship' => 'ccu_agents_notes',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CCU_AGENTS_NOTES_FROM_NOTES_TITLE',
);
