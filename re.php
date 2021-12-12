<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input {
	        display: block;
        }
    </style>
</head>
<body>

    <?php if (isset($_GET['msg'])): ?>

        <div> <?= $_GET['msg'] ?> </div>

    <?php endif ?>

    <fieldset>
        <legend>Adcionar restaurante</legend>
        <form action="AddR.php" method="POST">
        <input type="text" name="Nome" placeholder="EX:casa da carne">
        <input type="text" name="Exp" placeholder="EX:Carne">
        <input type="text" name="Local" placeholder="EX:rua, lote, número">
        <input type="text" name="Dias" placeholder="EX: seg,ter,qua...">
        <input type="nuber" name="Telefone" placeholder="EX:12345678">
        <input type="submit" value="Registrar">

        </form>
    </fieldset>

    <a href="Home.php">VOLTAR</a>
    
</body>
</html>