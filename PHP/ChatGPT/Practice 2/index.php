<?php

// Практика 2: Массивы чисел - создание и подсчет суммы и среднего значения
$arrNumbers = array(1,12,33,55,123,55);


if (count($arrNumbers) > 0) {
    $sumNumbers = number_format(array_sum($arrNumbers),2);
    echo "Сумма чисел в массиве arrNumbers = $sumNumbers" . PHP_EOL;

    $avgNumbers = number_format($sumNumbers / count($arrNumbers),2);
    echo "Среднее значение чисел в массиве arrNumbers = $avgNumbers" . PHP_EOL;
} else {
    echo "Массив пустой. Невозможно вычислить сумму и среднее значение." . PHP_EOL;
}




