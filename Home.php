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



    <?php if (isset($_SESSION['auth']) && $_SESSION['auth'] !== null) : ?>
        <a href="SairConta.php">Sair da conta</a>
    <?php else : ?>
        </p> <a href="Login.php"> Usar conta</a> <a href="RegistrarUsuario.php">Criar uma conta</a>
    <?php endif ?>


    <h1>Bem vindo(a) <?= $_SESSION['nome']  ?></h1>

    <fieldset>
        <legend>Campo de pesquisa</legend>
        <form action="Pesquisa.php" method="POST">

            <input type="text" name="pesquisa">
            <input type="submit" value="Pesquisar">
        </form>
    </fieldset>

    <?php

    $sql = " SELECT RES_codigo,RES_nome, RES_exp, RES_local, RES_dias_abre FROM RESTAURANTE ORDER BY RES_nome";

    $cmd = $pdo->prepare($sql);

    $cmd->execute();

    $cmd = $pdo->query($sql);

    $dados = $cmd->fetchAll(PDO::FETCH_ASSOC);


    ?>

    <table>
        <tr>
            <td>Nome</td>
            <td>Expecialidade</td>
            <td>Localização</td>
            <td>Dias de funcionamento</td>
        </tr>

        <?php for ($i = 0; $i < count($dados); $i++) : ?>

            <tr>

                <?php foreach ($dados[$i] as $k => $v) : ?>

                    <?php if ($k != 'RES_codigo') : ?>

                        <th>
                            <?= $v ?>
                        </th>

                    <?php endif ?>

                <?php endforeach ?>
                <td><a href="">Apagar</a> <a href=""> editar</a></td>
            </tr>

        <?php endfor ?>

    </table>
    <a href="re.php">Registrar restaurantes</a>
    <a href="EscolherRestau.php">Apagar restaurante</a>
    <h2>Comentario</h2>
    <a href="AddComen.php">Adicionar</a>
    <a href="Vercom.php">Ver comentario</a>

</body>

</html>