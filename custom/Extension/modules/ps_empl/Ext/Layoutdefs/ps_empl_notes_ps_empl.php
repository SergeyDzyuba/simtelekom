<?php
 // created: 2016-05-18 15:38:02
$layout_defs["ps_empl"]["subpanel_setup"]['ps_empl_notes'] = array (
  'order' => 100,
  'module' => 'Notes',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_PS_EMPL_NOTES_FROM_NOTES_TITLE',
  'get_subpanel_data' => 'ps_empl_notes',
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
