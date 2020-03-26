<!DOCTYPE html>
<html lang="pt-BR">
  
    <?php
        include 'include/head.php';
    ?>

  <body class="bg-gray-900">

    <div class="signpanel-wrapper">
      <div class="signbox signup">
        <div class="signbox-header">
          <h2>Shamcey</h2>
          <p class="mg-b-0">Responsive Bootstrap 4 Admin Template</p>
        </div><!-- signbox-header -->
        <div class="signbox-body">
          <div class="form-group">
            <label class="form-control-label">Email:</label>
            <input type="email" name="email" class="form-control" placeholder="Type email address">
          </div><!-- form-group -->

          <div class="row row-xs">
            <div class="col-sm">
              <div class="form-group">
                <label class="form-control-label">Firstname:</label>
                <input type="text" name="firstname" class="form-control" placeholder="Type firstname">
              </div><!-- form-group -->
            </div><!-- col -->
            <div class="col-sm">
              <div class="form-group">
                <label class="form-control-label">Lastname:</label>
                <input type="text" name="lastname" class="form-control" placeholder="Type lastname">
              </div><!-- form-group -->
            </div><!-- col -->
          </div><!-- row -->

          <div class="row row-xs">
            <div class="col-sm">
              <div class="form-group">
                <label class="form-control-label">Password:</label>
                <input type="password" name="password" class="form-control" placeholder="Type password">
              </div><!-- form-group -->
            </div><!-- col -->
            <div class="col-sm">
              <div class="form-group">
                <label class="form-control-label">Confirm Password:</label>
                <input type="password" name="conpassword" class="form-control" placeholder="Retype password">
              </div><!-- form-group -->
            </div><!-- col -->
          </div><!-- row -->

          <div class="form-group">
            <label class="form-control-label">Company Name:</label>
            <input type="text" name="company" class="form-control" placeholder="Type company name">
          </div><!-- form-group -->

          <div class="form-group mg-b-20 tx-12">By clicking Sign Up button below you agree to our <a href="">Terms of Use</a> and our <a href="">Privacy Policy</a></div>

          <button type="submit" class="btn btn-success btn-block">Sign Up</button>
          <div class="tx-center bd pd-10 mg-t-40">Already a member? <a href="page-signin.html">Sign In</a></div>
        </div><!-- signbox-body -->
      </div><!-- signbox -->
    </div><!-- signpanel-wrapper -->

              <!-- PAGE END HERE -->

    <?php
        include 'include/script.php';
    ?>
    
  
  </body>
</html>
