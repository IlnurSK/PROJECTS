<?php

function dd($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';

    die();
}

function urlIs($link)
{
    return $_SERVER['REQUEST_URI'] === $link;
}
