<?php

$pesquisa = $_POST['pesquisa'];

require 'conec.php';


$sql = "select RES_exp from RESTAURANTE where RES_exp = '$pesquisa'";

$resultado = $pdo->query($sql);
$PESQUISA = $resultado->fetch();
//var_dump($resultado);
/*
if ($PESQUISA !== false) {
    header ("location: Pesquisa.php?msg= infelizmente não encontramos restaurante :(");
    exit();
}*/

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
    
<?php

$sql = "select RES_nome, RES_exp, RES_local, RES_dias_abre from RESTAURANTE where RES_exp = '$pesquisa'";
$pdo->exec($sql);



?>


</body>
</html>