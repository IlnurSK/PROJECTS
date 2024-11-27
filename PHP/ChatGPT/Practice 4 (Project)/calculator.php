<?php
// Проект: Интерактивный калькулятор
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = isset($_POST['num1']) ? (float) $_POST['num1'] : 0;
    $num2 = isset($_POST['num2']) ? (float) $_POST['num2'] : 0;
    $operation = $_POST['operation'] ?? '+';

    // Проверка на деление на ноль
    if ($operation == '/' && $num2 == 0) {
        echo "Ошибка: деление на ноль невозможно.";
    } else {
        $result = match ($operation) {
            "+" => $num1 + $num2,
            "-" => $num1 - $num2,
            "*" => $num1 * $num2,
            "/" => $num1 / $num2,
            default => "Неизвестная операция",
        };
        echo "Результат: " . number_format($result,2);
    }
}

