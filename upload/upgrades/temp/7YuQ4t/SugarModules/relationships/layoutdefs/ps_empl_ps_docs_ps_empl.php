<?php
 // created: 2016-05-17 14:33:56
$layout_defs["ps_empl"]["subpanel_setup"]['ps_empl_ps_docs'] = array (
  'order' => 100,
  'module' => 'ps_docs',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_PS_EMPL_PS_DOCS_FROM_PS_DOCS_TITLE',
  'get_subpanel_data' => 'ps_empl_ps_docs',
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
