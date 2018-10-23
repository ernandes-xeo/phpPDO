<?php
/**
 * PHP COM PDO
 * projetoPhpPDO/inserir_2.php
 * Prof.: Xeo
 */
include_once 'conexao.php';
try {
    // CONEXAO COM PDO    
    // preparação da sql
    $stmt = $conexao->prepare("INSERT INTO `usuario`(`usuario`, `nome`, `mail`, `senha`)"
            . " VALUES(:usuario, :nome,:mail, :senha)"); // notação para os campos
           
    // valores da query
    $stmt->bindValue(':usuario','mateus'); 
    $stmt->bindValue(':nome','Mateus'); 
    $stmt->bindValue(':mail','mateusdias@gmail.com'); 
    $stmt->bindValue(':senha',md5('12345')); // hash md5 para criptografar a senha no banco de dados
    
    // execução no banco de dado    
    if ($stmt->execute() && $stmt->rowCount() > 0) {
        echo "Novo usuário inserido com sucesso!";
    }else{
        echo "Erro ao inserir";
    }
        
} catch (Exception $ex) {
    print_r($ex);
}

