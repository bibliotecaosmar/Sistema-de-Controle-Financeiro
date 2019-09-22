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
            
            <div class="col-12 col-sm-12 col-md-8 col-lg-9 bg-light border border-dark rounded mt-2 py-2">
                <div class="container text-center mt-3 mb-3">
                    <h5>Relatório de previsões</h5>
                </div>
                <div class="dropdown-divider"></div>
                        <div class="container ">
                            <form class="mx-auto text-dark " style="width: auto;">
                                <div class="container text-center">
                                    <h5>Previsões</h5>
                                </div>
                                <div class="table-responsive-sm table-responsive-md table-responsive-lg">
                                  <table class="table table-bordered">
                                    <thead class="thead-dark">
                                      <tr>
                                        <th scope="col">Código</th>
                                        <th scope="col">Tipo</th>
                                        <th scope="col">Titulo</th>
                                        <th scope="col">Data</th>
                                        <th scope="col">Valor</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <th scope="row">001</th>
                                        <td>Receita</td>
                                        <td>Saldo inicial</td>
                                        <td>16/05/18</td>
                                        <td>R$ 1500.00</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">002</th>
                                        <td>Receita</td>
                                        <td>Salário</td>
                                        <td>08/06/18</td>
                                        <td>R$ 1200,00</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">003</th>
                                        <td>Despesa</td>
                                        <td>Internet</td>
                                        <td>21/05/18</td>
                                        <td>R$ 85,50</td>
                                      </tr>
                                    </tbody>
                                  </table>  
                                </div>            
                            </form>
                        </div>
                <button type="submit" class="btn btn-dark ml-3 float-right mt-3 btn-sm col-">Imprimir relatório</button>
            </div>
        </div>
    </div>


<?php include "footer.php" ?>

</body>
</html>