<?php
$module_name = 'CCU_Agents';
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
        'LBL_DETAILVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_DETAILVIEW_PANEL2' => 
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
          0 => 
          array (
            'name' => 'agent_last_name',
            'label' => 'LBL_AGENT_LAST_NAME',
          ),
          1 => 
          array (
            'name' => 'agent_name',
            'label' => 'LBL_AGENT_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'agent_second_name',
            'label' => 'LBL_AGENT_SECOND_NAME',
          ),
          1 => 
          array (
            'name' => 'agent_date_birth',
            'label' => 'LBL_AGENT_DATE_BIRTH',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'agent_citizen',
            'studio' => 'visible',
            'label' => 'LBL_AGENT_CITIZEN',
          ),
          1 => 
          array (
            'name' => 'agent_doc',
            'studio' => 'visible',
            'label' => 'LBL_AGENT_DOC',
          ),
        ),
      ),
      'lbl_detailview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'agent_id_nom',
            'label' => 'LBL_AGENT_ID_NOM',
          ),
          1 => 
          array (
            'name' => 'agent_id_date',
            'label' => 'LBL_AGENT_ID_DATE',
          ),
        ),
      ),
      'lbl_detailview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'agent_status',
            'studio' => 'visible',
            'label' => 'LBL_AGENT_STATUS',
          ),
          1 => 
          array (
            'name' => 'stud_start_date',
            'label' => 'LBL_STUD_START_DATE',
          ),
        ),
      ),
    ),
  ),
);
?>
