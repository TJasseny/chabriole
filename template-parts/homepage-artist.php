<!-- Début de la section Artiste -->
<section>
<div class="artists-homepage bg-rouge">
  <h2>#Programmation</h2>
  <?php
  $nombre_artist_1 = get_field('nombre_artiste_jour_1', '172');
  $nombre_artist_2 = get_field('nombre_artiste_jour_2', '172');
  $nombre_posts = $nombre_artist_1 + $nombre_artist_2;
  $homepage_blog_args = array(
    'paged' => $paged,
    'cat' => 3,
    'posts_per_page' => $nombre_posts,);
    $blog_filtered = new WP_Query($homepage_blog_args);
    if ( $blog_filtered->have_posts() ) : ?>
    <div class="artist-flex">
      <?php
      while ( $blog_filtered->have_posts() ) : $blog_filtered->the_post();
      ?>
<a href="<?php bloginfo('url'); ?>/programmation">
  <article id="post-<?php the_ID(); ?>">
    <?php if (has_post_thumbnail() && ! post_password_required() ) : ?>
        <h4 class="jaune"><?php the_title(); ?></h4>
        <?php the_post_thumbnail('medium_large'); ?>
      <?php endif; ?>
  </article>
</a>

<?php endwhile; ?>
</div>
<?php
endif;
?>
  <?php wp_reset_query(); ?>
    </div>
</section>
