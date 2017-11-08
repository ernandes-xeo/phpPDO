<?php

include_once 'conexao.php';

try {

    $idUsuario = 39;
    $nome = "Roberto";
    $mail = "roberto@gmail.com";
    // metodo preparament 
    $rs = $conexao->prepare("UPDATE usuario SET nome = ?, mail = ? WHERE id = ?");
    $rs->bindValue(1, $nome);
    $rs->bindValue(2, $mail);
    $rs->bindValue(3, $idUsuario);

    if ($rs->execute()) {
       echo "Atualização realizada com sucesso!";
    }
} catch (Exception $ex) {
    print_r($ex);
}
?>        