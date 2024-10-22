<?php

$countNumbers = readline();
$countZero = 0;
$countOdd = 0;
$countEven = 0;

for ($i = 0; $i < $countNumbers; $i++):
    $inputNumber = readline();
if ($inputNumber == 0):
    $countZero++;
elseif ($inputNumber % 2 !== 0):
    $countOdd++;
else:
    $countEven++;
endif;
endfor;

echo "$countZero $countOdd $countEven";