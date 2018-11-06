<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');



class AppealViewDetail extends ViewDetail {

    function preDisplay(){
require_once('custom/modules/Home/utils.php');
        $this->bean->source = LinkedUtils::detail($this->bean->source);
        $this->bean->type = LinkedUtils::detail($this->bean->type);
        $this->bean->theme = LinkedUtils::detail($this->bean->theme);
        $this->bean->subtheme = LinkedUtils::detail($this->bean->subtheme);
        parent::preDisplay();
    }
}
?>