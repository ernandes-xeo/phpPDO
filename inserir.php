<?php
include_once 'conexao.php';
try {
    
    // CONEXAO COM PDO
    
    // preparação da sql
    // INSERT INTO usuario (`usuario`, `nome`, `mail`, `senha` ) values (?, ?, ?, ?);
    $stmt = $con->prepare("INSERT INTO `usuario`(`nome`, `mail`, `senha`) VALUES(:nome,:mail, :senha)"); 
           
    // valores da query
    $stmt->bindValue(':nome','Igor');   
    $stmt->bindValue(':mail','igor@gmail.com'); 
    $stmt->bindValue(':senha',md5('12345')); 
    
    // execução no banco de dado    
    if($stmt->execute()){
        echo "Usuário inserido";
    }
        
    echo $stmt->rowCount(); 
    
    
} catch (Exception $ex) {
    print_r($ex);
}

?>


<?php
/*
// lembrete sql
INSERT INTO `usuario` (`nome`, `mail`, `senha`) 
VALUES 
	('Ernandes', 'atividades@infoxeo.com', '12345'),
	('Paty', 'paty@gmail.com', Md5('12345'));

*/
?>





        