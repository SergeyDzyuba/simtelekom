<?php
$module_name='ps_empl';
$subpanel_layout = array (
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 'ps_empl',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'name' => 
    array (
      'vname' => 'LBL_NAME',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => '20%',
      'default' => true,
    ),
    'start_dt' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_START_DT',
      'width' => '10%',
      'default' => true,
    ),
    'gruppa' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_GRUPPA',
      'width' => '10%',
      'default' => true,
    ),
    'rojdenie_dt' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_ROJDENIE_DT',
      'width' => '10%',
      'default' => true,
    ),
    'pol' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_POL',
      'width' => '5%',
    ),
    'grazhdanstvo' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_GRAZHDANSTVO',
      'width' => '5%',
    ),
    'status' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_STATUS',
      'width' => '10%',
    ),
    'skills_lang' => 
    array (
      'type' => 'multienum',
      'studio' => 'visible',
      'vname' => 'LBL_SKILLS_LANG',
      'width' => '10%',
      'default' => true,
    ),
    'date_modified' => 
    array (
      'vname' => 'LBL_DATE_MODIFIED',
      'width' => '10%',
      'default' => true,
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'ps_empl',
      'width' => '5%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'ps_empl',
      'width' => '5%',
      'default' => true,
    ),
  ),
);