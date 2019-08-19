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
        <h2 class="section-heading text-uppercase" >Process</h2>
        <h3 class="section-subheading text-muted" >Use application</h3>
      </div>
    </div>
    <div class="row text-center">
      <div class="col-md-4">
        <span class="fa-stack fa-4x">
          <i class="fas fa-circle fa-stack-2x text-primary"></i>
          <i class="fas fa-hand-spock fa-stack-1x fa-inverse"></i>
        </span>
        <h4 class="service-heading" >Free access</h4>
        <p class="text-muted" >Create your profil on this platform. It's free !</p>
      </div>
      <div class="col-md-4">
        <span class="fa-stack fa-4x">
          <i class="fas fa-circle fa-stack-2x text-primary"></i>
          <i class="fas  fa-users fa-stack-1x fa-inverse"></i>
        </span>
        <h4 class="service-heading" >Show</h4>
        <p class="text-muted" >Post your tracks and show your talent.</p>
      </div>
      <div class="col-md-4">
        <span class="fa-stack fa-4x">
          <i class="fas fa-circle fa-stack-2x text-primary"></i>
          <i class="fas fa-address-card fa-stack-1x fa-inverse"></i>
        </span>
        <h4 class="service-heading" >Control</h4>
        <p class="text-muted" >Edit your profil and your files. You keep the control.</p>
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
          <img class="mx-auto rounded-circle" src="public/css/img/bhlogo.jpg" alt="Bh_logo">
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
        <h2 class="section-heading text-uppercase" >Latest Profils</h2>
        <h3 class="section-subheading text-muted" >See if it's interest you</h3>
      </div>
    </div>
    <div class="row">
      <?php foreach($profils as $profil) { ?>
      <div class="col-md-4 col-sm-6 portfolio-item">

        <a class="portfolio-link" href="index.php?action=publicProfil&profil=<?= $profil->id() ?>">

          <div class="portfolio-hover">
            <div class="portfolio-hover-content">
              <i class="fas fa-plus fa-3x"></i>
            </div>
          </div>
          <div class="portfolio-caption">
            <h4><?= $profil->pseudo(); ?></h4>
          </div>
          <div class="img-fluid">
            <img src="profils/avatars/<?= $profil->avatar() ?>" width="100%" height="250" alt="avatar_porfil" />
          </div>
        </a>


      </div>
      <?php } ?>
    </div>
  </div>
</section>



<?php require('footer.php'); ?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>