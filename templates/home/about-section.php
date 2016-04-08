<?php
/**
 * Template part for the home page about section.
 *
 * @package _s
 */
?>

<section class="home-section about-section home-section--about">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-10 col-sm-offset-1">
        <div class="about-section--inner txt--center">
          <?php
          /* Headline */
          if ( get_sub_field( 'about_headline' ) ) { ?>
            <h1 class="about-headline about-section--headline txt--shadow h2 mt0 txt--600">
              <?php the_sub_field( 'about_headline' ); ?>
            </h1>
          <?php }

          /* Text */
          if ( get_sub_field( 'about_text' ) ) { ?>
            <div class="about-text about-section--text txt--600">
              <?php echo wpautop( get_sub_field( 'about_text' ) ); ?>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>
