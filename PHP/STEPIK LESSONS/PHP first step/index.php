<?php

function sum_of_numbers_more(int $num1, int $num2)
{
    return array_sum(str_split($num1)) > array_sum(str_split($num2)) ? $num1 : $num2;
}

echo sum_of_numbers_more(99,11111);