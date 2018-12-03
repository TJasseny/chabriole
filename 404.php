<?php
/**
 * The template for displaying 404 pages (not found)
 *
 *
 * @package Chabriole
 */

get_header(); ?>
<div class="fullframe bg-rouge center">
<?php if (has_custom_logo()) {?>
  <div class="container-custom-logo logo-header">
    <h1>
  <?php
  $custom_logo_id = get_theme_mod( 'custom_logo' );
  $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
  echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="" >'; ?>
</h1>
</div>
<?php } ?>
<div class="text-404">
  <h2 class="center jaune">Page indisponible !</h2>
  <p class="center white"><strong>C'est dommage, la page que vous cherchez n'existe plus ou n'a jamais existé</strong></p>
</div>
</div>
<?php get_footer(); ?>
