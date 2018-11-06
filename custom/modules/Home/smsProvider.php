<?php 
if(!defined('sugarEntry')) define('sugarEntry', true);
include_once('modules/Configurator/Configurator.php'); 

$config_file = 'custom/include/sms_config.php';

$parent_link = "<a href='index.php?module=Administration&action=index'>Administration</a><span class='pointer'>&raquo;</span>";
 
$params = array();
	if (isset($_POST['sms_login'])) {
		$params['login'] = trim($_POST['sms_login']);
		$params['password'] = trim($_POST['sms_password']);
		$params['sender'] = trim($_POST['sms_sender']);
		save_settings($params, $config_file);
        echo "<h4>Настройки успешно сохранены<h4/>";
        // SugarApplication::redirect('index.php?module=Administration&action=index');
    }
	   
// include_once("modules/Administration/sugartalk_smsPhone/smsPhone.js.php");
$params = retrieve_settings($config_file);
	

	

		// show settings
		
		echo "<div class='moduleTitle'><h2>{$parent_link}Настройки SMS счета</h2></div>";
		echo "<form method='post' id='frm_settings' action='./index.php?module=Home&action=smsProvider'>";
		echo "<div id='LBL_CONTACT_INFORMATION' class='detail view'>";
		echo "<table  border='1' cellspacing='0' cellpadding='0' class='other view'>";

		echo "<tr><td style='text-align:left;' scope='row' width='20%'>Публичный ключ:</td>";
		echo "<td width='80%'><input type='text' style='width:100%;' name='sms_login' value='{$params['login']}'></td></tr>";
                echo "<tr><td style='text-align:left;' scope='row' width='20%'>Приватный ключ:</td>";
                echo "<td width='80%'><input type='text' style='width:100%;' name='sms_password' value='{$params['password']}' title='Complete instance URL'></td></tr>";

                echo "<tr><td style='text-align:left;' scope='row' width='20%'>Имя отправителя:</td>";
                echo "<td width='80%'><input type='text' style='width:100%;' name='sms_sender' value='{$params['sender']}'></td></tr>";


		echo "</table>";

		
		echo "<div id='response_text' style='color:red;'></div>"; 

		echo "<input type='button' class='button' value='Сохранить' onclick='submit();' ></div>";
                // echo "<input type='button' class='button' value='Проверить счет' onclick='balance();' ></div>";
		echo "</form>";	


function retrieve_settings($config_file) {
	if (file_exists($config_file)) {
		include($config_file);
		if (isset($sms_config)) {
			return $sms_config;
		}
	}
}

function save_settings($params, $config_file) {
	$handle = fopen($config_file, "w+");
	$content = "<?php\n";
	foreach($params as $key => $val) {
		if ($key == 'sugartalk_url')
			$val = rtrim($val, "/");	// make sure there's no trailing forward slash
		$content .= "\$sms_config[\"{$key}\"] = \"{$val}\";\n";
	}
	$content .= "?>";
	fputs($handle, $content);
	fclose($handle);

}
?>