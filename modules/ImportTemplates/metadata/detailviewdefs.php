<?php
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2012 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/

$module_name = 'ImportTemplates';
$viewdefs[$module_name]['DetailView'] = array(
'templateMeta' => array('form' => array('buttons'=>array('EDIT', 'DUPLICATE', 'FIND_DUPLICATES',
                                                         )),
                        'maxColumns' => '2',
                        'widths' => array(
                                        array('label' => '10', 'field' => '30'),
                                        array('label' => '10', 'field' => '30')
                                        ),
                        ),

    'panels' =>array (

        'LBL_PANEL_ORDER' => array(
            array (
                'serial_number',
                'order_status',
            ),
            array (
                'date_status_changed',
                'take_away_order_number',
            ),
            array (
                'name',
                'tag_number',
            ),
            array (
                'country_of_origin',
                'country_of_destination',
            ),
            array (
                'delivery_method',
                'container_number',
            ),
            array (
                'contract_number',
                'contract_date',
            ),
            array (
                array (
                    'name' => 'curator_russia_name',
                    'label' => 'LBL_CURATOR_RUSSIA_NAME',
                    'displayParams' =>
                        array (
                            'enableConnectors' => true,
                            'module' => 'Users',
                            'connectors' => 
                            array (
                            ),
                        ),
                    ),
                '',
            ),
            array (
                'curator_russia_phone',
                'curator_russia_email',
            ),
            array (
                array (
                    'name' => 'curator_sender_name',
                    'label' => 'LBL_CURATOR_SENDER_NAME',
                    'displayParams' =>
                        array (
                            'enableConnectors' => true,
                            'module' => 'Users',
                            'connectors' => 
                            array (
                            ),
                        ),
                    ),
                '',
            ),
            array (
                'curator_sender_phone',
                'curator_sender_email',
            ),
            array (
                array (
                    'name' => 'freight_agent_name',
                    'label' => 'LBL_FREIGHT_AGENT_NAME',
                    'displayParams' =>
                        array (
                            'enableConnectors' => true,
                            'module' => 'Users',
                            'connectors' => 
                            array (
                            ),
                        ),
                    ),
                array (
                    'name' => 'export_agent_name',
                    'label' => 'LBL_EXPORT_AGENT_NAME',
                    'displayParams' =>
                        array (
                            'enableConnectors' => true,
                            'module' => 'Users',
                            'connectors' => 
                            array (
                            ),
                        ),
                    ),
            ),
            array (
                array (
                    'name' => 'customs_agent_name',
                    'label' => 'LBL_CUSTOMS_AGENT_NAME',
                    'displayParams' =>
                        array (
                            'enableConnectors' => true,
                            'module' => 'Users',
                            'connectors' => 
                            array (
                            ),
                        ),
                    ),
                '',
            ),
            array (
                'consignee_name',
                'importer_name',
            ),
        ),
        
        'LBL_PANEL_CLIENT' => array(
            array (
                array (
                    'name' => 'parent_name',
                    'customLabel' => '{sugar_translate label=\'LBL_MODULE_NAME\' module=$fields.parent_type.value}',
                    ),
                '',
            ),
        ),
        
        'LBL_PANEL_CARGO' => array(
            array (
                'product_name',
                'trademark',
            ),
            array (
                'model',
                'measuring_unit',
            ),
            array (
                'total_number_of_pieces',
                'total_number_of_places',
            ),
            array (
                'package_type',
                'hs_code',
            ),
            array (
                'presence_of_manufacturer',
                'estimated_grossweight',
            ),
            array (
                'estimated_total_volume',
                'length',
            ),
            array (
                'width',
                'height',
            ),
            array (
                'total_value',
                'point_of_departure',
            ),
            array (
                'point_of_destination',
                'payment_required',
            ),
            array (
                'supplier_contact_information',
                'manufacturer_name_and_address',
            ),
            array (
                'location_in_container',
                'expected_arrival_date_to_warehouse_in_country_of_origin',
            ),
        ),
        'LBL_PANEL_FACT' => array(
            array (
                'actual_grossweight',
                'actual_netweight',
            ),
            array (
                'actual_total_volume',
                'actual_total_value',
            ),
            array (
                'actual_arrival_date_to_warehouse_in_country_of_origin',
                'expected_shipment_date',
            ),
            array (
                'expected_departure_date',
                '',
            ),
        ),
        'LBL_PANEL_COMMERCIAL' => array(
            array (
                'customs_risk',
                'its',
            ),
            array (
                'tax_percentage',
                'vat',
            ),
            array (
                'extra_certificates_rate',
                'customs_clearance_cost_without_certificates',
            ),
            array (
                'freight_cost',
                'customer_rate_for_consolidated_cargo',
            ),
            array (
                'customer_rate_for_customs_clearance_general_cargo',
                'customer_rate_for_freight_general_cargo',
            ),
            array (
                'extra_delivery_expense_to_warehouse_in_port_of_origin',
                'extra_export_documents_expense_in_country_of_origin',
            ),
            array (
                'extra_package_expense_in_country_of_origin',
                'extra_delivery_from_warehouse_expense_in_country_of_origin',
            ),
            array (
                'customer_level',
                'product_prepayment_date',
            ),
            array (
                'product_prepayment_amount',
                'product_prepayment_rate',
            ),
            array (
                'actual_product_prepayment_rate',
                'product_postpayment_date',
            ),
            array (
                'product_postpayment_amount',
                'product_postpayment_rate',
            ),
            array (
                'actual_product_postpayment_rate',
                'delivery_prepayment_date',
            ),
            array (
                'delivery_prepayment_amount',
                'delivery_postpayment_date',
            ),
            array (
                'delivery_postpayment_amount',
                '',
            ),
            array (
                array (
                    'name' => 'container_name',
                    'label' => 'LBL_CONTAINER_NAME',
                    'displayParams' =>
                        array (
                            'enableConnectors' => true,
                            'module' => 'Containers',
                            'connectors' => 
                            array (
                            ),
                        ),
                    ),
                'description',
            ),
        ),
    )
);
?>