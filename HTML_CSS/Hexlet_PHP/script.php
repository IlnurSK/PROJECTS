<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    setlocale(LC_ALL, 'ru_RU');
    function invertCase($text)
    {
        // BEGIN (write your solution here)
        $result = '';    
        for ($i = 0; $i < mb_strlen($text); $i+=1) {
            $symbol = mb_substr($text, $i, 1);
            if (mb_strtoupper($symbol) === $symbol) {            
                $result = $result . mb_strtolower($symbol);
            } else {            
                $result = $result . mb_strtoupper($symbol);
            }        
        }
        return $result;
        // END
    }
    print_r(invertCase("test\n"));
    print_r(invertCase("tEsTss\n"));
    print_r(invertCase('РуСскИй'));
    ?>
</body>

</html>