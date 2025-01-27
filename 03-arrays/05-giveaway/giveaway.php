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

            $names = [
                'Emily Johnson',
                'Michael Smith',
                'Sarah Williams',
                'James Brown',
                'Jennifer Davis',
                'William Miller',
            ];

            $num = count($names); //gives number of elements
            // var_dump($num);

            //pick random number
            $choice = (rand(0, $num - 1)); //rand numb 0 to 5
            var_dump($names[$choice]);
            echo "The winner is: {$names[$choice]}";

            //all above in 1 line
            // var_dump($names[rand(0, count($names) - 1)]);

            ?></pre>
</body>

</html>