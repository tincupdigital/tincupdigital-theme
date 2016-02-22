<?php
/**
 * Template part for the home page service section.
 *
 * @package _s
 */

// set a counter so that service image
// and text blocks can be staggered.
$count = 1; ?>

<section class="service-section service-section--services pos--rel">
  <div class="section-inner service-section--inner pos--rel z3">
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
                include( locate_template( '/templates/home/service-text.php' ) ); ?>
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