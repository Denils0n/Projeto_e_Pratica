<?php 

$Comentario = $_POST['Comentario'];

$id = $_POST['id'];


require 'conec.php';
$cmd = $pdo->prepare("UPDATE COMENTARIO SET COM_texto = :Nome WHERE COM_USU_codigo =:id");
$cmd->bindValue(":Nome",$Comentario);
$cmd->bindValue(":id",$id);
$cmd->execute();



header("location: Home.php")

?>