<?php

class Car {
    public $model;
    public $color;
    public $wheels;
    public $speed;
    public function sayHello() {
        echo "Я машина";
    }
}
class Truck extends Car {

}