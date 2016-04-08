<?php
/**
 * Template part for the home page hero section.
 *
 * @package _s
 */

// get the hero setup
$h_setup = get_sub_field( 'hero_setup' );

if ( $h_setup === 'single' ) {
  // set up single hero image
  $h_img = get_sub_field( 'hero_image' );
  $h_img = $h_img['sizes']['hero']; ?>

  <section class="home-section hero-section home-section--hero bg-cover" style="background-image: url('<?php echo $h_img; ?>');">
    <?php /* Logo */
    if ( get_theme_mod( 'white_logo' ) ) { ?>
      <div class="logo-section hero-section--logo">
        <img class="logo-section--img dsp--bl" src="<?php echo get_theme_mod( 'white_logo' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
      </div>
    <?php } ?>
  </section>

<?php } elseif ( $h_setup === 'multiple' ) { ?>

  <section class="home-section hero-section home-section--slider pos--rel">
    <?php /* Slider */
    if ( get_sub_field( 'hero_gallery' ) ) {
      $images = get_sub_field( 'hero_gallery' ); ?>

      <div class="slider slider-area home-slider">
        <?php // loop through gallery images
        foreach ( $images as $image ):
          $s_img = $image['sizes']['hero']; ?>

          <div class="slider-slide slider-area--slide home-slider--slide bg-cover" style="background-image: url('<?php echo $s_img; ?>');">
          </div>
        <?php endforeach; ?>
      </div>
    <?php } ?>

    <?php /* Logo */
    if ( get_theme_mod( 'white_logo' ) ) { ?>
      <div class="logo-section--outer">
        <div class="logo-section--inner">
          <div class="logo-section hero-section--logo">
            <img class="logo-section--img dsp--bl" src="<?php echo get_theme_mod( 'white_logo' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
          </div>
        </div>
      </div>
    <?php } ?>
  </section>

<?php }