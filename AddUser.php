<?php

    $nome = $_POST['nome'];
   
    $email = $_POST['email'];
   
    $senha = $_POST['senha'];
   
    $CPF = $_POST['CPF'];

    require 'conec.php';
    
    $sql = "select USU_cpf from USUARIO where USU_cpf = '$CPF'";
    
    $cmd = $pdo -> prepare($sql);
    
    $cmd -> execute();
    
    $result = $pdo->query($sql);
    
    
    
    if ($result->fetch() !== false ) {
        
    header("location: index.php?msg=CPF já registrado.");

        exit();
    }

    $sql = "select USU_email from USUARIO where USU_email = '$email'";
    
    $cmd = $pdo->prepare($sql);
    
    
    $cmd -> execute();
    
    $result = $pdo -> query($sql);
    
    
    
    if ($result->fetch() !== false ) {
        
    header("location: index.php?msg=email já registrado.");

        exit();
    }

    $sql = "insert into USUARIO(USU_nome, USU_email, USU_senha, USU_cpf) values (:nome, :email, :senha, :CPF)";
    
    $cmd = $pdo -> prepare($sql);
    
    $cmd -> bindValue(":nome", $nome);
    
    $cmd -> bindValue(":email", $email);
    
    $cmd -> bindValue(":senha", $senha);
    
    $cmd -> bindValue(":CPF", $CPF);
    
    $cmd -> execute();
    
    header("location: index.php?msg=Usuário registrado.");

?>