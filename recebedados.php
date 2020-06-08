<?php
/**
 * PHP COM PDO
 * projetoPhpPDO/recebedados.php
 * Prof.: Xeo
 */
//var_dump($_REQUEST);

session_start();

// var_dump($_SESSION);
$usuario = $_SESSION['usuario'];

$id = $_GET['id'];
echo "id do user aqui ".$id;

echo "Estou editando o usuario " . $usuario->nome;

session_destroy();