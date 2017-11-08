<?php

include_once 'conexao.php';
try {
    // CONEXAO COM PDO
    // preparação da sql
    $stmt = $conexao->prepare("INSERT INTO usuario (`usuario`, `nome`, `mail`, `senha` ) "
            . "values (?, ?, ?, ?)");

    // valores da query
    $stmt->bindValue(1, 'rafael');
    $stmt->bindValue(2, 'Rafael');
    $stmt->bindValue(3, 'rafael@gmail.com');
    $stmt->bindValue(4, md5('12345'));

    // execução no banco de dado    
    if ($stmt->execute()) {
        echo "Usuário inserido ";
    }

    echo $stmt->rowCount();
} catch (Exception $ex) {
    print_r($ex);
}
?>