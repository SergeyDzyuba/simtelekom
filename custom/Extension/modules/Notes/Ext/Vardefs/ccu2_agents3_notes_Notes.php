<?php
// created: 2016-04-26 16:56:09
$dictionary["Note"]["fields"]["ccu2_agents3_notes"] = array (
  'name' => 'ccu2_agents3_notes',
  'type' => 'link',
  'relationship' => 'ccu2_agents3_notes',
  'source' => 'non-db',
  'module' => 'CCU2_Agents31',
  'bean_name' => false,
  'vname' => 'LBL_CCU2_AGENTS3_NOTES_FROM_CCU2_AGENTS31_TITLE',
  'id_name' => 'ccu2_agents3_notesccu2_agents31_ida',
);
$dictionary["Note"]["fields"]["ccu2_agents3_notes_name"] = array (
  'name' => 'ccu2_agents3_notes_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CCU2_AGENTS3_NOTES_FROM_CCU2_AGENTS31_TITLE',
  'save' => true,
  'id_name' => 'ccu2_agents3_notesccu2_agents31_ida',
  'link' => 'ccu2_agents3_notes',
  'table' => 'ccu2_agents31',
  'module' => 'CCU2_Agents31',
  'rname' => 'name',
);
$dictionary["Note"]["fields"]["ccu2_agents3_notesccu2_agents31_ida"] = array (
  'name' => 'ccu2_agents3_notesccu2_agents31_ida',
  'type' => 'link',
  'relationship' => 'ccu2_agents3_notes',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CCU2_AGENTS3_NOTES_FROM_NOTES_TITLE',
);
