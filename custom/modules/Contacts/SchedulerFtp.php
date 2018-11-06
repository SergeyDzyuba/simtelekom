<?php
global $sugar_config, $db, $current_user, $timedate;
$count= 0;
$update_count = 0;
$insert_count = 0;
$all_count = 0;
$conn_id = ftp_connect($sugar_config['ftp_import_host'], 21, 30);

// вход с именем пользователя и паролем
if(@ftp_login($conn_id, $sugar_config['ftp_import_login'], $sugar_config['ftp_import_pasv'])){
// echo 'ftp_login<br/>';
    ftp_pasv($conn_id,1);
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

    $contents_on_server = ftp_nlist($conn_id, '.');
    // foreach($sugar_config['ftp_import_files_masc'] as $server_file_name){
        // $server_file_name.=date('Y.m.d').'.csv';
// echo $server_file_name.'<br/>';
        // if(in_array($server_file_name, $contents_on_server)){
    foreach ($contents_on_server as $server_file_name) {
        $size = ftp_size($conn_id, $server_file_name);
        if($size != -1) {
            // echo $server_file_name."({$size})<br/>";
            // continue;
            if (ftp_get($conn_id, $upload_dir.$file_name, $server_file_name, FTP_ASCII)) {
        
// echo $upload_dir.$file_name.'<br/>';
                if ($f = fopen($upload_dir.$file_name, "r")) {
// echo 'fopen<br/>';
                    // $row = fgetcsv ($f, 0, "\t");
                    // $row = fgetcsv ($f, 0, "\t");
                    while ($row = fgetcsv ($f, 0, ";")) {
                        $set = array();

                        foreach($row as $k => $v){
                            $set[$field_name[$k]] = $v;//iconv('CP1251', 'utf-8',$v);
                            if($field_name[$k]=='phone_mobile'){
                                if(strpos($set['phone_mobile'], '7')===0){
                                    $set['phone_mobile'] = substr($set['phone_mobile'], 1);
                                }
                            }
                        }
                //            $set['date_of_conclusion'] = date('Y-m-d H:i:s', strtotime($set['date_of_conclusion']));
                //            $set['date_of_registration'] = date('Y-m-d H:i:s', strtotime($set['date_of_registration']));
                //            $set['birthdate'] = date('Y-m-d H:i:s', strtotime($set['birthdate']));
                //            $set['date_of_activation'] = date('Y-m-d H:i:s', strtotime($set['date_of_activation']));

                        $set['date_of_conclusion'] =  $timedate->handle_offset(date('Y-m-d H:i:s', strtotime($set['date_of_conclusion'])), $timedate->get_db_date_time_format(), true, $current_user);
                        $set['date_of_registration'] = $timedate->handle_offset(date('Y-m-d H:i:s', strtotime($set['date_of_registration'])), $timedate->get_db_date_time_format(), true, $current_user);
                        $set['birthdate'] =  $timedate->handle_offset(date('Y-m-d H:i:s', strtotime($set['birthdate'])), $timedate->get_db_date_time_format(), true, $current_user);
                        $set['date_of_activation'] =  $timedate->handle_offset(date('Y-m-d H:i:s', strtotime($set['date_of_activation'])), $timedate->get_db_date_time_format(), true, $current_user);


                        $q_search = "SELECT id FROM contacts WHERE phone_mobile = '{$set['phone_mobile']}' AND deleted = 0 LIMIT 1";
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
// echo $q.'<br/>';
                        $db->query($q);
                    }
                    fclose($f);
                    unlink($upload_dir.$file_name);
                    ftp_rename($conn_id, $server_file_name, '/archive/'.$server_file_name);
                }
            }
        }
    }

    // закрытие соединения
    ftp_close($conn_id);
    file_put_contents('ftp_sync_result.txt', date('c')." - all_count: {$all_count}, update_count: {$update_count}, insert_count: {$insert_count}", FILE_APPEND);
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