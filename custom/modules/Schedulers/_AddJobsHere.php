<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$job_strings[]='processTMonitor';
$job_strings[]='contactsFtp';

function processTMonitor(){
    $GLOBALS['log']->info('----->Scheduler fired job of type processTMonitor()');
    // return require_once("modules/processTMonitor/Scheduler.php"); - shitcode, shitcode, shitcode!!!! ololololol
    return require_once("modules/TMonitor/Scheduler.php");
}
function contactsFtp(){
    $GLOBALS['log']->info('----->Scheduler fired job of type contactsFtp()');
    return require_once("custom/modules/Contacts/SchedulerFtp.php");
}
?>
