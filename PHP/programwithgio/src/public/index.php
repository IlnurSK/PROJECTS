<?php

// Static Properties & Methods In OOP

use App\DB;
use App\PaymentGateway\Paddle\Transaction;

require __DIR__ . '/../vendor/autoload.php';

$transaction = new Transaction(25,'Transaction 1');
//$transaction = new Transaction(25,'Transaction 1');
//$transaction = new Transaction(25,'Transaction 1');
//$transaction = new Transaction(25,'Transaction 1');
//$transaction = new Transaction(25,'Transaction 1');

//var_dump($transaction::$count);
//var_dump(Transaction::getCount());
//var_dump($transaction::$amount);
//var_dump($transaction::process());

//$db = new DB();
$db = DB::getInstance([]);
$db = DB::getInstance([]);
$db = DB::getInstance([]);

//$db = new DB([]);
//$db = new DB([]);
//$db = new DB([]);
//$db = new DB([]);