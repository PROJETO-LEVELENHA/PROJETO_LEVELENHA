<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrando</title>
    <style>
        body {
            background-color: #DDD;
            width: 100;
            height: 90vh;

            display: flex;
            justify-content: center;
            align-items: center;
        }

        .loader {
            width: 48px;
            height: 48px;
            position: relative;
        }

        .loader::before,
        .loader::after {
            content: '';
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 48em;
            height: 48em;
            background-image:
                radial-gradient(circle 10px, #2B6499 100%, transparent 0),
                radial-gradient(circle 10px, #2B6499 100%, transparent 0),
                radial-gradient(circle 10px, #2B6499 100%, transparent 0),
                radial-gradient(circle 10px, #2B6499 100%, transparent 0),
                radial-gradient(circle 10px, #2B6499 100%, transparent 0),
                radial-gradient(circle 10px, #2B6499 100%, transparent 0),
                radial-gradient(circle 10px, #2B6499 100%, transparent 0),
                radial-gradient(circle 10px, #2B6499 100%, transparent 0);
            background-position: 0em -18em, 0em 18em, 18em 0em, -18em 0em,
                13em -13em, -13em -13em, 13em 13em, -13em 13em;
            background-repeat: no-repeat;
            font-size: 0.5px;
            border-radius: 50%;
            animation: blast 1s ease-in infinite;
        }

        .loader::after {
            font-size: 1px;
            background: #2B6499;
            animation: bounce 1s ease-in infinite;
        }

        @keyframes bounce {

            0%,
            100% {
                font-size: 0.75px
            }

            50% {
                font-size: 1.5px
            }
        }

        @keyframes blast {

            0%,
            40% {
                font-size: 0.5px;
            }

            70% {
                opacity: 1;
                font-size: 4px;
            }

            100% {
                font-size: 6px;
                opacity: 0;
            }
        }
    </style>
</head>

<body>
    <span class="loader"></span>
    
    <?php

    if(!isset($_SESSION)) {
        session_start();
    }

    session_destroy();
    ?>

    <script>
        // Função para redirecionar
        function redirecionar() {
            setTimeout(function() {
                // Altere a URL abaixo para a página para a qual deseja redirecionar
                window.location.href = 'index.php';
            }, 2000);
        }

        // Chama a função quando o documento é carregado
        window.onload = redirecionar;
    </script>
</body>

</html>