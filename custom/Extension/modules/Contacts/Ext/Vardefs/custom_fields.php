<?php


#####################################
####   custom_fields.php START   ####
#####################################

$dictionary['Contact']['fields']['code_inc'] = //№ карточки
            array (
                'name' => 'code_inc',
                'vname' => 'LBL_CODE',
                'type' => 'int',
                'auto_increment' => true,
                'massupdate' => 0,
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => 0,
                'reportable' => 0,
            );

$dictionary['Contact']['indices']['code_inc'] = //№ карточки
            array(
                'type' => 'unique',
                'fields' => array('code_inc'),
            );

$dictionary['Contact']['fields']['code_dealer'] = //Код дилера
            array (
                'name' => 'code_dealer',
                'vname' => 'LBL_CODE_DEALER',
                'type' => 'int',
                'massupdate' => 0,
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => 0,
                'reportable' => 0,
            );

$dictionary['Contact']['fields']['code_point'] = //Код точки
            array (
                'name' => 'code_point',
                'vname' => 'LBL_CODE_POINT',
                'type' => 'int',
                'massupdate' => 0,
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => 0,
                'reportable' => 0,
            );

$dictionary['Contact']['fields']['code_contract'] = //Код договра
            array (
                'name' => 'code_contract',
                'vname' => 'LBL_CODE_CONTRACT',
                'type' => 'int',
                'massupdate' => 0,
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => 0,
                'reportable' => 0,
            );

$dictionary['Contact']['fields']['contract_state'] = //Статус договора
            array (
                'name' => 'contract_state',
                'vname' => 'LBL_CONTRACT_STATE',
                'type' => 'enum',
                'massupdate' => 0,
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => 0,
                'reportable' => 0,
            );

$dictionary['Contact']['fields']['date_of_conclusion'] = //дата заключения
            array (
                'name' => 'date_of_conclusion',
                'vname' => 'LBL_DATE_OF_CONCLUSION',
                'type' => 'datetimecombo',
                'massupdate' => 0,
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => 0,
                'reportable' => 0,
            );

$dictionary['Contact']['fields']['date_of_registration'] = //дата регистрации
            array (
                'name' => 'date_of_registration',
                'vname' => 'LBL_DATE_OF_REGISTRATION',
                'type' => 'datetimecombo',
                'massupdate' => 0,
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => 0,
                'reportable' => 0,
            );

$dictionary['Contact']['fields']['client_type'] = //Тип клиента
            array (
                'name' => 'client_type',
                'vname' => 'LBL_CLIENT_TYPE',
                'type' => 'enum',
                'massupdate' => 0,
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => 0,
                'reportable' => 0,
                'options' => 'client_type_list',
            );


$dictionary['Contact']['fields']['patronymic'] = //отчество
            array (
                'name' => 'patronymic',
                'vname' => 'LBL_PATRONYMIC',
                'type' => 'varchar',
                'massupdate' => 0,
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => 0,
                'reportable' => 0,
            );

$dictionary['Contact']['fields']['doc_type'] = //Тип документа удостоверяющего личность
            array (
                'name' => 'doc_type',
                'vname' => 'LBL_DOC_TYPE',
                'type' => 'enum',
                'massupdate' => 0,
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => 0,
                'reportable' => 0,
                'options' => 'doc_type_list',
            );

$dictionary['Contact']['fields']['series'] = //Серия
            array (
                'name' => 'series',
                'vname' => 'LBL_SERIES',
                'type' => 'varchar',
                'massupdate' => 0,
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => 0,
                'reportable' => 0,
            );

$dictionary['Contact']['fields']['number'] = //Номер
            array (
                'name' => 'number',
                'vname' => 'LBL_NUMBER',
                'type' => 'varchar',
                'massupdate' => 0,
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => 0,
                'reportable' => 0,
            );

$dictionary['Contact']['fields']['date_of_issue'] = //дата выдачи
            array (
                'name' => 'date_of_issue',
                'vname' => 'LBL_DATE_OF_ISSUE',
                'type' => 'datetimecombo',
                'massupdate' => 0,
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => 0,
                'reportable' => 0,
            );

$dictionary['Contact']['fields']['simcard_number'] = //Номер sim-карты
            array (
                'name' => 'simcard_number',
                'vname' => 'LBL_SIMCARD_NUMBER',
                'type' => 'varchar',
                'massupdate' => 0,
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => 0,
                'reportable' => 0,
            );

$dictionary['Contact']['fields']['date_of_activation'] = //Дата активации номера
            array (
                'name' => 'date_of_activation',
                'vname' => 'LBL_DATE_OF_ACTIVATION',
                'type' => 'datetimecombo',
                'massupdate' => 0,
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => 0,
                'reportable' => 0,
            );

$dictionary['Contact']['fields']['tariff_plan'] = //Название тарифного плана
            array (
                'name' => 'tariff_plan',
                'vname' => 'LBL_TARIFF_PLAN',
                'type' => 'varchar',
                // 'type' => 'enum',
                'massupdate' => 0,
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => 0,
                'reportable' => 0,
                // 'options' => 'tariff_plan_list',
            );

$dictionary['Contact']['fields']['account_balance'] = //Баланс счета
            array (
                'name' => 'account_balance',
                'vname' => 'LBL_ACCOUNT_BALANCE',
                'type' => 'float',
                'massupdate' => 0,
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => 0,
                'reportable' => 0,
            );

$dictionary['Contact']['fields']['language_of_communication'] = //Язык общения
            array (
                'name' => 'language_of_communication',
                'vname' => 'LBL_LANGUAGE_OF_COMMUNICATION',
                'type' => 'enum',
                'required' => true,
                'massupdate' => 0,
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => 0,
                'reportable' => 0,
                'options' => 'language_of_communication_list',
            );

$dictionary['Contact']['fields']['address_house'] = //Язык общения
            array (
                'name' => 'address_house',
                'vname' => 'LBL_ADDRESS_HOUSE',
                'type' => 'varchar',
            );

$dictionary['Contact']['fields']['address_apartment'] = //Язык общения
            array (
                'name' => 'address_apartment',
                'vname' => 'LBL_ADDRESS_APARTMENT',
                'type' => 'varchar',
            );
$dictionary['Contact']['fields']['smstemplate_name'] = //Шаблон смс
        array(
            'name' => 'smstemplate_name',
            'rname' => 'name',
            'id_name' => 'smstemplate_id',
            'vname' => 'LBL_SMSTEMPLATE_NAME',
            'type' => 'relate',
            'table' => 'smstemplates',
            'module' => 'SmsTemplates',
            'dbType' => 'varchar',
            'ext2' => 'SmsTemplates',
            'len' => '255',
            'source' => 'non-db',
            'unified_search' => true,
        );
$dictionary['Contact']['fields']['smstemplate_id'] = array ( // Шаблон смс(id )
            'name' => 'smstemplate_id',
            'type' => 'id',
            'len' => 36,
        );


$dictionary['Contact']['fields']['login_lk'] = array (
    'name' => 'login_lk',
    'vname' => 'LBL_LOGIN_LK',
    'type' => 'varchar',
);
$dictionary['Contact']['fields']['password_lk'] = array (
    'name' => 'password_lk',
    'vname' => 'LBL_PASSWORD_LK',
    'type' => 'varchar',
);
$dictionary['Contact']['fields']['passport_data'] = array (
    'name' => 'passport_data',
    'vname' => 'LBL_PASSPORT_DATA',
    'type' => 'varchar',
);
$dictionary['Contact']['fields']['ext_field'] = array (
    'name' => 'ext_field',
    'vname' => 'LBL_EXT_FIELD',
    'type' => 'varchar',
);
$dictionary['Contact']['fields']['ext_field2'] = array (
    'name' => 'ext_field2',
    'vname' => 'LBL_EXT_FIELD2',
    'type' => 'varchar',
);
$dictionary['Contact']['fields']['ext_field3'] = array (
    'name' => 'ext_field3',
    'vname' => 'LBL_EXT_FIELD3',
    'type' => 'varchar',
);


//$dictionary['Contact']['fields']['assigned_user_id']['audited'] = true;





#####################################
####    custom_fields.php END    ####
#####################################








?>