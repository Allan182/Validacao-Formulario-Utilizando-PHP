<?php

function criarCabecalho($titulo) {
    //echo "Oi Fulaninho - Variável :: ". $titulo;    

    //$site = "Sobre";

    $header = ' 
        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>'.$titulo.'</title>
            <link rel="stylesheet" href="style.css">
            <link rel="icon" href="img/ico.ico" type="image/x-icon">
        </head>
        <body>

        <header>
        <img src="img/logo-login.jpg" alt="Logo do Banco do Brasil" />
        <h1>'.$titulo.'</h1>
        </header>
        <main>

        

        ';
    
        echo $header;
}

function criarSejaBemvindo($usuario) {
    // condicinoal de horario atual

    $msg = "";
    $horario = date("G");


    if($horario > 5 && $horario <= 12) {
        $msg = "bom dia";
    } else if ($horario > 12 && $horario <= 18) {
        $msg = "boa tarde";
    } else {
        $msg = "boa noite";
    }

    echo '<div class="welcome">
            '.$usuario.', Tenha um '.$msg.'
        </div>';
}

function criarFooter() {
    echo '</main>
        <footer>
<div class="box-footer">
    <span>1</span>
    <span>2</span>
    <span>3</span>
</div>

</footer>
</body>
</html>
';
}

$main =  '<main>

<form action="validarDados.php" method="POST">
    <div class="card">
        <h2>Agência e Conta</h2>
        <span>
            <label>Agência: </label>
            <input class="normal" type="text" placeholder="Agência" name="agencia"/>
        </span>
        <span>
            <label>Conta: </label>
            <input class="normal" type="text" placeholder="Conta Corrente" name="conta-corrente"/>
            <label class="info">Informe sua conta ou digito</label>
        </span>

        <input type="submit" value="Continuar" />
    </div>
</form>


</main>';

?>