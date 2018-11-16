<?php
/**
 * The template file for displaying pages
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Chabriole
 */
get_header();
?>
<?php if ( ! is_home() && ! is_front_page() ) : ?>
<div class="page-header">
    <h1><?php single_post_title();?></h1>
<?php if ( get_header_image() ) : ?>
<div class="page-header" id="container-image-header" >
  <img  class="header-image" src="<?php header_image(); ?>" alt="">
<div class="page-header-overlay"></div>
</div>
<?php endif; ?>
<?php endif; ?>
</div>
</header>
