<?php

// OOP Error Handling In PHP & Try Catch Finally Blocks

use App\Invoice;
use App\Customer;

require_once __DIR__ . '/../vendor/autoload.php';

//$invoice = new Invoice(new Customer(['foo'=>'bar']));

//$invoice->process(25);
//try {
//    $invoice->process(25);
//} catch (\App\Exception\MissingBillingInfoException $e) {
//    echo $e->getMessage() . ' ' . $e->getFile() . ':' . $e->getLine() . PHP_EOL;
//}

//try {
//    $invoice->process(-25);
//} catch (\App\Exception\MissingBillingInfoException) {
//    echo 'Some error' . PHP_EOL;
//} catch (\InvalidArgumentException) {
//    echo 'Invalid argument exception' . PHP_EOL;
//}

//try {
//    $invoice->process(25);
//} catch (\App\Exception\MissingBillingInfoException|\InvalidArgumentException) {
//    echo 'Some error' . PHP_EOL;
//}

//try {
//    $invoice->process(25);
//} catch (\Exception $e) {
//    echo $e->getMessage() . PHP_EOL;
//} finally {
//    echo 'Finally block' . PHP_EOL;
//}
//var_dump(process());
//
//function foo()
//{
//    echo 'foo' . PHP_EOL;
//    return false;
//}
//
//function process()
//{
//    $invoice = new Invoice(new Customer(['foo' => 'bar']));
//    try {
//        $invoice->process(-25);
//
//        return true;
//    } catch (\Exception $e) {
//        echo $e->getMessage() . PHP_EOL;
//
//        return foo();
//    } finally {
//        echo 'Finally block' . PHP_EOL;
//        return -1;
//    }
//}

//set_exception_handler(function (\Throwable $e) {
//    var_dump($e->getMessage());
//});

//set_exception_handler(function (\Exception $e) {
//    var_dump($e->getMessage());
//});
//echo array_rand([],1);

$invoice = new Invoice(new Customer());
$invoice->process(25);

