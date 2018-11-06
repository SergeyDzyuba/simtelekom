<?php

$module_name = 'SendLog';
$viewdefs[$module_name]['EditView'] = array(
    'templateMeta' => array(
		'maxColumns' => '1', 
		'widths' => array(
			array('label' => '1', 'field' => '100'), 
		),                                                                                                                                    
	),
                                            
                                            
	'panels' =>array (
		'default' => array (
			array (
				array(
					'hideLabel' => true,
					'customCode'=>'<div style="text-align:center;font-weight:bold">Редактирование для данного модуля недоступно</div>'
				),
			),

		),

	),
                        
);
?>