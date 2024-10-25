<?php

$x = 1;
while ($x < 11)
{
    if ($x % 2 == 0) {
        $x += 1;
        continue;
    }
    echo $x . "\n";
  $x += 1;
}