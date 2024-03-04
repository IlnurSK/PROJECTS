<!-- src/Vars.php
Реализуйте функцию swap(), которая меняет местами аргументы, переданные по ссылке:
$a = 5;
$b = 8;
swap($a, $b);
 
print_r($a); // 8
print_r($b); // 5

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
    function swap(&$a, &$b): void
    {
        $c = $a;
        $a = $b;
        $b = $c;
    }
    // END
    $a = 5;
    $b = 8;
    swap($a, $b);
    print_r($a); // 8
    print_r("\n");
    print_r($b); // 5
    ?>
</body>

</html>

<!-- Решение учителя

 // BEGIN
function swap(&$a, &$b)
{
    $c = $a;
    $a = $b;
    $b = $c;
}
// END
-->