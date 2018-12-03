<!-- Début de la section point de ventes -->
<section>
  <h3 class="jaune"><?php the_field('titre_section_pdv'); ?></h3>
  <?php if (!(empty(get_field("logo_billeterie_en_ligne_1")))) { ?>
<p><strong>Billeteries en ligne :</strong></p>
    <div class="logos-billeteries">
  <div class="billeterie-logo">
    <a href="<?php the_field("lien_billeterie_en_ligne_1"); ?>"><img src="<?php the_field("logo_billeterie_en_ligne_1"); ?>"></a>
  </div>
  <?php if (!(empty(get_field("logo_billeterie_en_ligne_2")))) { ?>
    <div class="billeterie-logo">
      <a href="<?php the_field("lien_billeterie_en_ligne_2"); ?>"><img src="<?php the_field("logo_billeterie_en_ligne_2"); ?>"></a>
    </div>
  <?php } ?>
  <?php if (!(empty(get_field("logo_billeterie_en_ligne_3")))) { ?>
    <div class="billeterie-logo">
      <a href="<?php the_field("lien_billeterie_en_ligne_3"); ?>"><img src="<?php the_field("logo_billeterie_en_ligne_3"); ?>"></a>
    </div>
  <?php } ?>
  <?php if (!(empty(get_field("logo_billeterie_en_ligne_4")))) { ?>
    <div class="billeterie-logo">
      <a href="<?php the_field("lien_billeterie_en_ligne_4"); ?>"><img src="<?php the_field("logo_billeterie_en_ligne_4"); ?>"></a>
    </div>
  <?php } ?>
  <?php if (!(empty(get_field("logo_billeterie_en_ligne_5")))) { ?>
    <div class="billeterie-logo">
      <a href="<?php the_field("lien_billeterie_en_ligne_5"); ?>"><img src="<?php the_field("logo_billeterie_en_ligne_5"); ?>"></a>
    </div>
  <?php } ?>
</div>
<?php } ?>
  <?php the_field('texte_pdv'); ?>
</section>
