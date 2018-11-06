<?php
$module_name = 'CCU_Agent_doc';
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
            'name' => 'date_patent_pay',
            'label' => 'LBL_DATE_PATENT_PAY',
          ),
          1 => 
          array (
            'name' => 'date_reigistr',
            'label' => 'LBL_DATE_REIGISTR',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'date_dms',
            'label' => 'LBL_DATE_DMS',
          ),
          1 => 
          array (
            'name' => 'patent',
            'label' => 'LBL_PATENT',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'migr_card',
            'label' => 'LBL_MIGR_CARD',
          ),
          1 => 
          array (
            'name' => 'translate',
            'label' => 'LBL_TRANSLATE',
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
        6 => 
        array (
          0 => 
          array (
            'name' => 'ccu_agents_ccu_agent_doc_name',
          ),
        ),
      ),
    ),
  ),
);
?>
