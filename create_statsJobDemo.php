<?php

$pheanstalk=require 'pheanstalkd.php';
$job=$pheanstalk->watch('vip_users')->reserve();
print_r($job);
$pheanstalk->delete($job);

