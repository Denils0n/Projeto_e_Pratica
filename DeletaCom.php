<?php 

session_start();
$id = $_SESSION['com'];

require 'conec.php';
$sql = "DELETE FROM COMENTARIO WHERE COM_codigo =:id";

$cmd = $pdo -> prepare($sql);

$cmd -> bindValue(":id",$id);

$cmd -> execute();


header("location: Vercom.php");
echo $id;

?>