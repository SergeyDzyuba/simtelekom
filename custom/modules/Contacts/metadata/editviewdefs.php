<?php
$viewdefs ['Contacts'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" name="opportunity_id" value="{$smarty.request.opportunity_id}">',
          1 => '<input type="hidden" name="case_id" value="{$smarty.request.case_id}">',
          2 => '<input type="hidden" name="bug_id" value="{$smarty.request.bug_id}">',
          3 => '<input type="hidden" name="email_id" value="{$smarty.request.email_id}">',
          4 => '<input type="hidden" name="inbound_email_id" value="{$smarty.request.inbound_email_id}">',
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
        'LBL_CONTACT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_contact_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'phone_mobile',
            'comment' => 'Mobile phone number of the contact',
            'label' => 'LBL_MOBILE_PHONE',
          ),
          1 => 
          array (
            'name' => 'last_name',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'reklama_c',
            'label' => 'LBL_REKLAMA',
          ),
          1 => 
          array (
            'name' => 'reklama_gde_c',
            'studio' => 'visible',
            'label' => 'LBL_REKLAMA_GDE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'tariff_plan',
            'label' => 'LBL_TARIFF_PLAN',
          ),
          1 => 
          array (
            'name' => 'account_balance',
            'label' => 'LBL_ACCOUNT_BALANCE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'login_lk',
            'label' => 'LBL_LOGIN_LK',
          ),
          1 => 
          array (
            'name' => 'password_lk',
            'label' => 'LBL_PASSWORD_LK',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'language_of_communication',
            'label' => 'LBL_LANGUAGE_OF_COMMUNICATION',
          ),
          1 => 
          array (
            'name' => 'simcard_number',
            'label' => 'LBL_SIMCARD_NUMBER',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'passport_data',
            'label' => 'LBL_PASSPORT_DATA',
          ),
          1 => 
          array (
            'name' => 'birthdate',
            'comment' => 'The birthdate of the contact',
            'label' => 'LBL_BIRTHDATE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'date_of_activation',
            'label' => 'LBL_DATE_OF_ACTIVATION',
          ),
          1 => 
          array (
            'name' => 'date_of_conclusion',
            'label' => 'LBL_DATE_OF_CONCLUSION',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'date_of_registration',
            'label' => 'LBL_DATE_OF_REGISTRATION',
          ),
          1 => 'smstemplate_name',
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'code_dealer',
            'label' => 'LBL_CODE_DEALER',
          ),
          1 => 
          array (
            'name' => 'ext_field',
            'label' => 'LBL_EXT_FIELD',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'primary_address_street',
            'label' => 'LBL_ADDRESS',
            'customCode' => '
                  {include file="custom/modules/Contacts/tpls/edit_adress_container.tpl"}
              ',
          ),
        ),
      ),
    ),
  ),
);
?>
