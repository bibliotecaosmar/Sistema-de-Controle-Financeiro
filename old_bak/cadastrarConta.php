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
                    <form class="mx-auto text-dark " style="width: auto;" action="cadastraContaDB.php" method="post">
                        <div class="container text-center  mt-3">
                            <h5>Cadastre sua conta</h5>
                        </div>
                        
                        <div class="dropdown-divider"></div>
                        
                        <div class="form-group">
                            <label for="exampleInputCpf">Código da conta</label>
                            <input type="text" class="form-control" id="tituloconta" placeholder="" name="codigo" required>
                            <small class="text-danger">O código 001 é reservado ao saldo inicial*</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCpf">Título da conta</label>
                            <input type="text" class="form-control" id="tituloconta" placeholder="Ex.: Conta de luz" name="titulo" required>
                        </div>
                        <div class="form-group">
                            <label for="tipoConta">Selecionar tipo de conta</label>
                            <select class="form-control" name="tipo" required>
                                <option>Receita</option>
                                <option>Despesa</option>
                            </select>
                        </div>
                        <div>
                            <div class="form-group">
                                <label for="descricaodaConta">Descrição da conta (opcional)</label>
                                <textarea class="form-control" id="descricaoConta" rows="5" name="descricao" ></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-dark float-right mt-3 btn-sm col-">Cadastrar conta</button>
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