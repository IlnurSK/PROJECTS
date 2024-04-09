<?php

declare(strict_types=1);

// WC3schools/PHP DAY 4

//echo readfile('testfile.txt');
//$myFile = fopen('testfile.txt', "r") or die('Unable to open file!');
//echo fread($myFile, filesize('testfile.txt'));
//echo fgets($myFile);
//echo fgets($myFile);

//while (!feof($myFile)){
//    echo fgets($myFile) . '<br>';
//}

//while (!feof($myFile)) {
//    echo fgetc($myFile);
//}
//echo fgetc($myFile);
//echo fgetc($myFile);
//fclose($myFile);

$newFile = fopen('newfile.txt','a') or die('Unable to open file!');
$txt = 'Donald Duck' . '<br>';
fwrite($newFile, $txt);
$txt = 'Goofy Goof' . '<br>';
fwrite($newFile, $txt);
fclose($newFile);
echo readfile('newfile.txt');