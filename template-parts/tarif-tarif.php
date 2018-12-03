<!-- Debut section tarifs -->
<section class="section-tarif">
  <h3 class="white"><?php the_field('titre_tarifs'); ?></h3>
  <?php if ((get_field('actif_colonne_tarifs_1') === 'true') || (get_field('actif_colonne_tarifs_2') === 'true') || (get_field('actif_colonne_tarifs_3') === 'true')) { ?>
  <div class="colonnes-tarif">
      <?php if (get_field('actif_colonne_tarifs_1') === 'true') { ?>
    <div class="colonne right">
      <h4 class="rouge"><?php the_field('titre_colonne_1_tarifs'); ?></h4>
      <p><?php the_field('texte_ligne_tarifs_col_1_1'); ?></p>
      <p><?php the_field('texte_ligne_tarifs_col_1_2'); ?></p>
      <p><?php the_field('texte_ligne_tarifs_col_1_3'); ?></p>
      <p><?php the_field('texte_ligne_tarifs_col_1_4'); ?></p>
      <p class="texte-info-min"><?php the_field('texte_ligne_tarifs_col_1_5'); ?></p>
    </div><?php } ?>
    <?php if (get_field('actif_colonne_tarifs_2') === 'true') { ?>
    <div class="colonne left">
      <h4 class="rouge"><?php the_field('titre_colonne_tarifs_2'); ?></h4>
      <p><?php the_field('texte_ligne_tarifs_col_2_1'); ?></p>
      <p><?php the_field('texte_ligne_tarifs_col_2_2'); ?></p>
      <p><?php the_field('texte_ligne_tarifs_col_2_3'); ?></p>
      <p><?php the_field('texte_ligne_tarifs_col_2_4'); ?></p>
      <p class="texte-info-min"><?php the_field('texte_ligne_tarifs_col_2_5'); ?></p>
    </div><?php } ?>
    <?php if (get_field('actif_colonne_tarifs_3') === 'true') { ?>
    <div class="colonne right">
      <h4 class="rouge"><?php the_field('titre_colonne_tarifs_3'); ?></h4>
      <p><?php the_field('texte_ligne_tarifs_col_3_1'); ?></p>
      <p><?php the_field('texte_ligne_tarifs_col_3_2'); ?></p>
      <p><?php the_field('texte_ligne_tarifs_col_3_3'); ?></p>
      <p><?php the_field('texte_ligne_tarifs_col_3_4'); ?></p>
      <p><?php the_field('texte_ligne_tarifs_col_3_5'); ?></p>
    </div><?php } ?>
  </div>
<?php } ?>
</section>
