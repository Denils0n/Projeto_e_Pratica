<?php 

session_start();
$id = $_SESSION['com'];

require 'conec.php';
$cmd = $pdo->prepare("DELETE FROM COMENTARIO WHERE COM_codigo =:id");

$cmd -> bindValue(":id",$id);

$cmd -> execute();


header("location: Vercom.php");

?>