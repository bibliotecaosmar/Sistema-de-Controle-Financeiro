<?php

$banco = pg_pconnect("dbname=SCFO");

$cpf = $_REQUEST["cpf"];
$nome = $_REQUEST["nome"];
$email = $_REQUEST["email1"];
$senha = $_REQUEST["senha1"];

$query = "INSERT INTO USUARIO(cpf, nome, email) VALUES('$cpf', '$nome', '$email');";

$senha = md5($senha);
$dataSenha = date('Y-m-d');

$query2 = "INSERT INTO SENHA(data_senha, senha, USUARIO_cpf) VALUES('$dataSenha', '$senha', '$cpf');";

if(pg_query($banco, $query) && pg_query($banco, $query2)){ 
    $query3 = "INSERT INTO CONTA(codigo_conta, titulo, descricao, tipo_conta, USUARIO_cpf) VALUES('001', 'Saldo inicial', 'Meu saldo inicial', 'Saldo', '$cpf');";
    $sql = pg_query($banco, $query3);
    
    $query4 = "INSERT INTO CONTA(codigo_conta, titulo, descricao, tipo_conta, USUARIO_cpf) VALUES('999', 'Saldo final', 'Meu saldo final', 'Saldo', '$cpf');";
    $sql2 = pg_query($banco, $query4);
    
    session_start();
    $_SESSION['UsuarioLog'] = true;
    $_SESSION['cpf'] = $cpf;
    $_SESSION['nome'] = $nome;
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    header("Location: logado.php");
}
else{
    header("Location: cadastro.php");
}

?>