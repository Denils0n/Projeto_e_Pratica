<?php 

$Nome = $_POST['Nome'];
$Exp = $_POST['Exp'];
$Local = $_POST['Local'];
$Dias = $_POST['Dias'];
//$Abetura = $_POST['Abetura'];
//$Feichamento = $_POST['Feichamento'];
$Telefone = $_POST['Telefone'];


require 'conec.php';

$sql = "select * from RESTAURANTE where RES_nome = '$Nome'";

$resultado = $pdo->query($sql);
//header("location: index.php?msg=é isso");
if ($resultado->fetch() !== false) {

    header("location: re.php?msg=Restaurante já cadastrado.");
    exit();
}

$sql = "insert into RESTAURANTE(RES_nome, RES_exp, RES_local, RES_dias_abre, RES_telefone) values ('$Nome', '$Exp', '$Local', '$Dias', '$Telefone')";

 $pdo->exec($sql);

 header("location: re.php?msg=Restaurante cadastrado.");

?>
