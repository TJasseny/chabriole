<?php
/**
 * Template Name: tarif
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

<?php
// Si la case est coché on affiche le contenu de la section
if (get_field('actif_information') === 'true') {  ?>
<!-- Debut Section message -->
<section class="first">
  <div class="container-tarif">
  <h3 class="jaune"><?php the_field('titre_information'); ?></h3>
  <?php the_field('texte_information'); ?>
</div>
</section>
<?php } ?>

<?php
// Si la case est coché on affiche le contenu de la section
if (get_field('actif_tarifs') === 'true') {
get_template_part('template-parts/tarif', 'tarif');
 } ?>
<?php // Section points de vente
if (get_field('actif_pdv') === 'true') {
  get_template_part('template-parts/tarif', 'pdv');
} ?>

<?php // Section Office de tourisme
if (get_field('adresses_office_tourisme') === 'true') {
  get_template_part('template-parts/tarif', 'office');
 } ?>

<?php get_footer(); ?>
