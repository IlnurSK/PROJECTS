<?php

function win_or_lose($num)
{
    switch ($num) {
        case 0:
            return "Поражение";
        case 3:
            return "Победа";
        case 1:
            return "Ничья";
        default:
            return "Странное число";
    }
}

echo win_or_lose(3);
echo win_or_lose(0);
echo win_or_lose(1);
echo win_or_lose(2);

