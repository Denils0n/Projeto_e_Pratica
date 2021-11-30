<?php

session_start();

if (!isset($_SESSION['auth']) || $_SESSION['auft'] !== true ) {
    header("location: index.php");
    exit();
}

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
    

    <h1>Bem vindo <?= $_SESSION['USU_nome'] ?></h1>

    <fieldset>
        <legend>Campo de pesquisa</legend>
        <form action="Pesquisa.php" method="POST">
        <input type="text" name="pesquisa" placeholder="EX: Carne">
        <input type="submit" value="Pesquisar">
        </form>
    </fieldset>

</body>
</html>