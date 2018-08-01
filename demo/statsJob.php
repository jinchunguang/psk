<?php

$pheanstalk=require 'pheanstalkd.php';
$job=$pheanstalk->watch('new_users')->reserve();
$stats=$pheanstalk->statsJob($job);
print_r($stats);
