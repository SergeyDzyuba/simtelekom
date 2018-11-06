<?php

class AppealHooks
{
	function classificator(&$bean){
		require_once('custom/modules/Home/utils.php');
		$bean->source = LinkedUtils::detail($bean->source);
		$bean->type = LinkedUtils::detail($bean->type);
		$bean->theme = LinkedUtils::detail($bean->theme);
		$bean->subtheme = LinkedUtils::detail($bean->subtheme);
	}
}