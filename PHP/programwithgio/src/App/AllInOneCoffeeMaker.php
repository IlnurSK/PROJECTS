<?php

namespace App;

class AllInOneCoffeeMaker extends CoffeeMaker // implements MakesLatte, MakesCappuccino
{
//    public function makeLatte()
//    {
//        echo static::class . ' is making latte' . PHP_EOL;
//    }
//
//    public function makeCappuccino()
//    {
//        echo static::class . ' is making cappuccino' . PHP_EOL;
//    }
//    use CappuccinoTrait;
//    use CappuccinoTrait {
//        CappuccinoTrait::makeLatte insteadof LatteTrait;
//    }
//    use LatteTrait;
//    use LatteTrait {
//        LatteTrait::makeLatte insteadof CappuccinoTrait;
//    }
//    use LatteTrait {
//        LatteTrait::makeLatte as makeOriginalLatte;
//    }
//    public function foo()
//    {
//        $this->makeCappuccino();
//    }
    use CappuccinoTrait {
        CappuccinoTrait::makeCappuccino as public;
    }
    use LatteTrait;

//    private string $milkType = 'whole-milk';
//    public function getMilkType(): string
//    {
//        return $this->milkType;
//    }
}