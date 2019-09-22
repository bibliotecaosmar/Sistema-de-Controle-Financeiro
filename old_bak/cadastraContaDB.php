<?php
    $banco = pg_pconnect("dbname=SCFO");
    session_start();
    
    $codigoConta = $_REQUEST["codigo"];
    if($codigoConta == 1 || $codigoConta == 999){
        header("Location: cadastrarConta.php");
    }
    $titulo = $_REQUEST["titulo"];
    $tipo = $_REQUEST["tipo"];
    $descricao = $_REQUEST["descricao"];
    if(empty($decricao)){
        $descricao = '---';
    }
    $cpf = $_SESSION['cpf'];
    
    $query = "INSERT INTO CONTA(codigo_conta, titulo, descricao, tipo_conta, USUARIO_cpf) VALUES('$codigoConta', '$titulo', '$descricao', '$tipo', '$cpf');";
    if(pg_query($banco, $query)){
        header("Location: cadastrarConta.php");
    }else{
        header("Location: cadastrarConta.php");
    }
    
    
?>