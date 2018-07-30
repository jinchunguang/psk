<?php

$pheanstalk=require 'pheanstalkd.php';
/**
 * args-1: tube
 * args-1: data
 * args-1: 优先级 1024
 */
$res = $pheanstalk->putInTube('new_users','user:11112',1000);
print_r($res);

//$pheanstalk->useTube('new_users')->put('user:11111');
