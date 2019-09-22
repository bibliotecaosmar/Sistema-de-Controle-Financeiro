    <?php include "header.php" ?>
    
        <nav class="navbar navbar-expand-md navbar-dark bg-secondary ">
            <div class="container">
                <a class="navbar-brand " href="index.php">SCFO</a>
                <ul class="navbar-nav float-right">
                    <a href="index.php">
                        <button type="button" class="btn btn-dark mt-1">Login</button>
                    </a>
                </ul>
            </div>
        </nav>
        <div class="card text-white bg-light mb-3 mt-3 mx-auto" style="max-width: 30rem;">
            <div class="card-header text-dark text-center">Cadastro de Usuário</div>
            <div class="card-body">
                <div class="container pt-3 ">
                    
                    <form class="mx-auto text-dark " style="width: auto;" action="VerificaCadastro.php" method="post">
    
                        <div class="form-group">
                            <label for="exampleInputEmail1">CPF</label>
                            <input type="text" name="cpf" class="form-control" id="exampleInputCpf" aria-describedby="" placeholder="000.000.000-00" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" required>
                        </div>
    
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome completo</label>
                            <input type="text" name="nome" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Nome completo" required>
                        </div>
    
                        <div class="form-group">
                            <label for="exampleInputEmail1">E-mail</label>
                            <input type="text" name="email1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entre com seu email" required>
                        </div>
    
                        <div class="form-group">
                            <label for="exampleInputEmail1">Confirmar e-mail</label>
                            <input type="text" name="email2" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Confirme seu email" required>
                        </div>
    
                        <div class="form-group">
                            <label for="exampleInputPassword1">Senha</label>
                            <input type="password" name="senha1" class="form-control" id="exampleInputPassword1" placeholder="Insira sua senha" pattern=".{8,20}" required title="A senha deve possuir de 8 a 20 caracteres" required>
                        </div>
    
                        <div class="form-group">
                            <label for="exampleInputPassword1">Confirmar senha</label>
                            <input type="password" name="senha2" class="form-control" id="exampleInputPassword2" placeholder="Confirme a senha" pattern=".{8,20}" required title="A senha deve possuir de 8 a 20 caracteres" required>
                        </div>
    
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                            <label class="form-check-label" for="exampleCheck1">Ao clicar em "Cadastrar", você aceita os
                                <a href="#termos">Termos</a> e a Política de
                                <a href="#privacidade">Privacidade</a>
                            </label>
                        </div>
                        <button type="submit" class="btn btn-dark float-right">Cadastrar</button>
                    </form>
                    
                </div>
            </div>
        </div>
        
</body>
<?php include "footer.php" ?>
</html>