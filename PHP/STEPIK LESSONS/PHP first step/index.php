<?php

function some_times(int $N, string $S)
{
    for ($i = 0; $i < $N; $i++) {
        echo $S . PHP_EOL;
    }
}

some_times(3,"Весна");

