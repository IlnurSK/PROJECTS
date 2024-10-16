<?php

class Animal
{
    public function __destruct()
    {
        echo "Увы, мой жизненный цикл окончен";
    }
}

$cheetah = new Animal();