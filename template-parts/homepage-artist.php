<!-- Début de la section Artiste -->
<section>
<div class="artists-homepage bg-rouge">
  <h2>#Programmation</h2>
  <?php
  $homepage_blog_args = array(
    'paged' => $paged,
    'cat' => 3,
    'posts_per_page' => 3,);
    $blog_filtered = new WP_Query($homepage_blog_args);
    if ( $blog_filtered->have_posts() ) :
      while ( $blog_filtered->have_posts() ) : $blog_filtered->the_post();
      ?>

  <article id="post-<?php the_ID(); ?>">
    <?php if (has_post_thumbnail() && ! post_password_required() ) : ?>
        <h4 class="jaune"><?php the_title(); ?></h4>
        <?php the_post_thumbnail('medium_large'); ?>
      <?php endif; ?>
  </article>

<?php endwhile;
endif;
?>
  <?php wp_reset_query(); ?>
    </div>
</section>
