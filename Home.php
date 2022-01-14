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
    <style>
        body {
            background-color: #b1d0e0;

        }

        h1 {
            margin-left: 25%;
        }

        h2 {
            margin-top: 8%;
            margin-left: 47%;
            font-size: 40px;

        }

        .text {
            color: rgb(7, 7, 7);
            font-size: 2vw;
        }



        input {
            display: block;
            margin-top: -2.5%;
            margin-left: 2%;
            font-size: 20px;
            float: left;
        }

        #p {

            margin-top: -2%;
            margin-left: 2%;
            font-size: 300%;
        }

        #d {

            font-size: 150%;


        }

        #pes {

            margin-left: 24.2%;

        }

        #h {

            margin-top: -3.8%;
            margin-left: -1%;
            font-size: 40px;
            width: 110%;
            height: 50%;


            background-color: #406882;
            border-radius: 1px;

        }

        #a2 {

            margin-left: 76.84%;
            font-size: 200%;

        }

        #a1 {

            margin-top: -4px;
            font-size: 200%;

       }
        #CampCima{

            background-color: #0071a1;
            

        } 

    </style>
    <title>Document</title>
</head>

<body>

    <?php if (isset($_SESSION['auth']) && $_SESSION['auth'] !== null) : ?>
        <a href="SairConta.php" id="a1">Sair da conta</a>
    <?php else : ?>
        </p> <a href="Login.php" id="a1"> Usar conta</a> <a href="RegistrarUsuario.php" id="a2">Criar uma conta</a>
    <?php endif ?>


    <div id="h">
        <h1 id="nome">Bem vindo(a) <?= $_SESSION['nome']  ?></h1>
    </div>

    <p id="p">Campo de pesquisa</p>
    <form action="Pesquisa.php" method="POST">

        <input type="text" name="pesquisa">
        <input type="submit" value="Pesquisar" id="pes">
    </form>
    <br>
    <br>

    <?php

    $sql = " SELECT RES_codigo,RES_nome, RES_exp, RES_local, RES_dias_abre FROM RESTAURANTE ORDER BY RES_nome";

    $cmd = $pdo->prepare($sql);

    $cmd->execute();

    $cmd = $pdo->query($sql);

    $dados = $cmd->fetchAll(PDO::FETCH_ASSOC);


    ?>


    <table width="40%">
        <tr id="CampCima" >
            <td> Nome </td>
            <td> Expecialidade    </td>
            <td> Localização    </td>
            <td> Dias de funcionamento    </td>
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
            </tr>

        <?php endfor ?>

    </table>

<a href="re.php">Add restau</a>

</body>

</html>