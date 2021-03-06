<?php
function decodeHistory($chat_json, $first_client_message = false)
{
    $params = str_replace('&quot;', '"', $chat_json);
    $buffer = json_decode($params, true);
    $history = '';
    foreach ($buffer['messages'] as $key => $val) {
        $time_from_response = str_replace(array('T', 'Z'), ' ', $val['created_at']);
        $date = new DateTime($time_from_response);
        $date->add(new DateInterval('PT3H'));
        $timestamp = $date->format('Y-m-d H:i:s');
        if ($val['kind'] === 'file_visitor' || $val['kind'] === 'file_operator') {
            $file_params = json_decode($val['message'], true);

            $message_text = 'Передан файл ' . $file_params['filename'];
        } else {
            $message_text = str_replace('\n', '\n\t\t', $val['message']); //или &nbsp;
        }
        /*        visitor
        for_operator +
        info +
        operator +
        events +
        operator_busy + 'К сожалению оператор сейчас не может ответить'
        contacts_request ПРОВЕРИТЬ ЧТО ЭТО(запрос данных???)
        contacts ПРОВЕРИТЬ ЧТО ЭТО
        file_operator
        file_visitor
        */
        switch ($val['kind']) {
            case 'visitor':
                $kind = 'Посетитель';
                break;
            case 'for_operator':
                $kind = 'Инфо для оператора';
                break;
            case 'info':
                $kind = 'Инфо для посетителя';
                break;
            case 'operator':
                $kind = 'Оператор';
                break;
            case 'file_operator':
                $kind = 'Оператор отправил файл';
                break;
            case 'file_visitor':
                $kind = 'Посетитель отправил файл';
                break;
            case 'events':
                $kind = 'Событие';
                break;
            case 'operator_busy':
                $kind = 'Нет свободных операторов';
                break;
            case 'contacts_request':
                $kind = 'Запрос контактов';
                break;
            case 'contacts':
                $kind = 'Контакты';
                break;
            default:
                $kind = 'Сообщение';
                break;
        };
        $message_text = preg_replace('/[\\\\]{1,2}n/', PHP_EOL, $message_text);
        $history .= $timestamp . '>' . $kind . '>>>' . $message_text . PHP_EOL;
        if ($first_client_message && $val['kind'] === 'visitor')
            break;
    }
    return $history;
}