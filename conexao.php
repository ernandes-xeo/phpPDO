<?php
/**
 * PHP COM PDO
 * projetoPhpPDO/conexao.php
 * Prof.: Xeo
 */

//phpinfo()

$host = 'localhost';
$banco = 'banco_aula'; // nome do seu banco
$user = 'root'; // usuário mysql
$senha = '';    // senha
    
try{ 
    $conexao = new PDO("mysql:host=".$host.";dbname=".$banco."", $user, $senha);     
    //echo "ok";
} catch (PDOException $e) {
    //print_r($e);
    echo $e->getMessage();
}

$aluno = array();
$aluno[0] = $_POST['nome'];
$aluno[1] = $_POST['sobrenome'];
$aluno[2] = $_POST['curso'];

function conectar($conexao, $aluno){
    $stmt = $conexao;
    $stmt->prepare("sql");
    $stmt->execute();
}


function alterar(){
    
}

function salvar(){
    
}





        