<?php
$module_name = 'ps_empl';
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
      'gruppa' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_GRUPPA',
        'width' => '10%',
        'default' => true,
        'name' => 'gruppa',
      ),
      'grazhdanstvo' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_GRAZHDANSTVO',
        'width' => '10%',
        'name' => 'grazhdanstvo',
      ),
      'status' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_STATUS',
        'width' => '10%',
        'name' => 'status',
      ),
      'skills_lang' => 
      array (
        'type' => 'multienum',
        'studio' => 'visible',
        'label' => 'LBL_SKILLS_LANG',
        'width' => '10%',
        'default' => true,
        'name' => 'skills_lang',
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
      'status' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_STATUS',
        'width' => '10%',
        'name' => 'status',
      ),
      'pol' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_POL',
        'width' => '10%',
        'name' => 'pol',
      ),
      'skills_lang' => 
      array (
        'type' => 'multienum',
        'studio' => 'visible',
        'label' => 'LBL_SKILLS_LANG',
        'width' => '10%',
        'default' => true,
        'name' => 'skills_lang',
      ),
      'rojdenie_dt' => 
      array (
        'type' => 'date',
        'label' => 'LBL_ROJDENIE_DT',
        'width' => '10%',
        'default' => true,
        'name' => 'rojdenie_dt',
      ),
      'grazhdanstvo' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_GRAZHDANSTVO',
        'width' => '10%',
        'name' => 'grazhdanstvo',
      ),
      'gruppa' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_GRUPPA',
        'width' => '10%',
        'default' => true,
        'name' => 'gruppa',
      ),
      'start_dt' => 
      array (
        'type' => 'date',
        'label' => 'LBL_START_DT',
        'width' => '10%',
        'default' => true,
        'name' => 'start_dt',
      ),
      'description' => 
      array (
        'type' => 'text',
        'label' => 'LBL_DESCRIPTION',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'description',
      ),
      'created_by' => 
      array (
        'type' => 'assigned_user_name',
        'label' => 'LBL_CREATED',
        'width' => '10%',
        'default' => true,
        'name' => 'created_by',
      ),
      'date_modified' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_MODIFIED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_modified',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
      'modified_user_id' => 
      array (
        'type' => 'assigned_user_name',
        'label' => 'LBL_MODIFIED',
        'width' => '10%',
        'default' => true,
        'name' => 'modified_user_id',
      ),
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
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
