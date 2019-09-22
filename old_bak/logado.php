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
                
                <div class="col-12 col-sm-12 col-md-8 col-lg-6 bg-light border border-dark rounded mt-2">
                    
                        
                            <div class="container">
                                <form class="mx-auto text-dark text-center mt-4 " style="width: auto;">
                                    <div class="container text-center">
                                        <h2>Sistema de Controle Financeiro Orçamentário</h2>
                                    </div>
                                </form>
                            </div>
                </div>
            </div>
        </div>

    <?php include "footer.php" ?>

</body>
</html>