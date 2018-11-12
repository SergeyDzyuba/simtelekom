<?php

class AppealHooks
{
	function classificator(&$bean){
		require_once('custom/modules/Home/utils.php');
		$bean->source = LinkedUtils::detail($bean->source);
		$bean->type = LinkedUtils::detail($bean->type);
		$bean->theme = LinkedUtils::detail($bean->theme);
		$bean->subtheme = LinkedUtils::detail($bean->subtheme);
	}
}

class LinkWithAttachedDocuments{
    function linkWithAttachedDocs($bean, $event, $arguments){
        if (empty($_REQUEST['record']) && (isset($_REQUEST['webim_appeal_id']) && !empty($_REQUEST['webim_appeal_id']))){//если создается новая запись
            /*
             * То проверяем, есть ли в куче "закрытый" чат по id ата из реквеста
             */
            $appeal = new Appeal();
            $appeal->retrieve($bean->id);
            global $db,$timedate,$current_user;
            $query = "SELECT * FROM webim_chat_heap WHERE deleted=0 AND 'action'='chat_close' AND chat_id='".$_REQUEST['webim_appeal_id']."' LIMIT 0,1";
            $result = $db->query($query);
            $result = $db->fetchByAssoc($result);
            $response = json_decode($result['response']);
            $docs = array();
            $counter = 0;
            if (isset($response['visitor']['channel']['type']) && !empty($response['visitor']['channel']['type'])){
                $source = $response['visitor']['channel']['type'];
            }
            else{
                $source = 'Сайт';
            }
            foreach ($response['messages'] as $key=>$item) {
                if (array_key_exists('file_operator',$item) || array_key_exists('file_visitor',$item)){//если есть файлы в очередном сообщении
                    $file_params = json_decode($item['message'],true);
                    //filename, content_type, guid
                    $docs[$counter]['filename'] = $file_params['filename'];
                    $docs[$counter]['file_guid'] = $file_params['guid'];
                    $docs[$counter]['file_content_type'] = $file_params['content_type'];
                    $docs[$counter]['file_source'] = $item['kind'];//file_visitor OR file_operator
                    $docs[$counter]['file_timestamp'] = $item['created_at'];
                    $account_name = 'suitecrmdemosugarerui';
                    $docs[$counter]['file_url'] = 'https://'.$account_name.'.webim.ru/l/o/download/'.$file_params['guid'].'/'.$file_params['filename'];//исправить на что-то универсальное
                    $counter++;
                }
            }
//сформировали массив доков, создаем сущности в модуле  и связываем их c обращением
            $doc_ids = array();
            if (!empty($appeal->id)) {//связываем обращения с документами
                $document = new Document();
                foreach ($doc_ids as $item) {
                    $document->retrieve($item);
                    if (!empty($document->id)){
                        $document->appeal_id = $appeal->id;
                        $document->save();
                    }
                }
                $appeal->webim_appeal_history = $result['chat_history'];
                $appeal->webim_appeal_source = $source;
                $appeal->save();
            }
        }
    }
}