<?php
$module_name = 'ps_empl';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'pol',
            'studio' => 'visible',
            'label' => 'LBL_POL',
          ),
          1 => 
          array (
            'name' => 'rojdenie_dt',
            'label' => 'LBL_ROJDENIE_DT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'skills_lang',
            'studio' => 'visible',
            'label' => 'LBL_SKILLS_LANG',
          ),
          1 => 
          array (
            'name' => 'grazhdanstvo',
            'studio' => 'visible',
            'label' => 'LBL_GRAZHDANSTVO',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'gruppa',
            'label' => 'LBL_GRUPPA',
          ),
          1 => 
          array (
            'name' => 'start_dt',
            'label' => 'LBL_START_DT',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'status',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
          1 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
    ),
  ),
);
?>
