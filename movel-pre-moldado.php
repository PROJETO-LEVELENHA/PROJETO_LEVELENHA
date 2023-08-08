<?php

if(!isset($_SESSION)) {
    session_start();
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LeveLenha</title>
    
    <?php
        require_once('ASSETS/HTML/LINKs/links-here.html');
    ?>

    <!-- EXCLUSIVO -->
    <link rel="stylesheet" href="ASSETS/CSS/movel-pre-moldado.css">
    <link rel="stylesheet" href="ASSETS/CSS/card.css">

</head>
<body class="grid-hp">
    <?php
        if($_SESSION != null){
            require_once('ASSETS/HTML/HEADERs/header-completed.html');
        }
        else{
            require_once('ASSETS/HTML/HEADERs/header-log-out.html');
        }
    ?>
    <main>
        <div class="container-titulo">
            <h1>Móveis Pré Moldados</h1>
        </div>
        <div class="container-cards">
            <div class="center">
            <?php
                require_once('ASSETS/HTML/CARDS-MOVEIS/card-01.html');
                require_once('ASSETS/HTML/CARDS-MOVEIS/card-02.html');
                require_once('ASSETS/HTML/CARDS-MOVEIS/card-03.html');
            ?>
            </div>
        </div>
    </main>
</body>
</html>