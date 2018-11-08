<?php
/** * The header for our theme *  */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
       <meta charset="<?php bloginfo( 'charset' ); ?>" />
       <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
       <link rel="stylesheet" href="wp-content/themes/chabriole/assets/css/font-awesome.css" type="text/css">
       <link rel="stylesheet" href="wp-content/themes/chabriole/style.css" type="text/css">
       <link rel="stylesheet" href="wp-content/themes/chabriole/assets/css/fonts.css" type="text/css">
       <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
      <div class="container-fluid mobile-nav">

          <div class="col-2" id="logoMin">
            <img src="wp-content/themes/chabriole/assets/img/logo.png" height="65px"/>
          </div>

            <label for="toggle-menu" class="icon-menu fas fa-bars"></label><br/>
            <input type="checkbox" class="burger" id="toggle-menu">

        <div class="row no-gutters container-nav">
          <div class="col-12">
          <?php wp_nav_menu(array('theme_location' => 'top', 'container' => 'nav')); ?>
        </div>
      </div>
      </div>

    <!--
    <script type="text/javascript" src="wp-content/themes/chabriole/assets/js/menuMobile.js"></script>
  -->
