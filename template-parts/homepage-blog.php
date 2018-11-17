<!-- Début de la section blog -->

<section class="" id="">
  <div class="container">
    <h2 id="section-actu" class="jaune">#Actualités</h2>
  </div>
  <div class="blog blog-homepage">
    <?php
 if (query_posts(array('posts_per_page' => 3 ))) :;
      while ( have_posts() ) : the_post();
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
  <?php wp_reset_query(); ?>
</div>
<a href="<?php echo bloginfo('url'); ?>">
<div class="button-archive">
<p>Voir toutes les actualités</p>
<div class="next-button">
  <i class="fa fa-chevron-right"></i>
</div>
</div>
</a>
