<?php
/**
 * Template part for the services section.
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
            <?php // we're going to stagger even and odd
                  // rows, so we need to set a counter for testing.
            $count = 1;

            // loop through rows
            while( have_rows( 'services' ) ): the_row(); ?>

              <div class="service home-service">
                <div class="row">
                  <?php
                  // set $home_row_num variable so grid
                  // columns can be set up differently.
                  if ( ( $count % 2 ) !== 0 ) {
                    $home_row_num = 'odd';
                  } else {
                    $home_row_num = 'even';
                  }

                  // get the image and text templates
                  include( locate_template( '/templates/home/services-section_service-image.php' ) );
                  include( locate_template( '/templates/home/services-section_service-text.php' ) ); ?>
                </div>
              </div>

            <?php
            // increment the counter
            $count++;

            // end the loop
            endwhile; ?>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
</section>
