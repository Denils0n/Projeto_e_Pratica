<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            margin-top: 5%;
            margin-left: 6%;
            font-size: 40px;

        }

        #p {

            margin-top: 8%;
            margin-left: 37%;
            font-size: 300%;
        }

        #d {

            font-size: 150%;


        }
    </style>
</head>

<body>
    
    <?php if (isset($_GET['msg'])) : ?>
        
        <div> <?= $_GET['msg'] ?> </div>
        
        <?php endif ?>
        
    <a href="Home.php">VOLTAR</a>
    
        <p id="p">Adicionar restaurante</p>
        <form action="AddR.php" method="POST" class="t">
            <input type="text" name="Nome" placeholder="EX:casa da carne">
            <input type="text" name="Exp" placeholder="EX:Carne">
            <input type="text" name="Local" placeholder="EX:rua, lote, número">
            <input type="text" name="Dias" placeholder="EX: seg,ter,qua...">
            <input type="nuber" name="Telefone" placeholder="EX:12345678">
            <input type="submit" value="Registrar">

        </form>
    


</body>

</html>