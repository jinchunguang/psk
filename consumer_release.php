<?php

$pheanstalk=require 'pheanstalkd.php';
$pheanstalk->useTube('vip_user_send_mail')->put('vip_user_1');
$job=$pheanstalk->watch('vip_user_send_mail')->reserve();
$res = false;

/**
 * reserve 重新放回tube 
 */
if(!$res){
    sleep(10);
    $pheanstalk->release($job);
}else{
    $pheanstalk->delete($job);
}
