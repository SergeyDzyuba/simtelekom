<?php
$module_name = 'CCU2_agent_docs';
$viewdefs [$module_name] = 
array (
  'EditView' => 
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
      'syncDetailEditViews' => true,
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
          0 => 'description',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'pass_nom',
            'label' => 'LBL_PASS_NOM',
          ),
          1 => 
          array (
            'name' => 'pass_date',
            'label' => 'LBL_PASS_DATE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'patent_date',
            'label' => 'LBL_PATENT_DATE',
          ),
          1 => 
          array (
            'name' => 'registr_date',
            'label' => 'LBL_REGISTR_DATE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'strah_date',
            'label' => 'LBL_STRAH_DATE',
          ),
          1 => 
          array (
            'name' => 'pass_perevod',
            'label' => 'LBL_PASS_PEREVOD',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'migr_card',
            'label' => 'LBL_MIGR_CARD',
          ),
          1 => 
          array (
            'name' => 'kvitancii',
            'label' => 'LBL_KVITANCII',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'other_docs',
            'studio' => 'visible',
            'label' => 'LBL_OTHER_DOCS',
          ),
        ),
      ),
    ),
  ),
);
?>
