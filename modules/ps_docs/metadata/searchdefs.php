<?php
$module_name = 'ps_docs';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'doc_type_v2' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_DOC_TYPE_V2',
        'width' => '10%',
        'name' => 'doc_type_v2',
      ),
      'srok_deistvia' => 
      array (
        'type' => 'date',
        'label' => 'LBL_SROK_DEISTVIA',
        'width' => '10%',
        'default' => true,
        'name' => 'srok_deistvia',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'doc_type_v2' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_DOC_TYPE_V2',
        'width' => '10%',
        'name' => 'doc_type_v2',
      ),
      'kem_vydan' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_KEM_VYDAN',
        'width' => '10%',
        'default' => true,
        'name' => 'kem_vydan',
      ),
      'data_vydachi' => 
      array (
        'type' => 'date',
        'label' => 'LBL_DATA_VYDACHI',
        'width' => '10%',
        'default' => true,
        'name' => 'data_vydachi',
      ),
      'srok_deistvia' => 
      array (
        'type' => 'date',
        'label' => 'LBL_SROK_DEISTVIA',
        'width' => '10%',
        'default' => true,
        'name' => 'srok_deistvia',
      ),
      'adress' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_ADRESS',
        'width' => '10%',
        'default' => true,
        'name' => 'adress',
      ),
      'koment' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_KOMENT',
        'width' => '10%',
        'default' => true,
        'name' => 'koment',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
