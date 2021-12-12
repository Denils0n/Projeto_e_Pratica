<?php

session_start();
$dados = $_SESSION['USU_codigo'];
require 'conec.php';
$cmd = $pdo->prepare("DELETE FROM USUARIO WHERE USU_codigo =:id");
$id = $dados;
$cmd->bindValue(":id",$id);
$cmd->execute();

header("location: index.php?msg = Conta apagada");
?>