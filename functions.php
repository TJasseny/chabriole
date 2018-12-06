<?php
// Support de la personalisation du theme
if (!function_exists('chabriole_setup')):
  function chabriole_setup() {
    // Menus

  // Intégration de l'arriere plan personalisable de la NAVIGATION
  $backgroundArgs = array(
  'default-color' => '#FFCC00',
  'default-image' => '%1$s/assets/img/bg.jpg',
  );
  add_theme_support('custom-background', $backgroundArgs);
  add_theme_support( 'custom-header' );
  // Intégration du logo personnalié
  add_theme_support ('custom-logo');
  // Activation des images mise en avant pour les post type article et page
  add_theme_support('post-thumbnails');
    add_image_size('chabriole-header', '1920', '400');
  }
endif;
add_action( 'after_setup_theme', 'chabriole_setup' );

// Image header personnalisé
function chabriole_get_featured_image() {
    //Execute if singular
    // if ( is_single() || is_home() ) {

        $id = get_queried_object_id();

        // Check if the post/page has featured image
        if ( has_post_thumbnail( $id ) ) {

            // Change thumbnail size, but I guess full is what you'll need
            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $id ), 'full' );

            $url = $image[0];

        } else {

            //Set a default image if Featured Image isn't set
            $url = bloginfo('url').'/assets/img/bg.jpg';

        }
    // }

    return $url;
}

// Intégration du logo personalisé à la page de login
function wpdev_filter_login_head() {

    if ( has_custom_logo() ) :
        $image = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
        ?>
        <style type="text/css">
            .login h1 a {
                background-image: url(<?php echo esc_url( $image[0] ); ?>);
                -webkit-background-size: <?php echo absint( $image[1] )?>px;
                background-size: 335px;
                height: 270px;
                width: 320px;
            }

            body {
              background-image: url(<?php bloginfo('url'); ?>/wp-content/themes/chabriole/assets/img/bg.jpg);
              background-size: cover;
            }

            form {border-radius:15px;  }
        </style>
        <?php
    endif;
}
add_action( 'login_head', 'wpdev_filter_login_head', 100 );

// Affichage des artiste en page d'accueil
function chab_get_lineup() {

  $nombre_artist_2 = get_field('nombre_artiste_jour_2', 172);
  $nombre_artist_1 = get_field('nombre_artiste_jour_1', 172);
  $nbre_posts = ($nombre_artist_1 + $nombre_artist_2);

  if ($nombre_artist_2 > 0) {
    $args = array(
      'cat' => '6,7',
      'posts_per_page' => $nbre_posts,
    );
    $blog_filtered = new WP_Query($args);
    if ( $blog_filtered->have_posts() ) {
      while ( $blog_filtered->have_posts() ) {
        $blog_filtered->the_post(); ?>
      <P class="artist"><?php the_title(); ?></p>
      <?php }
  }
} else {
  $args = array(
    'cat' => '6',
    'posts_per_page' => $nombre_artist_1,
  );
  $blog_filtered = new WP_Query($args);
  if ( $blog_filtered->have_posts() ) {
    while ( $blog_filtered->have_posts() ) {
      $blog_filtered->the_post(); ?>
    <P class="artist"><?php the_title(); ?></p>
    <?php }
}
}
 wp_reset_query();}

// Conversion de date - innutilisé---------------------------------------
function chab_the_date() {
  $dateacf = get_field('horaire');

  // Extraction des composantes de la date
  $d = substr($dateacf, 0, 2);
  $m = substr($dateacf, 2, 2);
  $h = substr($dateacf, 4, 2);
  $s = substr($dateacf, 6, 2);

  switch ($m) {
    case '01':
      $m = 'janvier';
      break;
    case '02':
      $m = 'février';
      break;
    case '03':
      $m = 'mars';
      break;
    case '04':
      $m = 'avril';
      break;
    case '05':
      $m = 'mai';
      break;
    case '06':
      $m = 'juin';
      break;
    case '07':
      $m = 'juillet';
      break;
    case '08':
      $m = 'août';
      break;
    case '09':
      $m = 'septembre';
      break;
    case '10':
      $m = 'octobre';
      break;
    case '11':
      $m = 'novembre';
      break;
    case '12':
      $m = 'décembre';
      break;
  }

  return array(
    'd' => $d,
    'm' => $m,
    'h' => $h,
    's' => $s,
  );
}

// Conversion du format horaire ACF//////////////////////////////////////
function chab_the_time() {
  $heureacf = get_field('horaire');

  // Extraction des composantes de l'heure
  $h = substr($heureacf, 0, 2);
  $min = substr($heureacf, 2, 2);

  // on retourne un array contenant les valeurs découpé
  return array(
    'h' => $h,
    'min' => $min,
    'hmin' => $h.'h'.$min,
  );
}

// Affichage du détail artiste///////////////////////////////////////////
function chab_get_artist_details($args) {
  $blog_filtered = new WP_Query($args);
  if ( $blog_filtered->have_posts() ) {
    while ( $blog_filtered->have_posts() ) {
      $blog_filtered->the_post();
      if (has_post_thumbnail() && ! post_password_required() ) {
        $image_url = wp_get_attachment_image_src(get_post_thumbnail_id(),'large');}
        ?>
        <article class="fiche-artist"  id="post-<?php the_ID(); ?>" style="background-image: url('<?php echo $image_url[0]; ?>');">
          <div class="item bg-article">
            <?php if (has_post_thumbnail() && ! post_password_required() ) : ?>
              <div class="brightness">
                <img class="wp-post-image" src="<?php echo $image_url[0]; ?>">
              </div>
            <?php endif; ?>
            <div class="item-logo logo-detail"><img src="<?php the_field('logo_group'); ?>" alt="logo <?php the_title(); ?>"></div>
          </div>


          <?php
          // Test de l'existence de contenu dans le champ 'texte', si null, on n'affaiche rien.
          if (get_field('texte_1') && !empty(get_field('texte_1'))) { ?>
            <div class="content-article">
              <div class="logo-group center"><img src="<?php the_field('logo_group'); ?>" alt="logo <?php the_title(); ?>"></div>

              <!-- Premier paragraphe et illustration -->
              <div class="article-duo">
                <?php the_field('texte_1'); ?>
                <?php if (!(get_field('video') === '')) {?>
                  <div class="img-illu">
                    <iframe width="100%" height="100%" class="video v1" src="https://www.youtube.com/embed/<?php the_field('video');?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                <?php } elseif (get_field('image') && !empty(get_field('image'))) { ?>
                  <div class="img-illu">
                    <img src="<?php the_field('image'); ?>" alt="">
                  </div>
                <?php } ?>
              </div>

              <!-- Deuxieme paragraphe et illustration -->
              <?php
              // Test de l'existence de contenu dans le champ 'texte_2', si null, on n'affiche pas la suite.
              if (get_field('texte_2') && !empty(get_field('texte_2'))) { ?>
                <div class="article-duo reverse">
                  <?php the_field('texte_2'); ?>
                  <?php if (!(get_field('video_2') === '')){ ?>
                    <div class="img-illu">
                      <iframe width="100%" height="100%" class="video v1" src="https://www.youtube.com/embed/<?php the_field('video_2');?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                  <?php } elseif (get_field('image_2') && !empty(get_field('image_2'))) { ?>
                    <div class="img-illu">
                      <img src="<?php the_field('image_2'); ?>" alt="">
                    </div>
                  <?php } ?>
                </div>

                <!-- Troisieme paragraphe et illustration -->
                <?php
                // Test de l'existence de contenu dans le champ 'texte_3', si null, on n'affiche pas la suite.
                if (get_field('texte_3') && !empty(get_field('texte_3'))) { ?>
                  <div class="article-duo">
                    <?php the_field('texte_3'); ?>
                    <?php if (!(get_field('video_3') === '')) {?>
                      <div class="img-illu">
                        <iframe width="100%" height="100%" class="video v1" src="https://www.youtube.com/embed/<?php the_field('video_3');?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </div>
                    <?php } elseif (get_field('image_3') && !empty(get_field('image_3'))) { ?>
                      <div class="img-illu">
                        <img src="<?php the_field('image_3'); ?>" alt="">
                      </div>
                    <?php } ?>
                  </div>

                  <!-- Quatrieme paragraphe et illustration -->
                  <?php
                  // Test de l'existence de contenu dans le champ 'texte_4', si null, on n'affiche pas la suite.
                  if (get_field('texte_4') && !empty(get_field('texte_4'))) { ?>
                    <div class="article-duo reverse">
                      <?php the_field('texte_4'); ?>
                      <?php if (!(get_field('video_4') === '')) {?>
                        <div class="img-illu">
                          <iframe width="100%" height="100%" class="video v1" src="https://www.youtube.com/embed/<?php the_field('video_4');?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                      <?php } elseif (get_field('image_4') && !empty(get_field('image_4'))) { ?>
                        <div class="img-illu">
                          <img src="<?php the_field('image_4'); ?>" alt="">
                        </div>
                      <?php } ?>
                    </div>


                  <?php } // Fin de la condition paragraphe 4
                } // Fin de la condition paragraphe 3
              } // Fin de la condition paragraphe 2?>
            </div>
          <?php } ?>
          <?php if (!(get_field('horaire') === '')) { ?>
            <p class="dday">Début du concert à <span><?php echo chab_the_time()['hmin']; ?></span></p>
          <?php } ?>
        </article>

      <?php }}
      wp_reset_query(); }


 function chab_get_artist_nav($args) {
     $blog_filtered = new WP_Query($args);
     if ( $blog_filtered->have_posts() ) {
       while ( $blog_filtered->have_posts() ) { $blog_filtered->the_post();
       ?>
       <div class="container-item">
       <a href="#post-<?php the_ID(); ?>">
         <article class="item">
         <?php if (has_post_thumbnail() && ! post_password_required() ) { ?>
           <div class="blur"><?php the_post_thumbnail('url'); ?></div>
           <div class="item-logo"><img src="<?php the_field('logo_group'); ?>" alt="logo <?php the_title(); ?>"></div>
         <?php } ?>
       </article>
     </a>
   </div>
     <?php }}
   wp_reset_query();
 }

// Gestion des chammps personnalisé réseaux sociaux /////////////////////
 function chab_get_social_link($name) {
   $sociallink = '';
   if (!empty(get_field($name, 172))) {
   $sociallink = get_field($name, 172);
 }

return $sociallink;
}

// Affichage personnalisé des post artists
function get_artist_history_post($postid) {
  if (!empty(get_field($postid))) {
  $post_artist_id = get_field($postid);
  $post_args = array(
    'p' => $post_artist_id,);
  chab_get_artist_details($post_args);
  }
}
