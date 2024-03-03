<!-- Реализуйте функцию getCustomDate(), которая принимает дату в формате timestamp и возвращает ее в формате 15/03/1985:
getCustomDate(1532435204); // 24/07/2018
getCustomDate(532435204);  // 15/11/1986
getCustomDate(5324352);    // 03/03/1970 -->

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
function getCustomDate($timestamp)
{
    return date("d\/m\/o", $timestamp);
}
// END
    print_r(getCustomDate(1532435204));
    print_r("\n");
    print_r(getCustomDate(532435204));
    print_r("\n");
    print_r(getCustomDate(5324352));
    ?>
</body>

</html>

<!--Решение учителя 
    // BEGIN
function getCustomDate($timestamp)
{
    return date('d/m/Y', $timestamp);
}
// END -->