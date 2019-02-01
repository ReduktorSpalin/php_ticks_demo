<?php

require('./vendor/autoload.php');

use Ticks\TickClass;

$tickHandler = new TickClass();
$tickHandler->registerTickFunction();
$tickHandler->mainLoop(20);

echo "\n==Finished==\n";
