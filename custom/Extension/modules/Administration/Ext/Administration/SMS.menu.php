<?php

$admin_option_defs = array();

$admin_option_defs['Administration']['config1'] = array(
				'icon_AdminMobile',
				'Настройка шлюза',
				"Настройка учетной записи, для рассылки SMS",
				'./index.php?module=Home&action=smsProvider'
		); 
$admin_group_header[]= array(
				'Short Message Service (SMS)',
				'',
				false,
				$admin_option_defs, 
				'Модуль интеграции SMS.'
		);