<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Construction Zone
 */

wp_footer(); ?>
<footer>
<div class="flex">
<div class="logo-footer no-mobile">
<img src="<?php bloginfo('url'); ?>/wp-content/themes/chabriole/assets/img/logo.png" alt="logo du festival">
</div>
<div class="nav-footer no-mobile">
  <?php if (has_nav_menu('main_navigation')){
      wp_nav_menu(
          array(
              'container'         => 'div',
              'container_class'   => 'footer-menu',
              'container_id'      => 'menu-footer',
              'theme_location'    => 'footer_navigation',
          )
      );
  } else {
      // En cas d'absence de menu
      wp_nav_menu(array('menu' => 'primary', 'theme_location' => 'top', 'menu_id' => 'menu', 'container_class' => 'string', 'depth' => '1',));
  } ?>
</div>

<?php if ((!empty(chab_get_social_link('facebook'))) || (!empty(chab_get_social_link('twitter'))) || (!empty(chab_get_social_link('instagram'))) || (!empty(chab_get_social_link('linkedin'))) || (!empty(chab_get_social_link('mail'))) ) { ?>
    <div class="social-bar">
      <ul>
        <?php if (!empty(chab_get_social_link('facebook'))) { ?>
          <li class="facebook"><a href="<?php echo (chab_get_social_link('facebook')); ?>"><i class="fa fa-facebook"></i></a></li>
        <?php } ?>
      <?php if (!empty(chab_get_social_link('twitter'))) { ?>
        <li class="twitter"><a href="<?php echo (chab_get_social_link('twitter')); ?>"><i class="fa fa-twitter"></i></a></li>
      <?php } ?>
      <?php if (!empty(chab_get_social_link('instagram'))) { ?>
        <li class="instagram"><a href="<?php echo (chab_get_social_link('instagram')); ?>"><i class="fa fa-instagram"></i></a></li>
      <?php } ?>
      <?php if (!empty(chab_get_social_link('linkedin'))) { ?>
        <li class="linkedin"><a href="<?php echo (chab_get_social_link('linkedin')); ?>"><i class="fa fa-linkedin"></i></a></li>
      <?php } ?>
      <?php if (!empty(chab_get_social_link('mail'))) { ?>
      <li class="mail"><a href="mailto:<?php echo (chab_get_social_link('mail')); ?>"><i class="fa fa-paper-plane"></i></a></li>
    <?php } ?>
    </ul>

  </div>
<?php } ?>

  <div class="organisateur">
    <p>Festival organisé par le</p>
    <h5>FJEP St Michel - St Maurice</h5>
    <div class="logo-org">
    <img src="<?php bloginfo('url'); ?>/wp-content/themes/chabriole/assets/img/logofjep.png" alt="logo organisateur">
  </div>
  </div>
  </div>
  <div class="legal">
    <p><a href="<?php bloginfo('url'); ?>/mentions-legales">
      Mentions légales
    </a></p>
  </div>
</footer>
</body>
</html>
