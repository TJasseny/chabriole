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
  add_theme_support( 'custom-header' );
  // Intégration du logo personnalié
  add_theme_support ('custom-logo');
  // Activation des images mise en avant pour les post type article et page
  add_theme_support('post-thumbnails');
  }
endif;
add_action( 'after_setup_theme', 'chabriole_setup' );

function chabriole_get_featured_image() {
    //Execute if singular
    if ( is_single() ) {

        $id = get_queried_object_id ();

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

// Systeme de pagination
if( !function_exists( 'theme_pagination' ) ) {

    function theme_pagination() {

	global $wp_query, $wp_rewrite;
	$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

	$pagination = array(
		'base' => @add_query_arg('page','%#%'),
		'format' => '',
		'total' => $wp_query->max_num_pages,
		'current' => $current,
	        'show_all' => false,
	        'end_size'     => 1,
	        'mid_size'     => 2,
		'type' => 'list',
		'next_text' => '»',
		'prev_text' => '«'
	);

	if( $wp_rewrite->using_permalinks() )
		$pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
	
	if( !empty($wp_query->query_vars['s']) )
		$pagination['add_args'] = array( 's' => str_replace( ' ' , '+', get_query_var( 's' ) ) );

	echo str_replace('page/1/','', paginate_links( $pagination ) );
    }
}
