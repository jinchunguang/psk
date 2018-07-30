<?php

$pheanstalk=require 'pheanstalkd.php';
/**
 * args-1: tube
 * args-2: data
 * args-3: 优先级 1024
 * args-4: 延迟处理时间  
 */

$tube = $pheanstalk->useTube('vip_users');
    
$tube->put('test_1');
$tube->put('test_2',3,100);
$tube->put('test_3',4,100);
$tube->put('test_4',1000,100);
