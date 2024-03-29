<?php ob_start(); ?>
<?php
  $descript = "BH - Entertainment | Your profil | Independents Beatmaker's platform"; 
  $titre = 'B.H - Entertainment | '. ' '. $profil->pseudo();   
  require('nav.php'); 
?>
<div class="container-full">
  <header class="masthead_profil">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-12 mx-auto">
          <div class="site-heading" id="avatar">
            <div class="showAvatar avatar" style="background-image:url('profils/avatars/<?= $profil->avatar() ?>')"
              width="250" height="250">

            </div>

            <h4 id="connect_describ"><?php echo $profil->pseudo() ?></h4>
            <a class="btn-xl text-uppercase js-scroll-trigger" href="#down" aria-label="Arrow down" id="arrow">
              <i class="fas fa-caret-down fa-w-16 fa-3x"></i><br><br>
            </a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="describ" id="down">

    <h4><?php echo $profil->genre(); ?></h4>
    <p><?php  echo $profil->story(); ?></p>
  </div>
</div>
<hr>
<hr>
<hr>
<div class="container">
  <div class="table-responsive">
    <table class="table table-hover table-dark">
      <thead>
        <tr class="header_tab">
          <td align="left" scope="col" class="headerTab">Title</td>
          <td align="center" scope="col" class="headerTab">Genre</td>
          <td align="center" scope="col" class="headerTab">Audio</td>
        </tr>
      </thead>
      <tbody>
        <?php foreach($beats as $beat) { ?>
        <tr>
          <td align="left" class="beat1"><?= htmlspecialchars($beat->title()) ?><br>
            <div class="date"><?php echo htmlspecialchars($beat->dateCreation()) ?></div>
          </td>
          <td align="center" class="beat2"><?= htmlspecialchars($beat->genre()) ?></td>
          <td align="" class="beat3">
            <audio controls="controls" class="audio" controlsList="nodownload">
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



<div class="container" align="center">
  <hr>
  <hr>
  <a class="btn btn-primary " href="index.php?action=pageProfil&page=1" id="home">BACK</a>
</div>

<?php require('footer.php'); ?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>