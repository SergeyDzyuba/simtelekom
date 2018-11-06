<?php
$layout_defs["Contacts"]["subpanel_setup"]["contact_appeals"] = array (
  'order' => 2,
  'module' => 'Appeal',
  'subpanel_name' => 'default',
  'sort_order' => 'desc',
  'sort_by' => 'date_entered',
  'title_key' => 'LBL_SUBPANEL_CONTACT_APPEALS_TITLE',
  'get_subpanel_data' => 'contact_appeals', //имя поля link
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