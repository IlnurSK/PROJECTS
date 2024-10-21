<?php

class Tree
{
    public $kind = "Дуб";

    public function viewKind()
    {
        echo $this->kind;
    }
}

$elk = new Tree();
$elk->viewKind();