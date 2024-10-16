<?php

class Cars {
    public $model;
    public $cost = 12000;
    public function __construct() {
        echo 12;
    }
    public function __destruct() {
        echo 21;
    }
}
$bmw = new Cars();