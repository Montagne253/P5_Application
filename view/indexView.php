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


  <!-- Services
  <section class="page-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Vision</h2>
          <h3 class="section-subheading text-muted">Our vision of the future of beatmaking</h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-3">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-hand-spock fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Independence</h4>
          <p class="text-muted"></p>
        </div>
      </div>
    </div>
  </section> -->



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
        <div class="col-md-3">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-hand-spock fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading" id="services">Independence</h4>
          <p class="text-muted" id="services">Create your profil on this platform. It's free !</p>
        </div>
        <div class="col-md-3">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas  fa-address-card fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading" id="services">Show</h4>
          <p class="text-muted" id="services">Uplaod your tracks and show your talent.</p>
        </div>
        <div class="col-md-3">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-share-alt-square fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading" id="services">Share</h4>
          <p class="text-muted" id="services">Share your work with friends and other users.</p>
        </div>
        <div class="col-md-3">
            <span class="fa-stack fa-4x">
                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                <i class="fas fa-users fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading" id="services">Interaction</h4>
            <p class="text-muted" id="services">Get in touch with other beatmakers to work with them.</p>
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
            <img class="mx-auto rounded-circle" src="public/css/img/M.jpg" alt="">
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
          <p class="large text-muted" id="about">Nemo quaeso miretur, si post exsudatos labores itinerum longos congestosque adfatim commeatus fiducia vestri ductante barbaricos pagos adventans velut mutato repente consilio ad placidiora deverti.</p>
        </div>
      </div>
    </div>
  </section>

    <!-- Contact -->
  <!--<section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Contact</h2>
          <h3 class="section-subheading text-muted">Keep in touch here for more informations.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Veuillez entrer votre Nom.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Veuillez entrer votre adresse Email.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Veuillez entrer votre numéros de Tel.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Veuillez écrire votre message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Envoyer Message</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>-->

  <!-- Profil Grid -->


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
        
          <a class="portfolio-link"  href="index.php?action=publicProfil&profil=<?= $profil->id() ?>">
          
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="">
            <div  class="img-fluid">
              <img  src="profils/avatars/<?= $profil->avatar() ?>" width="100%" height="250"/>
            </div>
            <div class="portfolio-caption">
            <h4><?= $profil->pseudo(); ?></h4>
            <p class="text-muted"><?php //$profil->description(); ?></p>
          </div>
          </a>
          
          
        </div>
        <?php } ?>
      </div>
    </div>
  </section>





  <!-- Skills 
  <section class="py-5">
        <h2 class="section-heading text-uppercase" align="center">Skills</h2>
        <hr>
        <hr>
        <hr>
    <div class="container">
      <div class="row">
         
        <div class="col-md-3 col-sm-6">
               
            <img class="img-fluid d-block mx-auto" src="img/logos/html5.jpg" alt="">
        
        </div>
        <div class="col-md-3 col-sm-6">
          
            <img class="img-fluid d-block mx-auto" src="img/logos/php.jpg" alt="">
          
        </div>
        <div class="col-md-3 col-sm-6">
          
            <img class="img-fluid d-block mx-auto" src="img/logos/wordpress-logo-1.jpg" alt="">
          
        </div>
        <div class="col-md-3 col-sm-6">
            
                <img class="img-fluid d-block mx-auto" src="img/logos/javascript.jpg" alt="">
           
        </div>
      </div>
    </div>
    <hr>
  <hr>
  <hr>
  </section> -->
  



  
  
  <!-- Portfolio Modals -->
  
  <!-- Modal 1 -->
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
                <div  class="showAvatar avatar">
                  <img  src="profils/avatars/<?= $profil->avatar() ?>" width="250" height="250"/>
                </div>
                <ul class="list-inline">
                  <li>Genre : <?= $profil->genre() ;?></li>
                  <li>Date : <?= $profil->dateCreation() ; ?></li>
                  <li>Description : <?= $profil->story(); ?></li>
                </ul>
                <a class="btn btn-primary" href="index.php?action=publicProfil&profil=<?= $profil->id(); ?>  target="_blank">
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