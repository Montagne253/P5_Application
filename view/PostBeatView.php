<?php $title = 'Create your profile'; ?>
<?php ob_start(); ?>
<?php require('nav.php'); ?>

<div class="container-full">
  <header class="masthead">
    <div class="overlay"></div>
    <div class="btn_signin">
      <div class="container" align="center">
        <h1 id="connect">Upload your beat</h1>
        <div class="row">
          <div class="col-lg-4 col-md-12 mx-auto">
            <div class="site-heading">
              <form method="POST" enctype="multipart/form-data" action="index.php?action=upload">
                <div class="form-group_m">
                  <input required type="title" name="title" id="" placeholder="Title" class="form-control" value="">
                </div><br>
                <div class="form-group_m">
                  <input required type="text" name="genre" id="" placeholder="Genre" class="form-control" value="">
                </div><br>
                <input required type="file" name="audio" id="file">
                <hr>
                <hr>
                <hr>
                <input class="btn btn-primary" type="submit" name="upload" value="Upload">
              </form>
              <hr>
              <hr>
              <hr>
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
            </div>
          </div>
        </div>
      </div>
  </header>
</div>

<?php require('footer.php'); ?>

<?php $content = ob_get_clean(); ?>


<?php require('template.php'); ?>