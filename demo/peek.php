<?php

$pheanstalk=require 'pheanstalkd.php';
$job=$pheanstalk->peek(1);

$stats=$pheanstalk->statsJob($job);

print_r($stats);
