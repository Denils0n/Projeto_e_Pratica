<?php

    $email = $_POST['email'];

    $senha = $_POST['senha'];

    require 'conec.php';

    $sql = "select USU_codigo,USU_nome from USUARIO where USU_email = '$email' and USU_senha = '$senha'";
    
    $resultado = $pdo->query($sql);

    $USUARIO = $resultado->fetch(); 

    if ($USUARIO === false) {
    
        header("location: Login.php?msg= Email ou senha errada.");
        exit();
    }
    session_start();

    $_SESSION['auth'] = true;
    $_SESSION['codigo'] = $USUARIO['USU_codigo'];
    $_SESSION['nome'] = $USUARIO['USU_nome'];

    header("location:Home.php");
    
 



?>