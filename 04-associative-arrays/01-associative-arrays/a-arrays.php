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
            /*
            $books = [
                'Harry Potter',
                'Lord of the Ring',
                'The Little Princess',
                'Don Quixote',
                'Alice in Wonderland',
            ];

            $authors = [
                'J.K. Rowling',
                'J.R.R. Tolkien',
                'Antoine de Saint-Exupery',
                'Miguel de Cervantes',
                'Lewis Carroll',
            ];

            var_dump("{$books[0]} has been written by {$authors[0]}.");
*/
            // @ supresses potential warnings for the rest of the line
            // This means, we can access $_GET['category'] even if it 
            // does not exist - we will then just get NULL, and no
            // warning will be shown.
            //
            // We will look at @ later in this course!

            $books = [
                'Harry Potter' => 'J.K. Rowling',
                'Lord of the Ring' => 'J.R.R. Tolkien',
                'The Little Princess' =>  'Antoine de Saint-Exupery',
                'Don Quixote' => 'Miguel de Cervantes',
                'Alice in Wonderland' => 'Lewis Carroll',
            ];

            var_dump($books);
            var_dump(isset($books['Harry Potter']));
            var_dump(!empty($books['Harry Potter']));
            var_dump($books['Harry Potter']);

            $key = 'Harry Potter';
            var_dump($books[$key]);

            ?></pre>



</body>

</html>