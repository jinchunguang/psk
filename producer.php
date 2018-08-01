<?php

$pheanstalk=require 'pheanstalkd.php';

$job=$pheanstalk->useTube('vip_user_send_mail')->put(json_encode(array(
        'userid'=>'101',
            'username'=>'zhangsan',
                'email'=>'zhansan@gmail.om',
            )));
$stats=$pheanstalk->statsJob($job);
var_dump($stats);
