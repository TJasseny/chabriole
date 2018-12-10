  <!-- Début de la section blog -->
<section>
  <div class="container-fluid">
    <h2 id="section-actu" class="jaune">#Actualités</h2>
  </div>
  <div class="blog blog-homepage">
    <?php
    $homepage_blog_args = array(
      'paged' => $paged,
      'cat' => -3 && -4,
      'posts_per_page' => 3,);
   $blog_filtered = new WP_Query($homepage_blog_args);
   if ( $blog_filtered->have_posts() ) :
     while ( $blog_filtered->have_posts() ) : $blog_filtered->the_post();
      ?>
      <article id="post-<?php the_ID(); ?>">
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
<a href="<?php echo bloginfo('url'); ?>/actualites">
<div class="button-archive">
<p>Voir toutes les actualités</p>
<div class="next-button">
  <i class="fa fa-chevron-right"></i>
</div>
</div>
</a>
</section>
