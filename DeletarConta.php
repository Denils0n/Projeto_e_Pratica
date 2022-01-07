<?php

require 'conec.php';
session_start();
$dados = $_SESSION['codigo'];
var_dump($_SESSION);
$id = $dados;

$sql = ("DELETE FROM USUARIO WHERE USU_codigo =:id");

$cmd = $pdo -> prepare($sql);

$cmd -> bindValue(":id",$id);

$cmd -> execute();



header("location: index.php?msg = Conta apagada");
?>

