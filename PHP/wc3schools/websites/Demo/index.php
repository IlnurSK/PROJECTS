<?php

declare(strict_types=1);

// WC3schools/PHP DAY 5

//$newFile = fopen('newfile.txt','a') or die('Unable to open file!');
//$txt = 'Donald Duck' . '<br>';
//fwrite($newFile, $txt);
//$txt = 'Goofy Goof' . '<br>';
//fwrite($newFile, $txt);
//fclose($newFile);
//echo readfile('newfile.txt');

//$str = "<h1>Hello World!</h1>";
//$newStr = filter_var($str, FILTER_SANITIZE_STRING);
//echo $newStr;
//print_r(FILTER_SANITIZE_STRING);

//$int = 0;
//
//if (filter_var($int,FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
//    echo ("Integer is valid");
//} else {
//    echo ("Integer is not valid");
//}

//$ip = "127.0.0.2";
//
//if (!filter_var($ip,FILTER_VALIDATE_IP) === false) {
//    echo ("$ip is a valid IP address");
//} else {
//    echo ("$ip is not a valid IP address");
//}

$email = "!   john.doe 2@ example. com";

$email = filter_var($email, FILTER_SANITIZE_EMAIL);

if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo ("$email is a valid email address");
} else {
    echo ("$email is not a valid email address");
}