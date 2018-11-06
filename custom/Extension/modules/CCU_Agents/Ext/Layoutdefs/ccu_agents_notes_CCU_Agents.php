<?php
 // created: 2016-04-07 16:05:00
$layout_defs["CCU_Agents"]["subpanel_setup"]['ccu_agents_notes'] = array (
  'order' => 100,
  'module' => 'Notes',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CCU_AGENTS_NOTES_FROM_NOTES_TITLE',
  'get_subpanel_data' => 'ccu_agents_notes',
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
