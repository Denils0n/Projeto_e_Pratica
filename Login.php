<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Login</title>
</head>

<body>

    <?php if (isset($_GET['msg'])) : ?>

        <div> <?= $_GET['msg'] ?> </div>

    <?php endif ?>

    <fieldset>
        <legend>Login</legend>
        <form action="VerificarDadosLogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="senha" placeholder="Senha">
            <input type="submit" value="Enviar">
        </form>
    </fieldset>

</body>

</html>