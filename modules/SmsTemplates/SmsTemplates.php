<?PHP

require_once('modules/SmsTemplates/SmsTemplates_sugar.php');
class SmsTemplates extends SmsTemplates_sugar {

	function SmsTemplates(){
		parent::SmsTemplates_sugar();
	}

    public function save()
    {
        parent::save();

        $db = DBManagerFactory::getInstance();

    }



}
?>