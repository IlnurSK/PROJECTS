<?php

$file = fopen("main.php", "a");

fwrite($file,"\necho 'World';");

fclose($file);





