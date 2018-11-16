<!-- Début de la section blog -->

<section class="" id="">
  <div class="container">
    <h2 id="section-actu" class="jaune">#Actualités</h2>
  </div>
  <div class="blog blog-homepage">
    <?php
    $latest_blog_posts = new WP_Query( array( 'posts_per_page' => 3 ) );
    if ( $latest_blog_posts->have_posts() ) :
      while ( $latest_blog_posts->have_posts() ) : $latest_blog_posts->the_post();
      ?>
      <article class="post-<?php the_ID(); ?>" id="vignette">
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
      <?php
    endwhile;
  endif; ?>
</div>
<div class="button-archive">
<p>Voir toutes les actualités</p>
<div class="next-button">
  <i class="fa fa-chevron-right"></i>
</div>
</div>
