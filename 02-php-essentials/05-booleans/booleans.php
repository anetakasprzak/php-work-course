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

            // var_dump(true);
            // var_dump(false);

            // $value = true;
            // var_dump($value);

            // echo "----\n";

            // $meaning = 42;
            // var_dump($meaning > 13);
            // var_dump(42 > 13);
            // var_dump((40 + 2) >= 13);

            // echo "----\n";

            // $name = 'Aneta';
            // var_dump($name === 'Anetaa');
            // var_dump($name !== 'Anetaa');


            // $age = 32;
            // var_dump($age === 32); //true
            // var_dump($age === '32'); //false
            // var_dump($age == '32'); //true
            // var_dump($age != '32'); //false


            $number = 5;
            var_dump(!($number === 5)); //false

            echo "----\n";

            //and operator
            var_dump(true && true);

            $views = 50000;
            if ($views >= 10000 && $views <= 100000) {
                echo 'This is a medium performing video';
            };

            echo "\n----\n";

            //or operator
            var_dump(false || false); // output=>false, at least one side has to be true

            //xor operator - not used often
            var_dump(true xor true); //either or statement, expects only one true, here output will be false

            ?></pre>
</body>

</html>