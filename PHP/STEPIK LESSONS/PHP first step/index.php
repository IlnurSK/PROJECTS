<?php

function rectangle(int $int1, int $int2)
{
    $array = [];
    while ($int1--) {
        array_push($array,'*');
    }
    $line = implode(" ", $array);
    while ($int2--) {
        echo "$line\n";
    }
}

rectangle(4,4);