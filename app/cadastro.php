<!DOCTYPE html>
<html lang="pt-BR">
  
    <?php
        include 'include/head.php';
    ?>

  <body class="bg-gray-900">

    <div class="signpanel-wrapper">
      <div class="signbox signup">
        <div class="signbox-header">
          <img src="/simefb/img/simefb_logo.png" width="100px"></img>
  
        </div><!-- signbox-header -->
        <div class="signbox-body">
          <div class="form-group">
            <label class="form-control-label">Email:</label>
            <input type="email" name="email" class="form-control" placeholder="Digite seu email">
          </div><!-- form-group -->

          <div class="row row-xs">
            <div class="col-sm">
              <div class="form-group">
                <label class="form-control-label">Nome:</label>
                <input type="text" name="firstname" class="form-control" placeholder="Digite seu nome">
              </div><!-- form-group -->
            </div><!-- col -->
            <div class="col-sm">
              <div class="form-group">
                <label class="form-control-label">Sobrenome:</label>
                <input type="text" name="lastname" class="form-control" placeholder="Digite seu sobrenome">
              </div><!-- form-group -->
            </div><!-- col -->
          </div><!-- row -->

          <div class="row row-xs">
            <div class="col-sm">
              <div class="form-group">
                <label class="form-control-label">Senha:</label>
                <input type="password" name="password" class="form-control" placeholder="Digite sua senha:">
              </div><!-- form-group -->
            </div><!-- col -->
            <div class="col-sm">
              <div class="form-group">
                <label class="form-control-label">Confirme sua senha:</label>
                <input type="password" name="conpassword" class="form-control" placeholder="Confirme sua senha:">
              </div><!-- form-group -->
            </div><!-- col -->
          </div><!-- row -->

          <div class="form-group">
            <label class="form-control-label">Usuário:</label>
            <input type="text" name="company" class="form-control" placeholder="Escolha um usuário">
          </div><!-- form-group -->

          <div class="form-group mg-b-20 tx-12">Ao clicar em "Cadastrar" você concorda com os <a href="">Termos de Uso</a> e a <a href="">Política de Privacidade.</a></div>

          <button type="submit" class="btn btn-success btn-block">Cadastrar</button>
          <div class="tx-center bd pd-10 mg-t-40">Já tem conta? <a href="login.php">Login</a></div>
        </div><!-- signbox-body -->
      </div><!-- signbox -->
    </div><!-- signpanel-wrapper -->

              <!-- PAGE END HERE -->

    <?php
        include 'include/script.php';
    ?>
    
  
  </body>
  
  <?php

    include 'include/footer.php';

  ?>

</html>
