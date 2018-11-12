<?php
$hook_array = array();
$hook_array['process_record'] = array();
$hook_array['process_record'][] = array(10, 'classificator', 'custom/modules/Appeal/hooks.php', 'AppealHooks', 'classificator');

$hook_array['after_save'] = Array();
$hook_array['after_save'][] = Array(
    1,
    'Связь нового обращения со всеми обращениями по номерту телефона',
    'custom/modules/Appeal/hooks.php',
    'LinkWithAttachedDocuments',
    'linkWithAttachedDocs');