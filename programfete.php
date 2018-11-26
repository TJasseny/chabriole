<?php
/**
 * Template Name: Program fete
 *
 */
?>
<?php get_header(); ?>
<?php if ( ! is_home() && ! is_front_page() ) : ?>
<div class="page-header program-header">
    <h1 class="rouge"><?php single_post_title();?></h1>
<div class="page-header" id="container-image-header" >
  <img  class="header-image" src="<?php echo chabriole_get_featured_image();?>" alt="">
<div class="page-header-overlay"></div>
</div>
<?php endif; ?>
</div>
</header>
<!-- Navigation entre journées de festivval -->
<div class="nav-program bg-rouge">
  <?php
  $jourfest = get_field('jourfest');
  $nombre_artist_2 = get_field('nombre_artiste_jour_2', 172);
  $date_jour_1 = get_field('date_jour_1', 172);
  $date_jour_2 = get_field('date_jour_2', 172);
  $sur3jour = false;
   if ($nombre_artist_2 > 0) {
     $sur3jour = true;
     $date_jour_3 = get_field('date_jour_3', 172); ?>
     <a href="<?php bloginfo('url'); ?>/programmation"><p class="label-jour jaune"><?php echo $date_jour_1; ?></p></a>
     <a href="<?php bloginfo('url'); ?>/soir-2"><p class="label-jour jaune"><?php echo $date_jour_2; ?></p></a>
     <a href="<?php bloginfo('url'); ?>/la-fete-au-village"><p class="label-jour jaune"><?php echo $date_jour_3; ?></p></a>
  <?php } else { ?>
    <a href="<?php bloginfo('url'); ?>/programmation"><p class="label-jour jaune"><?php echo $date_jour_1; ?></p></a>
    <a href="<?php bloginfo('url'); ?>/la-fete-au-village"><p class="label-jour jaune"><?php echo $date_jour_2; ?></p></a>
<?php }?>
</div>
