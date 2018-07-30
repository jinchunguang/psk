<?php

$pheanstalk=require 'pheanstalkd.php';
$tube = $pheanstalk->useTube('vip_users');
/**
 *  * 优先级 10s
 *   * 延迟 20s
 *    * 处理超时 30s
 *     */
//$tube->put('vip_user_100',10,20,30);
$tube->put('vip_user_100',0,0,10);

$job=$pheanstalk->watch('vip_users')->reserve();
$stats=$pheanstalk->statsJob($job);
print_r($stats);
sleep(9);
$pheanstalk->touch($job);    #续命

print "touch";               #提示
$pheanstalk->delete($job);
