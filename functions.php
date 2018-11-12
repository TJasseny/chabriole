<?php
// Menus
add_theme_support( 'menus' );
    register_nav_menus(array(
   'primary' => __('Primary Menu', 'top')
   ));

// Support de la personalisation du theme
if (!function_exists('chabriole_setup')):
  function chabriole_setup() {
  // Intégration de l'arriere plan personalisable de la NAVIGATION
  $backgroundArgs = array(
  'default-color' => '#FFCC00',
  'default-image' => '%1$s/assets/img/bg.jpg',
  );
  add_theme_support('custom-background', $backgroundArgs);

  // Intégration du logo personnalié
  add_theme_support ('custom-logo');
  // Activation des images mise en avant pour les post type article et page
  add_theme_support('post-thumbnails');
  }
endif;
add_action( 'after_setup_theme', 'chabriole_setup' );

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
