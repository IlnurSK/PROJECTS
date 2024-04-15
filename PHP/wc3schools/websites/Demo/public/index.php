<?php

declare(strict_types=1);


// WC3schools/PHP DAY 7


//$arr = array(1,2,3,4);
//echo $arr;
//phpinfo();

$servername = 'db';
$username = 'root';
$password = 'root';

//$conn = new mysqli($servername, $username, $password);
//
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//echo "Connected successfully";

//$conn = mysqli_connect($servername, $username, $password);
//
//if (!$conn) {
//    die("Connection failed: " . mysqli_connect_error());
//}
//echo "Connected successfully";

//echo 'hello';

try {
    $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}