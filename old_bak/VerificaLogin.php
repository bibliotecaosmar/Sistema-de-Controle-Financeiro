<?php
$banco = pg_pconnect("dbname=SCFO");

$erro = array(); // Tentei criar essa variável para usar como ponte e jogar a mensagem de erro para o index.php

$cpf = $_REQUEST["cpf"];
$senha = md5($_REQUEST["senha"]);

try {
    $query = "SELECT * FROM USUARIO as U INNER JOIN SENHA as s ON u.cpf = s.USUARIO_cpf WHERE cpf = '$cpf' AND senha = '$senha';";
    $sql = pg_query($banco, $query)  or die("Cannot execute query: $query\n");
    
    $row = pg_fetch_row($sql);
    
    if(!empty($row)){
        session_start();
        $_SESSION['UsuarioLog'] = true;
        $_SESSION['cpf'] = $row[0];
        $_SESSION['nome'] = $row[1];
        $_SESSION['email'] = $row[2];
        $_SESSION['senha'] = $row[5];
        header("Location: logado.php");
    }

}catch (Exception $e) {
    echo "Nenhum usuário possui o <strong>cpf</strong> informado.",  $e->getMessage(), "\n";
}finally {
    header("Location: index.php");
}


/**$query = "SELECT * FROM USUARIO as U INNER JOIN SENHA as s ON u.cpf = s.USUARIO_cpf WHERE cpf = '$cpf' AND senha = '$senha';";
$sql = pg_query($banco, $query)  or die("Cannot execute query: $query\n");

$row = pg_fetch_row($sql);

if(empty($row)){
    header("Location: index.php");
    $erro[] = "Nenhum usuário possui o <strong>cpf</strong> informado.";
  
}else{
    session_start();
    $_SESSION['UsuarioLog'] = true;
    $_SESSION['cpf'] = $row[0];
    $_SESSION['nome'] = $row[1];
    $_SESSION['email'] = $row[2];
    $_SESSION['senha'] = $row[5];
    header("Location: logado.php");
}
*/

?>