<?php

function variable_amount(int ...$numbers)
{
    return count($numbers);

}

echo variable_amount(4,5,2,1,6);