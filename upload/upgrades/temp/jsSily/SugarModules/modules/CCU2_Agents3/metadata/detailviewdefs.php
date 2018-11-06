<?php
$module_name = 'CCU2_Agents3';
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
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'gen',
            'studio' => 'visible',
            'label' => 'LBL_GEN',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'birth_date',
            'label' => 'LBL_BIRTH_DATE',
          ),
          1 => 
          array (
            'name' => 'grazhdanstvo',
            'studio' => 'visible',
            'label' => 'LBL_GRAZHDANSTVO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'pass_no',
            'label' => 'LBL_PASS_NO',
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
            'name' => 'doc_type',
            'studio' => 'visible',
            'label' => 'LBL_DOC_TYPE',
          ),
          1 => 
          array (
            'name' => 'ph1',
            'label' => 'LBL_PH1',
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
            'name' => 'stud_date',
            'label' => 'LBL_STUD_DATE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'ph2',
            'label' => 'LBL_PH2',
          ),
          1 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
?>
