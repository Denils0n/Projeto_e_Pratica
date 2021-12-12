<?php
    


    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $CPF = $_POST['CPF'];

    //echo ola;

    require 'conec.php';

    $sql = "select * from USUARIO where USU_cpf = '$CPF'";
    
    $result = $pdo->query($sql);

    if ($result->fetch() !== false ) {
        
    header("location: index.php?msg=CPF já registrado.");

        exit();
    }

    $sql = "insert into USUARIO(USU_nome, USU_email, USU_senha, USU_cpf) values ('$nome', '$email', '$senha', '$CPF')";
    
    $pdo->exec($sql);
    


    header("location: index.php?msg=Usuário registrado.");

    


?>

