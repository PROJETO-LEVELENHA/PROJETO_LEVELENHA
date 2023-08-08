<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuário</title>

    <?php
        require_once('ASSETS/HTML/LINKs/links-here.html');
    ?>

    <!-- EXCLUSIVO -->

    <link rel="stylesheet" href="ASSETS/CSS/formulario.css">
</head>
<body class="grid-cad">
    <?php
        require_once('ASSETS/HTML/HEADERs/header-base.html');
    ?>
    <main class="bg-linear-green form-center">
        <form action="#" method="POST">
            <h1>Entrar</h1>

            <label for="email">
                Email:
                <input type="email" name="email">
            </label>

            <label for="senha">
                Senha:
                <input type="text" name="senha">
            </label>

            <label class="link">
                <a href="#">Esqueceu sua senha?</a>
                <a href="cadastro.php"> <span>Crie uma conta</span></a>
            </label>

            <input class="is-button" type="submit" name="Entrar" value="entrar">
        </form>
    </main>
</body>
</html>