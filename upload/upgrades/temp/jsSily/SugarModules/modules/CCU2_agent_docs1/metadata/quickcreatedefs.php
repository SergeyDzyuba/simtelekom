<?php
$module_name = 'CCU2_agent_docs1';
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
            'name' => 'pass_nom',
            'label' => 'LBL_PASS_NOM',
          ),
          1 => 
          array (
            'name' => 'pass_date',
            'label' => 'LBL_PASS_DATE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'pass_perevod',
            'label' => 'LBL_PASS_PEREVOD',
          ),
          1 => 
          array (
            'name' => 'migr_card',
            'label' => 'LBL_MIGR_CARD',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'registr_date',
            'label' => 'LBL_REGISTR_DATE',
          ),
          1 => 
          array (
            'name' => 'patent_date',
            'label' => 'LBL_PATENT_DATE',
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
            'name' => 'kvitancii',
            'label' => 'LBL_KVITANCII',
          ),
        ),
        5 => 
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
