<?php

$pheanstalk=require 'pheanstalkd.php';
$tube=$pheanstalk->useTube('vip_user_send_mail');
$tube->put('delay',1024,10);  #延迟执行的任务
$tube->put('ready');          #准备状态的任务

$job=$pheanstalk->peekReady('vip_user_send_mail');  #读取ready状态的任务
var_dump($job);
$pheanstalk->delete($job);
