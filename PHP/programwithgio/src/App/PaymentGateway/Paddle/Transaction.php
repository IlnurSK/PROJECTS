<?php

declare(strict_types=1);

namespace App\PaymentGateway\Paddle;

class Transaction
{
//    public float $amount;
    private float $amount;
    public function __construct(float $amount)
    {
        $this->amount = $amount;
    }

//    public function getAmount(): float
//    {
//        return $this->amount;
//    }

//    public function setAmount(float $amount): void
//    {
//        $this->amount = $amount;
//    }

    public function process()
    {
        echo 'Processing $' . $this->amount . ' transaction';
        
        $this->generateReceipt();
        
        $this->sendEmail();
    }

    private function generateReceipt()
    {
    }

    private function sendEmail()
    {
    }
}