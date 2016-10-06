<?php

include_once 'conexao.php';

try {

    $idUsuario = 33;
    // metodo preparament 
    $rs = $con->prepare("DELETE FROM `banco_aula`.`usuario` WHERE  `id`= ?");
    $rs->bindValue(1, $idUsuario);

    if ($rs->execute()) {
       echo "Deletado com sucesso";
    }
} catch (Exception $ex) {
    print_r($ex);
}
?>        