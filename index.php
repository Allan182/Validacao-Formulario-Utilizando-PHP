<?php

include("config.php");

criarCabecalho("Banco Do Brasil");

$msg = @$_GET["msg"];

if($msg != "" ){

    $msg ='<div class="erro"> 
      Erro de Validação de Dados!!!
    </div>';

    echo $msg;

}

echo $main;


criarFooter()



?>