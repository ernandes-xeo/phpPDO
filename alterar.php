<?php
/**
 * PHP COM PDO
 * projetoPhpPDO/alterar.php
 * Prof.: Xeo
 */
include_once 'conexao.php';

try {
    // select * from usuario where id = 3;
    // alterar para:
    $idUsuario = 3;
    $nome = "yuri";
    $mail = "yuri@gmail.com";
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