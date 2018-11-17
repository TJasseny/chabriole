<?php
// Support de la personalisation du theme
if (!function_exists('chabriole_setup')):
  function chabriole_setup() {
    // Menus
    add_theme_support( 'menus' );
        register_nav_menus(array(
       'primary' => __('Primary Menu', 'top')
       ));
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
    if ( is_single() || is_home() ) {

        $id = get_queried_object_id();

        // Check if the post/page has featured image
        if ( has_post_thumbnail( $id ) ) {

            // Change thumbnail size, but I guess full is what you'll need
            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $id ), 'full' );

            $url = $image[0];

        } else {

            //Set a default image if Featured Image isn't set
            $url = '';

        }
    }

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
              background-image: url(http://localhost/chabriole/wp-content/themes/chabriole/assets/img/bg.jpg);
              background-size: cover;
            }

            form {border-radius:15px;  }
        </style>
        <?php
    endif;
}
add_action( 'login_head', 'wpdev_filter_login_head', 100 );
