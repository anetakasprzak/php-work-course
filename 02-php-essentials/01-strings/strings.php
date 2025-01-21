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

            // SINGLE QUOTES
            // $greeting = 'I\'m a string!';
            // echo $greeting . '!!! ' . $greeting;
            // echo '<br/>';

            // $name = 'Aneta';
            // $subject = 'PHP';

            // $text = 'I\'m ' . $name . ' and I want to learn language ' . $subject;
            // echo $text . '!';

            // DOUBLE QUOTES - allows more things, no need dots to concat string
            // $greeting = "I'm learning PHP!";
            // echo "$greeting!";

            //special characters
            // echo "\n" - new line (something like <br/>)
            // echo "\t-" - tab (extra spacing?)


            $name = 'Aneta';
            $subject = 'PHP';
            echo "I'm {$name} and I'm learning {$subject}.";
            ?></pre>

    <p>1st line of text. <?php echo '<br/>'; ?>2nd line of text</p>
    <p>1st line of text. <?php echo "\n"; ?>2nd line of text</p>
</body>

</html>