<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
 
global $app_strings;

$dashletMeta['MonitorDashlet'] = array(
	'module'		=> 'Monitor',
	'title'			=> translate('LBL_HOMEPAGE_TITLE', 'Monitor'),
	'description'	=> 'A customizable view into Monitor',
	'icon'			=> 'icon_Monitor_32.gif',
	'category'		=> 'Module Views',
);