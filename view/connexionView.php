<?php $title = 'Profil Connexion' ?>

<?php ob_start(); ?>

<?php $header = require('nav.php'); ?>
<div class="container-full">
<header class="masthead_login">
    <div class="overlay"></div>
    <div class="container" align="center">
      <div class="row">
        <div class="col-lg-4 col-md-12 mx-auto">
          <div class="site-heading">
            <h1 id="connect">Login</h1>
            <form method="POST" action="index.php?action=connexion">
              <div class="form-group_m">
                <input required type="pseudo" name="pseudoConnect" placeholder="Pseudo" class="form-control">
              </div><br>
              <div class="form-group_m">
                <input required type="password" name="passwordConnect" class="form-control"
                  placeholder="Password">
              </div><br><br>
              <button type="submit" name="submitConnect" class="btn btn-primary">LOGIN</button>
              <br><br>
<?php 
    if(isset($error))
    {
        echo '<font color="red">' . $error . "</font>";
    }
?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="container" align="center">
    <hr><hr>
    <a class="btn btn-primary btn-xl js-scroll-trigger" href="index.php" id="home">HOME</a>
  </div>
</div>

<?php require('footer.php'); ?>
<?php $content = ob_get_clean(); ?>


<?php require('template.php'); ?>