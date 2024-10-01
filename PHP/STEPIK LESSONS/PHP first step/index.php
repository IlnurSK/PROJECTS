<?php

$firstStep = readline() + readline() + readline();
$secondStep = $firstStep * readline();
$thirdStep = $secondStep - ($secondStep % 10);
$fourthStep = $thirdStep / 5;
echo $fourthStep;
