<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$layout_defs['TMonitor'] = array(
	'subpanel_setup' => array(
		'tmonitor_users' => array (
			'order' => 2,
			'module' => 'Users',
			'subpanel_name' => 'default',
			'get_subpanel_data' => 'tmonitor_users',
			'add_subpanel_data' => 'users_id',
			'title_key' => 'LBL_USERS',

			'top_buttons' => array (
				/*array (
					'widget_class' => 'SubPanelTopButtonQuickCreate',
				),*/
				array (
					'widget_class' => 'SubPanelTopSelectButton',
					'mode' => 'MultiSelect',
				),
			),
		),
	),
);

?>
