<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .body-1 {
      background-color: grey;
    }

    .body-2 {
      background-color: palegoldenrod;
    }

    .body-3 {
      background-color: palevioletred;
    }

    .body-4 {
      background-color: darkgrey;
    }

    .body-5 {
      background-color: whitesmoke;
    }

    .body-6 {
      background-color: blanchedalmond;
    }
  </style>
</head>

<body class="body-<?php echo rand(1, 6) ?>">
  <?php echo '<h1>Hello from PHP!</h1>' ?>
</body>

</html>