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

            <h4 id="connect_describ"><?php echo $profil->pseudo() ?></h4>
            <a class="btn-xl text-uppercase js-scroll-trigger" href="#down" aria-label="Arrow down" id="arrow">
              <i class="fas fa-caret-down fa-w-16 fa-3x"></i><br><br>
            </a>
          </div>
        </div>
      </div>
    </div>
  </header>
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
    
<div class="btn_page">
<?php 
for($i=1;$i<=$totalBeat;$i++) {
    if($i == $currentPage) {

    } else {
    echo '
      <a  class="btn btn-primary_page" href="index.php?action=beat&page='.$i.'">'.$i.'</a>
    '
   ;
    }
}
?>
</div>
  </div>

 
</div>
 
  </div>



<hr><hr><hr>

<div class="btn_connexion" align='center'>
  <a class="btn btn-primary_deco" role="button" href="index.php?action=profil&id=<?= $_SESSION['id'] ?>" >Back Profil</a>
</div>

<?php require('footer.php'); ?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>