<?php

require 'functions.php';
//require 'router.php';

//class Person {
//    public $name;
//    public $age;
//
//    public function breathe()
//    {
//        echo $this->name . " is breathing!";
//    }
//}
//
//$person = new Person();
//
//$person->name = 'John Doe';
//$person->age = 25;
//
//$person->breathe();

$dsn = "mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4";

$pdo = new PDO($dsn, 'root', 'root');

$statement = $pdo->prepare("SELECT * FROM posts");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}

