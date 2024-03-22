<?php

// Serialize Objects & Serialize Magic Methods

use App\Invoice;

require_once __DIR__ . '/../vendor/autoload.php';

//$invoice = new Invoice();

//echo serialize(true) . PHP_EOL;
//echo serialize(1) . PHP_EOL;
//echo serialize(2.5) . PHP_EOL;
//echo serialize('hello world') . PHP_EOL;
//echo serialize([1, 2, 3]) . PHP_EOL;
//echo serialize(['a' => 1, 'b' => 2]) . PHP_EOL;
//var_dump(unserialize(serialize(['a' => 1, 'b' => 2])));

//echo serialize($invoice) . PHP_EOL;
//var_dump(unserialize('O:11:"App\Invoice":1:{s:2:"id";s:21:"invoice_65fd10ce162e8";}'));

//$str = serialize($invoice);
//$invoice2 = unserialize($str);
//var_dump($invoice, $invoice2, $invoice === $invoice2);

$invoice = new Invoice(25, 'Invoice 1', '1234432112344321');
$str = serialize($invoice);
$invoice2 = unserialize($str);
//echo $str . PHP_EOL;
var_dump($invoice2);
