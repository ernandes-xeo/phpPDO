<?php
/**
 * PHP COM PDO
 * projetoPhp/conexao.php
 * Prof.: Xeo
 */
$host = 'localhost';
$banco = 'banco_aula';
$user = 'root';
$senha = '';
    
try{
    
    $conexao = new PDO("mysql:host=".$host.";dbname=".$banco."", "".$user."", "".$senha."");     
   // echo "ok";
} catch (Exception $ex) {
    print_r($ex);
}

?>





        