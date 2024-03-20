<?php

namespace App;

class CappuccinoMaker extends CoffeeMaker // implements MakesCappuccino
{
//    public function makeCappuccino()
//    {
//        echo static::class . ' is making cappuccino' . PHP_EOL;
//    }
//    use CappuccinoTrait;

//    public function makeCappuccino()
//    {
//        echo static::class . ' is making Cappuccino (UPDATED)' . PHP_EOL;
//    }
    use CappuccinoTrait {
        CappuccinoTrait::makeCappuccino as public;
    }
}