<?php 
session_start();

$p = $_SESSION['USU_codigo'];
require 'conec.php';
$cmd = $pdo->prepare("select COM_codigo,COM_texto from COMENTARIO where COM_USU_codigo = '$p'");
$cmd->bindValue(":p",$p);
$cmd->execute();
$res = $cmd->fetch();
$_SESSION['com'] = $res['COM_codigo'];



//$resultado = $pdo->query($sql);



?>

<h2>Comentario</h2>
<table>
    <tr>
       
        <th>Comentario</th>
    </tr>
    <tr>
       

        <td><?=$res[1] ?></td>
        <td> <a href="DeletaCom.php">deletar</a></td>
        <td><a href="EditarCom.php">editar</a></td>
    </tr>
</table>