<?php
$headers = array(
    // "X-Login: crm",
    "X-Login: crm2",
    // "X-Password: simsim",
    "X-Password: NQFEqq",
    'Content-Type: application/x-www-form-urlencoded',
);
$api_url = 'https://192.168.254.47:8686';
$page_size = 10;
$page = (isset($_REQUEST['page']))?$_REQUEST['page']:'0';
$body_only = isset($_REQUEST['to_pdf']);
if(!$body_only){?>
<h3>Список из биллинг сервиса (<?php echo $_REQUEST['method']?>)</h3>
<br/>
<br/>
<?php 
	$log = loadBean('SendLog');
	$log->name=$_REQUEST['method'];
	$log->description=$_REQUEST['phone_mobile'];
	$log->contact_id=$_REQUEST['contact_id'];
	$log->assigned_user_id=$GLOBALS['current_user']->id;
	$log->save();
}

$data = $cols = array();
// $bean = loadBean('Contacts');
// $bean->retrieve($_REQUEST['record']);

if($_REQUEST['method']=='find_account_journal'){
	$url = "{$api_url}/journal_service?method={$_REQUEST['method']}&page_size={$page_size}&page_num={$page}";
	$body = "<accountJournalFilter><fromDt>2000-06-18 13:30:21.100</fromDt><tillDt>9999-07-30 14:52:21.000</tillDt><msisdnMask>7{$_REQUEST['phone_mobile']}</msisdnMask></accountJournalFilter>";
}
elseif($_REQUEST['method']=='find_session_journal'){
	$url = "{$api_url}/journal_service?method={$_REQUEST['method']}&page_size={$page_size}&page_num={$page}";
	$body = "<sessionJournalFilter><fromDt>2000-06-18 13:30:21.100</fromDt><tillDt>9999-07-30 14:52:21.000</tillDt><msisdnMask>7{$_REQUEST['phone_mobile']}</msisdnMask></sessionJournalFilter>";
}
else{?>
<b>Неизвестный запрос</b>
<?php return false;
}
// echo $url;
// echo $body;
$res = xml2array(curl_send($url, $headers, $body));
if($res['status']!='OK'){
	$body = str_replace('<', '&lt;', $body);
	$body = str_replace('>', '&gt;<br/>', $body);?>
<b>Ошибка запроса</b>: <?php echo $url.'<br/>'.$body.'<pre>';print_r($res)?>
<?php return false;
}

if($_REQUEST['method']=='find_account_journal'){
	$data = $res['resultObject']['results']['accountJournal'];
}
elseif($_REQUEST['method']=='find_session_journal'){
	$data = $res['resultObject']['results']['sessionJournal'];
}

foreach ($data as $item) {
	array_merge($cols, array_keys($item));
	$cols+=array_keys($item);
}
if(!$body_only){
?>
<div>
	Отображено <?php echo $page_size?> из <?php echo $res['resultObject']['@attributes']['totalCount']?> записей
</div>
<div>
	<a href="#" onclick="set_prev_page();"> < </a> 
	Страница № <span id="page"><?php echo $page+1?></span> из <span id="max_page"><?php echo ceil($res['resultObject']['@attributes']['totalCount']/$page_size)?></span>
	<a href="#" onclick="set_next_page();"> > </a> 
</div>
<table id="apiList" cellspacing="0" cellpadding="0" border="0" class="edit view" width="100%">
<thead>
	<tr class="td_alt">
		<?php foreach ($cols as $lbl) {?>
		<th><?php echo $lbl?></th>
		<?php }?>
	</tr>
</thead>
<tbody>
<?php } ?>
<?php foreach($data as $row){?>
    <tr class="oddListRowS1">
    <?php foreach($cols as $key){?>
        <td nowrap="nowrap" scope="row">
        <?php echo (isset($row[$key]))?$row[$key]:'&nbsp;' ?>
        </td>
    <?php }?>
    </tr>
<?php }
if(!$body_only){?>
</tbody>
<table>

<script type="text/javascript">

	function set_next_page(){
		max_page = parseInt($('#max_page').text())-1;
		page = parseInt($('#page').text());
		if(page>max_page){
			page = max_page;
		}
		set_page(page);
	}
	function set_prev_page(){
		page = parseInt($('#page').text())-2;
		if(page<0){
			page = 0;
		}
		set_page(page);
	}
	function set_page($page){
		$('#apiList tbody').html('');
		$.ajax({
			url: '?module=Contacts&action=apiList&phone_mobile=<?php echo $_REQUEST['phone_mobile']?>&method=<?php echo $_REQUEST['method']?>',
			type: 'post',
			dataType: 'html',
			data: {
				to_pdf: true,
				page: $page
			},
		})
		.done(function($data) {
			console.log("success");
			$('#page').text($page+1);
			$('#apiList tbody').append($data);
		})
		.fail(function() {
			console.log("error");
		})
		
	}
</script>
<?php
}
