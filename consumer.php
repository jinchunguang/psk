<?php

$pheanstalk=require 'pheanstalkd.php';
$job=$pheanstalk
        ->watch('new_users')
        ->watch('default')
        ->ignore('default');
$tubes=$pheanstalk->listTubesWatched();
print_r($tubes);
