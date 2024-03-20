<?php

namespace App;

class ClassA
{
    protected static string $name = 'A';
    public static function getName(): string
    {
//        var_dump(self::class);
//        var_dump(get_called_class());
//        return self::$name;
        return static::$name;
    }
}