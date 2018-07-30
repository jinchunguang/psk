<?php

$pheanstalk=require 'pheanstalkd.php';
$job=$pheanstalk->peekBuried('vip_user_send_mail');
$stats=$pheanstalk->statsJob($job);
var_dump($stats);
$pheanstalk->kickJob($job);   #任务又变成了ready
$stats2=$pheanstalk->statsJob($job);
var_dump($stats2);
