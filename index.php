<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if (isset($_GET['msg'])): ?>

        <div> <?= $_GET['msg'] ?> </div>

    <?php endif ?>   
    
    <a href="Login.php">Logar</a> 
        
    
    

</body>
</html>