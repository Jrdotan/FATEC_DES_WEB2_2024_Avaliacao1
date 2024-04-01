<?php

include 'header.php';

?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Olá, <b><?php echo htmlspecialchars($_SESSION["username"]); ?>
        <br>
        </b>. Bem vindo ao estacionamento</h1>
    </div>
    <p>
        <a href="cadastroCarro.php" class="btn btn-primary">Cadastrar Carros</a>
        <br><br>
        <a href="cadastroMoto.php" class="btn btn-primary">Cadastrar Motos</a>
        <br><br>
        <a href="verificarCarro.php" class="btn btn-danger">Ler registro Carro</a>
        <br><br>
        <a href="verificarMoto.php" class="btn btn-danger">Ler registros Moto</a>
        <br><br>
        <a href="logout.php" class="btn btn-danger">Sair da conta</a>
    </p>
</body>
</html>