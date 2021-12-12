<?php

session_start();



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <h2>Digte seu comentario</h2>
    <form action="Comentarios.php" method="post">

        <input type="text" name="Comentario" placeholder="Digite seu comentario.">
        <input type="submit" value="Comentar">

    </form>

</body>
</html>