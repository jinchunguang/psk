<?php

$pheanstalk=require 'pheanstalkd.php';
$pheanstalk->useTube('new_users')->put('test');
print_r($pheanstalk->statsTube('new_users'));
