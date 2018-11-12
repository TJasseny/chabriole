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
      <P class="date">samedi 20 juillet</p>
      <P class="artist">groupe 1</p>
      <P class="artist">groupe 2</p>
      <P class="artist">groupe 3</p>
  </div>
  <div class="festdate" id="day2">
      <P class="date">dimanche 21 juillet</p>
      <P class="artist">la fête au village</p>
  </div>
  <div class="festinfo">
    <p class="date">#20/21 Juillet 2018</p>
    <p class="city">St Michel de Chabrillanoux</p>
  </div>
  <div class="button-down">
    <span></span>
    <span></span>
  </div>
</div>
</header>
