
<nav class="navbar navbar-expand-md navbar-dark bg-secondary ">
    <div class="container">
        <a href="logado.php" class="navbar-brand ">SCFO</a>
        <form class="form-inline">
            <ul class="list-unstyled text-white text-center ml-2 mr-2 pt-2">
                <li>
                    <p class="mb-0 "><?php echo " ".$_SESSION['nome'] ?></p>
                </li>
                <li>
                    <?php 
                    echo " ".$_SESSION['cpf']
                    ?>
    
                </li>
            </ul>
            <a href="?logout" class="btn btn-dark">Sair</a>
        </form>
    </div>
</nav>