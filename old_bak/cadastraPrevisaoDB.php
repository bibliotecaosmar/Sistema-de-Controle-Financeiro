<?php
    $banco = pg_pconnect("dbname=SCFO");
    
    $dados = explode(" ",$_REQUEST["codigo"]);
    $codigo = $dados[0];
    $dados2 = explode("/",$_REQUEST["data"]);
    $data = "$dados2[2] $dados2[1] $dados2[0]";
    $valor = $_REQUEST["valor"];
    $cpf = $_SESSION['cpf'];
    
    if($codigo == '1'){
        $query = "SELECT * FROM SITUACAO_MENSAL where data = '$data' AND USUARIO_cpf = '$cpf';";
        $sql = pg_query($banco, $query);
        $row = pg_fetch_row($sql);
        if(empty($row)){
            $query = "INSERT INTO lancamento_previsao(data_lancamento, valor_previsto, USUARIO_cpf, CONTA_codigo) VALUES('$data', '$valor', '$cpf', '$codigo');";
            $query2 = "INSERT INTO SITUACAO_MENSAL(data, saldo_inicial_previsto, USUARIO_cpf) VALUES('$data', '$valor', '$cpf');";
            
            if(pg_query($banco, $query) && pg_query($banco, $query2)){
                header("Location: cadastrarPrevisao.php");
            }else{
                header("Location: cadastrarPrevisao.php");
            }
            
        }else{
            header("Location: cadastrarPrevisao.php");
        }
        
        
    }else if($codigo == '999'){
        $query = "SELECT * FROM SITUACAO_MENSAL where data = '$data' AND USUARIO_cpf = '$cpf';";
        $sql = pg_query($banco, $query);
        $row = pg_fetch_row($sql);
        if(empty($row)){
            $query = "INSERT INTO SITUACAO_MENSAL(data, saldo_final_previsto, USUARIO_cpf) VALUES('$data', '$valor', '$cpf');";
            $query2 = "INSERT INTO lancamento_previsao(data_lancamento, valor_previsto, USUARIO_cpf, CONTA_codigo) VALUES('$data', '$valor', '$cpf', '$codigo');";
            if(pg_query($banco, $query) && pg_query($banco, $query2)){
                header("Location: cadastrarPrevisao.php");
            }else{
                header("Location: cadastrarPrevisao.php");
            }
        }else{
            header("Location: cadastrarPrevisao.php");
        }
        
        
    }else{
        $query = "INSERT INTO lancamento_previsao(data_lancamento, valor_previsto, USUARIO_cpf, CONTA_codigo) VALUES('$data', '$valor', '$cpf', '$codigo');";
        if(pg_query($banco, $query)){
            header("Location: cadastrarPrevisao.php");
        }else{
            header("Location: cadastrarPrevisao.php");
        }
        
    }
    
?>