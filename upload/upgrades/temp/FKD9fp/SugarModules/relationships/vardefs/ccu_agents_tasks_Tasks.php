<?php
// created: 2016-04-07 15:47:56
$dictionary["Task"]["fields"]["ccu_agents_tasks"] = array (
  'name' => 'ccu_agents_tasks',
  'type' => 'link',
  'relationship' => 'ccu_agents_tasks',
  'source' => 'non-db',
  'module' => 'CCU_Agents',
  'bean_name' => false,
  'vname' => 'LBL_CCU_AGENTS_TASKS_FROM_CCU_AGENTS_TITLE',
  'id_name' => 'ccu_agents_tasksccu_agents_ida',
);
$dictionary["Task"]["fields"]["ccu_agents_tasks_name"] = array (
  'name' => 'ccu_agents_tasks_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CCU_AGENTS_TASKS_FROM_CCU_AGENTS_TITLE',
  'save' => true,
  'id_name' => 'ccu_agents_tasksccu_agents_ida',
  'link' => 'ccu_agents_tasks',
  'table' => 'ccu_agents',
  'module' => 'CCU_Agents',
  'rname' => 'name',
);
$dictionary["Task"]["fields"]["ccu_agents_tasksccu_agents_ida"] = array (
  'name' => 'ccu_agents_tasksccu_agents_ida',
  'type' => 'link',
  'relationship' => 'ccu_agents_tasks',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CCU_AGENTS_TASKS_FROM_TASKS_TITLE',
);
