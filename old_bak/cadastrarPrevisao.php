<?php include "header.php" ?>
<?php
    session_start();
    if(!isset($_SESSION['UsuarioLog'])){
        header("Location: index.php");
        session_destroy();
    }
    
    if(isset($_GET['logout'])){
        session_destroy();
        header("Location: index.php");
    }
?>
    <?php include "navbarLogado.php" ?>

    <div class="container mb-3">
        <div class="row">
            
            <?php include "menuVertical.php" ?>
            
            <div class="col-12 col-sm-12 col-md-8 col-lg-6 bg-light border border-dark rounded mt-2 py-2">
                        <div class="container ">
                            <form class="mx-auto text-dark " style="width: auto;" action="cadastraPrevisaoDB.php" method="post">
                                
                                
                                <div class="container text-center  mt-3">
                                    <h5>Valores Previstos</h5>
                                </div>
                                
                                <div class="dropdown-divider"></div>
                                
                                <div class="form-group">
                                    <label for="tipoConta">Selecione a Conta</label>
                                    <select class="form-control" name="codigo" required>
                                        <?php
                                            $banco = pg_pconnect("dbname=SCFO");
                                            
                                            $query = "SELECT codigo_conta,titulo FROM conta ORDER BY codigo_conta asc;";
                                            $sql = pg_query($banco, $query);
                                            
                                            while($linha = pg_fetch_array($sql)){
                                        ?>
                                            <option><?php print $linha['codigo_conta']." - ".$linha['titulo']; ?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputCpf">Data prevista</label>
                                    <input type="date" class="form-control" id="datavencimento" name="data" required>
                                </div>
                                
                               <div class="form-group">
                                    <label for="exampleInputCpf">Valor do lançamento</label>
                                    <input type="text" class="form-control" id="valorconta" placeholder="R$ 0.00" name="valor" required>
                                </div>
                                    
                                <button type="submit" class="btn btn-dark float-right mt-3 btn-sm col-">Salvar</button>
                                <a href="logado.php">
                                    <button type="button" class="btn btn-dark mt-3 btn-sm col-">Cancelar</button>
                                </a>

                            </form>
                        </div>
            </div>
        </div>
    </div>

<?php include "footer.php" ?>

</body>
</html>