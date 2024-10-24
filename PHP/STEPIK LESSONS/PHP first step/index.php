<?php

$inputNum = readline();
$countLastNums = readline();

$calcNum = $inputNum % (10**$countLastNums);

$resMul = 1;
$resPlus = 0;
$pointer = 0;
for ($i = 1; $i <= $countLastNums; $i++) {
    $pointer = (($calcNum % (10**$i)) - ($calcNum % (10**($i - 1))))/10**($i - 1);
    $resMul *= $pointer;
    $resPlus += $pointer;
}
echo "$resPlus $resMul";