<?php
$string = "PHP56_testing";

echo preg_match("/^[A-Za-z0-9]*$/", $string);
echo preg_match("/56_test/", $string);
echo preg_match("/^PHP(\w)*/", $string);