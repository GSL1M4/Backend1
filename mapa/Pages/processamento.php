<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta value="viewport" content="width=device-width, initial-scale=1.0">
    <title>Picaretas Bank</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<div class="container">
<?php

session_start();


if (!isset($_SESSION['saldo'])) {
    $_SESSION['saldo'] = 50;
}


if (isset($_POST['sacar'])) {
    $sac = $_POST['sacar'];

    if ($_SESSION['saldo'] > 0 && $sac <= $_SESSION['saldo']) {
        $_SESSION['saldo'] = $_SESSION['saldo'] - $sac;
        echo "Voce sacou R$ ". $sac . "<br> Seu novo saldo é de R$ " . $_SESSION['saldo'];
    }else {
        echo "Saldo insuficiente";
    }
}

if (isset($_POST['depositar'])) {
    $deposito = $_POST['depositar'];
    gettype($deposito);
    $_SESSION['saldo'] = $_SESSION['saldo'] + $deposito;
    echo "Voce depositou R$ " . $deposito . "<br> Seu novo saldo é de R$ " . $_SESSION['saldo'];
}

if (isset($_POST['descontoCheque'])) {
    $desconto = $_POST['descontoCheque'];

    if ($_SESSION['saldo'] > 0) {
        if($_SESSION['saldo'] >= $desconto){
            $_SESSION['saldo'] = $_SESSION['saldo'] - $desconto;
            echo "Desconto de cheque de R$" . $desconto . " efetuado com sucesso";
        }
    } else {
        echo "Fundos insuficientes para efetuar o desconto de cheque";
    }
}

if (isset($_POST['pagamentoFaturas'])) {
    $pagamento = $_POST['pagamentoFaturas'];

    if ($_SESSION['saldo'] > 0) {
        $_SESSION['saldo'] = $_SESSION['saldo'] - $pagamento;
        echo "Pagamento da fatura efetuado com sucesso<br>"."Seu novo saldo é de " . $_SESSION['saldo'];
    } else {
        echo "Saldo insuficiente";
    }
}


?>
</div>


</body>
</html>