<?php

include './processamento.php';

if (isset($_SESSION['saldo'])) {
    session_destroy();
    header("Location: ../index.php");
} else {
    echo "O saldo não está definido";
}



?>