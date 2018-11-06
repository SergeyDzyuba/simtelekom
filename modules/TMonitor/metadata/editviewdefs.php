<?php

$module_name = 'TMonitor';
$viewdefs[$module_name]['EditView'] = array(
    'templateMeta' => array(
		'maxColumns' => '2', 
		'widths' => array(
			array('label' => '10', 'field' => '30'), 
			array('label' => '10', 'field' => '30')
		),                                                                                                                                    
	),
                                            
                                            
	'panels' =>array (
		'default' => 
		array (

			array (
				'name',
				'period',
			),
			array (
				'amount_appeals',
				'linked_code',
			),
			array (
				'by_email',
				'by_sms',
			),
			
			array (
				'assigned_user_name',
				'description',
			),
		),

	),
                        
);
?>