<?php
/**
 * Template part for the services hero.
 *
 * @package _s
 */

// set up hero image
$h_img = get_bloginfo( 'template_directory' ) . '/assets/img/hero-fallback.jpg';

// set up class based on whether
// hero text is present.
if ( get_field( 'hero_text' ) ) {
  $h_txt = get_field( 'hero_text' );
  $class = 'has-text';
} else {
  $class = 'no-text';
} ?>

<section class="services-hero hero-section bg-cover pos--rel z1 <?php echo $class; ?>" style="background-image: url('<?php echo $h_img; ?>');">
  <?php /* Text */
  if ( $h_txt ) { ?>
    <div class="hero-text hero-section--text pos--rel z2">
      <div class="container">
        <div class="row center-xs">

          <div class="col-xs-12 col-sm-10 col-md-8">
            <h1 class="hero-headline hero-section--headline h2 color--wht lh--normal"><?php echo wp_strip_all_tags( $h_txt ); ?></h1>
          </div>

        </div>
      </div>
    </div>
  <?php } ?>
</section>
