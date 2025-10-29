<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">

    <title>Demo</title>
    <style>
        body{
            display:grid;
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

    "Do Android Dream of Electric Sheep",
    "The Langoliers",
    "Hail Mary",
    "Teste"
];

?>
<ul>
    <?php foreach($books as $book):?>

    <li><?= $book ?></li>

    <?php endforeach;?>

</ul>
</body>
</html>