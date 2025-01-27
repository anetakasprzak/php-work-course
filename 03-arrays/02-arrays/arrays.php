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

            /* $category1 = 'Programming';
    $category2 = 'Business';
    $category3 = 'Art & Drawing';
    $category4 = 'Self improvement';
    $category5 = 'History';     */

            $categories = ['Programming', 'Business', 'Art & Drawing', 'Self improvement', 'History'];

            var_dump($categories);
            echo $categories[0] . "\n";

            $firstCategory = $categories[0];
            var_dump($firstCategory);

            ?></pre>
</body>

</html>