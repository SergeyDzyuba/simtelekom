<?php
// created: 2016-04-26 16:30:30
$dictionary["CCU2_Agents3"]["fields"]["ccu2_logins_ccu2_agents3"] = array (
  'name' => 'ccu2_logins_ccu2_agents3',
  'type' => 'link',
  'relationship' => 'ccu2_logins_ccu2_agents3',
  'source' => 'non-db',
  'module' => 'CCU2_Logins',
  'bean_name' => false,
  'vname' => 'LBL_CCU2_LOGINS_CCU2_AGENTS3_FROM_CCU2_LOGINS_TITLE',
  'id_name' => 'ccu2_logins_ccu2_agents3ccu2_logins_ida',
);
$dictionary["CCU2_Agents3"]["fields"]["ccu2_logins_ccu2_agents3_name"] = array (
  'name' => 'ccu2_logins_ccu2_agents3_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CCU2_LOGINS_CCU2_AGENTS3_FROM_CCU2_LOGINS_TITLE',
  'save' => true,
  'id_name' => 'ccu2_logins_ccu2_agents3ccu2_logins_ida',
  'link' => 'ccu2_logins_ccu2_agents3',
  'table' => 'ccu2_logins',
  'module' => 'CCU2_Logins',
  'rname' => 'name',
);
$dictionary["CCU2_Agents3"]["fields"]["ccu2_logins_ccu2_agents3ccu2_logins_ida"] = array (
  'name' => 'ccu2_logins_ccu2_agents3ccu2_logins_ida',
  'type' => 'link',
  'relationship' => 'ccu2_logins_ccu2_agents3',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_CCU2_LOGINS_CCU2_AGENTS3_FROM_CCU2_LOGINS_TITLE',
);
