<?php
/**
 * Template part for the services hero.
 *
 * @package _s
 */

// set up hero image
if ( has_post_thumbnail() ) {
  $h_img = _s_get_feat_img_url( 'hero' );
} else {
  $h_img = get_bloginfo( 'template_directory' ) . '/assets/img/hero-fallback.jpg';
}

// set up hero text/class
if ( get_field( 'hero_text' ) ) {
  $h_txt = get_field( 'hero_text' );
  $class = 'hero-section--has-text';
} else {
  $class = 'hero-section--no-text';
} ?>

<section class="services-hero hero-section bg-cover <?php echo $class; ?> txt--center" style="background-image: url('<?php echo $h_img; ?>');">
  <?php /* Text */
  if ( $h_txt ) { ?>
    <div class="hero-text hero-section--text">
      <div class="container">
        <div class="row center-xs">

          <div class="col-xs-12 col-sm-10 col-md-8">
            <h1 class="hero-headline hero-section--headline h2 txt--shadow color--wht lh--normal"><?php echo wp_strip_all_tags( $h_txt ); ?></h1>
          </div>

        </div>
      </div>
    </div>
  <?php } ?>
</section>
