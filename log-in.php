<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        print"<script>alert('Email não é válido')</script>";

    } else if(strlen($_POST['senha']) == 0) {
        print"<script>alert('Senha não é válida')</script>";
        
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['email'] = $usuario['email'];

            header("Location: PESSOAL/meu-perfil.php");

        } else {
            print"<script>alert('Email ou senha não é válido')</script>";
        }

    }

}
?>

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
                <input type="email" name="email" required placeholder="exemplo@gmail.com">
            </label>

            <label for="senha">
                Senha:
                <input type="text" name="senha" required placeholder="****************">
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