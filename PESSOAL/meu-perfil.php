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
    <title>Meu Perfil</title>

    <?php
        require_once('../ASSETS/HTML/LINKs/links-before.html');
    ?>

    <!-- EXCLUSIVO -->
    <link rel="stylesheet" href="css/meu-perfil.css">
    <link rel="stylesheet" href="../ASSETS/CSS/aside-pessoal.css">
</head>
<body class="grid-pessoal">
    <?php
        require_once('../ASSETS/HTML/HEADERs/header-base-before.html');
    ?>
    <?php
        require_once('../ASSETS/HTML/aside.html');
    ?>
    <main class="perfil">
        <div class="container-perfil">
            <div class="img-perfil">
                <img src="../IMAGENS/ICONES/user.png" alt="">
            </div>
            <div class="text-perfil">
                <h2 class="nome-usuario"> <?php echo $_SESSION['nome']?></h2>
                <p class="email-usuario"><?php echo $_SESSION['email']?></p>
                <!-- <button><a href="">Alterar</a></button> -->
            </div>
        </div>
    </main>
</body>
</html>