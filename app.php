<?php

use App\Command1;
use Symfony\Component\Console\Application;

require_once __DIR__ . '/vendor/autoload.php';

$application = new Application();

$application->add(new Command1());
$application->add(new \App\Command2());
$application->add(new \App\Command3());


$application->run();
