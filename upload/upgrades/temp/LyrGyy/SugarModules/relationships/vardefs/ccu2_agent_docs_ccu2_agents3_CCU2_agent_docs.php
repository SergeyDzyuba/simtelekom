<?php
// created: 2016-04-26 16:30:30
$dictionary["CCU2_agent_docs"]["fields"]["ccu2_agent_docs_ccu2_agents3"] = array (
  'name' => 'ccu2_agent_docs_ccu2_agents3',
  'type' => 'link',
  'relationship' => 'ccu2_agent_docs_ccu2_agents3',
  'source' => 'non-db',
  'module' => 'CCU2_Agents3',
  'bean_name' => 'CCU2_Agents3',
  'vname' => 'LBL_CCU2_AGENT_DOCS_CCU2_AGENTS3_FROM_CCU2_AGENTS3_TITLE',
  'id_name' => 'ccu2_agent_docs_ccu2_agents3ccu2_agents3_idb',
);
$dictionary["CCU2_agent_docs"]["fields"]["ccu2_agent_docs_ccu2_agents3_name"] = array (
  'name' => 'ccu2_agent_docs_ccu2_agents3_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CCU2_AGENT_DOCS_CCU2_AGENTS3_FROM_CCU2_AGENTS3_TITLE',
  'save' => true,
  'id_name' => 'ccu2_agent_docs_ccu2_agents3ccu2_agents3_idb',
  'link' => 'ccu2_agent_docs_ccu2_agents3',
  'table' => 'ccu2_agents3',
  'module' => 'CCU2_Agents3',
  'rname' => 'name',
);
$dictionary["CCU2_agent_docs"]["fields"]["ccu2_agent_docs_ccu2_agents3ccu2_agents3_idb"] = array (
  'name' => 'ccu2_agent_docs_ccu2_agents3ccu2_agents3_idb',
  'type' => 'link',
  'relationship' => 'ccu2_agent_docs_ccu2_agents3',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_CCU2_AGENT_DOCS_CCU2_AGENTS3_FROM_CCU2_AGENTS3_TITLE',
);
