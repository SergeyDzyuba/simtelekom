<?php

global $sugar_config, $db, $current_user, $timedate;

$upload_dir = $sugar_config['upload_dir'];
$file_name = 'importer_' . time() . '.csv';

$field_name = array(
    "code_dealer",
    "code_point",
    "code_contract",
    "contract_state",
    "date_of_conclusion",
    "date_of_registration",
    "client_type",
    "last_name",
    "birthdate",
    "passport_data",
    "primary_address_country",
    "phone_mobile",
    "simcard_number",
    "date_of_activation",
    "tariff_plan",
);

if (!move_uploaded_file($_FILES['userfile']['tmp_name'], $upload_dir . $file_name))
{
    SugarApplication::redirect("index.php?module=Contacts&action=ImportContactData");
} else {
    echo "<pre>";
    $count= 0;
    $update_count = 0;
    $insert_count = 0;
    $all_count = 0;
    $set = array();
    if ($f = fopen($upload_dir . $file_name, "r")) {
        $row = fgetcsv ($f, 0, "\t");
        $row = fgetcsv ($f, 0, "\t");
        while ($row = fgetcsv ($f, 0, "\t")) {

            foreach($row as $k => $v){
                $set[$field_name[$k]] = iconv('CP1251', 'utf-8',$v);
            }
//            $set['date_of_conclusion'] = date('Y-m-d H:i:s', strtotime($set['date_of_conclusion']));
//            $set['date_of_registration'] = date('Y-m-d H:i:s', strtotime($set['date_of_registration']));
//            $set['birthdate'] = date('Y-m-d H:i:s', strtotime($set['birthdate']));
//            $set['date_of_activation'] = date('Y-m-d H:i:s', strtotime($set['date_of_activation']));

            $set['date_of_conclusion'] =  $timedate->handle_offset(date('Y-m-d H:i:s', strtotime($set['date_of_conclusion'])), $timedate->get_db_date_time_format(), true, $current_user);
            $set['date_of_registration'] = $timedate->handle_offset(date('Y-m-d H:i:s', strtotime($set['date_of_registration'])), $timedate->get_db_date_time_format(), true, $current_user);
            $set['birthdate'] =  $timedate->handle_offset(date('Y-m-d H:i:s', strtotime($set['birthdate'])), $timedate->get_db_date_time_format(), true, $current_user);
            $set['date_of_activation'] =  $timedate->handle_offset(date('Y-m-d H:i:s', strtotime($set['date_of_activation'])), $timedate->get_db_date_time_format(), true, $current_user);


            $q_search = "SELECT * FROM contacts WHERE phone_mobile = '{$set['phone_mobile']}' AND deleted = 0";
            $res_search = $db->query($q_search);
            $result = $db->fetchByAssoc($res_search);

            $s = set_set($set);

            $time_now = $timedate->nowDb();

            if ($result) {
                $q = "UPDATE contacts SET deleted = 0, date_modified = '{$time_now}', modified_user_id = '{$current_user->id}', ".$s . " WHERE phone_mobile = '{$set['phone_mobile']}'";
                $update_count++;
            } else {
                $q = "INSERT INTO contacts SET id = UUID(), deleted = 0, date_entered = '{$time_now}', date_modified = '{$time_now}', modified_user_id = '{$current_user->id}', created_by = '{$current_user->id}', ".$s;
                $insert_count++;
            }
            $all_count++;
            $db->query($q);
        }
    }



    fclose($f);

    echo "
        <table class='out_table'>
            <tr><td>  Обновлено записей</td><td align = 'center'>{$update_count}</td></tr>
            <tr><td>  Добавлено записей</td><td align = 'center'>{$insert_count}</td></tr>
            <tr><td>  Всего обработано записей</td><td align = 'center'>{$all_count}</td></tr>
        </table>
        ";

}

function set_set($result = array()) {
    $str = "";
    foreach ($result as $k => $v) {
        if ($v != ""){
            $str .= $k ." = '". $v . "', ";
        }
    }
    $str = substr($str, 0, strlen($str)-2);
    return $str;
}

?>

<style type="text/css">
table.out_table {
background-color: #cccccc;
width: 300px
}
.out_table tr {
background-color: #ffffff;
height: 30px;
}

</style>