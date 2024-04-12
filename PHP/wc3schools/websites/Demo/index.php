<?php

declare(strict_types=1);

// WC3schools/PHP DAY 6


//$email = "!   john.doe 2@ example. com";
//
//$email = filter_var($email, FILTER_SANITIZE_EMAIL);
//
//if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
//    echo ("$email is a valid email address");
//} else {
//    echo ("$email is not a valid email address");
//}

//$int = 122;
//$min = 1;
//$max = 200;
//
//if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range" => $min, "max_range" => $max))
//    ) === false) {
//    echo("Variable value is not within the legal range");
//} else {
//    echo("Variable value is within the legal range");
//}

//$url = "https://www.w3schools.com?a=b";
//
//if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
//    echo("$url is a valid URL with a query string");
//} else {
//    echo("$url is not a valid URL with a query string");
//}

//$str = "<h1>Hello WorldÆØÅ!</h1>";
//
//$newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
//echo $newstr;

//function my_callback($item)
//{
//    return strlen($item);
//}
//
//$strings = ['apple', 'orange', 'banana', 'coconut'];
//$lengths = array_map('my_callback', $strings);
//print_r($lengths);

//function exclaim($str)
//{
//    return $str . '! ';
//}
//
//function ask($str)
//{
//    return $str . '? ';
//}
//
//function printFormatted(string $str, callable $format)
//{
//    echo $format($str);
//}
//
//printFormatted("Hello World", "exclaim");
//printFormatted("Hello World", "ask");

//$age = array("Peter" => 35, "Ben" => 37, "Joe" => 43);
//
//$jsonEncode = json_encode($age);
//
//var_dump($jsonEncode);

//$cars = array("Volvo", "BMW", "Toyota");
//echo json_encode($cars);

//$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
//
//var_dump(json_decode($jsonobj,true));

//$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
//$obj = json_decode($jsonobj);
//foreach($obj as $key => $value) {
//    echo $key . " => " . $value . "<br>";
//}

//function divide($dividend, $divisor)
//{
//    if ($divisor == 0) {
//        throw new Exception("Division by zero");
//    }
//    return $dividend / $divisor;
//}
//
//try {
//    echo divide(5,0);
//} catch (Exception $e) {
//    echo "Unable to divide.";
//} finally {
//    echo "Process complete";
//}

//class Fruit {
//    public $name;
//    public $color;
//
//    function set_name($newName)
//    {
//        $this->name = $newName;
//    }
//
//    function get_name()
//    {
//        return $this->name;
//    }
//
//    function set_color($color)
//    {
//        $this->color = $color;
//    }
//
//    function get_color()
//    {
//        return $this->color;
//    }
//}

//$apple = new Fruit();
//$banana = new Fruit();
//$apple->set_name("Apple");
//$banana->set_name('Banana');
//
//echo $apple->get_name();
//echo '<br>';
//echo $banana->get_name();

//$apple = new Fruit();
//$apple->set_name('Apple');
//$apple->name = "Orange";
//$apple->set_color('Red');
//echo "Name: " . $apple->get_name();
//echo "<br>";
//echo "Color: " . $apple->get_color();
//
//var_dump($apple instanceof Fruit);

//class Fruit {
//    public $name;
//    public $color;
//
//    public function __construct($name, $color)
//    {
//        $this->name = $name;
//        $this->color = $color;
//    }
//
//    function get_name()
//    {
//        return $this->name;
//    }
//
//    function get_color()
//    {
//        return $this->color;
//    }
//}

//$apple = new Fruit('Apple');
//echo $apple->get_name();

//$apple = new Fruit('Apple', 'Green');
//echo $apple->get_color();
//echo '<br>';
//echo $apple->get_name();

//class Fruit {
//    public $name;
//    public $color;
//    public $weight;
//
//    function set_name($n) {  // a public function (default)
//        $this->name = $n;
//    }
//    protected function set_color($n) { // a protected function
//        $this->color = $n;
//    }
//    private function set_weight($n) { // a private function
//        $this->weight = $n;
//    }
//}
//
//$mango = new Fruit();
//$mango->set_name('Mango'); // OK
//$mango->set_color('Yellow'); // ERROR
//$mango->set_weight('300'); // ERROR

//class Greetings {
//    public const LEAVING_MESSAGE = 'Hello World';
//
//    function byebye()
//    {
//        echo self::LEAVING_MESSAGE;
//    }
//}
//$hello = new Greetings();
//echo $hello::LEAVING_MESSAGE;
//echo Greetings::class;
//echo Greetings::LEAVING_MESSAGE;
//$hello->byebye();
//class Cars
//{
//    public $model;
//    public $color;
//
//    public function __construct($model,$color)
//    {
//        $this->color = $color;
//        $this->model = $model;
//    }
//}
//
//class ElectricCars extends Cars
//{
//    public $reductorCount;
//
//
//    function get_reductorCount()
//    {
//        return $this->reductorCount;
//    }
//
//    function set_reductorCount($reductorCount)
//    {
//        $this->reductorCount = $reductorCount;
//    }
//}
//
//$car = new Cars('Volvo','Blue');
//$electricCar = new ElectricCars('BYD', 'White');
//$electricCar->set_reductorCount('4');
//
//echo $electricCar->color . ': ' . $electricCar->model . ' has ' . $electricCar->get_reductorCount() . ' electric reductors.';

//class Cars {
//    public const AVERAGE_SPEED = 100;
//}
//
//echo Cars::AVERAGE_SPEED;

//abstract class Animal
//{
//    public $name;
//    public $type;
//
//    public function __construct($name, $type)
//    {
//        $this->name = $name;
//        $this->type = $type;
//    }
//
//    abstract public function get_voice(): string;
//
//    abstract public function jump();
//}
//
//class Monkeys extends Animal
//{
//    public function get_voice(): string
//    {
//        return "UuUUu";
//    }
//
//    public function jump(): void
//    {
//        echo 'Monkey is jumping';
//    }
//}
//
//$newMonkey = new Monkeys('Abu', 'Gorilla');
//echo $newMonkey->type . " " . $newMonkey->name .  " cry: " . $newMonkey->get_voice() . '<br>';
//echo $newMonkey->jump();

//interface newInterface
//{
//    public function sayHello();
//
//    public function goHome();
//}
//
//class man implements newInterface {
//
//    public function sayHello()
//    {
//        echo 'Hello';
//    }
//
//    public function goHome()
//    {
//        echo 'going home';
//    }
//}
//
//$newInt = new man();
//$newInt->sayHello();
//$newInt->goHome();
