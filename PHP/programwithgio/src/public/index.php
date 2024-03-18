<?php

// Encapsulation & Abstraction

use App\PaymentGateway\Paddle\Transaction;

require __DIR__ . '/../vendor/autoload.php';

$transaction = new Transaction(25);
//$transaction1 = new Transaction(125);

//$transaction->amount = 125;
//$transaction->setAmount(125);

//$reflectionProperty = new ReflectionProperty(Transaction::class, 'amount');
//
//$reflectionProperty->setAccessible(true);
//
//$reflectionProperty->setValue($transaction, 125);
//
//var_dump($reflectionProperty->getValue($transaction));

//$transaction->amount;

$transaction->process();
//$transaction1->process();