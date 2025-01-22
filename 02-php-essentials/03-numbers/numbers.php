<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./simple.css" />
    <title>Document</title>
</head>

<body>
    <pre><?php
            $number = 3;
            echo (4 * 2) . "\n";
            echo ($number + 4) . "\n";
            echo ($number - 1) . "\n";
            echo ($number * 3) . "\n";
            echo ($number / 2) . "\n";

            echo ('5' + '2') . "\n"; //=7
            echo round(3.33, 1) . "\n"; //=3.3
            echo round(3.33, 0) . "\n"; //=3

            //shortcuts
            echo $number = ($number * 2) . "\n"; //=6


            // without echo - variable changes the value
            $number += 2;
            echo $number; //=6 -> now the number has new value
            // \${$itemPrice} -> dollar escape
            ?></pre>
</body>

</html>