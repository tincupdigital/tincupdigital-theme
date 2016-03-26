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
            <ul class="cta-items slippry">
              <?php // loop through rows
              while ( have_rows( 'cta_items' ) ): the_row(); ?>
                <li class="cta-item slippry-item">
                  <?php
                  /* Headline */
                  if ( get_sub_field( 'cta_headline' ) ) { ?>
                    <h2 class="cta-headline cta-section--headline mt0 txt--center"><?php the_sub_field( 'cta_headline' ); ?></h2>
                  <?php }

                  /* Text */
                  if ( get_sub_field( 'cta_text' ) ) {
                    echo wpautop( get_sub_field( 'cta_text' ) );
                  }

                  /* Button */
                  if ( get_sub_field( 'button_text' ) && get_sub_field( 'button_link' ) ) { ?>
                    <a class="cta-button button-brand" href="<?php echo get_permalink( get_sub_field( 'button_link' ) ); ?>">
                      <i class="icon-right-open"></i>
                      <span><?php the_sub_field( 'button_text' ); ?></span>
                      <i class="icon-left-open"></i>
                    </a>
                  <?php } ?>
                </li>
              <?php endwhile; ?>
            </ul><!-- .cta-items -->

            <!-- Nav -->
            <div class="owl-carousel--nav carousel-nav"></div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
