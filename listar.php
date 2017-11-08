<?php
include_once 'conexao.php';
try {
    
    // listar usuários banco método query
    $rs = $conexao->query("SELECT  id, nome, mail from usuario");
    
    // No método fetch utilizamos um parâmetro PDO::FETCH_OBJ, este parâmetro 
    // define a forma na qual os dados serão retornados e armazenados na variável 
    // $row, criada dentro do while.
    // O PDO::FETCH_OBJ trata cada linha da consulta como um objeto, 
    // transformando os campos que foram retornados em atributos do objeto $row.
    while($row = $rs->fetch(PDO::FETCH_OBJ)){
  
        echo "<a href='recebedados.php?id=".$row->id.">Exibir</a> - " . $row->nome ." - " .  $row->mail . "<br >";
        
    }
    
    
    
    
} catch (Exception $ex) {
    print_r($ex);
}

?>        