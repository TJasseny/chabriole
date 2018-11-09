<?php
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

/////////////
add_theme_support ('custom-logo');


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
              background-image: url(http://localhost/chabriole/assets/img/bg.jpg);
              background-size: cover;
            }
        </style>
        <?php
    endif;
}

add_action( 'login_head', 'wpdev_filter_login_head', 100 );
