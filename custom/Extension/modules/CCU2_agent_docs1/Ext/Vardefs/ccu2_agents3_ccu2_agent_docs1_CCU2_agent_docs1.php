<?php
// created: 2016-04-26 16:56:09
$dictionary["CCU2_agent_docs1"]["fields"]["ccu2_agents3_ccu2_agent_docs1"] = array (
  'name' => 'ccu2_agents3_ccu2_agent_docs1',
  'type' => 'link',
  'relationship' => 'ccu2_agents3_ccu2_agent_docs1',
  'source' => 'non-db',
  'module' => 'CCU2_Agents31',
  'bean_name' => false,
  'vname' => 'LBL_CCU2_AGENTS3_CCU2_AGENT_DOCS1_FROM_CCU2_AGENTS31_TITLE',
  'id_name' => 'ccu2_agents3_ccu2_agent_docs1ccu2_agents31_ida',
);
$dictionary["CCU2_agent_docs1"]["fields"]["ccu2_agents3_ccu2_agent_docs1_name"] = array (
  'name' => 'ccu2_agents3_ccu2_agent_docs1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CCU2_AGENTS3_CCU2_AGENT_DOCS1_FROM_CCU2_AGENTS31_TITLE',
  'save' => true,
  'id_name' => 'ccu2_agents3_ccu2_agent_docs1ccu2_agents31_ida',
  'link' => 'ccu2_agents3_ccu2_agent_docs1',
  'table' => 'ccu2_agents31',
  'module' => 'CCU2_Agents31',
  'rname' => 'name',
);
$dictionary["CCU2_agent_docs1"]["fields"]["ccu2_agents3_ccu2_agent_docs1ccu2_agents31_ida"] = array (
  'name' => 'ccu2_agents3_ccu2_agent_docs1ccu2_agents31_ida',
  'type' => 'link',
  'relationship' => 'ccu2_agents3_ccu2_agent_docs1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CCU2_AGENTS3_CCU2_AGENT_DOCS1_FROM_CCU2_AGENT_DOCS1_TITLE',
);
