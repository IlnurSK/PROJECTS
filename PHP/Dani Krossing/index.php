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

$string = "PHP56_testing";

echo preg_match("/^[A-Za-z0-9]*$/", $string);
echo preg_match("/56_test/", $string);
echo preg_match("/^PHP(\w)*/", $string);
echo preg_match("/^(\w)$/", $string);
echo preg_match("/[0-9]+$/", $string);
//
//echo array("Hello", "World");




