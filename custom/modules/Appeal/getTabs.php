<?php
global $current_user, $db, $timedate;
//$user = new User();
//$user->retrieve($current_user->id);
if (!empty($current_user->webim_operator_id)) {//если у текущего пользователя есть id оператора webim
    //получение 10 нерассмотренных обращений-чатов для текущего оператора, которые откроются в новых вкладках
    $query = "SELECT * FROM webim_chat_heap WHERE action='operator_assign' AND deleted=0 AND processed=0 AND operator_id='$current_user->webim_operator_id' ORDER BY date_entered LIMIT 10";
    $result = $db->query($query);
    $heap = array();
    $contact = new Contact();
    while ($row = $db->fetchByAssoc($result)) {
        $upd_query = "UPDATE webim_chat_heap  SET processed='1' WHERE id='{$row['id']}'";
        $upd_result = $db->query($upd_query);
//        $contact->retrieve_by_string_fields(array('phone_mobile' => $row['client_mobile_phone'], 'deleted' => 0));
        $query_contact = "SELECT id FROM contacts WHERE deleted=0 AND phone_mobile LIKE '%" . $visitor_phone . "' LIMIT 0,1";
        $result = $db->query($query_contact);
        $row_contact = $db->fetchByAssoc($result);
            $row['contact_id'] = $row_contact['id'];
//            $row['contact_id'] = $contact->id;
            $row['assigned_user_id'] = $current_user->id;
            if (isset($row['contact_id']) && !empty($row['contact_id'])) {//если не был найден контакт по номеру телефона, то для него не будет
                // то откроем карточку
                $heap[] = $row;
            }
        }
        if (empty($heap))
            echo 'false';
        else {
            $json_response = json_encode($heap);
            $GLOBALS['log']->fatal($json_response);
            echo $json_response;
        }
    } else {//уведомление на общую почту, т.к. оператор не авторизован
    sendEmailNotification();
    echo 'false';
}

function sendEmailNotification()
{
    // include Email class
    include_once('include/SugarPHPMailer.php');
    include_once('include/utils/db_utils.php'); // for from_html function

    $mail = new SugarPHPMailer();
// Add details
    $mail->From = "no-reply@example.com";
    $mail->FromName = "Example Company";
// Clear recipients
    $mail->ClearAllRecipients();
    $mail->ClearReplyTos();
// Add recipient
    $mail->AddAddress('johndope@email.com', 'John Dope');
// Add subject
    $mail->Subject = "Welcome";
// Add mail content
    $mail->Body_html = from_html("<YOUR_EMAIL_CONTENT_HERE>");
    $mail->Body = wordwrap("<YOUR_EMAIL_CONTENT_HERE>", 900);
    $mail->isHTML(true); // set to true if content has html tags

// This portion will get all the attachments from related notes
//    include_once('module/Notes/Note.php');
//    $note = new Note();
//    $where = "notes.parent_id = '<ID_OF_THE_RECORD>'";
//// Get full list gets all attachments of all notes related to the record
//    $attachments = $note->get_full_list("", $where, true);
//    $all_attachments = array();
//    $all_attachments = array_merge($all_attachments, $attachments);
//// Loop through record
//    foreach($all_attachments as $attachment) {
//        $file_name = $attachment->filename;
//        $location = "upload/{$attachment->id}";
//        $mime_type = $attachment->file_mime_type;
//        // Add attachment to email
//        $mail->AddAttachment($location, $file_name, 'base64', $mime_type);
//    }

// Prepare for sending
    $mail->prepForOutbound();
    $mail->setMailerForSystem();

//Send mail, log if there is error
    if (!$mail->Send()) {
        $GLOBALS['log']->fatal("ERROR: Mail sending failed!");
    }
}