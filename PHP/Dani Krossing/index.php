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

declare(strict_types=1);

// Абстрактный класс Shape представляет собой общую основу для всех геометрических фигур
abstract class Shape
{
    protected string $color; // Цвет фигуры

    // Конструктор для установки цвета фигуры
    public function __construct(string $color)
    {
        $this->color = $color; // Инициализация свойства $color
    }

    // Абстрактный метод для вычисления площади фигуры, который должен быть реализован в дочерних классах
    abstract public function calculateArea(): float;

    // Метод для форматирования площади с 2 знаками после запятой
    public function formatArea(): string
    {
        // Возвращаем строковое представление площади, отформатированное с двумя знаками после запятой
        return number_format($this->calculateArea(), 2);
    }

    // Метод для получения строкового представления объекта
    public function __toString(): string
    {
        return json_encode([
            'type' => get_class($this),
            'color' => $this->color,
            'area' => $this->formatArea(),
        ]);
    }

    // Метод для получения цвета фигуры
    public function getColor(): string
    {
        return $this->color;
    }
}

// Интерфейс для всех объектов, которые можно "нарисовать"
interface Drawable
{
    // Метод для рисования фигуры (отображения)
    public function draw();

}

// Класс Rectangle представляет прямоугольник и реализует интерфейс Drawable
class Rectangle extends Shape implements Drawable
{
    protected float $width; // Ширина прямоугольника
    protected float $height; // Высота прямоугольника

    // Конструктор для создания прямоугольника с заданным цветом, шириной и высотой
    public function __construct(string $color, float $width, float $height)
    {
        if ($width < 0 || $height < 0) {
            throw new InvalidArgumentException("Ширина и высота должны быть неотрицательными.");
        }
        // Инициализация родительского класса для установки цвета фигуры
        parent::__construct($color);
        $this->width = $width;
        $this->height = $height;
    }

    // Реализация абстрактного метода для вычисления площади прямоугольника
    public function calculateArea(): float
    {
        return $this->width * $this->height;
    }

    // Реализация метода рисования прямоугольника
    public function draw(): void
    {
        // Выводим строковое представление объекта (информацию о фигуре)
        echo "Рисуем: " . get_class($this) . ", цвет: " . $this->color . ", площадь: " . $this->formatArea() . "<br>";
    }

    // Метод для установки ширины с проверкой на отрицательное значение
    public function setWidth(float $width): void
    {
        if ($width < 0) {
            // Выбрасываем исключение, если ширина отрицательная, так как это физически невозможно
            throw new InvalidArgumentException("Ширина должна быть неотрицательной.");
        }
        $this->width = $width;
    }

    // Метод для установки высоты с проверкой на отрицательное значение
    public function setHeight(float $height): void
    {
        if ($height < 0) {
            // Выбрасываем исключение, если высота отрицательная, так как это физически невозможно
            throw new InvalidArgumentException("Высота должна быть неотрицательной.");
        }
        $this->height = $height;
    }
}

// Класс Circle представляет круг и реализует интерфейс Drawable
class Circle extends Shape implements Drawable
{
    protected float $radius; // Радиус круга

    // Конструктор для создания круга с заданным цветом и радиусом
    public function __construct(string $color, float $radius)
    {
        if ($radius < 0) {
            throw new InvalidArgumentException("Радиус должен быть неотрицательным.");
        }
        // Инициализация родительского класса для установки цвета фигуры
        parent::__construct($color);
        $this->radius = $radius;
    }

    // Реализация абстрактного метода для вычисления площади круга
    public function calculateArea(): float
    {
        // Рассчитываем площадь круга
        return pi() * pow($this->radius,2);
    }

    // Реализация метода рисования круга
    public function draw(): void
    {
        // Выводим строковое представление объекта (информацию о фигуре)
        echo "Рисуем: " . get_class($this) . ", цвет: " . $this->color . ", площадь: " . $this->formatArea() . "<br>";
    }

    // Метод для установки радиуса с проверкой на отрицательное значение
    public function setRadius(float $radius): void
    {
        if ($radius < 0) {
            // Выбрасываем исключение, если радиус отрицательный, так как это физически невозможно
            throw new InvalidArgumentException("Радиус должен быть неотрицательным.");
        }
        $this->radius = $radius;
    }

}

// Создание объекта прямоугольника с цветом "красный", шириной 10 и высотой 2
$rectangle = new Rectangle("красный", 10, 2);
// Создание объекта круга с цветом "синий" и радиусом 3
$circle = new Circle("синий",3);

// Вывод информации о фигурах
$rectangle->draw();
$circle->draw();

