<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento</title>
    <link rel="stylesheet" href="estilos.css" type="text/css">
    <link rel="stylesheet" href="reset.css" type="text/css">
</head>
<body>

<header>

<h1>BrinqueKids System</h1>

</header>


<main>
<?php 

$nome = $_GET['nomeFuncionario'];
$cargo = $_GET['cargo'];
$horasT = $_GET['horasT'];
$valorDescontos = $_GET['valorDescontos'];
$valorBeneficios = $_GET['valorBeneficios'];
$res = 0;

const SALARIOANALISTA = 30;
const SALARIOPROGRAMADOR = 25;
const SALARIOGERENTE = 40;
const SALARIOESTAGIARIO = 20;

if($cargo == 1){
    $res = ($horasT * SALARIOANALISTA) + $valorBeneficios - $valorDescontos; 
} elseif ($cargo == 2) {
    $res = ($horasT * SALARIOPROGRAMADOR) + $valorBeneficios - $valorDescontos; 
} elseif ($cargo == 3) {
    $res = ($horasT * SALARIOGERENTE) + $valorBeneficios - $valorDescontos; 
} elseif ($cargo == 4) {
    $res = ($horasT * SALARIOESTAGIARIO) + $valorBeneficios - $valorDescontos; 
}

echo "<p> Funcionário: $nome, recebe o TOTAL de: R$ $res.
</br> Qtd Dde horas trabalhadas: $horasT,
</br> Valor dos Benefícios: $valorBeneficios,
</br> Valor dos Descontos: $valorDescontos.
</p>";


?>


</main>
    
</body>
</html>