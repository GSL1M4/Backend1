<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Picaretas Bank</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">

</head>
<body>

<header>
    <h1>Pikateras Bank</h1>

</header>



<div class="container">
    <form action="index.php" method="get">
        <label for="idClientes">Clientes</label>
                <select name="clientes" id="idClientes">
                    <option value="" selected disabled>Selecione</option>
                    <option value="1">Daniel Lima</option>
                    <option value="2">Geraldo Gomes</option>
                    <option value="3">Maria Souza da Silva</option>
                </select>
                <div class="btnIndex">
                    <button type="submit" name="btn">procurar</button>
                </div>
    </form>
</div>


<div class="clienteStilo">
    <?php
    include './Pages/clientes.php';

    if (isset($_GET['clientes'])) {
        $_SESSION['clientes'] = $_GET['clientes'];
        if($_SESSION['clientes'] == 1){
            foreach($cliente01 as $chave => $valor){
                if($chave == 1){
                    foreach($valor as $ind => $val) {
                        echo "$ind: $val<br>";
                    }
                }
                
            
            }
        }
        if($_SESSION['clientes'] == 2){
            foreach($cliente02 as $chave => $valor){
                if($chave == 2){
                    foreach($valor as $ind => $val) {
                        echo "$ind: $val<br>";
                    }
                }
                
            
            }
        }
        if($_SESSION['clientes'] == 3){
            foreach($cliente03 as $chave => $valor){
                if($chave == 3){
                    foreach($valor as $ind => $val) {
                        echo "$ind: $val<br>";
                    }
                }
                
            
            }
        }
    }
    ?>
</div>

<div class="btn">
    <?php
    if (isset($_GET['clientes'])) {
        echo '<br>';
        echo '<a href="./Pages/transacoes.php">Acessar a conta</a>';
        echo "<br>";
    }
    ?>
</div>
    


</body>
</html>