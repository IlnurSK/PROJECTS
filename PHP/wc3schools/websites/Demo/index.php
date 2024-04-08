<?php

declare(strict_types=1);

// WC3schools/PHP DAY 3


//$cars = array('BMW' => 'Bucket', 'Mercedes' => 'Bath', 'Audi' => 'Pool');
//
//$carsToCase = array_change_key_case($cars,CASE_UPPER);
//
//echo '<pre>';
//var_dump($GLOBALS['cars']);
//echo '<pre>';

//$x = 75;
//
//function myfunction() {
//    echo $x;
//}
//
//myfunction();

//echo $_SERVER['PHP_SELF'] . '<br>';
//echo $_SERVER['SERVER_NAME'] . '<br>';
//echo $_SERVER['HTTP_HOST'] . '<br>';
////echo $_SERVER['HTTP_REFERER'] . '<br>';
//echo $_SERVER['HTTP_USER_AGENT'] . '<br>';
//echo $_SERVER['SCRIPT_NAME'];

//echo '<pre>';
//print_r($_SERVER);
//echo '<pre>';

//echo '<pre>';
//print_r($_REQUEST['firstname']);
//echo '<pre>';

$str = 'Welcome to the CLUB buddy!!';
$pattern = '/club/i';
echo preg_match($pattern,$str);
