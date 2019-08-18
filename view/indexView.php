<?php ob_start(); ?>

<?php require('nav.php'); ?>

<!-- Header -->
<header class="masthead" style="background-image: url('public/css/img/studio_zic.jpg');">
  <div class="masthead_overlay" onclick="style.pointerEvents='none'">

    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">Beat High Entertainment</div>
        <div class="intro-heading text-uppercase">Independent Beatmakers</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">show
        </a>
      </div>
    </div>
  </div>

</header>

<!-- Services -->
<section class="page-section" id="services">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase" id="services">Process</h2>
        <h3 class="section-subheading text-muted" id="services">Use application</h3>
      </div>
    </div>
    <div class="row text-center">
      <div class="col-md-4">
        <span class="fa-stack fa-4x">
          <i class="fas fa-circle fa-stack-2x text-primary"></i>
          <i class="fas fa-hand-spock fa-stack-1x fa-inverse"></i>
        </span>
        <h4 class="service-heading" id="services">Free access</h4>
        <p class="text-muted" id="services">Create your profil on this platform. It's free !</p>
      </div>
      <div class="col-md-4">
        <span class="fa-stack fa-4x">
          <i class="fas fa-circle fa-stack-2x text-primary"></i>
          <i class="fas  fa-users fa-stack-1x fa-inverse"></i>
        </span>
        <h4 class="service-heading" id="services">Show</h4>
        <p class="text-muted" id="services">Post your tracks and show your talent.</p>
      </div>
      <div class="col-md-4">
        <span class="fa-stack fa-4x">
          <i class="fas fa-circle fa-stack-2x text-primary"></i>
          <i class="fas fa-address-card fa-stack-1x fa-inverse"></i>
        </span>
        <h4 class="service-heading" id="services">Control</h4>
        <p class="text-muted" id="services">Edit your profil and your files. You keep the control</p>
      </div>
    </div>
  </div>
</section>

<!-- About -->
<section class="bg-light page-section" id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase" id="about">US</h2>
        <h3 class="section-subheading text-muted" id="about">Few words about us.</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="team-member">
          <img class="mx-auto rounded-circle" src="public/css/img/bhlogo.jpg" alt="">
          <h4 id="about1">B.H Entertainment</h4>
          <hr>
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 mx-auto text-center">
        <p class="large text-muted" id="about">Nemo quaeso miretur, si post exsudatos labores itinerum longos
          congestosque adfatim commeatus fiducia vestri ductante barbaricos pagos adventans velut mutato repente
          consilio ad placidiora deverti.</p>
      </div>
    </div>
  </div>
</section>


<section class="bg-light page-section" id="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase" id="portfolio">Latest Profils</h2>
        <h3 class="section-subheading text-muted" id="portfolio">See if it's interest you</h3>
      </div>
    </div>
    <div class="row">
      <?php foreach  ($profils as $profil) { ?>
      <div class="col-md-4 col-sm-6 portfolio-item">
        <a class="portfolio-link" href="index.php?action=publicProfil&profil=<?= $profil->id() ?>">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content">
              <i class="fas fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="">
          <div class="img-fluid">
            <img src="profils/avatars/<?= $profil->avatar() ?>" width="100%" height="250" />
          </div>
          <div class="portfolio-caption">
            <h4><?= $profil->pseudo(); ?></h4>
          </div>
        </a>
      </div>
      <?php } ?>
    </div>
  </div>
</section>

<!-- Modal -->
<div class="portfolio-modal modal fade" id="portfolioModal" tabindex="-1" role="dialog" aria-hidden="true">
  <?php   {  ?>
  <div class="modal-dialog">

    <div class="modal-content">

      <div class="close-modal" data-dismiss="modal">
        <div class="lr">
          <div class="rl"></div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <div class="modal-body">

              <!-- Project Details Go Here -->
              <h2 class="text-uppercase"><?= $profil->pseudo() ; ?></h2>
              <p class="item-intro text-muted"><?= $profil->email() ; ?></p>
              <div class="showAvatar avatar">
                <img src="profils/avatars/<?= $profil->avatar() ?>" width="250" height="250" />
              </div>
              <ul class="list-inline">
                <li>Genre : <?= $profil->genre() ;?></li>
                <li>Date : <?= $profil->dateCreation() ; ?></li>
                <li>Description : <?= $profil->story(); ?></li>
              </ul>
              <a class="btn btn-primary" href="index.php?action=publicProfil&profil=<?= $profil->id(); ?>  target="
                _blank">
                View Profil
                <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>

        </div>

      </div>

    </div>
    <?php } ?>
  </div>

</div>


<?php require('footer.php'); ?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>