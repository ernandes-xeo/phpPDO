<?php
$host = 'localhost';
$banco = 'banco_aula';
$user = 'root';
$senha = '';
    
try{
    
    $con = new PDO("mysql:host=".$host.";dbname=".$banco."", "".$user."", "".$senha."");     
   // echo "ok";
} catch (Exception $ex) {
    print_r($ex);
}

?>





        