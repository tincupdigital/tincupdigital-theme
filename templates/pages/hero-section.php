<?php
/**
 * Template part for the services hero.
 *
 * @package _s
 */

$h_img = get_field( 'hero_image' );
$h_txt = get_field( 'hero_text' ); ?>

<section class="services-hero hero-section bg-cover pos--rel z1" style="background-image: url('<?php echo $h_img['sizes']['hero']; ?>');">
  <!-- Text -->
  <div class="hero-text hero-section--text services-hero--text pos--rel z2">

    <div class="container">
      <div class="row center-xs">
        <div class="col-xs-12 col-sm-10 col-md-8 col-lg-6">
          <h2 class="hero-text--inner services-hero--headline">
            <?php echo wp_strip_all_tags( $h_txt ); ?>
          </h2>
        </div>
      </div>
    </div>

  </div>
</section>