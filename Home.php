<?php

session_start();

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
        
        <?php if ($_SESSION['auth'] !== null) :?>
            <a href="">Perfil</a>
        <?php endif?>
        
        
        <?php if ($_SESSION['auth'] === null) :?>
            </p> <a href="Login.php"> Usar conta</a> <a href="RegistrarUsuario.php">Criar uma conta</a>
            
        <?php endif?>
        
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