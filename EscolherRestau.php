<?php

session_start();



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

        .div {
            width: 38%;
            height: 35%;
            background-color: #6998AB;
            border-radius: 2%;
            position: absolute;
            top: 36%;
            left: 32%;
            box-shadow: 4px 5px rgba(0, 0, 0, 0.535);
            text-align: center;
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

        .text {
            color: rgb(7, 7, 7);
            font-size: 2vw;
        }
    </style>
    <title>Document</title>
</head>
<body>
    
    <form action="DeletarRestau.php" method="post">
    <h2>Nome do restaurante que vai ser deletado</h2>

    <input type="text" name="Nome" placeholder="Nome do restaurante">
    <input type="submit" value="Deletar">

    </form>

</body>
</html>