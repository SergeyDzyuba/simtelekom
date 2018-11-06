<?php
if(isset($_REQUEST['delete_ids'])){
	global $db;
	session_write_close();
	$for_delete = $_REQUEST['delete_ids'];//json_encode($_REQUEST['delete_ids'],1);
	$ids_for_del = implode('\',\'', $for_delete);
	$q = "UPDATE contacts SET deleted = 1, date_modified = '{$_REQUEST['now']}', phone_other = '{$_REQUEST['transaction']}' WHERE id IN ('{$ids_for_del}')";
	// echo $q.'<br/>';
	$db->query($q);

	echo json_encode(array(
		'res' => 'success',
		'count' => count($for_delete),
	));
	exit;
}
elseif(isset($_REQUEST['rollback'])){
	$now = date('Y-m-d H:i:s');
	$q = "UPDATE contacts SET deleted = 0, date_modified = '{$now}', phone_other = 'rollback {$now}' WHERE phone_other = '{$_REQUEST['rollback']}'";
	// echo $q;
	$GLOBALS['db']->query($q);
	echo 'Выполнен откат транзакции №'.$_REQUEST['rollback'];
}
elseif(isset($_FILES['userfile'])){
	if ($f = fopen($_FILES['userfile']['tmp_name'], "r")) {
		$now = date('Y-m-d H:i:s');
		$transaction = microtime(true);
		$lines = array();
		while(($line = fgets($f, 14))!== false){
			$lines[$line]= trim($line," ;\t,\r\n");
		}
		if (!feof($f)) {
			echo "<b>Error: unexpected fgets() fail</b>";
			return false;
		}
		fclose($f);
		if(count($lines)>0){
			global $db;

			// $limit = 100000;
			$step = 0;
			$del_count = 0;
			$i = 0;
			$starttime = microtime(true);
			$q = 'SELECT COUNT(id) AS c FROM `contacts` WHERE deleted <> 1';
			$r = $db->query($q);
			$row = $db->fetchByAssoc($r);
			// printf('count %.4F сек.<br/>', (microtime(true) - $starttime));
			$count = $row['c'];
			// $count = 10000;
			// while($count>$step_end){
				$for_delete = array();
				$step_start = $step*$limit;
				$step_end = $step_start+$limit;
				//$phones = implode('\',\'', $lines);
				foreach(array_values($lines) as $v){
					$new_lines[$v] = 1;
				}
				// echo '<pre>';
				// print_r($new_lines);
				// $q = "SELECT id, phone_mobile FROM contacts WHERE deleted <> 1 AND (phone_mobile NOT IN ('{$phones}') OR phone_mobile IS NULL)";//LIMIT {$step_start}, {$step_end}
				$q = "SELECT id, phone_mobile FROM contacts WHERE deleted <> 1 ";
				// echo $q.'<br/>';
				$r = $db->query($q);
				// printf('step q %.4F сек.<br/>', (microtime(true) - $starttime));
				while($row = $db->fetchByAssoc($r)){
					// if(!in_array($row['phone_mobile'], $lines)){
					if (!isset($new_lines[$row['phone_mobile']])){
						$for_delete[]=$row['id'];
						$i++;
					}
					// printf('row chk %.4F сек.<br/>', (microtime(true) - $starttime));
				}
				/*if(count($for_delete)>0){
					$ids_for_del = implode('\',\'', $for_delete);
					$q = "UPDATE contacts SET deleted = 1, date_modified = '{$now}', phone_other = '{$transaction}' WHERE id IN ('{$ids_for_del}')";
					// echo $q.'<br/>';
					// $db->query($q);
					$del_count+=count($for_delete);
				}*/

				// $step++;
			// }
			/*$phones = implode('\',\'', $lines);
			echo "<script>
				echo var csv_phones = ['{$phones}'];
			</script>";*/
			/*$q = "UPDATE contacts SET deleted = 1 AND date_modified = '{$now}' AND phone_other = '{$transaction}' WHERE deleted <> 1 AND (phone_mobile NOT IN ('{$phones}') OR phone_mobile IS NULL)";
			echo $q;
			$GLOBALS['db']->query($q);*/
			// echo $i;
			echo '<b>';
			echo "Транзакция №{$transaction} [{$now}] <a href='index.php?module=Contacts&action=DeleteByFile&rollback={$transaction}' id='rollback' style='display:none'>Откатить</a><br/>";
			echo "Количество номеров в файле: ".count($lines)."<br/>";
			echo "Количество записей в бд: {$count}<br/>";
			echo "Количество записей на удаление: {$i} ";
			if(count($for_delete)>0){
				$ids_for_del = json_encode($for_delete);//implode('\',\'', $for_delete);
				echo "<input type='hidden' id='transaction' value='{$transaction}'>";
				echo "<input type='hidden' id='now' value='{$now}'>";
				echo "<input type='hidden' id='ids_for_del' value='{$ids_for_del}'>";
				echo "<a href='#' onclick='$(this).hide();startDelete()'>Запустить</a><br/>";
				echo '<div id="result"></div>';
				echo '<div id="reqs"></div><br/>';
				echo '<pre id="result_fail" style="color:#b00"></pre>';
			}
			// echo "<b>Запрос на удаление контактов с указанными номерами телефонов завершен ({$i} записей удалено)</b><br/>
			// Вы можете откатить изменения транзакции №{$transaction}</a>";
			echo '</b>';
			// return false;
		}
		else{
			echo '<b>Номера телефонов не обнаружены</b>';
		}
	}
	else{
		echo '<b>Ошибка загрузки файла</b>';
	}
	echo '<hr/>';
}
?>
<form enctype="multipart/form-data" action="index.php?module=Contacts&action=DeleteByFile" method="POST">
	<br>
	<h2>Удаление по номеру телефона</h2>
	<br><br>
	<p>Выберите файл CSV с номерами телефонов на удаление:</p>
	<!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
	<input type="hidden" name="MAX_FILE_SIZE" value="30000000" />
	<!-- Название элемента input определяет имя в массиве $_FILES -->
	<input name="userfile" type="file" accept=".csv"/>
	<!-- <select name="encode">
		<option value="Windows-1251">Windows-1251</option>
	</select> -->
	<input type="submit" value="Выполнить удаление" />

</form>
<script>
	var $deleted = 0;
	var $reqs = 0;
	function startDelete(){
		limit = 500;
		ids_for_del = JSON.parse($('#ids_for_del').val());
		// console.log(ids_for_del);
		del_data = [];
		for(i in ids_for_del){
			del_data.push(ids_for_del[i]);
			if(del_data.length>=limit){
				sendDelete(del_data);
				del_data = [];
			}
		}
		sendDelete(del_data);
	}
	function sendDelete(del_data){
		if(del_data.length==0){
			return false;
		}
		$reqs++;
		$.ajax({
			url: 'index.php?module=Contacts&action=DeleteByFile&to_pdf=1',
			type: 'POST',
			dataType: 'json',
			data: {
				now:$('#now').val(),
				transaction:$('#transaction').val(),
				delete_ids:del_data,
			},
		})
		.done(function(data) {
			// console.log(data);
			if(data.res=='success'){
				$deleted+=data.count;
				$('#result').text('Записей удалено: '+$deleted);
			}
			else{
				result_fail('Ошибка запроса: '+data.res);

			}
		})
		.fail(function() {
			result_fail('Ошибка: запрос не выполнен');
		})
		.always(function(){
			$('#rollback').show();
			$reqs--;
			$('#reqs').text('Осталось запросов: '+$reqs);
			if($reqs==0){
				$('#reqs').css('color','#0b0');
			}
		});


	}
	function result_fail($text){
		$('#result_fail').text($('#result_fail').text()+$text+' \r\n');
		$('#result').css('color','#b00');
	}
</script>