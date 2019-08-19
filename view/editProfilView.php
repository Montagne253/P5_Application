<?php $title = 'Create your profile'; ?>
<?php ob_start(); ?>
<?php require('nav.php'); ?>

<div class="container-full">
  <header class="masthead_signin" style="background-image: url('public/css/img/nice.jpg');">

    <div class="container" align="center">
      <div class="row">
        <div class="col-lg-6 col-md-12 mx-auto">
          <div class="site-heading">
            <h1 id="connect">Edit Profil</h1>
            <form method="POST" action="" onsubmit="return verifForm(this)>
              <div class="form-group_m">
                <input required type="text" name="newpseudo" placeholder="pseudo" class="form-control"
                  id=""  title="Must contain at least 2 or at most 25 characters" value="<?php echo $profil->pseudo(); ?>" />
              </div><br>
              <div class="form-group_m">
                <input required type="email" name="newemail" placeholder="email" class="form-control"
                  id="email"  aria-describedby="emailHelp" value="<?php echo $profil->email(); ?>" />
              </div><br>
              <div class="form-group_m">
                <input required type="password" name="newmdp" id="password" onkeyup='check();' placeholder="new password" class="form-control"
                onblur="verifPass(this)" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"/>
              </div><br>
              <div id="message">
                <h4>Password must contain the following:</h4>
                <hr>
                <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                <p id="number" class="invalid">A <b>number</b></p>
                <p id="length" class="invalid">Minimum <b>8 characters</b></p>
              </div><br>
              <div class="form-group_m">
                <input required type="password" name="confirmnewmdp" placeholder="confirm new password"
                  class="form-control" onkeyup='check();' id="confirm_password"
                  placeholder="Confirm Password" onblur="verifPass(this)" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" />
              </div><br><span id='advert'></span><br><br>
              <div class="form-group_m">
                <input required type="text" name="genre" id="" placeholder="Genre (Style of music)" class="form-control"
                  value="<?php echo $profil->genre(); ?>">
              </div><br>
              <div class="form-group_m">
                <input type="text" name="story" id="" placeholder="A little description" rows="7" cols="140"
                  class="form-control" value="<?php echo $profil->story(); ?>">
              </div><br>
              <hr>

              <input class="btn btn-primary" type="submit" value="SAVE" /><br><br>
            </form>
          </div>
        </div>
      </div>
    </div>
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
<?php  if(isset($_SESSION['flash'])) { 
  $flash = $_SESSION['flash'];
  
?>
<div class="alert alert-success" role="alert">
  <?= $flash ?>
</div>
<?php   

} 
unset($_SESSION['flash']);
?>

<script src="public/js/libs/verif.js"></script>
</div>

<?php require('footer.php'); ?>

<?php $content = ob_get_clean(); ?>


<?php require('template.php'); ?>