<?php
// created: 2016-04-26 16:39:38
$dictionary["CCU2_Logins1"]["fields"]["ccu2_logins_ccu2_agents3"] = array (
  'name' => 'ccu2_logins_ccu2_agents3',
  'type' => 'link',
  'relationship' => 'ccu2_logins_ccu2_agents3',
  'source' => 'non-db',
  'module' => 'CCU2_Agents3',
  'bean_name' => 'CCU2_Agents3',
  'vname' => 'LBL_CCU2_LOGINS_CCU2_AGENTS3_FROM_CCU2_AGENTS3_TITLE',
  'id_name' => 'ccu2_logins_ccu2_agents3ccu2_agents3_ida',
);
$dictionary["CCU2_Logins1"]["fields"]["ccu2_logins_ccu2_agents3_name"] = array (
  'name' => 'ccu2_logins_ccu2_agents3_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CCU2_LOGINS_CCU2_AGENTS3_FROM_CCU2_AGENTS3_TITLE',
  'save' => true,
  'id_name' => 'ccu2_logins_ccu2_agents3ccu2_agents3_ida',
  'link' => 'ccu2_logins_ccu2_agents3',
  'table' => 'ccu2_agents3',
  'module' => 'CCU2_Agents3',
  'rname' => 'name',
);
$dictionary["CCU2_Logins1"]["fields"]["ccu2_logins_ccu2_agents3ccu2_agents3_ida"] = array (
  'name' => 'ccu2_logins_ccu2_agents3ccu2_agents3_ida',
  'type' => 'link',
  'relationship' => 'ccu2_logins_ccu2_agents3',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CCU2_LOGINS_CCU2_AGENTS3_FROM_CCU2_LOGINS1_TITLE',
);
