<?php
$module_name = 'ps_docs';
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
          0 => 
          array (
            'name' => 'document_type',
            'studio' => 'visible',
            'label' => 'LBL_DOCUMENT_TYPE',
          ),
          1 => 
          array (
            'name' => 'kem_vydan',
            'label' => 'LBL_KEM_VYDAN',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'data_vydachi',
            'label' => 'LBL_DATA_VYDACHI',
          ),
          1 => 
          array (
            'name' => 'srok_deistvia',
            'label' => 'LBL_SROK_DEISTVIA',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'adress',
            'label' => 'LBL_ADRESS',
          ),
          1 => 
          array (
            'name' => 'koment',
            'label' => 'LBL_KOMENT',
          ),
        ),
        4 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'ps_empl_ps_docs_name',
          ),
        ),
        5 => 
        array (
          0 => 'date_entered',
          1 => 'date_modified',
        ),
      ),
    ),
  ),
);
?>
