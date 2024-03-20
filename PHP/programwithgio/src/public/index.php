<?php

// Late Static Binding

require_once __DIR__ . '/../vendor/autoload.php';

//$classA = new \App\ClassA();
//$classB = new \App\ClassB();
//
//echo $classA->getName() . PHP_EOL;
//echo $classB->getName() . PHP_EOL;

echo \App\ClassA::getName() . PHP_EOL;
echo \App\ClassB::getName() . PHP_EOL;