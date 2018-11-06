<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['after_ui_frame'] = Array(); 
$hook_array['after_ui_frame'][] = Array(1, 'Add new button to listview', 'custom/modules/XlsExport/UpdateListView.php','UpdateListView', 'addCustomButton'); 
$hook_array['after_retrieve'] = Array(); 
$hook_array['after_retrieve'][] = Array(1, 'acl_fields', 'modules/acl_fields/fields_logic.php','acl_fields_logic', 'limit_views'); 

$hook_array['after_ui_footer'] = array ();
$hook_array['after_ui_footer'][] = Array(3, 'add counter flags to tabsmenu', 'custom/modules/Home/TabsFlags.php','TabsFlags', 'emailCounter');


?>