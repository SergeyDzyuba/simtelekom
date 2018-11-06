<?php
/**
 * Created by Kolerts
 * Protected by SugarTalk.ru
 */

$fields = array(
	'Источник',
	'Тип',
	'Тема',
	'Подтема',
	'Комментарий'
);

global $current_user, $db;

/*if(!$current_user->is_admin){
	echo "<b class='flash-error' style='color:#b00'>Несанкционный доступ</b>";
	return false;
}*/

if(isset($_GET['delete'])){
	$q = "DELETE FROM linked_lists
		WHERE p='{$_GET['delete']}'";
	$db->query($q);
	$q = "DELETE FROM linked_lists
		WHERE id='{$_GET['delete']}'";
	$db->query($q);
	echo "Запись #{$_GET['delete']} успешно удалена";
	return true;
}
else if(isset($_GET['save'])){
	if(isset($_GET['record']) && $_GET['record']){
		$q = "UPDATE linked_lists 
				SET
					name='{$_GET['save']}'
				WHERE id='{$_GET['record']}'";
	}
	else{
		$q = "INSERT INTO linked_lists
				SET name='{$_GET['save']}',
					p = '{$_GET['p']}'";
	}
	$db->query($q);
	
	echo "Данные успешно сохранены";
	return true;
}
else if(isset($_REQUEST['fill'])){
	$result = array();
	$q = '';
	if(isset($_REQUEST['id'])){
		$row = array('p' => 1);
		while($row['p']!=0){
			$q = "SELECT *
				FROM linked_lists
				WHERE id = {$_REQUEST['id']}";
			if($row = $db->fetchByAssoc($db->query($q))){
				$_REQUEST['id']=$row['p'];
				$result[]=$row;
			}
			else{
				$row['p'] = 0;
			}
		}
	}
	else{
		$q = "SELECT id, name FROM linked_lists WHERE p = {$_REQUEST['fill']}";

		if(isset($_REQUEST['l'])){
			$q.=' LIMIT '.$_REQUEST['l'];
		}
// echo $q;
		$r = $db->query($q);
		while($row = $db->fetchByAssoc($r)){
			$result[$row['id']]=$row['name'];
		}
	}

	echo json_encode($result);
}
else if(isset($_REQUEST['by_id'])){
	$result = array();
	$q = '';
	$row = array('p' => 1);
	while($row['p']!=0){
		$q = "SELECT *
			FROM linked_lists
			WHERE id = {$_REQUEST['by_id']}";
		if($row = $db->fetchByAssoc($db->query($q))){
			$_REQUEST['by_id']=$row['p'];
			$result[]=$row;
		}
		else{
			$row['p'] = 0;
		}
	}
	$result = array_reverse($result);
	echo json_encode($result);
}
else if(isset($_REQUEST['export'])){
	$i = 0;
	// $export_data = '';
	$export_array = export_down('0');
	$root = dirname(dirname(dirname(__DIR__)));
	$file_path='upload/linked_lists.csv';
	$file_name = $root.'/'.$file_path;
	// echo $file_name;
	// echo '<pre>';
	// print_r($export_array);
	if(file_exists($file_name)){
		unlink($file_name);
	}
	foreach($export_array as $key=>$data){
		$tmp_data = $key.';';
		// $export_data.=export_parse($data, $tmp_data);
		file_put_contents($file_name, export_parse($data, $tmp_data), FILE_APPEND);
		$i++;
	}
	// echo '<pre>';
	// print_r($export_data);
	echo "<br/>Данные успешно експортированы<br/>
	<a href='{$file_path}'>Скачать</a>";
}
else if(isset($_REQUEST['import'])){ ?>
<h1>Импорт связанных списков</h1>
<br/>
<?php
	if($_REQUEST['import']=='upload'){
		global $db;
		$file = $_FILES['linked_import_file'];
		if($file['error']){
			echo 'Ошибка при загрузке файла!';
			return false;
		}
		// echo '<pre>';
		// print_r($file);
		// $root = dirname(dirname(dirname(__DIR__)));
		// $file_name = $root.'/upload/linked_lists.csv';
		$file_name = $file['tmp_name'];
		$data = array();
		if(file_exists($file_name)){
			$data = file($file_name);
		}
		foreach($data as $line){
			$parents = array('0');
			$line = str_replace("\n", '', $line);
			$line_data = explode(';', $line);
			for($ii=0;$ii<count($fields);$ii++){
				if(isset($line_data[$ii]) && $line_data[$ii]!='' && $line_data[$ii]!=' '){
					$name = $line_data[$ii];
					if($p = import_chk($name, $ii)){
						$parents[$ii+1]=$p;
						// echo 'already exists<br/>';
					}
					else{
						print_r($parents);
						// echo 'get '.$ii.'<br/>';
						$p_index = $parents[$ii];
						$q="INSERT INTO linked_lists SET p='{$p_index}', name='{$name}'";
						$db->query($q);
						$new_id = $db->fetchByAssoc($db->query('SELECT MAX(id) as c FROM linked_lists'));
						// echo 'set '.($ii+1).'='.$new_id['c'].'<br/>';
						$parents[$ii+1]=$new_id['c'];
						print_r($parents);
						// echo $q.' create<br/>';
					}
				}
			}
		}

		echo '</pre>';
		echo 'Данные успешно импортированы<br/> Обработано строк:'.count($data);
	}
	else{ ?>

<form method="post" action="index.php?module=Home&action=linkedLists&import=upload" name="submit" enctype="multipart/form-data">
	<div>
		<b>Файл для импорта(формат файла csv, разделитель ";", кодировка UTF-8)</b>:
		<input type="file" name="linked_import_file">
	</div>
	<input type="submit" name="submit" value="Импортировать">
</form>
	<?php }
}
else{
	$q = "SELECT id,name FROM linked_lists WHERE p = '0'";
	$r = $db->query($q);
?>
<script src='custom/modules/Home/js/linkedLists.js'></script>
<style>
	.panel{
		padding: 10px;
		border: 1px solid #bbb;
		width:50%;
		margin:5px;
	}

</style>
<h1>Редактор связанных списков</h1>
<br/>
<a class="button" href="index.php?module=Home&action=linkedLists&export=1">Export</a> 
<a class="button" href="index.php?module=Home&action=linkedLists&import=1" >Import</a> 
<div class="panel">
	<h4><?php echo $fields[0]?>:</h4>
	<select id='linked1' onchange='set_linked(1);'>
		<option value=''>-</option>
	<?php
		while($row = $db->fetchByAssoc($r))
			echo"	<option value='{$row['id']}'>{$row['name']}</option>";
	?>
	</select>&nbsp;<button onclick='return delete_linked(1);' id='delete_linked1'>Удалить</button>
	<br/>
	<input placeholder="Новое значение" id='new_linked1' value='' onkeyup='chk_new("1");' onkeypress='chk_new("1");' onpaste='chk_new("1");'> 
	<button onclick='save_new("1"); return true;' id='add_linked1' style="display:none" >Добавить</button>
</div>
<?php foreach($fields as $i=>$lbl){?>
	<div id="cont_linked<?php echo ($i+1)?>" class="panel" style='display:none'>
		<h4><?php echo $lbl?>:</h4>
		<select id='linked<?php echo ($i+1)?>' onchange='set_linked(<?php echo ($i+1)?>);'>
			<option value=''>-</option>
		</select>&nbsp;
		<button onclick='return delete_linked(<?php echo ($i+1)?>);' id='delete_linked<?php echo ($i+1)?>'>Удалить</button>
		<br/>
		<?php if($lbl=='Комментарий'){?>
		<textarea id='new_linked<?php echo ($i+1)?>' value=''
			onkeyup='chk_new("<?php echo ($i+1)?>");'
			onkeypress='chk_new("<?php echo ($i+1)?>");'
			onpaste='chk_new("<?php echo ($i+1)?>");'
			cols="50"
			rows="4"
			size="250"
			maxlength="250"></textarea>
	<?php }else{?>
		<input placeholder="Новое значение" id='new_linked<?php echo ($i+1)?>' value=''
			onkeyup='chk_new("<?php echo ($i+1)?>");'
			onkeypress='chk_new("<?php echo ($i+1)?>");'
			onpaste='chk_new("<?php echo ($i+1)?>");'> 
	<?php }?>
		<button onclick='save_new("<?php echo ($i+1)?>"); return true;' id='add_linked<?php echo ($i+1)?>' style="display:none" >Добавить</button>
	</div>
<?php }?>
<b id="linked_list_id">
</b>	


<?php /*_----------------*/
}

function import_chk($name, $lvl=0){
	global $db;
	$q = "SELECT * FROM linked_lists WHERE name = '{$name}'";
	$r = $db->query($q);
	while($row = $db->fetchByAssoc($r)){
		// echo $name.' - '.count_lvl($row['p']).' ?= '.$lvl.'<br/>';
		if(count_lvl($row['p']) == $lvl){
			return $row['id'];
		}
	}
	return false;
}
function count_lvl($p){
	global $db;
	$c=0;
	while($p!=0){
		$c++;
		$q = "SELECT p FROM linked_lists WHERE id='$p'";
		$r = $db->query($q);
		if($row = $db->fetchByAssoc($r)){
			$p = $row['p'];
		}
		else{
			$p = 0;
		}
	}
	return $c;
}

function export_parse($export_array, $line){
	$export_data = (count($export_array)>0)?'':"{$line}\n";
	foreach($export_array as $key=>$data){
		$tmp_data = $line.$key.';';
		$export_data.=export_parse($data, $tmp_data);
	}
	return $export_data;
}

function export_down($parent_id){
	global $db;
	$export_data = array();
	$q = "SELECT id, name FROM linked_lists WHERE p = '{$parent_id}'";
	$r = $db->query($q);
	while ($row = $db->fetchByAssoc($r)) {
		$export_data[$row['name']]=export_down($row['id']);
	}
	return $export_data;
}