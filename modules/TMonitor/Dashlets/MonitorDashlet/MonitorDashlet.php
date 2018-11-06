<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/Dashlets/DashletGeneric.php');
require_once('modules/Monitor/Monitor.php');

class MonitorDashlet extends DashletGeneric 
{
    function MonitorDashlet($id, $def = null) 
	{
		global $current_user, $app_strings;
		require('modules/Monitor/metadata/dashletviewdefs.php');

        parent::DashletGeneric($id, $def);

        if(empty($def['title'])) $this->title = translate('LBL_HOMEPAGE_TITLE', 'Monitor');

        $this->searchFields = $dashletData['MonitorDashlet']['searchFields'];
        $this->columns = $dashletData['MonitorDashlet']['columns'];

        $this->seedBean = new Monitor();
    }
}