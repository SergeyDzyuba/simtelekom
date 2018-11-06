<?php
 // created: 2016-05-12 16:13:09
$layout_defs["ps_empl"]["subpanel_setup"]['ps_empl_ps_skills'] = array (
  'order' => 100,
  'module' => 'ps_skills',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_PS_EMPL_PS_SKILLS_FROM_PS_SKILLS_TITLE',
  'get_subpanel_data' => 'ps_empl_ps_skills',
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
