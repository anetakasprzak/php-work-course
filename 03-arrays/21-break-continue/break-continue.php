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

            // foreach ($categories as $category) {
            //     if ($category !== 'Business') {
            //         var_dump($category);
            //     }
            // }

            foreach ($categories as $category) {
                if ($category === 'Business') continue;
                if ($category === 'Art & Drawing') continue;
                //will not display the two above

                if ($category === 'Self improvement') break; //will break the loop

                var_dump($category);
            }


            ?></pre>
    <ul>
        <?php foreach ($categories as $category): ?>
            <?php if ($category === 'Business') continue; ?>
            <li><?php echo $category; ?></li>
        <?php endforeach; ?>
    </ul>
    <br />
    <br />
    <br />

</body>

</html>