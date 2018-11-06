<?php
 // created: 2016-04-26 16:30:30
$layout_defs["CCU2_Agents3"]["subpanel_setup"]['ccu2_agents3_notes'] = array (
  'order' => 100,
  'module' => 'Notes',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CCU2_AGENTS3_NOTES_FROM_NOTES_TITLE',
  'get_subpanel_data' => 'ccu2_agents3_notes',
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
