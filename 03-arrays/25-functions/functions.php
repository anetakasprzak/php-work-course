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

            $categories = [
                'Programming',
                'Business',
                'Art & Drawing',
                'Self improvement',
                'History',
            ];

            var_dump(array_search('Business', $categories)); //=init(1), give us the key
            var_dump(array_slice($categories, 1, 2)); //=business,art - gives us part of the array


            $numbers = [1, 5, 8, 10];
            var_dump(min($numbers));
            var_dump(max($numbers));
            var_dump(array_sum($numbers) / count($numbers)); //calc the average

            $topics = ['Courses', 'Books'];
            $topics2 = ['TV', 'Travel'];

            // concat 2 arrays into 1
            $out = array_merge($topics, $topics2);
            var_dump($out);

            // var_dump([...$topics, ...$topics2]);

            $numbers2 = [10.123, 1];
            echo round(...$numbers);
            echo round($numbers[0], $numbers[1]);
            echo round(10.123, 1);


            ?></pre>

</body>

</html>