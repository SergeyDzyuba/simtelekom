<?php
// created: 2016-04-12 15:05:40
$dictionary["Note"]["fields"]["ccu2_agents2_notes"] = array (
  'name' => 'ccu2_agents2_notes',
  'type' => 'link',
  'relationship' => 'ccu2_agents2_notes',
  'source' => 'non-db',
  'module' => 'CCU2_Agents2',
  'bean_name' => false,
  'vname' => 'LBL_CCU2_AGENTS2_NOTES_FROM_CCU2_AGENTS2_TITLE',
  'id_name' => 'ccu2_agents2_notesccu2_agents2_ida',
);
$dictionary["Note"]["fields"]["ccu2_agents2_notes_name"] = array (
  'name' => 'ccu2_agents2_notes_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CCU2_AGENTS2_NOTES_FROM_CCU2_AGENTS2_TITLE',
  'save' => true,
  'id_name' => 'ccu2_agents2_notesccu2_agents2_ida',
  'link' => 'ccu2_agents2_notes',
  'table' => 'ccu2_agents2',
  'module' => 'CCU2_Agents2',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Note"]["fields"]["ccu2_agents2_notesccu2_agents2_ida"] = array (
  'name' => 'ccu2_agents2_notesccu2_agents2_ida',
  'type' => 'link',
  'relationship' => 'ccu2_agents2_notes',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CCU2_AGENTS2_NOTES_FROM_NOTES_TITLE',
);
