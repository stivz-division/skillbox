<?php

use Symfony\Component\Console\Application;

require_once __DIR__ . '/vendor/autoload.php';

$application = new Application();

$application->add(new \App\Command3());


$application->run();
