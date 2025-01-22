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
            include 'vars.php';

            if ($serverStatus === 'ok') {
                echo '🟢 Welcome to our website!';
            } else if ($serverStatus === 'error') {
                echo '🔴 There was an error';
            } else {
                echo '🔴 We\'re currently undergoing maintenance. Please check back later';
            }

            echo "\n----\n";
            ?></pre>
</body>

</html>