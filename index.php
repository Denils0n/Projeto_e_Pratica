<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<fieldset>
        <legend>Login</legend>
        <form action="Login.php" method="POST">
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="senha" placeholder="Senha">
        <input type="submit" value="Enviar">
        </form>
    </fieldset>
    
    <fieldset>
        <legend>Registrar</legend>
        <form action="AddUser.php" method="POST">
        <input type="text" name="nome" placeholder="Nome">
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="senha" placeholder="Senha">
        <input type="number" name="CPF" placeholder="CPF">
        <input type="submit" value="Enviar">
        </form>
    </fieldset>
    

</body>
</html>