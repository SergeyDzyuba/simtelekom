<?php
// created: 2016-04-26 16:30:30
$dictionary["Note"]["fields"]["ccu2_agents3_notes"] = array (
  'name' => 'ccu2_agents3_notes',
  'type' => 'link',
  'relationship' => 'ccu2_agents3_notes',
  'source' => 'non-db',
  'module' => 'CCU2_Agents3',
  'bean_name' => 'CCU2_Agents3',
  'vname' => 'LBL_CCU2_AGENTS3_NOTES_FROM_CCU2_AGENTS3_TITLE',
  'id_name' => 'ccu2_agents3_notesccu2_agents3_ida',
);
$dictionary["Note"]["fields"]["ccu2_agents3_notes_name"] = array (
  'name' => 'ccu2_agents3_notes_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CCU2_AGENTS3_NOTES_FROM_CCU2_AGENTS3_TITLE',
  'save' => true,
  'id_name' => 'ccu2_agents3_notesccu2_agents3_ida',
  'link' => 'ccu2_agents3_notes',
  'table' => 'ccu2_agents3',
  'module' => 'CCU2_Agents3',
  'rname' => 'name',
);
$dictionary["Note"]["fields"]["ccu2_agents3_notesccu2_agents3_ida"] = array (
  'name' => 'ccu2_agents3_notesccu2_agents3_ida',
  'type' => 'link',
  'relationship' => 'ccu2_agents3_notes',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CCU2_AGENTS3_NOTES_FROM_NOTES_TITLE',
);
