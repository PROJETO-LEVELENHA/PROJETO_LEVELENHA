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
    <link rel="stylesheet" href="ASSETS/CSS/homepage.css">

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
        <!-- SEÇÃO 01 - APRESENTACAO -->
        <section class="hp-apresentacao">
            <h2><strong>LeveLenha</strong>, o melhor sitede compra de móveis e madeiras da América Latina!</h2>
        </section>

        <!-- SEÇÃO 02 - OPÇÕES -->
        <section class="hp-opcoes">
            <div class="hp-opcoes-container-titulo">
                <h2 class="hp-opcoes-titulo">O que deseja comprar <span>HOJE?</span></h2>
            </div>
            <div class="hp-opcoes-container-sections">
                <!-- SEÇÃO 02.1 - OPÇÕES -->
                <section class="hp-opcoes-section">
                    <a href="movel-planejado.php">
                    <div class="hp-opcoes-section-container-img">
                        <img src="IMAGENS/ICONES/móvel planejado.png" alt="">
                    </div>
                    <div class="hp-opcoes-section-container-text">
                        <h3>Planejar um móvel</h3>
                    </div>
                    </a>
                </section>

                <!-- SEÇÃO 02.2 - OPÇÕES -->
                <section class="hp-opcoes-section">
                    <a href="movel-pre-moldado.php">
                    <div class="hp-opcoes-section-container-img">
                        <img src="IMAGENS/ICONES/móvel.png" alt="">
                    </div>
                    <div class="hp-opcoes-section-container-text">
                        <h3>Móvel pré Moldado</h3>
                    </div>
                    </a>
                </section>

                <!-- SEÇÃO 02.3 - OPÇÕES -->
                <section class="hp-opcoes-section">
                    <a href="madeira.php">
                    <div class="hp-opcoes-section-container-img">
                        <img src="IMAGENS/ICONES/madeira.png" alt="">
                    </div>
                    <div class="hp-opcoes-section-container-text">
                        <h3>Madeiras</h3>
                    </div>
                    </a>
                </section>
            </div>
        </section>
    </main>
    <?php
        require_once('ASSETS/HTML/footer.html');
    ?>
</body>
</html>