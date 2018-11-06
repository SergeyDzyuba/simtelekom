<?php
$module_name = 'CCU2_Logins';
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
      'syncDetailEditViews' => true,
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
            'name' => 'skill',
            'studio' => 'visible',
            'label' => 'LBL_SKILL',
          ),
          1 => 
          array (
            'name' => 'sk_sbms_login',
            'label' => 'LBL_SK_SBMS_LOGIN',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'ss_crm_login',
            'label' => 'LBL_SS_CRM_LOGIN',
          ),
          1 => 
          array (
            'name' => 'ss_qn_login',
            'label' => 'LBL_SS_QN_LOGIN',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'vk_cti_login',
            'label' => 'LBL_VK_CTI_LOGIN',
          ),
          1 => 
          array (
            'name' => 'vk_vdi_login',
            'label' => 'LBL_VK_VDI_LOGIN',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'ccu2_logins_ccu2_agents3_name',
          ),
        ),
      ),
    ),
  ),
);
?>
