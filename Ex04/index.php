<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <title>Demo</title>
    <style>
        body {
            display: block;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }

        li {
            padding-bottom: 5px;
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
            'ano' => '1980',
            'site' => 'www.google.com'
        ],

        [
            'name' => "Livro 2",
            'autor' => 'Andy',
            'ano' => '1984',
            'site' => 'www.terra.com'
        ]
    ];

    function filterByAuthor($books, $autor)
    {
        $filteredBooks = [];

        foreach ($books as $book){
            if($book['autor'] === $autor){
                $filteredBooks[] = $book;
        }
    }

    return $filteredBooks;

}

    ?>

    <ul>
        <?php foreach (filterByAuthor($books, 'Philip') as $book): ?>

            <li>

                <a href="<?= $book['site'] ?>">
                    <?= $book['name']; ?> (<?= $book['ano'] ?>)
                </a>
            </li>

        <?php endforeach; ?>

    </ul>


</body>

</html>