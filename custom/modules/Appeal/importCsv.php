<!-- <pre> -->
<?php
global $db, $app_list_strings;
if(isset($_FILES['userfile'])){
	if ($f = fopen($_FILES['userfile']['tmp_name'], "r")) {
		$lines = array();
		$i=0;
		while(($line = fgets($f, 1024))!== false){
			if($_REQUEST['coding']=='CP1251'){
				$line = iconv('CP1251', 'utf-8',$line);
			}
			$line_arr = explode($_REQUEST['delimeter'], trim($line));
			if(strtolower($line_arr[1])!='id'){
				$lines[]= $line_arr;
			}
		}
		if (!feof($f)) {
			echo "<b>Error: unexpected fgets() fail</b>";
			return false;
		}
		// echo "'{$_REQUEST['delimeter']}'";
		// print_r($lines);
		// exit;
		fclose($f);
		if(count($lines)>0){
			foreach ($lines as $line) {
				// print_r($line);
				$by_id = $line[1];
				$result = array();
				$q = '';
				$row = array('p' => 1);
				while($row['p']!=0){
					$q = "SELECT *
						FROM linked_lists
						WHERE id = {$by_id} LIMIT 1";
					if($row = $db->fetchByAssoc($db->query($q))){
						$by_id=$row['p'];
						$result[]=$row;
					}
					else{
						$row['p'] = 0;
					}
				}
				$linked_arr = array_reverse($result);
				// print_r($linked_arr);

				$bean = loadBean('Appeal');
				$bean->code = $line[1];
				if(isset($linked_arr[0])){
					$bean->source = $linked_arr[0]['id'];
				}
				if(isset($linked_arr[1])){
					$bean->type = $linked_arr[1]['id'];
				}
				if(isset($linked_arr[2])){
					$bean->theme = $linked_arr[2]['id'];
				}
				if(isset($linked_arr[3])){
					$bean->subtheme = $linked_arr[3]['id'];
				}
				$state_list = array_flip($app_list_strings['state_list']);
				$bean->state = $state_list[$line[2]];

				$ass_user = explode(' ',$line[3]);
				$q = "SELECT id FROM users WHERE (
					(last_name LIKE '{$ass_user[0]}%' AND first_name LIKE '{$ass_user[1]}%')
					OR (last_name LIKE '{$ass_user[1]}%' AND first_name LIKE '{$ass_user[0]}%')
					) AND deleted <> 1 LIMIT 1";
				$r = $db->query($q);
				if($row = $db->fetchByAssoc($r)){
					$bean->assigned_user_id = $row['id'];
				}
				else{
					$bean->assigned_user_id = $GLOBALS['current_user']->id;
				}
				// echo $bean->assigned_user_id;

				$bean->comment = $line[4];

				$q = "SELECT id FROM contacts WHERE phone_mobile = '{$line[0]}' LIMIT 1";
				$r = $db->query($q);
				if($row = $db->fetchByAssoc($r)){
					$bean->contact_id=$row['id'];
				}
				if($id = $bean->save()){
					$i++;
				}
				// print_r($bean);
			}
		}
		echo '<b>Загружено всего строк: '.count($lines)/*.' строк, из них создано записей: '.$i*/.' строк</b>';
	}
}
?>
<form enctype="multipart/form-data" action="index.php?module=<?php echo $_REQUEST['module']?>&action=<?php echo $_REQUEST['action']?>" method="POST">
	<br>
	<h2>Импорт обращений</h2>
	<br><br>
	<p>Выберите файл CSV:</p>
	<!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
	<input type="hidden" name="MAX_FILE_SIZE" value="30000000" />
	<!-- Название элемента input определяет имя в массиве $_FILES -->
	<input name="userfile" type="file" accept=".csv"/>
	&nbsp; Кодировка: <select name="coding">
		<option value="CP1251">CP1251</option>
		<option value="UTF8">UTF8</option>
	</select>
	&nbsp; Разделитель: <select name="delimeter">
		<option value=";">;</option>
		<option value="	">tab</option>
	</select>
	<!-- <select name="encode">
		<option value="Windows-1251">Windows-1251</option>
	</select> -->
	&nbsp; <input type="submit" value="Выполнить" />
	
</form>