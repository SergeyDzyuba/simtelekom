<?php

class LinkedUtils{
	static function detail($ids){
		global $db;
		if(is_array($ids)){
			$ids = implode('\',\'',$ids);
		}
		$q = "SELECT name FROM linked_lists WHERE id IN ('{$ids}')";
		$r = $db->query($q);
		$row = $db->fetchByAssoc($r);
		return $row['name'];
	}
}