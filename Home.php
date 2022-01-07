<?php

session_start();

if (!isset($_SESSION['auth']) || $_SESSION['auth'] !== true ) {
    header("location: index.php");
    exit();
}

require 'conec.php';

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
        
        
        <a href="DeletarConta.php">Apagar conta</a>
        <a href="TrocarNome.php">Mudar nome</a>

    <h1>Bem vindo(a) <?= $_SESSION['nome']  ?></h1>

    <fieldset>
        <legend>Campo de pesquisa</legend>
        <form action="Pesquisa.php" method="POST">
        <input type="text" name="pesquisa">
        <input type="submit" value="Pesquisar">
        </form>
    </fieldset>

    <td>
        <th>Nome</th>
        <th>Exp</th>
        <th>Local</th>
        <th>dias</th>
        <th>Telefone</th>
    </td>
    <a href="re.php">Registrar restaurantes</a>
    <a href="EscolherRestau.php">Apagar restaurante</a>
    <h2>Comentario</h2>
    <a href="AddComen.php">Adicionar</a>
    <a href="Vercom.php">Ver comentario</a>

</body>
</html>