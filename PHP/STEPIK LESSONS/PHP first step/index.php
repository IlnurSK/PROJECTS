<?php

$lines = file("main.txt");
foreach ($lines as $line) {
    echo $line;
}