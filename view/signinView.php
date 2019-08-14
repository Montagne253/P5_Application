<?php $title = 'Create your profile'; ?>
<?php ob_start(); ?>
<?php require('nav.php'); ?>

<div class="container-full">
  <header class="masthead_signin" style="background-image: url('public/css/img/studio.jpg');">
    
    <div class="container" align="center">
      <div class="row">
        <div class="col-lg-4 col-md-12 mx-auto">
          <div class="site-heading">
          <h1 id="connect">Create an account</h1>
            <form method="POST" action="index.php?action=signin">
            <div class="form-group_m">
              <input required type="pseudo" name="pseudo" id="" placeholder="Pseudo" class="form-control"
                value="<?php if(isset($pseudo)) { echo $pseudo; } ?>">
            </div><br>
            <div class="form-group_m">
              <input required type="email" name="email" id="" placeholder="Email" class="form-control"
                value="<?php if(isset($email)) { echo $email; } ?>">
            </div><br>
            <div class="form-group_m">
              <input required type="text" name="genre" id="" placeholder="Genre (Style of music)" class="form-control"
                value="<?php if(isset($genre)) { echo $genre; } ?>">
            </div><br>
            <div class="form-group_m">
              <input required type="password" name="pass" id="" class="form-control" placeholder="Password">
            </div><br>
            <div class="form-group_m">
              <input required type="password" name="confirm_pass" id="" class="form-control" placeholder="Confirm Password">
            </div><br>
            <div class="form-group_m">
              <input class="btn btn-primary" type="submit" name="signin"  class="form-control" value="Sign Up">
            </div><br>
            </form>
          </div>
          </div>
        </div>
      </div>
      <div class="btn_signin">
        <p style="color: #fff; font-weight: bold;">Already have an account ?</p>
        <a class="btn btn-primary" href="index.php?action=connexion">Log In</a>
      </div>
      <hr><hr>
    </div>

<div align="center">
    <hr>
<?php 
    if(isset($error))
    {
        echo '<font color="red">' . $error . "</font>";
    }
?>
</div>


  </header>







</div>

<?php require('footer.php'); ?>

<?php $content = ob_get_clean(); ?>


<?php require('template.php'); ?>