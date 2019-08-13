<?php ob_start(); ?>
<?php  require('nav.php'); ?>
<div class="container-full">
  <header class="masthead_profil">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-12 mx-auto">
          <div class="site-heading">
            <hr><hr><hr><hr>

            <h2 id="connect_describ"><?php echo $profil->pseudo() ?></h2>
            <a class="btn-xl text-uppercase js-scroll-trigger" href="#down" aria-label="Arrow down" id="arrow">
              <i class="fas fa-caret-down fa-w-16 fa-3x"></i><br><br>
            </a>
          </div>
        </div>
      </div>
    </div>
  </header>


  <div class="describ">
    <div class="showAvatar avatar" style="background-image:url('profils/avatars/<?= $profil->avatar() ?>')" width="250" height="250"> <hr><hr> 
    </div>
    <br>
    <hr>
    <form method="POST" action="index.php?action=editAvatar" enctype="multipart/form-data">
      <input type="file" name="avatar" id="file"/><br><br>
      <input class="btn btn-primary" type="submit" value="SAVE AVATAR" /><br><br>
    </form>
    <hr><hr>
    <p>Email : <?php echo $profil->email(); ?></p>
    <p><?= $profil->story(); ?></p>
  </div>
</div>
<hr><hr><hr>
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

<div class="container">
  <div class="table-responsive" id="down">
  <h6>Studio</h6><i class="far fa-sliders-v fa-w-16 fa-3x"></i>
    <table class="table table-dark">
      <tbody>
        <tr>
          <td align="center" style="padding: 30px;" width="30%"><a class="btn btn-primary" role="button" href="index.php?action=upload&id=<?= $_SESSION['id'] ?>"><i class="fas fa-compact-disc"></i><br> Post Beat</a>
          </td>
          <td align="center" style="padding: 30px;" width="30%"><a class="btn btn-primary" width="50%" role="button" href="index.php?action=editProfil"><i class="far fa-user-circle"></i><br>Edit Profil</a>
          </td>
          <td align="center" style="padding: 30px;" width="30%"><a class="btn btn-primary" role="button" href="index.php?action=editBeat&profil=<?= $_SESSION['id'] ?>"><i class="fas fa-trash-alt"></i><br>Edit Beats</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<div class="container">
  <div class="table-responsive">
    <table class="table table-hover table-dark">
      <thead>
        <tr class="header_tab">
          <td align="left" scope="col" class="headerTab">Title</td>
          <td align="center" scope="col" class="headerTab">Genre</td>
          <td align="right" scope="col" class="headerTab">Audio</td>
        </tr>
      </thead>
      <tbody>
      <?php foreach($beats as $beat) { ?>
        <tr>
          <td align="left" width="20%" class="beat"><strong><?= htmlspecialchars($beat->title()) ?></strong><br>
            <div class="date"><?php echo htmlspecialchars($beat->dateCreation()) ?></div>
          </td>
          <td align="center" width="20%" class="beat"><?= htmlspecialchars($beat->genre()) ?></td>
          <td align="right" width="60%" class="beat">
            <audio controls="controls" class="audio">
              <source src="profils/audio/<?= $beat->audio() ?>" type="audio/mp3" />
              Votre navigateur ne supporte pas la balise HTML5 audio.
            </audio>
          </td>
        </tr>
      </tbody>
      <?php } ?>
      
    </table>
    
  </div>
 
</div>





<hr><hr><hr>

<div class="btn_connexion" align='center'>
  <a class="btn btn-primary_deco" role="button" href="index.php?action=deconnexion" >SIGN OUT</a>
</div>

<?php require('footer.php'); ?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>