<?php

$module_name = 'TMonitor';
$viewdefs[$module_name]['DetailView'] = array(
	'templateMeta' => array(
		'form' => array(
			'buttons'=>array(
				'EDIT', 
				'DUPLICATE', 
				'DELETE', 
				'FIND_DUPLICATES',
			),
		),
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

			array (
				array (
					'name' => 'date_entered',
					'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
					'label' => 'LBL_DATE_ENTERED',
				),
				array (
					'name' => 'date_modified',
					'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
					'label' => 'LBL_DATE_MODIFIED',
				),
			),
		),
	)
);
?>