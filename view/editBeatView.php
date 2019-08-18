<?php ob_start(); ?>
<?php  require('nav.php'); ?>
<div class="container-full">
  <header class="masthead_profil">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-12 mx-auto">
          <div class="site-heading">
            <hr>
            <hr>
            <hr>
            <hr>

            <a href="#down" aria-label="Flêche vers le bas" id="arrow">
              <i class="fas fa-arrow-circle-down fa-w-16 fa-3x"></i><br><br>
            </a>
          </div>
        </div>
      </div>
    </div>
  </header>
  <hr>
  <hr>
  <hr>
  <div class="container">
    <div class="table-responsive">
      <table class="table table-hover table-dark">
        <thead>
          <tr class="header_tab">
            <td align="left" scope="col" class="headerTab">Titre</td>
            <td align="center" scope="col" class="headerTab">Date</td>
            <td align="center" scope="col" class="headerTab">Genre</td>
            <td align="center" scope="col" class="headerTab"></td>
            <td align="center" scope="col" class="headerTab">Edit file</td>
          </tr>
        </thead>
        <tbody>
          <?php foreach($beats as $beat) { ?>
          <tr>
            <td align="left" width="30%" class="beat1"><strong><?= htmlspecialchars($beat->title()) ?></strong><br>
            </td>
            <td align="center" width="15%" class="beat2">
              <div class="date"><?php echo htmlspecialchars($beat->dateCreation()) ?></div>
            </td>
            <td align="center" width="15%" class="beat2"><?= htmlspecialchars($beat->genre()) ?></td>
            <td align="center" width="30%" class="beat3">
              <audio controls="controls">
                <source class="audio" src="profils/audio/<?= $beat->audio() ?>" type="audio/mp3" />
              </audio>
            </td>
            <td align="center" width="30%" class="beat1">
              <script type="text/javascript" class="confirm">
                function confirmation() {
                  return confirm('Are you sure you want to delete this file ?');
                }
              </script>
              <a class="btn btn-primary_delete" onclick="return confirmation()"
                href="index.php?action=editBeat&beat=<?= $beat->id(); ?>">DELETE</a>
            </td>
          </tr>
        </tbody>
        <?php } ?>
      </table>

    </div>

  </div>



  <hr>
  <hr>
  <hr>

  <div class="btn_connexion" align='center'>
    <a class="btn btn-primary_deco" role="button" href="index.php?action=profil&id=<?= $_SESSION['id'] ?>">Back
      Profil</a>
  </div>



  <?php require('footer.php'); ?>

  <?php $content = ob_get_clean(); ?>

  <?php require('template.php'); ?>