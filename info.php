<?php
/**
 * Template Name: infos pratiques
 *
 */
?>
<?php get_header(); ?>
<?php if ( ! is_home() && ! is_front_page() ) : ?>
<div class="page-header">
    <h1><?php single_post_title();?></h1>
    <div class="page-header" id="container-image-header" style="background-image: url('<?php echo chabriole_get_featured_image();?>')">
      <!--<img  class="header-image" src="<?php //echo chabriole_get_featured_image();?>" alt="">-->
<div class="page-header-overlay"></div>
</div>
<?php endif; ?>
</div>
</header>
<div class="container-info">
<section class="info-access first">
  <h3 class="rouge"><?php the_field('titre_section_access'); ?></h3>
  <?php the_field('texte_adresse'); ?>
  <div class="info-map">
    <?php
    $location = get_field('map');
    if( !empty($location) ):
    ?>
    <div class="acf-map">
    	<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
    </div>
    <?php endif; ?>
    <script src="https://maps.googleapis.com/maps/api/js?key="></script>
    <script src="<?php bloginfo('url'); ?>/wp-content/themes/chabriole/assets/js/acf-gmap.js"></script>
</div>
  <?php the_field('texte_gps'); ?>
</section>
</div>

<?php if (get_field('actif_section_eco') === 'true') : ?>
<div class="section-eco">
<div class="eco-overlay">
<div style="background-image: url('<?php the_field('image_eco'); ?>">
<div class="mask"></div>
</div>
</div>
<section class="content-eco-chabriole container-info">
  <div>
<h3 style="color: <?php the_field('couleur_titre_eco'); ?>;"><?php the_field('titre_eco'); ?></h3>
<div class="flex">
<?php the_field('texte_eco'); ?>
</div>
</div>
</section>
</div>
<?php endif; ?>

<?php if (get_field('actif_section_plan') === 'true') : ?>
<section class="info-plan">
  <div class="container-info">
<h3 class="jaune"><?php the_field('titre_plan'); ?></h3>
<div class="flex">
<?php the_field('texte_plan'); ?>
<div class="bloc-plan">
  <img src="<?php the_field('plan_du_site'); ?>">
  <div class="button-plan">
    <a href="<?php echo bloginfo('url'); ?>">
    <div class="button-archive">
    <p>télécharger le plan</p>
    <div class="next-button">
      <i class="fa fa-download"></i>
    </div>
    </div>
    </a>
  </div>
</div>
</div>
</div>
</section>
<?php endif; ?>

<?php if (get_field('actif_reglement') === 'true') : ?>
<div class="section-reglement section-eco">
<div class="eco-overlay">
<div style="background-image: url('<?php the_field('image_reglement'); ?>">
<div class="mask"></div>
</div>
</div>
<section class="content-eco-chabriole container-info">
  <div>
<h3 style="color: <?php the_field('couleur_titre_reglement'); ?>;"><?php the_field('titre_reglement'); ?></h3>
<p class="intro-reglement white bold"><?php the_field('texte_intro_reglement'); ?></p>
<div class="flex">
  <?php the_field('texte_reglement'); ?>
</div>
</div>
</section>
</div>
<?php endif; ?>

<?php get_footer(); ?>
