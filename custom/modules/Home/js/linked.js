var $url_ = 'index.php?to_pdf=1&module=Home&action=linkedLists';
var $fields = [
    '-',
    'source',
    'type',
    'theme',
    'subtheme',
    'comment',
];
var first_run = true;

function loadHTML(sURL) {
    var request = null;
    if (!request) try {
        request = new ActiveXObject('Msxml2.XMLHTTP');
    } catch (e) {
    }
    if (!request) try {
        request = new ActiveXObject('Microsoft.XMLHTTP');
    } catch (e) {
    }
    if (!request) try {
        request = new XMLHttpRequest();
    } catch (e) {
    }
    if (!request) return '';

    request.open('GET', sURL, false);
    request.send(null);
    return request.responseText;
    /*$res = null;
    $.ajax({
        url: sURL,
    })
    .done(function(data) {
        $res = data;
    })
    return $res;*/

}

function parseJSON($data) {
    try {
        $data = JSON.parse($data);
    }
    catch (e) {
        console.log('invalid json:', e);
    }
    return $data;
}

function set_options($id) {
    console.log('set_options:' + $fields[$id]);
    $p = $('#' + $fields[($id - 1)]);
    if ($p.length == 0) {
        $p_val = '0';
    }
    else {
        $p_val = $p.val();
    }
    $select = $('#' + $fields[$id]);
    if ($fields[$id] != 'comment') {
        $select.html('<option>загрузка значений..</option>');
    }
    $url = $url_ + '&fill=' + $p_val;

    $res = loadHTML($url);
    $data = parseJSON($res);

    $options = '';
    if ($data != null) {
        console.log($data);
        for (var key in $data) {
            $options += '<option value="' + key + '">' + $data[key] + '</option>';
        }
    }
    if ($fields[$id] != 'comment') {
        $select.html($options);
    }
    else {
        if (!first_run) {
            console.log('$select.val(): ' + $select.val());
            for (var key in $data) {
                if ($data[key] != '') {
                    $select.val($data[key]);
                }
            }
        }
        else {
            console.info('first_run don`t touch comment:', first_run);
        }
    }
    return false;
}

function set_linked($id) {
    console.log('set_linked:' + $id);
    $id_c = $id + 1;
    $linked = $('#' + $fields[$id]);
    if ($linked.length > 0) {
        $child = $('#' + $fields[$id_c]);
        if ($child.length > 0) {
            if ($linked.val() != '') {
                set_options($id_c);
                if ($child.val() != '') {
                    $child.show();
                }
                else {
                    if ($fields[$id_c] != 'comment') {
                        $child.hide();
                    }
                }
            }
            else {
                // console.log("$child.val('')");
                $child.val('');
                $child.hide();
            }
            set_linked($id_c);
        }
        else {
            $child.hide();
        }
    }
}

function linkedById() {
    console.log('linkedById');
    $id = $('#code').val();
    $url = $url_ + '&by_id=' + $id;
    $res = loadHTML($url);
    $id_data = parseJSON($res);
    if ($id_data != null) {
        for (var i in $id_data) {
            console.log('------\ndata[i] ' + i);
            console.log($id_data[i]);
            // console.log('#'+$fields[id]+' set as '+data.id);
            id = parseInt(i) + 1;
            $('#' + $fields[id]).val($id_data[i].id);
            set_linked(id);
        }
    }
    else {
        alert('Произошла ошибка либо идентификатор не найден');
    }
}

function fetchByAssocURL(request) {
    if (request.substr(0, 1) === '?') {
        request = request.substr(1);
    }
    var params = request.split('&');
    var assoc_params = new Array();
    $.each(params, function (key, value) {
        var buf = value.split('=');
        assoc_params[buf[0]] = buf[1];
    });
    return assoc_params;
}

//история обращения до первого сообщения клиента
function getChatHistory(chat_id) {
    $.ajax({
        type: "POST",
        datatype: "html",
        url: 'index.php?module=Appeal&action=getChatHistory&to_pdf=1&first_message=1&chat_id='+chat_id,
//    data: {operator_id: parent_process_id},
        async: true,
        success: function (data) {
            console.log(data);
            if (data !== 'false') {
                    //<input type="hidden" name="contact_id" id="contact_id" value="1dff4f65-a3d5-673f-e323-57503dfc094a">
                    // TODO: добавить источник
                    $('#Default_Appeal_Subpanel #webim_appeal_history').ready(function () {
                        $('#Default_Appeal_Subpanel #webim_appeal_history').html(data);
                    });
                $('#Default_Appeal_Subpanel #webim_appeal_history').html($('#Default_Appeal_Subpanel #webim_appeal_history').html().replace(/\n/g,'<br>'));
            }
        }
    });
}

$(document).ready(function () {
    set_options(1);
    set_linked(1);

    for (var i = 1; i < $fields.length; i++) {
        (function (index) {
            $field = $('#' + $fields[index]);
            $old_val = $('#' + $fields[index] + '_val').val();
            console.log('old_val - ' + "$('#'" + $fields[index] + "'_val').val()");
            console.log('old_val:' + $old_val);
            if ($fields[index] != 'comment') {
                if ($old_val != '') {
                    $field.val($old_val);
                }

                set_linked(index);
                $field.change(function () {
                    set_linked(index);
                });
            }
        })(i)
    }
    first_run = false;


    $('#code').change(linkedById);

    var search = $(location)[0]['search'];
    var request_params = fetchByAssocURL(search);
    //если не свернута субпанель
    if (typeof request_params['chat_id'] !== 'undefined') {
        var chat_id = request_params['chat_id'];
        getChatHistory(chat_id);
        //<input type="hidden" name="contact_id" id="contact_id" value="1dff4f65-a3d5-673f-e323-57503dfc094a">
        // TODO: добавить источник
        $('#Default_Appeal_Subpanel #comment').ready(function () {
            $('#Default_Appeal_Subpanel #comment').parent().append('<input type="hidden" name="webim_appeal_id" id="webim_appeal_id" value="' + chat_id + '">');
        });

    }
    if (typeof request_params['phone'] !== 'undefined') {
        var phone = request_params['phone'];
        //<input type="hidden" name="contact_id" id="contact_id" value="1dff4f65-a3d5-673f-e323-57503dfc094a">
        // TODO: добавить источник
        $('#Default_Appeal_Subpanel #comment').ready(function () {
            $('#Default_Appeal_Subpanel #comment').parent().append('<input type="hidden" name="contact_phone" id="contact_phone" value="' + phone + '">');
        });

    }
})