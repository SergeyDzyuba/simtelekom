<?php
$module_name = 'CCU_Agent_doc';
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
          0 => 
          array (
            'name' => 'migr_card',
            'label' => 'LBL_MIGR_CARD',
          ),
          1 => 
          array (
            'name' => 'date_reigistr',
            'label' => 'LBL_DATE_REIGISTR',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'patent',
            'label' => 'LBL_PATENT',
          ),
          1 => 
          array (
            'name' => 'date_dms',
            'label' => 'LBL_DATE_DMS',
          ),
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
            'name' => 'translate',
            'label' => 'LBL_TRANSLATE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'other_docs',
            'studio' => 'visible',
            'label' => 'LBL_OTHER_DOCS',
          ),
          1 => 
          array (
            'name' => 'ccu_agents_ccu_agent_doc_name',
          ),
        ),
      ),
    ),
  ),
);
?>
