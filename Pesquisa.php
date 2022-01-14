<?php

$pesquisa = $_POST['pesquisa'];

require 'conec.php';


$sql = "SELECT RES_exp FROM RESTAURANTE WHERE RES_exp = '$pesquisa'";

$cmd = $pdo -> prepare($sql);

$cmd -> execute();

$resultado = $pdo->query($sql);

$PESQUISA = $resultado->fetch();




session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input {
            display: block;
        }

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

        #CampCima {

            background-color: #0071a1;


        }
    </style>
</head>
<body>
    
    <?php if ($PESQUISA === false) :?>
        <div>
            <p> restalrante encontrado </p>
        </div>
           <?php exit(); ?>
    <?php endif ?>


<?php

 $sql = " SELECT RES_codigo,RES_nome, RES_exp, RES_local, RES_dias_abre FROM RESTAURANTE WHERE RES_exp = '$pesquisa' ORDER BY RES_nome";
 
 $cmd = $pdo -> prepare($sql);
 
 $cmd -> execute();
 
 $cmd = $pdo ->query($sql);
 
 $dados = $cmd -> fetchAll(PDO::FETCH_ASSOC);


?>

<table>
    <tr id="CampCima">
        <td>Nome</td>
        <td>Expecialidade</td>
        <td>Localização</td>
        <td>Dias de funcionamento</td>
    </tr>

    <?php for ($i = 0; $i < count($dados); $i++) :?>

        <tr>

            <?php foreach($dados[$i] as $k => $v) :?>

                <?php if($k != 'RES_codigo') :?>

                    <th>
                        <?= $v ?>
                    </th>

                <?php endif ?>
            
            <?php endforeach ?>
        </tr>

    <?php endfor?>


</table>



</body>
</html>