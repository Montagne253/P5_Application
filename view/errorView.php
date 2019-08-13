<?php $title = 'MH Production'; ?>

<?php ob_start(); ?>
<?php require('nav.php'); ?>


<div class="container-full">
  <!-- Page Header -->
  <header class="masthead" id="error">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-8 align-self-end" id="error">
          <h1 class="text-uppercase text-white font-weight-bold" id="error">Error 404</h1>
          <p class="text-white-75 font-weight-light mb-5">This page doesn't exist.</p>
        </div>
      </div>
    </div>
  </header>
  <div class="container" align="center">
  <hr><hr>
  <a class="btn btn-primary btn-xl js-scroll-trigger" href="index.php" id="home">HOME</a>
</div>

</div>

<?= require('footer.php'); ?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>