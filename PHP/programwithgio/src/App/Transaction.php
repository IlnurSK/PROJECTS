<?php

namespace App;

///**
// * @property-read int $x
// * @property-write  float $y
// */

/**
 * @method static int foo(string $x)
 */

class Transaction
{
    public function __call(string $name, array $arguments)
    {
        // TODO: Implement __call() method.
    }

    public static function __callStatic(string $name, array $arguments)
    {
        // TODO: Implement __callStatic() method.
    }
//    public function __get(string $name)
//    {
//        // TODO: Implement __get() method.
//    }
//
//    public function __set(string $name, $value): void
//    {
//        // TODO: Implement __set() method.
//    }
//    /** @var Customer */
//    private Customer $customer;
//    /** @var float */
//    private $amount;
//
//    /**
//     * @param Customer[] $arr
//     */
//    public function foo(array $arr)
//    {
////        /** @var Customer $obj */
//        foreach ($arr as $obj) {
////            $obj->myMethod();
//            $obj->name;
//        }

//    }
//    /**
//     * some description
//     *
//     * @param Customer $customer
//     * @param float $amount
//     *
//     * @throws \RuntimeException
//     * @throws \InvalidArgumentException
//     *
//     * @return bool
//     */
//    public function process(Customer $customer, float $amount): bool
//    {
//        // process transaction
//
//        // if failed, return false
//
//        // otherwise return true
//        return true;
//    }
}