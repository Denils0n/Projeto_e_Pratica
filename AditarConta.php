<?php

$Nome = $_POST['Nome'];
$id = $_POST['id'];

require 'conec.php';
$cmd = $pdo->prepare("UPDATE USUARIO SET USU_nome = :Nome WHERE USU_codigo =:id");
$cmd -> bindValue(":Nome",$Nome);

$cmd -> bindValue(":id",$id);

$cmd -> execute();

$_SESSION['USU_nome'] = $Nome;

header("location: Home.php")
?>