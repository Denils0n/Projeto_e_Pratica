<?php
    


    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $CPF = $_POST['CPF'];

    //echo ola;

    $pdo = new PDO("mysql:dbname=DadosUsuarios","root","root");
    
    $sql = "select * from USUARIO where USE_cpf = '$CPF'";
    
    $resultado = $pdo->query($sql);

    if ($resultado->fetch() !== false) {
    
        header("location: index.php?msg= CFP já cadastrado.");
        exit();
    }

    $sql = "insert into USUARIO(USU_nome, USU_email, USE_senha, USE_cpf) values ('$nome', '$email', '$senha', '$CPF')";
    
    $pdo->exec($sql);
    
    header("location: index.php?msg= Usuário registrado.");

    


?>