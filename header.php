<?php
/** * The header for our theme *  */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
       <meta charset="<?php bloginfo( 'charset' ); ?>" />
       <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
       <link rel="stylesheet" href="http://localhost/chabriole/wp-content/themes/chabriole/assets/css/font-awesome.css" type="text/css">
       <link rel="stylesheet" href="http://localhost/chabriole/wp-content/themes/chabriole/assets/css/fonts.css" type="text/css">
       <link rel="stylesheet" href="http://localhost/chabriole/wp-content/themes/chabriole/style.css" type="text/css">
       <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

<header>
<nav id="nav-mobile" role="navigation">
  <img src="http://localhost/chabriole/wp-content/themes/chabriole/assets/img/logo.png" alt="" id="logo-mobile" height="65px"/>

  <div id="menuToggle">
    <!--
    A fake / hidden checkbox is used as click reciever,
    so you can use the :checked selector on it.
    -->
    <input type="checkbox" />

    <!--
    Some spans to act as a hamburger.

    They are acting like a real hamburger,
    not that McDonalds stuff.
    -->
    <span></span>
    <span><p id="label-burger">menu</p></span>
    <span></span>


    <!--
    Too bad the menu has to be inside of the button
    but hey, it's pure CSS magic.
    -->
    <?php wp_nav_menu(array('theme_location' => 'top', 'menu_id' => 'menu', 'container_class' => 'string')); ?>

</div>
</nav>
