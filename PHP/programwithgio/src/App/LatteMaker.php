<?php

namespace App;

class LatteMaker extends CoffeeMaker // implements MakesLatte
{
    use LatteTrait;

//    public function makeLatte()
//    {
//        echo static::class . ' is making latte' . PHP_EOL;
//    }
//    protected string $milkType = 'skim-milk';
//    protected string $milkType = 'whole-milk';
//    public string $milkType = 'whole-milk';
//    protected ?string $milkType = 'whole-milk';
//    private string $milkType = 'whole-milk';
//
//    public function getMilkType(): string
//    {
//        return $this->milkType;
//    }

}