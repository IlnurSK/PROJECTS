<?php

$startNum = readline();
$endNum = readline();
$result = $startNum * $endNum;


if ($startNum == $endNum) {
    echo $result;
} elseif ($startNum < $endNum) {
    while (($endNum - $startNum - 1) != 0) {
        $startNum++;
        $result *= $startNum;
    }
    echo $result;
} elseif ($startNum > $endNum) {
    while (($startNum - $endNum - 1) != 0) {
        $endNum++;
        $result *= $endNum;
    }
    echo $result;
}