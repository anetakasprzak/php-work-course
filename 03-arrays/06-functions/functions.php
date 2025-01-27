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
                'William Miller',
                'Emily Johnson',
                'Michael Smith',
                'Sarah Williams',
                'James Brown',
                'Jennifer Davis',
                'William Miller',
                'William Miller',
                'William Miller',
            ];

            $names = array_unique($names); //removes duplicated values from an array, creates copy of the original arr
            sort($names); //sort original arr
            var_dump($names);


            ?></pre>
</body>

</html>