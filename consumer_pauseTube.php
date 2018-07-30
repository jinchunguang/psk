<?php

$pheanstalk=require 'pheanstalkd.php';

$pheanstalk->pauseTube('vip_user_send_mail',10);
$pheanstalk->resumeTube('vip_user_send_mail');
$job=$pheanstalk->watch('vip_user_send_mail')->reserve();
var_dump($job);
