<?php

$pheanstalk=require 'pheanstalkd.php';

/**
 * 10 指的是在10s后不阻塞，直接返回
 */
$job=$pheanstalk
        ->watch('vip_users')->reserve(10);

print_r($job);
// $pheanstalk->delete($job);
