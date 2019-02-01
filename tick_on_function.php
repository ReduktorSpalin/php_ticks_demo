<?php
require './vendor/autoload.php';
use Ticks\NoTickClass;

$tickHandler = new NoTickClass();
$tickHandler->registerTickFunction();
$tickHandler->mainLoop(20);

echo "\n==Finished==\n";

