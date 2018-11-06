<?PHP

require_once('modules/Appeal/Appeal_sugar.php');
class Appeal extends Appeal_sugar {

	function Appeal(){
		parent::Appeal_sugar();
	}

    public function __construct()
    {
        parent::Appeal_sugar();
        $this->emailAddress = new SugarEmailAddress();
    }
    public function retrieve($id = -1, $encode=true)
    {
        $ret_val = parent::retrieve($id, $encode);
        $this->emailAddress->handleLegacyRetrieve($this);
        return $ret_val;
    }
    function set_notification_body($xtpl, $appeal)
    {
//    require_once('custom/modules/Home/utils.php');
//        $this->theme = LinkedUtils::detail($this->bean->theme);
        global $app_list_strings;


        $xtpl->assign("TASK_SUBJECT",$appeal->code);
//        $xtpl->assign("TASK_DUEDATE",$appeal->date_entered);
//        $xtpl->assign("TASK_SUBJECT", $this->theme);
        $xtpl->assign("TASK_STATUS", (isset($appeal->state)?$app_list_strings['state_list'][$appeal->state]:""));
        $xtpl->assign("TASK_DESCRIPTION",$appeal->comment);
        return $xtpl;
    }

    public function save($check_notify=false)
    {
        $ori_in_workflow = empty($this->in_workflow) ? false : true;
        $this->emailAddress->handleLegacySave($this, $this->module_dir);

        parent::save($check_notify);
        $db = DBManagerFactory::getInstance();
        $override_email = array();
        if(!empty($this->email1_set_in_workflow)) {
            $override_email['emailAddress0'] = $this->email1_set_in_workflow;
        }
        if(!empty($this->email2_set_in_workflow)) {
            $override_email['emailAddress1'] = $this->email2_set_in_workflow;
        }
        if(!isset($this->in_workflow)) {
            $this->in_workflow = false;
        }
        if($ori_in_workflow === false || !empty($override_email)){
            $this->emailAddress->save($this->id, $this->module_dir, $override_email,'','','','',$this->in_workflow);
        }

    }



}
?>