<?php

    $email = $_POST['email'];

    $senha = $_POST['senha'];

    require 'conec.php';

    $sql = "select * from USUARIO where USU_email = '$email' and USU_senha = '$senha'";
    
    $resultado = $pdo->query($sql);

    $USUARIO = $resultado->fetch(); 

    if ($USUARIO === false) {
    
        header("location: index.php?msg= Email ou senha errada.");
        exit();
    }
    session_start();

    $_SESSION['auth'] = true;
    $_SESSION['USU_codigo'] = $USUARIO['USU_codigo'];
    $_SESSION['USU_nome'] = $USUARIO['USU_nome'];

    header("location: Home.php?msg= conta deletada");



?>