<?php
// Menus
add_theme_support( 'menus' );
    register_nav_menus(array(
   'primary' => __('Primary Menu', 'top')
   ));

require_once('bs4navwalker.php');
