<?php

// Interface & Polymorphism

require __DIR__ . '/../vendor/autoload.php';

//$collector = new \App\CollectionAgency();
//echo $collector->collect(100) . PHP_EOL;

$service = new \App\DebtCollectionService();

echo $service->collectDebt(new \App\CollectionAgency()) . PHP_EOL;
//echo $service->collectDebt(new \App\Rocky()) . PHP_EOL;
