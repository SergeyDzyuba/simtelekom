<?php

require_once('include/MVC/View/SugarView.php');

class ContactsViewImportContactData extends SugarView {

    function ContactsViewImportContactData() {
        parent::SugarView();
    }

    public function preDisplay() {
    }

    function display() {
        $ss = new Sugar_Smarty();
        $ss->assign("welcome", 'welcome');
        $ss->display('modules/Contacts/tpls/importcontactdata.tpl');
    }

}
