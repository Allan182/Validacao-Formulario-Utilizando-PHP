<?php

$agencia = $_POST["agencia"];
$contaCorrente = $_POST["conta-corrente"];

if ($agencia == "123" && $contaCorrente == "321") {
    header("Location: pagSecreta.php");
} else {
    header("Location: index.php?msg=erro");
}

?>