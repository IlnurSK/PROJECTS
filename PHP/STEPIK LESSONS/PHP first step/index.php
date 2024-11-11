<?php

function triangle_square(int $length, int $height)
{
    return 1/2 * $length * $height;
}

echo triangle_square(11,4);