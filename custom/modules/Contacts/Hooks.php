<?php
class LinkContactWithAppeals{
    function linkContactsWithAppealsByPhone($bean, $event, $arguments){
        if (empty($_REQUEST['record'])){//если создается новая запись, а не сохраняется новая
            $appeal = new Appeal();
            global $db;
            $query = "SELECT id FROM appeal WHERE deleted=0 AND contact_phone='$bean->mobile_phone'";
            $result = $db->query($query);
            while($row = $db->fetchByAssoc($result)){
                $appeal->retrieve($row['id']);
                $appeal->contact_id = $bean->id;
                $appeal->save();
            }
        }
    }
}