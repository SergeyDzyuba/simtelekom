<?php
// created: 2016-04-07 16:05:00
$dictionary["CCU_Agent_doc"]["fields"]["ccu_agents_ccu_agent_doc"] = array (
  'name' => 'ccu_agents_ccu_agent_doc',
  'type' => 'link',
  'relationship' => 'ccu_agents_ccu_agent_doc',
  'source' => 'non-db',
  'module' => 'CCU_Agents',
  'bean_name' => 'CCU_Agents',
  'vname' => 'LBL_CCU_AGENTS_CCU_AGENT_DOC_FROM_CCU_AGENTS_TITLE',
  'id_name' => 'ccu_agents_ccu_agent_docccu_agents_ida',
);
$dictionary["CCU_Agent_doc"]["fields"]["ccu_agents_ccu_agent_doc_name"] = array (
  'name' => 'ccu_agents_ccu_agent_doc_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CCU_AGENTS_CCU_AGENT_DOC_FROM_CCU_AGENTS_TITLE',
  'save' => true,
  'id_name' => 'ccu_agents_ccu_agent_docccu_agents_ida',
  'link' => 'ccu_agents_ccu_agent_doc',
  'table' => 'ccu_agents',
  'module' => 'CCU_Agents',
  'rname' => 'name',
);
$dictionary["CCU_Agent_doc"]["fields"]["ccu_agents_ccu_agent_docccu_agents_ida"] = array (
  'name' => 'ccu_agents_ccu_agent_docccu_agents_ida',
  'type' => 'link',
  'relationship' => 'ccu_agents_ccu_agent_doc',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CCU_AGENTS_CCU_AGENT_DOC_FROM_CCU_AGENT_DOC_TITLE',
);
