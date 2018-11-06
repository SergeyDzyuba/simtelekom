<?php
 // created: 2016-04-07 15:59:48
$layout_defs["CCU_Agents"]["subpanel_setup"]['ccu_agents_ccu_agent_doc'] = array (
  'order' => 100,
  'module' => 'CCU_Agent_doc',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CCU_AGENTS_CCU_AGENT_DOC_FROM_CCU_AGENT_DOC_TITLE',
  'get_subpanel_data' => 'ccu_agents_ccu_agent_doc',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
