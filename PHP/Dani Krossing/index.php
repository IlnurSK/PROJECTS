<?php

//$array = array(0,1,2);
//foreach ($array as $value) {
//    $value += 2;
//}
//var_dump($array);

//function Hello($a,$b)
//{
//    echo "Hello" . $a;
//}
//
//Hello("Vasya");

//$time = "5";
//echo "PHP {$time}.6 conference at ${time} ";
//выведет "PHP 5.6 conference at 5"
//$time = "5 a.m. "
//echo "PHP 5.6" . " conference at $time ";
//пропущена ;
//$time = "5 a.m.";
//echo "PHP 5.6 " . " conference at " . "${time}" ;

//$string = "PHP56_testing";
//
//echo preg_match("/^[A-Za-z0-9]*$/", $string);
//echo preg_match("/56_test/", $string);
//echo preg_match("/^PHP(\w)*/", $string);
//echo preg_match("/^(\w)$/", $string);
//echo preg_match("/[0-9]+$/", $string);
//
//echo array("Hello", "World");

//class Car {
//    static $model = 'машина';
//    static $action = 'зажигание';
//    static function  makeSounds()
//    {
//        echo self::makeSound() . ',';
//        echo static::makeSound() . PHP_EOL;
//    }
//
//    static function makeSound()
//    {
//        echo static::$model . ': ' . static::$action;
//    }
//}
//class ProtectedCar extends Car {
//    static $model = 'машина с защитой';
//    static $action = 'сигнализация';
//    static function makeSound()
//    {
//        echo static::$model . ': ' . " снятие с сигнализации";
//    }
//}
//
//ProtectedCar::makeSounds();

//class MyClass {
//    public function _set($name, $value)
//    {
//        echo "property: {$name}{$value}\n";
//    }
//}

//$sql = "1; DROP TABLE users";
//$test = (int) $sql;
//echo $test;

//$id_user = (int)$_POST["id_user"];
//
//$db = getConection();
//$id_user = $_POST["id_user"];
//$sql = "SELECT * FROM user WHERE id_user = " . $id_user;
//$result = executeQuery($db,$sql);

//class One {
//    function foo()
//    {
//        echo "Hello from class One!";
//    }
//    function callMe()
//    {
//        $this->foo();
//    }
//}
//class Two extends One {
//    function foo()
//    {
//        echo "Hello from class Two";
//    }
//}
//$two = new Two();
//$two->callMe();

//preg_match('/(foo)(bar)/', 'foobar', $matches);
//print_r($matches);

//$pattern = "/\d+/";
//$subject = "Мои числа: 10, 20, 30.";
//
//preg_match_all($pattern, $subject, $matches);
//print_r($matches);

//$pattern = "/(\d+)-(\w+)/";
//$subject = "ID1-itemA, ID2-itemB, ID3-itemC";
//
//preg_match_all($pattern, $subject, $matches, PREG_SET_ORDER);
//
//echo '<pre>';
//print_r($matches);
//echo '</pre>';

//$matches = preg_split('/(\d)/', 'a1b2c3');
//print_r($matches);

$matches = preg_split('/(?=[A-Z])/', 'HelloWorld');
echo '<pre>';
print_r($matches);
echo '</pre>';






