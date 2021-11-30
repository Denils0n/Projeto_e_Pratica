<?php

    $email = $_POST['email'];

    $senha = $_POST['senha'];

    $pdo = new PDO("mysql:dbname=DadosUsuarios","root","root");
    
    $sql = "select * from USUARIO where USU_email = '$emil' and USE_senha = '$senha'";
    
    $resultado = $pdo->query($sql);

    if ($resultado->fetch() === false) {
    
        header("location: index.php?msg= Email ou senha errada.");
        exit();
    }
    session_start();

    $_SESSION['auth'] = true;
    $_SESSION['USU_codigo'] = $USUARIO['USU_codigo'];
    $_SESSION['USU_nome'] = $USUARIO['USU_nome'];

    header("location: Home.php");



?>