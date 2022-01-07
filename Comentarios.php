<?php 

session_start();

$p = $_SESSION['USU_codigo'];
$Comentario = $_POST['Comentario'];

require 'conec.php';

$sql = "INSERT INTO COMENTARIO (COM_texto,COM_USU_codigo) VALUES (:Comentario, :p)";

$cmd = $pdo->prepare($sql);

$cmd -> bindValue(":Comentario", $Comentario);

$cmd -> bindValue(":p",$p);

$cmd -> execute();


header("location:Home.php");

?>