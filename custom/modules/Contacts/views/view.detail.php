<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
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


require_once('include/MVC/View/views/view.detail.php');

class ContactsViewDetail extends ViewDetail
{
 	/**
 	 * @see SugarView::display()
	 *
 	 * We are overridding the display method to manipulate the portal information.
 	 * If portal is not enabled then don't show the portal fields.
 	 */
 	public function display()
 	{
        $admin = new Administration();
        $admin->retrieveSettings();
        if(isset($admin->settings['portal_on']) && $admin->settings['portal_on']) {
           $this->ss->assign("PORTAL_ENABLED", true);
        }

		$headers = array(
			// "X-Login: crm",
			"X-Login: crm2",
			// "X-Password: simsim",
			"X-Password: NQFEqq",
			'Content-Type: application/x-www-form-urlencoded',
		);
		$api_url = 'https://195.239.86.122:12345';
		$api_url = 'https://192.168.104.47:8686';

		//get_balance
		$url = "{$api_url}/account_service?method=get_balance_info&msisdn=7{$this->bean->phone_mobile}";
		$data = xml2array(curl_send($url, $headers));
		if(isset($_REQUEST['qpre'])){
			echo '<pre>';
			print_r($data);
			echo '</pre>';
		}
		if($data['status']=='OK'){
			$this->bean->account_balance=$data['resultObject']['balance']/*.' '.$data['resultObject']['currencyCode']*/;
		}
		else{
			$this->bean->account_balance=$data['status'];
		}

		//get_tariff_plan_info
		$url = "{$api_url}/tariff_plan_service?method=get_tariff_plan_info&msisdn=7{$this->bean->phone_mobile}";
		$data = xml2array(curl_send($url, $headers));
		if(isset($_REQUEST['qpre'])){
			echo '<pre>';
			print_r($data);
			echo '</pre>';
		}
		if($data['status']=='OK'){
			$this->bean->tariff_plan=$data['resultObject']['accountingFile']['name'];
			$q="UPDATE contacts SET tariff_plan='{$this->bean->tariff_plan}' WHERE id='{$this->bean->id}'";
			$this->bean->db->query($q);
		}
		/*else{
			$this->bean->tariff_plan=$data['status'];
		}*/

 		parent::display();

 		echo "<a class='button' href='index.php?module=Contacts&action=SendSms&record={$this->bean->id}'>Отправить смс</a> ";

 		include('custom/modules/Contacts/tpls/send_sms.php');
 		echo '<br/><br/>';
 		echo "<a class='button' href='index.php?module=Contacts&action=apiList&phone_mobile={$this->bean->phone_mobile}&contact_id={$this->bean->id}&method=find_session_journal'>Session Journal</a> ";
 		echo "<a class='button' href='index.php?module=Contacts&action=apiList&phone_mobile={$this->bean->phone_mobile}&contact_id={$this->bean->id}&method=find_account_journal'>Account Journal</a> ";
 	}
}


