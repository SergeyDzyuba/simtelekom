<?php
$module_name = 'ps_empl';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
          0 => 'date_entered',
          1 => 'date_modified',
        ),
        2 => 
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
        3 => 
        array (
          0 => 
          array (
            'name' => 'grazhdanstvo',
            'studio' => 'visible',
            'label' => 'LBL_GRAZHDANSTVO',
          ),
          1 => 
          array (
            'name' => 'skills_lang',
            'studio' => 'visible',
            'label' => 'LBL_SKILLS_LANG',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'start_dt',
            'label' => 'LBL_START_DT',
          ),
          1 => 
          array (
            'name' => 'gruppa',
            'label' => 'LBL_GRUPPA',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'status',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
          1 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
        ),
      ),
    ),
  ),
);
?>
