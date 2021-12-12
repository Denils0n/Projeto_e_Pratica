<?php

session_start();




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="AditarConta.php" method="post">

    <input type="text" name="Nome" value="Nome">
    <input type="hidden" name="id" value="<?= $_SESSION['USU_codigo'] ?>">
    <input type="submit" value="Trocar">


    </form>

</body>
</html>