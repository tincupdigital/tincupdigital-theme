<?php
/**
 * Template part for the about section.
 *
 * @package _s
 */
?>

<section class="section home-section home-section--about about-section txt--center">
  <?php
  /* Headline */
  if ( get_sub_field( 'about_headline' ) ) { ?>
    <h2 class="section-headline section-headline--about about-headline mt0">
      <?php the_sub_field( 'about_headline' ); ?>
    </h2>
  <?php }

  /* Text */
  if ( get_sub_field( 'about_text' ) ) {
    echo wpautop( get_sub_field( 'about_text' ) );
  } ?>
</section>
