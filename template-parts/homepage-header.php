<!-- Header homepage -->

<div class="video-bg">
  <video oncontextmenu="return false" muted autoPlay loop poster="http://localhost/chabriole/wp-content/themes/chabriole/assets/img/placeholdervid.jpg">
  <source type="video/mp4" src="http://localhost/chabriole/wp-content/themes/chabriole/assets/img/vidbg.mp4">
  </video>
</div>

<div class="col-12 affiche">
  <div class="logo-header">
    <?php if (has_custom_logo()) {?>
      <h1>
      <?php
      $custom_logo_id = get_theme_mod( 'custom_logo' );
      $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
      echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="" >'; ?>
    </h1><?php } ?>
  </div>
  <div class="festdate" id="day1">
      <P class="date"><?php echo get_field('titre_accueil_1', 172); ?></p>
      <?php chab_get_lineup(); ?>
  </div>
  <div class="festdate" id="day2">
      <P class="date"><?php echo get_field('titre_accueil_2', 172); ?></p>
      <P class="artist">la fête au village</p>
  </div>
  <div class="festinfo">
    <p class="date">#<?php echo get_field('date_fest', 172); ?></p>
    <p class="city">St Michel de Chabrillanoux</p>
  </div>
  <div class="button-down">
    <span></span>
    <span></span>
  </div>
</div>
</header>
