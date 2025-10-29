<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <title>Demo</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>

</head>

<body>

    <h1> Recommended Books</h1>

    <?php

    $books = [

        [
            'name' => "Livro 1",
            'autor' => 'Philip',
            'site' => 'www.google.com'
        ],

        [
            'name' => "Livro 2",
            'autor' => 'Andy',
            'site' => 'www.terra.com'
        ]
    ];

    ?>

    <?php foreach ($books as $book): ?>

        <li>

        <a href="<?= $book['site'] ?>">
            <?= $book['name']; ?>
            </a>
        </li>

    <?php endforeach; ?>

</body>

</html>