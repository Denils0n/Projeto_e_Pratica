<?php

$pesquisa = $_POST['pesquisa'];

require 'conec.php';


$sql = "select RES_exp from RESTAURANTE where RES_exp = '$pesquisa'";

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
</head>
<body>
    
    <?php if ($PESQUISA === false) :?>
        <div>
            <p> restalrante encontrado </p>
        </div>
           <?php exit(); ?>
    <?php endif ?>


<?php

 $sql = " SELECT RES_codigo,RES_nome, RES_exp, RES_local, RES_dias_abre from RESTAURANTE where RES_exp = '$pesquisa' ORDER BY RES_nome";
 $cmd = $pdo ->query($sql);
 $dados = $cmd -> fetchAll(PDO::FETCH_ASSOC);


?>

<table>
    <tr>
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
        <td><a href="">Apagar</a> <a href=""> editar</a></td>
        </tr>

    <?php endfor?>









</table>



</body>
</html>