<?php
// created: 2016-04-26 16:41:08
$dictionary["CCU2_Logins1"]["fields"]["ccu2_agents3_ccu2_logins1"] = array (
  'name' => 'ccu2_agents3_ccu2_logins1',
  'type' => 'link',
  'relationship' => 'ccu2_agents3_ccu2_logins1',
  'source' => 'non-db',
  'module' => 'CCU2_Agents3',
  'bean_name' => 'CCU2_Agents3',
  'vname' => 'LBL_CCU2_AGENTS3_CCU2_LOGINS1_FROM_CCU2_AGENTS3_TITLE',
  'id_name' => 'ccu2_agents3_ccu2_logins1ccu2_agents3_ida',
);
$dictionary["CCU2_Logins1"]["fields"]["ccu2_agents3_ccu2_logins1_name"] = array (
  'name' => 'ccu2_agents3_ccu2_logins1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CCU2_AGENTS3_CCU2_LOGINS1_FROM_CCU2_AGENTS3_TITLE',
  'save' => true,
  'id_name' => 'ccu2_agents3_ccu2_logins1ccu2_agents3_ida',
  'link' => 'ccu2_agents3_ccu2_logins1',
  'table' => 'ccu2_agents3',
  'module' => 'CCU2_Agents3',
  'rname' => 'name',
);
$dictionary["CCU2_Logins1"]["fields"]["ccu2_agents3_ccu2_logins1ccu2_agents3_ida"] = array (
  'name' => 'ccu2_agents3_ccu2_logins1ccu2_agents3_ida',
  'type' => 'link',
  'relationship' => 'ccu2_agents3_ccu2_logins1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CCU2_AGENTS3_CCU2_LOGINS1_FROM_CCU2_LOGINS1_TITLE',
);
