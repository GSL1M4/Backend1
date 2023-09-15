<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Picaretas Bank</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<header>
    <h1>Pikateras Bank</h1>

</header>

   
<div class="container">
    <form method="post">

    <label for="depositar">Digite o Valor para Depositar:</label>
    <input type="number" name="depositar">
    <div class="btnIndex">
        <button type="submit">Enviar</button>
    </div>
    </form>
</div>
<div class="btn">
<button onclick="location.replace ('./transacoes.php')">Voltar</button>
</div>

<?php 
include './processamento.php';
?>


</body>
</html>