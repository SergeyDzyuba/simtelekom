<?php
$viewdefs ['Contacts'] = 
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
          4 => 
          array (
            'customCode' => '<input type="submit" class="button" title="{$APP.LBL_MANAGE_SUBSCRIPTIONS}" onclick="this.form.return_module.value=\'Contacts\'; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'Subscriptions\'; this.form.module.value=\'Campaigns\'; this.form.module_tab.value=\'Contacts\';" name="Manage Subscriptions" value="{$APP.LBL_MANAGE_SUBSCRIPTIONS}"/>',
            'sugar_html' => 
            array (
              'type' => 'submit',
              'value' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
              'htmlOptions' => 
              array (
                'class' => 'button',
                'id' => 'manage_subscriptions_button',
                'title' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
                'onclick' => 'this.form.return_module.value=\'Contacts\'; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'Subscriptions\'; this.form.module.value=\'Campaigns\'; this.form.module_tab.value=\'Contacts\';',
                'name' => 'Manage Subscriptions',
              ),
            ),
          ),
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Leads/Lead.js',
        ),
          1 =>
          array(
              'file' => 'custom/modules/Contacts/js/AppealSubpanelClickOnCreate.js'
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
            'type' => 'phone',
            'label' => 'LBL_MOBILE_PHONE',
          ),
          1 => 
          array (
            'name' => 'last_name',
            'comment' => 'Last name of the contact',
            'label' => 'LBL_LAST_NAME',
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
                  {include file="custom/modules/Contacts/tpls/detail_adress_container.tpl"}
              ',
          ),
        ),
      ),
    ),
  ),
);
?>
