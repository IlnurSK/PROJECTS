<?php

namespace App;

trait LatteTrait
{
//    protected string $milkType = 'whole-milk';
    private string $milkType = 'whole-milk';

//    public static int $x = 1;

    public static string $foo;

    public function makeLatte()
    {
//        echo static::class . ' is making latte with ' . $this->milkType . PHP_EOL;
//        echo static::class . ' is making latte with ' . $this->getMilkType() . PHP_EOL;
//        echo static::class . ' is making latte with ' . $this->milkType . PHP_EOL;
        echo __CLASS__ . ' is making latte with ' . $this->milkType . PHP_EOL;
    }
//    abstract public function getMilkType(): string;
//    {
//        if (property_exists($this, 'milkType')) {
//            return $this->milkType;
//        }
//
//        return '';
//    }
    public function setMilkType(string $milkType): static
    {
        $this->milkType = $milkType;

        return $this;
    }

//    public static function foo()
//    {
//        echo 'Foo Bar' . PHP_EOL;
//    }
}