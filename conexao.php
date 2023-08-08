<?php 
$usuario = 'root';
$senha = '17122004';
$database = 'leve_lenha';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}

?>