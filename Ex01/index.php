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
    
<?php

        $name = "Matéria Escura";
        $read = "false";

        if ($read){
            $message = "Você leu o livro $name";
        } else{
            $message = "Você não leu o livro $name";
        }

        ?>

    <h1>
       <?php echo $message; ?>

       <?= $message ?>

    </h1>

</body>
</html>