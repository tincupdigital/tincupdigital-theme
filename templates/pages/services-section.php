<?php
/**
 * Template part for the services section.
 *
 * @package _s
 */

/* Services */
if ( have_rows( 'services' ) ) { ?>
  <section class="service-section service-section--services pos--rel">
    <!-- Tabs -->
    <div class="service-nav service-tabs tabs">
      <!-- Nav -->
      <ul class="service-nav--list txt--center z2">
        <?php // loop through rows
        while( have_rows( 'services' ) ): the_row();
          // set up service title and anchor slug
          $svc_ttl = get_sub_field( 'service_title' );
          $a_slug = strtolower( str_replace( ' ', '-', $svc_ttl ) ); ?>

          <li class="service-nav--item">
            <a href="#<?php echo $a_slug; ?>"><?php echo $svc_ttl; ?></a>
          </li>
        <?php endwhile; ?>
      </ul>

      <?php /* Services */
      while( have_rows( 'services' ) ): the_row();
        // set up service title and div id
        $svc_ttl = get_sub_field( 'service_title' );
        $div_id = strtolower( str_replace( ' ', '-', $svc_ttl ) );

        /* Highlights */
        if ( have_rows( 'highlights' ) ) { ?>
          <div id="<?php echo $div_id; ?>" class="tab-content section-inner service-section--inner pos--rel z3">

            <div class="container">
              <div class="row">
                <div class="col-xs-12">

                  <div class="highlight-section tab-content--highlights">
                    <?php // same staggering approach as home page
                    $count = 1;

                    // loop through rows
                    while( have_rows( 'highlights' ) ): the_row(); ?>
                      <div class="highlight tab-content--highlight service-area">
                        <div class="row">
                          <?php // set odd/even row variable
                          if ( ( $count % 2 ) !== 0 ) {
                            $row_num = 'odd';
                          } else {
                            $row_num = 'even';
                          }

                          // get the image and text templates
                          include( locate_template( '/templates/pages/highlight-image.php' ) );
                          include( locate_template( '/templates/pages/highlight-text.php' ) ); ?>
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

          </div><!-- .tab-content -->
        <?php }
      endwhile; ?>
    </div>
  </section>
<?php }