<?php

require __DIR__.'/vendor/autoload.php';
use Pheanstalk\Pheanstalk;
return new Pheanstalk('127.0.0.1',11300);
