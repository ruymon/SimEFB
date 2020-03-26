<!DOCTYPE html>
<html lang="pt-BR">

<?php

  include 'include/head.php';

?>


  <body class="bg-gray-900">

    <div class="signpanel-wrapper">
      <div class="signbox">
        <div class="signbox-header">
          <h2>SimEFB</h2>
          <p class="mg-b-0">Sim Eletronic Flight Bag.</p>
        </div><!-- signbox-header -->
        <div class="signbox-body">
          <div class="form-group">
            <label class="form-control-label">Email:</label>
            <input type="email" name="email" placeholder="Insira seu email" class="form-control">
          </div><!-- form-group -->
          <div class="form-group">
            <label class="form-control-label">Senha:</label>
            <input type="password" name="password" placeholder="Enter your password" class="form-control">
          </div><!-- form-group -->
          <div class="form-group">
            <a href="">Recuperar senha</a>
          </div><!-- form-group -->
          <button class="btn btn-success btn-block">Entrar</button>
          <div class="tx-center bg-white bd pd-10 mg-t-40"><a href="cadastro.php">Criar uma conta</a></div>
        </div><!-- signbox-body -->
      </div><!-- signbox -->
    </div><!-- signpanel-wrapper -->

                  <!-- PAGE END HERE -->

  <?php

    include 'include/script.php';

  ?>

    

  </body>
</html>