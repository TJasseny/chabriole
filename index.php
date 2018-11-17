<?php
/**
 * The main template file
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
<?php if ( is_home() && ! is_front_page() ) : ?>
<div class="page-header">
    <h1><?php single_post_title();?></h1>
<?php if ( get_header_image() ) : ?>
<div class="page-header" id="container-image-header" >
  <img  class="header-image" src="<?php echo chabriole_get_featured_image();?>" alt="">
<div class="page-header-overlay"></div>
</div>
<?php endif;
endif; ?>
</div>
</header>

<div class="blog blog-page">
  <?php
  //$latest_blog_posts = new WP_Query( array( 'posts_per_page' => 6 ) );
  //if ( $latest_blog_posts->have_posts() ) :
  //  while ( $latest_blog_posts->have_posts() ) : $latest_blog_posts->the_post();
  if (have_posts()) :
   while (have_posts()) : the_post();
    ?>
    <?php if (!(in_category('artist'))): // Categorie à exclure ?>
    <article class="post-<?php the_ID(); ?>">
      <?php if (has_post_thumbnail() && ! post_password_required() ) : ?>
        <div class="vignette-image">
          <?php the_post_thumbnail('medium_large'); ?>
        </div>
      <?php else : ?>
        <div class="vignette-noimage"></div>
      <?php endif; ?>
      <div class="vignette-excerpt">
        <h4><?php the_title(); ?></h4>
        <?php the_excerpt(); ?>
      </div>
      <a href="<?php the_permalink(); ?>">
        <div class="next-button">
          <i class="fa fa-chevron-right"></i>
        </div>
      </a>
    </article>
  <?php endif;
  endwhile; ?>
  <div class="chab-pagination">
<div><?php posts_nav_link(' ','<div class="next-button previous jaune"><i class="fa fa-chevron-left"></i></div><p class="label-chag-pagination">Articles<br/>précédents</p>','<div class="next-button next jaune"><i class="fa fa-chevron-right"></i></div><p class="label-chag-pagination">Articles<br/>suivants</p>') ?></div>
</div>
  <?php endif; ?>
</div>
