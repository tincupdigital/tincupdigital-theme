<?php
/**
 * Template part for the services page service section.
 *
 * @package _s
 */

// set a counter so that service image
// and text blocks can be staggered.
$count = 1; ?>

<section class="service-section service-section--services">
  <div class="section-inner service-section--inner">
    <?php /* Nav */
    wp_nav_menu( array( 'theme_location' => 'services-nav', 'menu_id' => 'services-nav' ) ); ?>

    <div class="container">
      <div class="row">
        <div class="col-xs-12">

          <?php // loop through services
          while ( have_rows( 'services' ) ): the_row(); ?>
            <div class="service service-section--item">
              <div class="row">
                <?php // set odd/even row variable
                if ( ( $count % 2 ) !== 0 ) {
                  $row_num = 'odd';
                } else {
                  $row_num = 'even';
                }

                // get the image and text templates
                include( locate_template( '/templates/global/service-image.php' ) );
                include( locate_template( '/templates/pages/service-text.php' ) ); ?>
              </div>
            </div><!-- .service -->

          <?php // increment the counter
          $count++;

          // end the loop
          endwhile; ?>
        </div>
      </div>
    </div>
  </div><!-- .section-inner -->
</section>