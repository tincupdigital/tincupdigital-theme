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

  <section class="section home-section home-section--hero hero-section hero-section bg-cover pos--rel z1" style="background-image: url('<?php echo $h_img; ?>');">
    <?php /* Logo */
    if ( get_theme_mod( 'white_logo' ) ) { ?>
      <div class="hero-logo hero-section--logo pos--rel z2">
        <img class="hero-logo--img" src="<?php echo get_theme_mod( 'white_logo' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
      </div>
    <?php } ?>
  </section>

<?php } elseif ( $h_setup === 'multiple' ) { ?>

  <section class="section home-section home-section--hero hero-section hero-section pos--rel z1">
    <?php /* Slider */
    $images = get_sub_field( 'hero_gallery' );
    // check if gallery exists
    if ( $images ) { ?>
      <ul class="hero-slider hero-section--slider home-slippry list--flat">
        <?php foreach ( $images as $image ):
          // set up slide background image
          $s_img = $image['sizes']['hero']; ?>

          <li class="hero-item hero-slider--item slippry-item bg-cover" style="background-image: url('<?php echo $s_img; ?>');">
          </li>
        <?php endforeach; ?>
      </ul>
    <?php } ?>

    <?php /* Logo */
    if ( get_theme_mod( 'white_logo' ) ) { ?>
      <div class="slider-logo--outer">
        <div class="slider-logo--inner">
          <div class="hero-logo hero-section--logo pos--rel z2">
            <img class="hero-logo--img" src="<?php echo get_theme_mod( 'white_logo' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
          </div>
        </div>
      </div>
    <?php } ?>
  </section>

<?php }