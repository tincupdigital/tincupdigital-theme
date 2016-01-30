<?php
/**
 * Template part for the home page services section.
 *
 * @package _s
 */
?>

<section class="section home-section home-section--services services-section">
  <?php /* Services */
  if ( have_rows( 'services' ) ) { ?>
    <div class="section-inner services-inner">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-10 col-sm-offset-1">
            <?php // staggering even/odd rows, so set a counter
            $count = 1;

            // loop through rows
            while( have_rows( 'services' ) ): the_row(); ?>

              <div class="service home-service service-area">
                <div class="row">
                  <?php // set odd/even row variable
                  if ( ( $count % 2 ) !== 0 ) {
                    $home_row_num = 'odd';
                  } else {
                    $home_row_num = 'even';
                  }

                  // get the image and text templates
                  include( locate_template( '/templates/home/service-image.php' ) );
                  include( locate_template( '/templates/home/service-text.php' ) ); ?>
                </div>
              </div>

            <?php // increment the counter
            $count++;

            // end the loop
            endwhile; ?>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
</section>
