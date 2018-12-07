<?php
/**
 * Template Name: history
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
<section class="button-list">
  <a href="<?php echo bloginfo('url'); ?>">
  <div class="button-archive">
  <p>Voir la liste de tous <br>les artistes depuis 1975</p>
  <div class="icon-list">
    <i class="fa fa-list"></i>
  </div>
  </div>
  </a>
</section>
<section>
<div class="history-blog">
  <h4>Tous les festivals depuis 1975</h4>
  <div class="container-article">
  <?php
  $homepage_blog_args = array(
    'cat' => 4,
    'posts_per_page' => -1,
    'order' => 'ASC',);
    $blog_filtered = new WP_Query($homepage_blog_args);
    if ( $blog_filtered->have_posts() ) :
      while ( $blog_filtered->have_posts() ) : $blog_filtered->the_post();
      ?>

  <article id="post-<?php the_ID(); ?>">
    <?php if (has_post_thumbnail() && ! post_password_required() ) : ?>
        <a href="<?php the_permalink(); ?>">
          <h4 class="white"><?php the_title(); ?></h4>
        </a>
        <?php the_post_thumbnail('medium_large'); ?>
        <div class="darkmask"></div>
      <?php endif; ?>
  </article>

<?php endwhile;
endif;
?>
  <?php wp_reset_query(); ?>
</div>
    </div>
</section>

<?php get_footer(); ?>
