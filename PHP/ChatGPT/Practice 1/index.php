<?php

// Задача на проверку четности числа, полученного через GET запрос.
if (isset($_GET["number"])) {
    $number = (int) $_GET["number"];
    if ($number % 2 == 0) {
        echo "$number - чётное число.";
    } else {
        echo "$number - нечётное число.";
    }
} else {
    echo "Пожалуйста, передайте параметр number в URL.";
}


