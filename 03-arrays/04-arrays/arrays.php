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

            $categories = ['Programming', 'Business', 'Art & Drawing', 'Self improvment', 'History'];
            $categories[2] = 'Art and Drawing'; //change el of arr

            // unset($categories[3]); //remove el from arr(mess up with the keys)

            $categories[] = 'Nature books'; //add tp the end of arr

            var_dump($categories);
            ?></pre>
</body>

</html>