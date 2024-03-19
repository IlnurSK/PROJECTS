<?php

namespace App;

class Invoice // implements \Stringable
{
//    protected float $amount;
//    protected array $data = [];
//
//    public function __get(string $name)
//    {
////        var_dump($name);
//        if (array_key_exists($name, $this->data)) {
//            return $this->data[$name];
//        }
//    }
//
//    public function __set(string $name, $value): void
//    {
////        var_dump($name, $value);
//        $this->data[$name] = $value;
//    }

//    public function __isset(string $name): bool
//    {
//        var_dump('isset');
//        return array_key_exists($name, $this->data);
//    }
//
//    public function __unset(string $name): void
//    {
//        var_dump('unset');
//        unset($this->data[$name]);
//    }

//    public function __call(string $name, array $arguments)
//    {
//        var_dump($name, $arguments);
//    }
//
//    public static function __callStatic(string $name, array $arguments)
//    {
//        var_dump('static', $name, $arguments);
//    }

//    public function __toString(): string
//    {
//        return 'hello';
//    }
//    public function __invoke()
//    {
//        var_dump('invoked');
//    }

    private float $amount;
    private int $id = 1;
    private string $accountNumber = '0123456789';

    public function __debugInfo(): ?array
    {
        return [
            'id' => $this->id,
            'accountNumber' => '****' . substr($this->accountNumber, -4),
        ];
    }
}