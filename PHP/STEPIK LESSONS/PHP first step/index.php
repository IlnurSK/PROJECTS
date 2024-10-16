<?php

class Animal
{
    public $kind;
    public $name;

    public function viewData()
    {
        echo $this->kind;
        echo $this->name;
    }
}