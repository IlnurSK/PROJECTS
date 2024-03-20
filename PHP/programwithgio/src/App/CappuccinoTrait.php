<?php

namespace App;

trait CappuccinoTrait
{
//    use LatteTrait;
    private function makeCappuccino()
    {
        echo static::class . ' is making cappuccino' . PHP_EOL;
    }

//    public function makeCoffee()
//    {
//        echo 'Making Coffee (UPDATED)' . PHP_EOL;
//    }

//    public function makeLatte()
//    {
//        echo static::class . ' is making latte (Cappuccino Trait)' . PHP_EOL;
//    }
}