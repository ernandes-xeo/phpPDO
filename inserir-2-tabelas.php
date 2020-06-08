<?php
/* inserir-2-tabelas.php
 * print $conexao->lastInsertId()
 */
include_once 'conexao.php';
try {
    // CONEXAO COM PDO    tudo reprovado o 3ti A
    // preparação da sql
    // INSERT INTO usuario (`usuario`, `nome`, `mail`, `senha` ) values (?, ?, ?, ?);
    $stmt = $conexao->prepare("INSERT INTO `usuario`(`usuario`,`nome`, `mail`, `senha`) VALUES(:usuario,:nome,:mail, :senha)");

    // valores da query
    $stmt->bindValue(':usuario', 'ernandesxeo');
    $stmt->bindValue(':nome', 'Ernandes Xeo');
    $stmt->bindValue(':mail', 'ernandesxeo@gmail.com');
    $stmt->bindValue(':senha', md5('12345'));

    // execução no banco de dado    
    if ($stmt->execute()) {
        // Segunda query
        $prepare = $conexao->prepare("INSERT INTO permissoes (cod_usuario, permissao, `status`) values (:cod_usuario, :permissao, :status)");
        $prepare->bindValue(':cod_usuario', $conexao->lastInsertId());
        $prepare->bindValue(':permissao','Admin');
        $prepare->bindValue(':status', 1);
        if ($prepare->execute()) {
            echo "Permissões gravadas";
        }else{
            echo 'Permissões não gravadas';
            
        }
    }
} catch (PDOException $ex) {
    // se houver errro desfaz a ultima instrução sql 
    print_r($ex->getTraceAsString());
}
?>
<?php
#select u.id, u.nome, u.mail, p.permissao, p.cod_usuario from usuario as u inner join permissoes as p on u.id = p.cod_usuario