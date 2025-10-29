<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aulas PHP</title>
    <style>
        body {
            display: block;
            background-color: lightgrey;
            height: 100vh;
            margin-left: 20px;
            font-family: sans-serif;
        }

        h1 {
            background-color: white;
            padding: 10px;
            color: blue;
            text-align: center;
        }

        li {
            background-color: white;
            margin: 0 20%;
            padding: 5px;
        }
    </style>
</head>

<body>

    <?php

    $aulas = [

        [
            'aula' => "Aula 1- Variáveis/ Condicionais",
            'link' => 'http://localhost/Github/aulas-php/Ex01/'
        ],

        [
            'aula' => "Aula 2- Array",
            'link' => 'http://localhost/Github/aulas-php/Ex02/'
        ],

        [
            'aula' => "Aula 3- Array Associativo",
            'link' => 'http://localhost/Github/aulas-php/Ex03/'
        ],

        [
            'aula' => "Aula 4- Funções e filtros",
            'link' => 'http://localhost/Github/aulas-php/Ex04/'
        ]
    ];

    ?>
    <h1>Aulas PHP</h1>

    <?php foreach ($aulas as $aula): ?>

        <li>

            <a href="<?= $aula['link'] ?>">
                <?= $aula['aula']; ?>
            </a>
        </li>

    <?php endforeach; ?>

</body>

</html>