<?php 

$Nome = $_POST['Nome'];
$Exp = $_POST['Exp'];
$Local = $_POST['Local'];
$Dias = $_POST['Dias'];

$Telefone = $_POST['Telefone'];


require 'conec.php';

$sql = "select RES_nome from RESTAURANTE where RES_nome = '$Nome'";

$resultado = $pdo->query($sql);

if ($resultado->fetch() !== false) {

    header("location: re.php?msg=Restaurante já cadastrado.");
    exit();
}

$sql = "insert into RESTAURANTE(RES_nome, RES_exp, RES_local, RES_dias_abre, RES_telefone) values (:Nome, :Exp, :Local, :Dias, :Telefone)";

$cmd = $pdo -> prepare($sql);

$cmd -> bindValue(":Nome",$Nome);

$cmd -> bindValue(":Exp",$Exp);

$cmd -> bindValue(":Local",$Local);

$cmd -> bindValue(":Dias",$Dias);

$cmd -> bindValue(":Telefone",$Telefone);

$cmd -> execute();

header("location: VerificaDadosLogin.php?msg=Restaurante cadastrado.");

?>
