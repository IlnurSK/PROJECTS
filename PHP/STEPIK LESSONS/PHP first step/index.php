<?php

do {
    $int = readline();
    if ($int == 10) {
        break;
    } elseif (($int == 5) || ($int == 15)) {
        continue;
    } else {
        echo $int . PHP_EOL;
    }
} while (true);