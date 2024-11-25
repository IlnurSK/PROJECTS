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

//$matches = preg_split('/(?=[A-Z])/', 'HelloWorld');
//echo '<pre>';
//print_r($matches);
//echo '</pre>';

//abstract class Animal {
//    protected $name;
//    public function __construct($name)
//    {
//        $this->name = $name;
//    }
//
//    public function getName()
//    {
//        return $this->name;
//    }
//
//    abstract function speak();
//}
//
//class Dog extends Animal {
//
//    public function speak()
//    {
//        return "Гав";
//    }
//}
//
//class Cat extends Animal
//{
//    public function speak()
//    {
//        return "Мяу";
//    }
//}
//$dog = new Dog("Rex");
//$cat = new Cat("Whiskers");
//
//echo "Собака по имени {$dog->getName()}: {$dog->speak()}" . "<br>";
//echo "Кошка по имени {$cat->getName()}: {$cat->speak()}";

//declare(strict_types=1);
//abstract class Shape
//{
//    protected $color;
//
//    public function __construct(string $color)
//    {
//        $this->color = $color;
//    }
//
//    // Метод для вычисления площади фигуры
//    abstract function area(): float;
//
//    // Метод для форматирования площади с 2 знаками после запятой
//    public function formatArea(): string
//    {
//        return number_format($this->area(), 2);
//    }
//}
//interface Drawable
//{
//    // Метод для рисования фигуры
//    public function draw();
//
//}
//
//class Rectangle extends Shape implements Drawable
//{
//    protected $width;
//    protected $height;
//
//    public function __construct(string $color, float $width, float $height)
//    {
//        parent::__construct($color);
//        $this->setWidth($width);
//        $this->setHeight($height);
//    }
//
//    public function area(): float
//    {
//        // Рассчитываем площадь прямоугольника
//        return $this->width * $this->height;
//    }
//
//    public function draw()
//    {
//        // Отображаем информацию о прямоугольнике и его площади
//        echo "Прямоугольник, цвет: " . $this->color . ", площадь: " . $this->formatArea() . "<br>";
//    }
//
//    public function setWidth(float $width)
//    {
//        if ($width < 0) {
//            throw new InvalidArgumentException("Ширина должна быть неотрицательной.");
//        }
//        $this->width = $width;
//        return $this;
//    }
//
//    public function setHeight(float $height)
//    {
//        if ($height < 0) {
//            throw new InvalidArgumentException("Высота должна быть неотрицательной.");
//        }
//        $this->height = $height;
//        return $this;
//    }
//}
//
//class Circle extends Shape implements Drawable
//{
//    protected $radius;
//    public function __construct(string $color, float $radius)
//    {
//        parent::__construct($color);
//        $this->setRadius($radius);
//    }
//
//    public function area(): float
//    {
//        // Рассчитываем площадь круга
//        return pi() * pow($this->radius,2);
//    }
//
//    public function draw()
//    {
//        // Отображаем информацию о круге и его площади
//        echo "Круг, цвет: " . $this->color . ", площадь: " . $this->formatArea() . "<br>";
//    }
//
//    public function setRadius(float $radius)
//    {
//        if ($radius < 0) {
//            throw new InvalidArgumentException("Радиус должен быть неотрицательным.");
//        }
//        $this->radius = $radius;
//        return $this;
//    }
//}
//
//// Создаем объекты и отображаем их
//$rectangle = new Rectangle("красный", 10, 2);
//$circle = new Circle("синий",3);
//
//$rectangle->draw();
//$circle->draw();


