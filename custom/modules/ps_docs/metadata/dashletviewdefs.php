<?php
$dashletData['ps_docsDashlet']['searchFields'] = array (
  'document_type' => 
  array (
    'default' => '',
  ),
  'srok_deistvia' => 
  array (
    'default' => '',
  ),
  'date_entered' => 
  array (
    'default' => '',
  ),
  'date_modified' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'default' => '',
  ),
);
$dashletData['ps_docsDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'data_vydachi' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATA_VYDACHI',
    'width' => '10%',
    'default' => true,
    'name' => 'data_vydachi',
  ),
  'document_type' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_DOCUMENT_TYPE',
    'width' => '10%',
    'default' => true,
    'name' => 'document_type',
  ),
  'srok_deistvia' => 
  array (
    'type' => 'date',
    'label' => 'LBL_SROK_DEISTVIA',
    'width' => '10%',
    'default' => true,
    'name' => 'srok_deistvia',
  ),
  'archiv_c' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_ARCHIV',
    'width' => '10%',
  ),
  'ps_empl_ps_docs_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_PS_EMPL_PS_DOCS_FROM_PS_EMPL_TITLE',
    'id' => 'PS_EMPL_PS_DOCSPS_EMPL_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'ps_empl_ps_docs_name',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
