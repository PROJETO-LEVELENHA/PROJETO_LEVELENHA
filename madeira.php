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
        
    </main>
    <?php
        require_once('ASSETS/HTML/footer.html');
    ?>
</body>
</html>