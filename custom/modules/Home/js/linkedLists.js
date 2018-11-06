/**
 * Created by Kolerts
 * Protected by SugarTalk.ru
 */
var fields_num = 4;
var $url_ = 'index.php?to_pdf=1&module=Home&action=linkedLists';

function loadHTML(sURL)
{
	var request=null;
	if(!request) try{
		request=new ActiveXObject('Msxml2.XMLHTTP');
	} catch (e){}
	if(!request) try{
		request=new ActiveXObject('Microsoft.XMLHTTP');
	} catch (e){}
	if(!request) try{
		request=new XMLHttpRequest();
	} catch (e){}
	if(!request) return '';

	request.open('GET', sURL, false);
	request.send(null);
	return request.responseText;
}
function parseJSON($data){
    try{
      $data = JSON.parse($data);
    }
    catch(e){
      console.log('invalid json:',e);
    }
    return $data;
}

function set_options($id)
{
	console.log('set_options:'+$id);
	$p = $('#linked'+($id-1));
	if($p.length==0){
		$p_val = '0';
	}
	else{
		$p_val = $p.val();
	}
	$select=$('#linked'+$id);
	$select.html('<option>загрузка значений..</option>');
	$url = $url_+'&fill='+$p_val;

	$res=loadHTML($url);
	$data = parseJSON($res);
	
	$last_key = '';
	$options ='<option value="">-</option>';
	if($data!=null){
		console.log($data);
		for(var key in $data){
			$selected = '';
			if($id==5){//комменты
				$selected='selected="selected"';
			}
			$options+='<option '+$selected+' value="'+key+'">'+$data[key]+'</option>';
			$last_key = key;
		}
	}
	if($id==5){//комменты
		$('#delete_linked'+$id).text('Очистить');
		$('#add_linked'+$id).text('Изменить');
		$select.hide();
		$('#new_linked'+$id).val($data[$last_key]);
	}
	$select.html($options);
	if($id==fields_num){
		linked_list_id();
	}
	return false;
}

function set_linked($id){
	console.log('set_linked:'+$id);
	$id_c = $id+1;
	$linked = $('#linked'+$id);
	if($linked.length>0){
		$child = $('#linked'+$id_c);
		if($child.length>0){
			if($linked.val()!=''){
				console.log("$('#cont_linked"+$id_c+"').show()");
				set_options($id_c);
				$('#cont_linked'+$id_c).show();
			}
			else{
				console.log("$('#cont_linked"+$id_c+"').hide()");
				$child.val('');
				$('#cont_linked'+$id_c).hide();
			}
			set_linked($id_c);
		}
	}
}

function chk_new($id)
{
	if($('#new_linked'+$id).val()!='')
		$('#add_linked'+$id).show();
	else
		$('#add_linked'+$id).hide();
}

function save_new($id)
{
	$p = $('#linked'+($id-1));
	if($p.length==0){
		$p_val = '0';
	}
	else{
		$p_val = $p.val();
	}
	save_val = $('#new_linked'+$id).val();
	if($id==5){//комменты
		save_val=save_val.split('\n').join('\\n');
	}
	$url =$url_+'&save='+save_val;
	$url+='&p='+$p_val;
	if($id==5){//комменты
		if($('#new_linked'+$id).val()==''){
			delete_linked($id);
			return false;
		}
		else{
			$url+='&record='+$('#linked'+$id).val();
		}
	}
	$res=loadHTML($url);
	$('#new_linked'+$id).val('');
	$('#add_linked'+$id).hide();
	alert($res);
	set_options($id);
	set_linked($id);
}
function delete_linked($id){
	$linked = $('#linked'+$id);
	if($linked.val()!=''){
		$url = $url_+'&delete='+$linked.val();
		$res=loadHTML($url);
		alert($res);
		set_options($id);
		set_linked($id);
	}
	else
		alert('Значение не выбрано');
}
function linked_list_id(){
	$('#linked_list_id').text('ID: '+$('#linked'+fields_num).val());
}

$(document).ready(function(){
	$('#linked'+fields_num).change(linked_list_id);
	
})