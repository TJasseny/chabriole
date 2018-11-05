<?php
/** * The header for our theme *  */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
       <meta charset="<?php bloginfo( 'charset' ); ?>" />
       <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
       <link rel="stylesheet" href="wp-content/themes/chabriole/style.css" type="text/css">
       <link rel="stylesheet" href="wp-content/themes/chabriole/assets/css/fonts.css" type="text/css">
       <link rel="stylesheet" href="wp-content/themes/chabriole/assets/css/font-awesome.css" type="text/css">
       <?php wp_head(); ?>
    </head>

<body <?php body_class(); ?>>
    <header>
      <div class="container navbar mobile-nav">
        <div class="row no-gutters">
          <div class="col-10" id="logoMin">
            <img src="wp-content/themes/chabriole/assets/img/logo.png" height="65px"/>
          </div>
          <div class="col-2 menu-icon">
            <form>
              <label for="menu" class="fa fa-bars" id="boutonMenuOpen"><br/><p id="label_menu">menu</p></label>
              <label for="fermer" class="fa fa-times" id="boutonMenuClose"><br/><p id="label_menu">fermer</p></label>
              <input type="checkbox" id="toggle-menu">
            </form>
          </div>
        </div>
        <div class="container no-gutters" id="navContent">
          <div class="col-6 offset-3">
            <img src="wp-content/themes/chabriole/assets/img/logo.png" height="130px"/>
          </div>
        <div class="col-12">
          <nav id="navMobile">
            <?php wp_nav_menu(array('theme_location' => 'top')); ?>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <div style="height: 25px; background-color:blue;" class="col-12">
  </div>

    <script type="text/javascript" src="wp-content/themes/chabriole/assets/js/menuMobile.js"></script>
