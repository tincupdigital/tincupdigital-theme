<?php
/**
 * Template part for the hero section.
 *
 * @package _s
 */

// set up hero area variables
$h_img = get_sub_field( 'hero_image' );
$h_txt = get_sub_field( 'hero_text' );

if ( $h_img ) { ?>
  <section class="service-section service-section--hero service-hero hero-section bg-cover pos--rel z1" style="background-image: url('<?php echo $h_img['sizes']['hero']; ?>');">

    <?php /* Text */
    if ( $h_txt ) { ?>
      <div class="hero-text hero-section--text service-hero--text pos--rel z2">

        <div class="container">
          <div class="row">
            <div class="col-xs-12">

              <div class="hero-text--inner txt--center">
                <?php echo wpautop( $h_txt ); ?>
              </div>

            </div>
          </div>
        </div>

      </div>
    <?php } ?>

  </section>
<?php }