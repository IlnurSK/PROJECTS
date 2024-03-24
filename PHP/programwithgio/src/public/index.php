<?php

// Iterators & Iterable Type

use App\InvoiceCollection;

require_once __DIR__ . '/../vendor/autoload.php';

//foreach (['a', 'b', 'c', 'd', 'e'] as $key => $value) {
//    echo $key . ' = ' . $value . PHP_EOL;
//}

//foreach (new App\Invoice(25) as $key => $value) {
//    echo $key . ' = ' . $value . PHP_EOL;
//}

$invoiceCollection = new InvoiceCollection([new \App\Invoice(15), new \App\Invoice(25), new \App\Invoice(50)]);
foreach ($invoiceCollection as $invoice) {
//    var_dump($invoice);
    echo $invoice->id . ' - ' . $invoice->amount . PHP_EOL;
}

foo ($invoiceCollection);
foo([1,2,3]);
function foo(iterable $iterable)
{
    foreach ($iterable as $i => $item) {
        // ...
        echo $i . PHP_EOL;
    }
}