<?php



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
            margin-top: 2%;
            margin-left: 1%;
            font-size: 50px;
        }

        h2 {
            margin-top: 8%;
            margin-left: 47%;
            font-size: 40px;

        }



        .texto {
            width: 80%;
            height: 12%;
            box-shadow: 4px 5px rgba(0, 0, 0, 0.535);
            margin-left: 10%;
            margin-top: 11%;
            background-color: #406882;
            border-radius: 8px;
        }


        .t {
            width: 38%;
            height: 61%;
            background-color: #6998AB;
            border-radius: 2%;
            position: absolute;
            top: 30%;
            left: 32%;
            box-shadow: 4px 5px rgba(0, 0, 0, 0.535);
            text-align: center;
        }

        input {
            display: block;
            margin-top: 6%;
            margin-left: 6%;
            font-size: 40px;

        }

        #p {

            margin-top: 9%;
            margin-left: 45%;
            font-size: 300%;
        }

        #d {

            font-size: 150%;


        }
    </style>
    <title>Adicionar novos usuario</title>

</head>

<body>
    <?php if (isset($_GET['msg'])) : ?>

        <div> <?= $_GET['msg'] ?> </div>

    <?php endif ?>



    <p id="p">Registrar</p>
    <form action="AddUser.php" method="POST" class="t">
        <input type="text" name="nome" placeholder="Nome">
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="senha" placeholder="Senha">
        <input type="number" name="CPF" placeholder="CPF">
        <input type="submit" value="Enviar">
    </form>




</body>

</html>