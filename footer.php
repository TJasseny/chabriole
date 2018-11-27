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


<?php if ((!empty(chab_get_social_link('facebook'))) || (!empty(chab_get_social_link('twitter'))) || (!empty(chab_get_social_link('instagram'))) || (!empty(chab_get_social_link('linkedin'))) || (!empty(chab_get_social_link('mail'))) ) { ?>
    <div class="social-bar">
      <ul>
        <?php if (!empty(chab_get_social_link('facebook'))) { ?>
          <a href="<?php echo (chab_get_social_link('facebook')); ?>"><li class="facebook"><i class="fa fa-facebook"></i></li></a>
        <?php } ?>
      <?php if (!empty(chab_get_social_link('twitter'))) { ?>
        <a href="<?php echo (chab_get_social_link('twitter')); ?>"><li class="twitter"><i class="fa fa-twitter"></i></li></a>
      <?php } ?>
      <?php if (!empty(chab_get_social_link('instagram'))) { ?>
        <a href="<?php echo (chab_get_social_link('instagram')); ?>"><li class="instagram"><i class="fa fa-instagram"></i></li></a>
      <?php } ?>
      <?php if (!empty(chab_get_social_link('linkedin'))) { ?>
        <a href="<?php echo (chab_get_social_link('linkedin')); ?>"><li class="linkedin"><i class="fa fa-linkedin"></i></li></a>
      <?php } ?>
      <?php if (!empty(chab_get_social_link('mail'))) { ?>
      <a href="mailto:<?php echo (chab_get_social_link('mail')); ?>"><li class="mail"><i class="fa fa-paper-plane"></i></li></a>
    <?php } ?>
    </ul>

  </div>
<?php } ?>

  <div class="organisateur">
    <p>Festival organisé par le</p>
    <h5>FJEP St Michel - St Maurice</h5>
    <div class="logo-org">
    <img src="<?php bloginfo('url'); ?>/wp-content/themes/chabriole/assets/img/logofjep.png">
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
