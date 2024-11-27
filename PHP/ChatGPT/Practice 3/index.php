<?php

// Практика 3: Массивы чисел - создание и подсчет суммы и среднего значения. Улучшенная версия через HTML форму.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Проверяем, был ли передан массив чисел
    if (!empty($_POST["numbers"])) {
        // Получаем введенные числа из формы
        $input = $_POST["numbers"];
        // Преобразуем строку в массив, разделяя по запятой
        $arrNumbers = array_map('intval', explode(',', $input));

        if (count($arrNumbers) > 0) {
            $sumNumbers = number_format(array_sum($arrNumbers),2);
            $avgNumbers = number_format($sumNumbers / count($arrNumbers),2);

            echo "Сумма чисел в массиве = $sumNumbers" . "<br>";
            echo "Среднее значение чисел в массиве = $avgNumbers" . "<br>";
        } else {
            echo "Массив пустой. Невозможно вычислить сумму и среднее значение." . "<br>";
        }
    } else {
        echo "Пожалуйста, введите массив чисел." . "<br>";
    }
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ввод массива</title>
</head>
<body>
<form method="POST">
    <label for="numbers">Введите числа через запятую:</label><br>
    <input type="text" id="numbers" name="numbers" placeholder="Например: 1,12,33,55,123,55" required><br><br>
    <button type="submit">Отправить</button>
</form>

</body>
</html>





