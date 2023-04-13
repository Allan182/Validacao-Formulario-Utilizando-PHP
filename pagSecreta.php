<?php



echo $header = '<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Banco do Brasil :: Aula Online</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/ico.ico" type="image/x-icon">
</head>

<body>
    <header>
        <img src="img/logo-login.jpg" alt="Logo do Banco do Brasil" />
        <h1>Autoatendimento</h1>
    </header>';


echo $main = ' <main>

<form action="validarDados.php" method="POST">
    <div class="card">
        <h1> Usuario Logado!!! </h1>
    </div>
</form>


</main>';

echo $footer = '<footer>
<div class="box-footer">
    <span>1</span>
    <span>2</span>
    <span>3</span>
</div>

</footer>
</body>

</html>';


?>