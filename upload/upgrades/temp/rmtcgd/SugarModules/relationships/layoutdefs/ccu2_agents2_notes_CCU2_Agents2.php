<?php
 // created: 2016-04-12 15:05:40
$layout_defs["CCU2_Agents2"]["subpanel_setup"]['ccu2_agents2_notes'] = array (
  'order' => 100,
  'module' => 'Notes',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CCU2_AGENTS2_NOTES_FROM_NOTES_TITLE',
  'get_subpanel_data' => 'ccu2_agents2_notes',
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
