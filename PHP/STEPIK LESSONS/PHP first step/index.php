<?php

interface Reptile {
    public function voice();
}

class Snake implements Reptile
{

    public function voice()
    {
        echo "Ш-ш-ш-ш";
    }
}

$python = new Snake();
$python->voice();