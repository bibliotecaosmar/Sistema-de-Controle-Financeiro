<?php include "header.php" ?>
<?php
  session_start();
  if(isset($_SESSION['UsuarioLog'])){
    header("Location: logado.php");
    die();
  }
?>
  
  <nav class="navbar navbar-expand-md navbar-dark bg-secondary ">
    <div class="container">

      <a class="navbar-brand " href="#">SCFO</a>

      <ul class="navbar-nav float-right">
        
        <a href="cadastro.php">
          <button type="button" class="btn btn-dark mt-1">Cadastre-se</button>
        </a>
      </ul>

    </div>
  </nav>
    <div class="card text-white bg-light mb-3 mt-3 mx-auto" style="max-width: 30rem;">
      <div class="card-header text-dark text-center">Sistema de Controle Financeiro Orçamentário</div>
      <div class="card-body">
        <div class="container ">
          <form class="mx-auto text-dark " style="width: auto;" "card-text" action="VerificaLogin.php" method="post">
          <div class="container text-center">
            <h5>Login</h5>
          </div>
          <div class="form-group">
            <label for="exampleInputCpf">CPF</label>
            <input type="text" class="form-control" id="exampleInputCpf" placeholder="Ex.: 12345678910" name="cpf" maxlength="11" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" name="senha" pattern=".{8,20}" required title="A senha deve possuir de 8 a 20 caracteres" required>
          </div>
          <p class="small">Esqueceu sua senha?<a href>Clique Aqui!</a></p>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Manter conectado</label>
          </div >
          <button type="submit" class="btn btn-dark btn-block float-right">Entrar</button>
          </form>
          
        </div>
      </div>
    </div>
    
<?php include "footer.php" ?>

</body>
</html>