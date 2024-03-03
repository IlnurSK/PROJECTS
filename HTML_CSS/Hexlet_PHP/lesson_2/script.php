<!-- Реализуйте функцию isPalindrome(), которая принимает на вход слово и определяет, является ли оно палиндромом, а затем возвращает логическое значение.

Чтобы определить палиндром, достаточно сравнивать попарно символы с обоих концов слова. Если они все равны, это палиндром. Решите задачу без использования реверса строки (функция strrev()).

Примеры использования:
isPalindrome('radar'); // true
isPalindrome('maam'); // true
isPalindrome('a');     // true
isPalindrome('abs');   // false
// Функция должна уметь работать с юникодом
isPalindrome('шалаш'); // true
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // BEGIN (write your solution here)
    function isPalindrome($str)
    {
        $result = "";
        for ($i = 0; $i < mb_strlen($str); $i++) {
            $currentChar = mb_substr($str, $i, 1);
            $result = "{$currentChar}{$result}";
        }
        return $result === $str;
    }
    // END
    print_r(isPalindrome('radar'));
    print_r("\n");
    print_r(isPalindrome('maam'));
    print_r("\n");
    print_r(isPalindrome('a'));
    print_r("\n");
    print_r(isPalindrome('abs'));
    print_r("\n");
    print_r(isPalindrome('шалаш'));
    ?>
</body>

</html>

<!-- Решение учителя

   // BEGIN
function isPalindrome(string $word)
{
    $lastIndex = mb_strlen($word) - 1;
    $middleIndex = $lastIndex / 2;
    for ($i = 0; $i < $middleIndex; $i++) {
        $symbol = mb_substr($word, $i, 1);
        $mirroredSymbol = mb_substr($word, $lastIndex - $i, 1);
        if ($symbol !== $mirroredSymbol) {
            return false;
        }
    }
    return true;
}
-->