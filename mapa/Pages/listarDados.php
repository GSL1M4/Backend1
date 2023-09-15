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



<div class="clienteStilo">
    <?php
    include './clientes.php';
    include './processamento.php';


        if($_SESSION['clientes'] == 1){
            foreach($cliente01 as $chave => $valor){
                if($chave == 1){
                    foreach($valor as $ind => $val) {
                        echo "$ind: $val<br>";
                    }
                }
                echo "Seu saldo é de R$ " . $_SESSION['saldo'];
            
            }
        }
        if($_SESSION['clientes'] == 2){
            foreach($cliente02 as $chave => $valor){
                if($chave == 2){
                    foreach($valor as $ind => $val) {
                        echo "$ind: $val<br>";
                    }
                }
                echo "Seu saldo é de R$ " . $_SESSION['saldo'];
            
            }
        }
        if($_SESSION['clientes'] == 3){
            foreach($cliente03 as $chave => $valor){
                if($chave == 3){
                    foreach($valor as $ind => $val) {
                        echo "$ind: $val<br>";
                    }
                }
                echo "Seu saldo é de R$ " . $_SESSION['saldo'];
            
            }
        }
    
    ?>
</div>
<div class="btn">
    <button onclick="location.replace ('./transacoes.php')">Voltar</button>
</div>

</body>
</html>