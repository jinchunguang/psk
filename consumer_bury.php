<?php

$pheanstalk=require 'pheanstalkd.php';
$job=$pheanstalk->watch('vip_user_send_mail')->reserve();
sleep(10);
$pheanstalk->bury($job);
