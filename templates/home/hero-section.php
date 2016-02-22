<?php
/**
 * Template part for the home page hero section.
 *
 * @package _s
 */

// set up hero image
$h_img = get_field( 'hero_image' );
$h_img = $h_img['sizes']['hero']; ?>

<section class="section home-section home-section--hero hero-section bg-cover pos--rel z1" style="background-image: url('<?php echo $h_img; ?>');">

  <?php /* Logo */
  if ( get_theme_mod( 'white_logo' ) ) { ?>
    <div class="hero-logo hero-section--logo pos--rel z2">
      <img src="<?php echo get_theme_mod( 'white_logo' ); ?>">
    </div>
  <?php } ?>

</section>
