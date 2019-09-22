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
                            <form class="mx-auto text-dark " style="width: auto;">
                                <div class="container text-center  mt-3">
                                    <h5>Valores Realizados</h5>
                                </div>
                                
                                <div class="dropdown-divider"></div>
                                
                                <div class="form-group">
                                    <label for="tipoConta">Selecione a Conta</label>
                                    <select class="form-control">
                                        <option>001 - Saldo inicial</option>
                                        <option>002 - Agua</option>
                                        <option>003 - Luz</option>
                                        <option>004 - Internet</option>
                                        <option>005 - Gás</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputCpf">Pago/Recebido no dia</label>
                                    <input type="text" class="form-control" id="datavencimento" placeholder="DD/MM/AAAA" name="dataVencimento" OnKeyPress="formatar('##/##/##', this)" maxlength="10">
                                </div>
                                
                               <div class="form-group">
                                    <label for="exampleInputCpf">Valor do lançamento</label>
                                    <input type="text" class="form-control" id="valorconta" placeholder="R$ 0,00" name="dataVencimento">
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