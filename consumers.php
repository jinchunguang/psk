<?php

$pheanstalk = require 'pheanstalkd.php';

while (true) {
    //当获取不到任务的时候就不会执行循环体
    $job = $pheanstalk->watch('vip_user_send_mail') //监听管道
        ->reserve(); //把监听到的ready状态的任务读取出来
    var_dump($job->getData()); //读取任务里面的数据  getId();
    //处理具体业务
    $pheanstalk->delete($job);
}
