<?php
$module_name = 'Appeal';
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
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" id="source_val" value="{$fields.source.value}">',
          1 => '<input type="hidden" id="type_val" value="{$fields.type.value}">',
          2 => '<input type="hidden" id="theme_val" value="{$fields.theme.value}">',
          3 => '<input type="hidden" id="subtheme_val" value="{$fields.subtheme.value}">',
        ),
      ),
      'javascript' => '{sugar_getscript file="custom/modules/Home/js/linked.js"}
     ',
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'code',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'code',
              ),
              1 => 
              array (
                'name' => 'source',
                'customCode' => 'Источник: @@FIELDS@@',
              ),
              2 => 
              array (
                'name' => 'type',
              ),
              3 => 
              array (
                'name' => 'theme',
              ),
              4 => 
              array (
                'name' => 'subtheme',
              ),
            ),
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
        ),
        2 => 
        array (
          0 => 'assigned_user_name',
          1 => 
          array (
            'name' => 'state',
            'label' => 'LBL_STATE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'contact_name',
            'studio' => 'visible',
            'label' => 'LBL_CONTACT_NAME',
          ),
          1 => 
          array (
            'name' => 'comment',
            'label' => 'LBL_COMMENT',
          ),
        ),
      ),
    ),
  ),
);
?>
