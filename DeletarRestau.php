<?php


$Nome = $_POST['Nome'];

require 'conec.php';
$cmd = $pdo->prepare("DELETE FROM RESTAURANTE WHERE RES_nome =:id");

$cmd->bindValue(":id",$Nome);
$cmd->execute();

header("location: Home.php");


?>