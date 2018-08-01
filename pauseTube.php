<?php

$pheanstalk=require 'pheanstalkd.php';

$tube=$pheanstalk->pauseTube('vip_user_send_mail',100);
$job=$pheanstalk->watch('vip_user_send_mail')->reserve();
var_dump($job);
