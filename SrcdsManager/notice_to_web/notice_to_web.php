<?php
// simple notice log php
//SRCDS Manager -> Setting -> CrashConfigure .. Set Your Web site

$message = urldecode($_GET['message']);
log($message);


function log($arg)
{
    $log = vsprintf('%s', print_r($arg, true));
    $log = date('[Y/m/d H:i:s]') . '---' . $log . PHP_EOL;
    $path = dirname(__FILE__) . '/log.log';
    $fp = file_put_contents($path, $log, FILE_APPEND);
    return true;
}
