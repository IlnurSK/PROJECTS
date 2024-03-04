<!-- Реализуйте функцию reverse(), которая переворачивает цифры в переданном числе:
reverse(13); // 31
reverse(-123); // -321
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
    function reverse(int $intToStr = null): int
    {
        $result = strrev((string)$intToStr);
        if (abs($intToStr) === $intToStr) {
            return (int)$result;
        } else {
            return -(int)$result;
        }
    }
    // END
    print_r(reverse(13));
    print_r("\n");
    print_r(reverse(-123));
    print_r("\n");
    print_r(reverse(0));
    print_r("\n");
    print_r(reverse(-73));
    print_r("\n");
    print_r(reverse(-1342343));
    ?>
</body>

</html>

<!-- Решение учителя

 // BEGIN
function reverse(int $num): int
{
    $reverse = (int) strrev((string) abs($num));
    return $num >= 0 ? $reverse : -$reverse;
}
// END
-->