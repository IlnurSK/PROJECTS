<?php

// Class Constants

use App\Enums\Status;
use App\PaymentGateway\Paddle\Transaction;

require __DIR__ . '/../vendor/autoload.php';

$transaction = new Transaction();

//echo $transaction::STATUS_PAID;
//echo Transaction::STATUS_PAID;

//echo $transaction::class;
//echo Transaction::class;

//$transaction->setStatus('paid');
//$transaction->setStatus(Transaction::STATUS_PAID);
//$transaction->setStatus('asdasdasd');
//$transaction->setStatus(Transaction::STATUS_PAID);
$transaction->setStatus(Status::PAID);
var_dump($transaction);