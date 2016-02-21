<?php
/**
 * Template part for the CTA section.
 *
 * @package _s
 */
?>

<section class="section home-section home-section--cta cta-section pos--rel">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-10 col-sm-offset-1">
        <div class="cta-section--inner txt--center">
          <?php
          /* CTAs */
          if ( have_rows( 'cta_items' ) ): ?>
            <div class="cta-items unslider">
              <ul class="cta-items--list unslider-list">
                <?php // loop through rows
                while ( have_rows( 'cta_items' ) ): the_row(); ?>
                  <li class="cta-item unslider-item">
                    <?php
                    /* Headline */
                    if ( get_sub_field( 'cta_headline' ) ) { ?>
                      <h2 class="section-headline cta-headline mt0 txt--center">
                        <?php the_sub_field( 'cta_headline' ); ?>
                      </h2>
                    <?php }

                    /* Text */
                    if ( get_sub_field( 'cta_text' ) ) {
                      echo wpautop( get_sub_field( 'cta_text' ) );
                    }

                    /* Button */
                    // set button variables
                    $b_txt = get_sub_field( 'button_text' );
                    $b_lnk = get_sub_field( 'button_link' );

                    if ( $b_txt && $b_lnk ) { ?>
                      <a class="cta-button" href="<?php echo $b_lnk; ?>">
                        <?php echo $b_txt; ?>
                      </a>
                    <?php } ?>
                  </li>
                <?php endwhile; ?>
              </ul>
            </div><!-- .cta-items -->
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>