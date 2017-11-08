<?php
/**
 * PHP COM PDO
 * projetoPhp/consultar.php
 * Prof.: Xeo
 */
include_once 'conexao.php';

try {
    //$nome = $_POST['nome'];
    $nome = 'aluno';
    // metodo preparament 
    $rs = $conexao->prepare("SELECT  id, nome, mail from usuario where nome like ?");
    $rs->bindValue(1,"%" .$nome . "%");

// No método fetch utilizamos um parâmetro PDO::FETCH_OBJ, este parâmetro 
// define a forma na qual os dados serão retornados e armazenados na variável 
// $row, criada dentro do while.
// O PDO::FETCH_OBJ trata cada linha da consulta como um objeto, 
// transformando os campos que foram retornados em atributos do objeto $row.
    if ($rs->execute()) {
        if ($rs->rowCount() > 0) {
            while ($row = $rs->fetch(PDO::FETCH_OBJ)) {
                echo $row->id . " - " . $row->nome . " - " . $row->mail . "<br >";
            }
        }
    }
} catch (Exception $ex) {
    print_r($ex);
}
?>        