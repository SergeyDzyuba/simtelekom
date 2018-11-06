<link href="custom/include/css/kolerts.css" type="text/css" rel="stylesheet">

<div id="send_sms_cont" class="kPopup" style="display:none">
	<p align='right' style="float:right"><img onclick='$(this).parent().parent().hide(500);' src='themes/default/images/close_inline.gif' alt='x' title='Закрыть' border='0' style='cursor:pointer' /></p>
	<h3>Отправить СМС</h3>
	<br/>
	<form method="POST" name="SendSms2">
	<input type="hidden" name="module" value="<?php echo $_REQUEST['module']?>"/>
	<input type="hidden" name="action" value="SendSms2"/>
	<b>Номер: </b>
	<input type="text" placeholder="4951234567" class="phone" maxlength="14" size="10" id="_s_phone_mobile" name="_s_phone_mobile">
	<b>Шаблон СМС: </b>
	<input type="text" autocomplete="off" id="_s_smstemplate_name" class="sqsEnabled yui-ac-input" name="_s_smstemplate_name">
	<div id="SendSms2_smstemplate_name_results" class="yui-ac-container"></div>
	<input type="hidden" value="" id="_s_smstemplate_id" name="_s_smstemplate_id">
	<span class="id-ff multiple">
		<button onclick="open_popup(
			'SmsTemplates', 600, 400, '', true, false, 
			{'call_back_function':'set_return','form_name':'SendSms2','field_to_name_array':{'id':'_s_smstemplate_id','name':'_s_smstemplate_name'}}, 
			'single', true
			);" value="Выбрать" class="button firstChild" title="Выбрать" tabindex="0" id="btn_smstemplate_name" name="btn_smstemplate_name" type="button">
			<img src="themes/default/images/id-ff-select.png">
		</button>
		<button value="Clear Selection" onclick="SUGAR.clearRelateField(this.form, '_s_smstemplate_name', '_s_smstemplate_id');" class="button lastChild" title="Clear Selection" id="btn_clr_smstemplate_name" name="btn_clr_smstemplate_name" type="button">
			<img src="themes/default/images/id-ff-clear.png">
		</button>
	</span>
	<br/>
	<br/>
	<button style="width:100%">Отправить</button>
	</form>
</div>
<button onclick="$('#send_sms_cont').show(500)" >Отправить смс [новая]</button>

<script type="text/javascript">
	$(function(){
		$('#_s_phone_mobile').on('change keyup', function(){toValidPhoneElement(this)});
	});
	SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['SendSms2_smstemplate_name']) != 'undefined'",
		enableQS
	);
	function toValidPhoneElement(element){
		var tmp_val=element.value;
		while(tmp_val.match(/[^0-9]/)){
			tmp_val = tmp_val.replace(/[^0-9]/, '');
		}
		tmp_val=tmp_val.substring(0, 10);
		element.value=tmp_val;
		
		return true;
	}
</script>