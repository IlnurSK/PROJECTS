<?php

// Magic Methods

require __DIR__ . '/../vendor/autoload.php';

$invoice = new App\Invoice();

//$invoice->amount = 15;
////
////echo $invoice->amount . PHP_EOL;
//var_dump(isset($invoice->amount));
//var_dump($invoice);
//
//unset($invoice->amount);
////var_dump(isset($invoice->amount));
//var_dump($invoice);

//$invoice->process(1, 2, 3);
//$invoice::process(1, 2, 3);

//echo $invoice;
//var_dump($invoice instanceof Stringable);
//var_dump(is_callable($invoice));
//$invoice();

var_dump($invoice);