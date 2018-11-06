<?php


$func = $_REQUEST['func'];

if($func == 'save')
{
    $is_new = $_REQUEST['is_new'];
    $ImportTemplate = new ImportTemplates();
    if($is_new == 'false')
    {
        $record = $_REQUEST['rec'];
        $ImportTemplate->retrieve($record); 
    }
    $ImportTemplate->name = $_REQUEST['t_name'];
    
    $description = array();
    $description['map'] = $_REQUEST['map'];
    $description['modul'] = $_REQUEST['modul'];
    $description['delimiter'] = $_REQUEST['delimiter'];
    $description['encode'] = $_REQUEST['encode'];
    $description['type'] = $_REQUEST['type'];
    $description['map_order'] = $_REQUEST['map_order'];
    $description['add_rel'] = $_REQUEST['add_rel'];
    $description['alt_row'] = $_REQUEST['alt_row'];
    
    $ImportTemplate->description = json_encode($description);
    $id = $ImportTemplate->save();
    echo json_encode(array('id' => $id, 'result' => 'true', 'name' => $ImportTemplate->name));
}
else if($func == 'load')
{
    $record = $_REQUEST['rec'];
    $ImportTemplate = new ImportTemplates();
    $ImportTemplate->retrieve($record);
    echo html_entity_decode($ImportTemplate->description);
}
else if($func == 'list')
{
    global $db;
    $ret_string = "<option selected='selected' value=''></option>";
    $sql = " SELECT * "
         . " FROM `importtemplates` "
         . " WHERE `deleted` = 0 ";
    $result = $db->query($sql);
    While($row = $db->fetchByAssoc($result))
    {
        $ret_string .= "<option value='{$row['id']}'>{$row['name']}</option>";
    }
    echo json_encode(array('options' => $ret_string, 'result' => 'true'));
}
else
{
    echo json_encode(array('result' => 'false'));
}

