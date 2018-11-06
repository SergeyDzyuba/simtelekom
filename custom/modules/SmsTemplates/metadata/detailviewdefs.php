<?php
$module_name = 'SmsTemplates';
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
      'default' =>  array (
        array (
          'name',
        ),
        array (
          array (
            'name'=>'code',

          ),
        ),
        array (
          array (
            'name'=>'source',
            'customCode'=>'{$fields.source.value}',
          ),
        ),
        array (
          array (
            'name'=>'type',
            'customCode'=>'{$fields.type.value}',
          ),
        ),
        array (
          array (
            'name'=>'theme',
            'customCode'=>'{$fields.theme.value}',
          ),
        ),
        array (
          array (
            'name'=>'subtheme',
            'customCode'=>'{$fields.subtheme.value}',
          ),
        ),
        array (
          'assigned_user_name',
          'description',
        ),
        array (
          'date_entered',
          'date_modified',
        ),
      ),
    ),
  ),
);
?>
