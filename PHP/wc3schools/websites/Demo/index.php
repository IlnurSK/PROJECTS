<?php

declare(strict_types=1);


//$colors = ['red', 'white', 'blue', 'yellow'];
//
//foreach ($colors as $color) {
//    echo $color . '<br>';
//}

//$members = ['Joe' => '22', 'Maria' => 23, 'Ilya' => 37, 'Ainur' => 32];
//
//foreach ($members as $name => $age) {
//    echo $name . ' is ' . $age . ' years old<br>';
//}

//class Cars
//{
//    public string $model;
//    public string $color;
//
//    public function __construct($color, $model)
//    {
//        $this->color = $color;
//        $this->model = $model;
//    }
//}
//
//$myCar = new Cars('green', 'priora');
//
//foreach ($myCar as $item => $value) {
//    echo $item . ' ' . $value . '<br>';
//}

//function printMessage(string $name): void
//{
//    echo 'Yoo ' . $name . '! How are you?';
//}
//
//printMessage('George');
//printMessage('Vasiliy');
//printMessage('Nikolay');

//$cars = array('BMW', 'Mercedes', 'Audi');
$cars = array('BMW' => 'Bucket', 'Mercedes' => 'Bath', 'Audi' => 'Pool');
//echo end($cars);
//array_push($cars, 1, 2, 3, 4, 'a', '2', ['b'=>'WWW']);
//$cars[] = [1, 2, 3, 4, 'a', '2', ['b'=>'WWW']];
//
//echo '<pre>';
//var_dump($cars);
//echo '<pre>';

$carsToCase = array_change_key_case($cars,CASE_UPPER);
echo '<pre>';
var_dump($carsToCase);
echo '<pre>';