<?PHP

class PriceCategories extends Basic {
	
	var $new_schema = true;
	var $module_dir = 'PriceCategories';
	var $object_name = 'PriceCategories';
	var $table_name = 'pricecategories';
	var $importable = false;
	var $disable_row_level_security = true ; // to ensure that modules created and deployed under CE will continue to function under team security if the instance is upgraded to PRO
	var $id;
	var $name;
	var $date_entered;
	var $date_modified;
	var $modified_user_id;
	var $modified_by_name;
	var $created_by;
	var $created_by_name;
	var $description;
	var $deleted;
	var $created_by_link;
	var $modified_user_link;
	var $assigned_user_id;
	var $assigned_user_name;
	var $assigned_user_link;
	
	function PriceCategories()
	{
		parent::Basic();
	}
	
	function bean_implements($interface)
	{
		switch($interface)
		{
			case 'ACL': return true;
		}
		return false;
	}


    public function save()
    {
        if(empty($_POST['record']) && empty($this->id) && (!empty($_POST['new_with_id'])))
        {

            $this->new_with_id = true;

            $this->id = $_POST['new_with_id'];

        }
		 
        parent::save();

        $db = DBManagerFactory::getInstance();
    }
}
?>