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
            <h1>Cadastro</h1>

            <label for="nome">
                Nome:
                <input type="text" name="nome">
            </label>

            <label for="email">
                Email:
                <input type="email" name="email">
            </label>

            <label for="senha">
                Senha:
                <input type="text" name="senha">
            </label>

            <label for="rsenha">
                Repetir senha:
                <input type="text" name="rsenha">
            </label>

            <label class="link">
                <a href="log-in.php">Já tem uma conta? <span>Acesse</span></a>
            </label>

            <input class="is-button" type="submit" name="cadastrar" value="Cadastrar">
        </form>
    </main>
</body>
</html>