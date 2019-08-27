<?php ob_start(); ?>
<?php 
  $titre ='B.H - Entertainment | Account access';
  $descript ='B.H - Entertainment | Account access'; 
  $header = require('nav.php'); 
?>
<div class="container-full">
  <header class="masthead_login">
    <div class="overlay"></div>
    <div class="container" align="center">
      <div class="row">
        <div class="col-lg-4 col-md-12 mx-auto">
          <div class="site-heading">
            <h1 id="connect">Log in to your account</h1>
            <form method="POST" action="index.php?action=connexion">
              <div class="form-group_m">
                <input required type="pseudo" name="pseudoConnect" placeholder="Pseudo" class="form-control">
              </div><br>
              <div class="form-group_m">
                <input required type="password" name="passwordConnect" class="form-control" placeholder="Password">
              </div><br><br>
              <button type="submit" name="submitConnect" class="btn btn-primary">LOG IN</button>
              <br><br>
<?php  if(isset($_SESSION['flash'])) { 
      $flash = $_SESSION['flash'];
?>
              <div class="alert alert-danger" role="alert">
                <?= $flash ?>
              </div>
              <?php   

  } 
  unset($_SESSION['flash']);
?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </header>
    <div class="btn_signin" align="center">
      <p style="color: #fff; font-weight: bold;">You don't have an account ?</p>
      <a class="btn btn-primary" href="index.php?action=signin">Sign Up</a>
    </div>
</div>

<?php require('footer.php'); ?>
<?php $content = ob_get_clean(); ?>


<?php require('template.php'); ?>