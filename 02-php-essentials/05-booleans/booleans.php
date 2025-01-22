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

            var_dump(true);
            var_dump(false);

            $value = true;
            var_dump($value);

            echo "----\n";

            $meaning = 42;
            var_dump($meaning > 13);
            var_dump(42 > 13);
            var_dump((40 + 2) >= 13);

            echo "----\n";

            $name = 'Aneta';
            var_dump($name === 'Anetaa');
            var_dump($name !== 'Anetaa');


            $age = 32;
            var_dump($age === 32); //true
            var_dump($age === '32'); //false
            var_dump($age == '32'); //true
            var_dump($age != '32'); //false



            ?></pre>
</body>

</html>