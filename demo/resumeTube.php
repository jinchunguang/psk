<?php

$pheanstalk=require 'pheanstalkd.php';

$tube=$pheanstalk->pauseTube('vip_user_send_mail',10);
$tube=$pheanstalk->resumeTube('vip_user_send_mail');
$job=$pheanstalk->watch('vip_user_send_mail')->reserve();
var_dump($job);

