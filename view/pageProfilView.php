<?php ob_start(); ?>

<?php require('nav.php'); ?>


<hr>
<hr>
<section class="bg-light page-section" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase" id="portfolio">All Beatmakers</h2>
          <hr><hr>
        </div>
      </div>
      <div class="row">
      <?php foreach($profils as $profil) { ?> 
        <div class="col-md-3 col-sm-6 portfolio-item">
        
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
          <img  src="profils/avatars/<?= $profil->avatar() ?>" width="100%" height="200px" />
          </div>
          </a>
          
          
        </div>
        <?php } ?>
      </div>
    </div>
  </section>
<div class="btn_page">
<?php 
for($i=1;$i<=$totalPages;$i++) {
    if($i == $courantPage) {

    } else {
    echo '
   
      <a  class="btn btn-primary_page" href="index.php?action=pageProfil&page='.$i.'">'.$i.'</a>
    
    '
   ;
    }
}
?>
</div>
<!--<div class="btn_page"><a class="btn btn-primary_page" href="index.php?action=pagination&page='.$i.'">'.$i.'</a></div>'-->



<?php require('footer.php'); ?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>


