<?php $title = 'Create your profile'; ?>
<?php ob_start(); ?>
<?php require('nav.php'); ?>

<div class="container-full">
  <header class="masthead_signin" style="background-image: url('public/css/img/studio.jpg');">

    <div class="container" align="center">
      <div class="row">
        <div class="col-lg-6 col-md-12 mx-auto">
          <div class="site-heading">
            <h1 id="connect">Create an account</h1>
            <form method="POST" action="index.php?action=signin" onsubmit="return verifForm(this)">
              <div class="form-group_m">
                <input required type="pseudo" name="pseudo" id="" placeholder="Pseudo" class="form-control"
                  onblur="verifPseudo(this)" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>"
                  title="Must contain at least 2 or at most 25 characters">
                <br>
              </div><br>
              <div class="form-group_m">
                <input required type="email" name="email" id="email" placeholder="Email" class="form-control"
                  onblur="verifMail(this)" value="<?php if(isset($email)) { echo $email; } ?>">
              </div><br>
              <div class="form-group_m">
                <input required type="text" name="genre" id="genre" placeholder="Genre (Style of music)"
                  class="form-control" onblur="verifGenre(this)" value="<?php if(isset($genre)) { echo $genre; } ?>">
              </div><br>
              <div class="form-group_m">
                <input required type="password" name="pass" id="password" class="form-control" onkeyup='check();' placeholder="Password"
                  onblur="verifPass(this)" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
              </div><br>
              <div class="form-group_m">
                <input required type="password" name="confirm_pass" id="confirm_password" class="form-control" onkeyup='check();'
                  placeholder="Confirm Password" onblur="verifPass(this)" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
              </div><br><span id='advert'></span><br><br><br>
              <div class="form-group_m">
                <input class="btn btn-primary" id="submit" type="submit" name="signin" class="form-control"
                  value="Sign Up">
              </div><br>
            </form>
          </div>
          <div align="center">
            <hr>
            <?php 
              if(isset($error))
              {
                  echo '<font color="red" family="Righteous, cursive">' . $error . "</font>";
              }
          ?>
          </div>
          <div id="message">
            <h4>Password must contain the following:</h4>
            <hr>
            <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
            <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
            <p id="number" class="invalid">A <b>number</b></p>
            <p id="length" class="invalid">Minimum <b>8 characters</b></p>
          </div>
        </div>
      </div>
    </div>
    <div class="btn_signin">
      <p style="color: #fff; font-weight: bold;">Already have an account ?</p>
      <a class="btn btn-primary" href="index.php?action=connexion">Log In</a>
    </div>
    <hr>
    <hr>
</div>



<script src="public/js/libs/verif.js"></script>
</header>







</div>

<?php require('footer.php'); ?>

<?php $content = ob_get_clean(); ?>


<?php require('template.php'); ?>