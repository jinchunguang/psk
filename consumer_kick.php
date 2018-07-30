<?php
$pheanstalk=require 'pheanstalkd.php';
$job=$pheanstalk->watch('vip_user_send_mail')->reserve();

$pheanstalk->bury($job);  #把任务设置为buried
$pheanstalk->useTube('vip_user_send_mail')->kick(999); #任务由burried=>ready
