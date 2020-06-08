<?php
/**
 * PHP COM PDO
 * projetoPhpPDO/inserir.php
 * Prof.: Xeo
 */
//phpinfo();
include_once 'conexao.php';
try {
    // CONEXAO COM PDO
    // preparação da sql
    $stmt = $conexao->prepare("INSERT INTO usuario (`usuario`, `nome`, `mail`, `senha` ) values (?, ?, ?, ?)");
    // valores da query
    $stmt->bindValue(1, 'kely');
    $stmt->bindValue(2, 'kely');
    $stmt->bindValue(3, 'kely.com');
    $stmt->bindValue(4, md5('12345'));

    // execução no banco de dado    
    if ($stmt->execute() && $stmt->rowCount() > 0) {
        echo "Usuário inserido com sucesso!";
    }else{
        echo "Erro ao inserir";
    }
} catch (Exception $ex) {
    print_r($ex);
}