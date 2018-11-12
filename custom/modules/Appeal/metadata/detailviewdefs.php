<?php
$module_name = 'Appeal';
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
          0 => '',
          1 => 
          array (
            'name' => 'source',
            'customCode' => '{$fields.source.value}',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'type',
            'customCode' => '{$fields.type.value}',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'theme',
            'customCode' => '{$fields.theme.value}',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'subtheme',
            'customCode' => '{$fields.subtheme.value}',
          ),
        ),
        4 => 
        array (
          0 => 'assigned_user_name',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'state',
            'label' => 'LBL_STATE',
          ),
          1 => 'date_entered',
        ),
        6 => 
        array (
          0 => 'date_modified',
          1 => 
          array (
            'name' => 'contact_name',
            'studio' => 'visible',
            'label' => 'LBL_CONTACT_NAME',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'comment',
            'label' => 'LBL_COMMENT',
          ),
        ),

         8 =>
              array (
                  0 => 'webim_appeal_source',
                  1 => array (),
              ),
          9 => array(
              0 => 'webim_appeal_history',
          ),
      ),
    ),
  ),
);
?>
