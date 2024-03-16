<?php

declare(strict_types=1);
class Transaction
{
//    private float $amount;
//    private string $description;

    private ?Customer $customer = null;
    public function __construct(
        private float $amount,
        private string $description
    ) {
//        $this->amount = $amount;
//        $this->description = $description;
//        echo $this->amount;
//        echo $amount;
    }

    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }
}