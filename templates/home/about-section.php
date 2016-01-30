<?php
/**
 * Template part for the home page about section.
 *
 * @package _s
 */
?>

<section class="section home-section home-section--about about-section">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="about-section--inner txt--center">
          <?php
          /* Headline */
          if ( get_sub_field( 'about_headline' ) ) { ?>
            <h2 class="section-headline about-headline mt0">
              <?php the_sub_field( 'about_headline' ); ?>
            </h2>
          <?php }

          /* Text */
          if ( get_sub_field( 'about_text' ) ) {
            echo wpautop( get_sub_field( 'about_text' ) );
          } ?>
        </div>
      </div>
    </div>
  </div>
</section>
