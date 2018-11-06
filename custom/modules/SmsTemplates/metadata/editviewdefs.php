<?php
$module_name = 'SmsTemplates';
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
      'form' => array (
            'hidden' => array (
              '<input type="hidden" id="source_val" value="{$fields.source.value}">',
              '<input type="hidden" id="type_val" value="{$fields.type.value}">',
              '<input type="hidden" id="theme_val" value="{$fields.theme.value}">',
              '<input type="hidden" id="subtheme_val" value="{$fields.subtheme.value}">',
            ),
        ),
        'javascript' => '{sugar_getscript file="custom/modules/Home/js/linked.js"}',
    ),
    'panels' => 
    array (
      'default' => array (
        array (
          'name',
        ),
        array (
          array (
            'name' => 'code',
            'fields' => array (
              array (
                'name' => 'code',
              ),
              array (
                'name' => 'source',
              ),
              array (
                'name' => 'type',
              ),
              array (
                'name' => 'theme',
              ),
              array (
                'name' => 'subtheme',
              ),
            ),
          ),
        ),
        array (
          'assigned_user_name',
          'description',
        ),
      ),
    ),
  ),
);
?>
