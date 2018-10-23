<?php
/**
 * PHP COM PDO
 * projetoPhpPDO/conexao.php
 * Prof.: Xeo
 */
$host = 'localhost';
$banco = 'banco_aula'; // nome do seu banco
$user = 'root'; // usuário mysql
$senha = '';    // senha
    
try{ 
    $conexao = new PDO("mysql:host=".$host.";dbname=".$banco."", $user, $senha);     
    //echo "ok";
} catch (PDOException $e) {
    //print_r($e);
    echo $e->getMessage();
}





        