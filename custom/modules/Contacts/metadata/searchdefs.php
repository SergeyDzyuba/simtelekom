<?php
$searchdefs ['Contacts'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'phone_mobile' => 
      array (
        'type' => 'phone',
        'label' => 'LBL_MOBILE_PHONE',
        'width' => '10%',
        'default' => true,
        'name' => 'phone_mobile',
      ),
      'search_name' => 
      array (
        'name' => 'search_name',
        'label' => 'LBL_NAME',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'passport_data' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_PASSPORT_DATA',
        'width' => '10%',
        'name' => 'passport_data',
      ),
      'simcard_number' => 
      array (
        'type' => 'int',
        'label' => 'LBL_SIMCARD_NUMBER',
        'width' => '10%',
        'default' => true,
        'name' => 'simcard_number',
      ),
    ),
    'advanced_search' => 
    array (
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'date_of_registration' => 
      array (
        'type' => 'datetimecombo',
        'label' => 'LBL_DATE_OF_REGISTRATION',
        'width' => '10%',
        'default' => true,
        'name' => 'date_of_registration',
      ),
      'name' => 
      array (
        'type' => 'name',
        'link' => true,
        'label' => 'LBL_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'name',
      ),
      'phone_mobile' => 
      array (
        'type' => 'phone',
        'label' => 'LBL_MOBILE_PHONE',
        'width' => '10%',
        'default' => true,
        'name' => 'phone_mobile',
      ),
      'simcard_number' => 
      array (
        'type' => 'int',
        'label' => 'LBL_SIMCARD_NUMBER',
        'width' => '10%',
        'default' => true,
        'name' => 'simcard_number',
      ),
      'passport_data' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_PASSPORT_DATA',
        'width' => '10%',
        'name' => 'passport_data',
      ),
      'primary_address_country' => 
      array (
        'name' => 'primary_address_country',
        'label' => 'LBL_COUNTRY',
        'type' => 'name',
        'options' => 'countries_dom',
        'default' => true,
        'width' => '10%',
      ),
      'code_dealer' => 
      array (
        'type' => 'int',
        'label' => 'LBL_CODE_DEALER',
        'width' => '10%',
        'default' => true,
        'name' => 'code_dealer',
      ),
      'code_point' => 
      array (
        'type' => 'int',
        'label' => 'LBL_CODE_POINT',
        'width' => '10%',
        'default' => true,
        'name' => 'code_point',
      ),
      'code_contract' => 
      array (
        'type' => 'int',
        'label' => 'LBL_CODE_CONTRACT',
        'width' => '10%',
        'default' => true,
        'name' => 'code_contract',
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
