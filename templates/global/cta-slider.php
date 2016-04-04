<?php
/**
 * Template part for the CTA section.
 *
 * @package _s
 */
?>

<section class="section cta-section pos--rel">
  <div class="container">
    <div class="row center-xs">
      <div class="col-xs-12 col-sm-10 col-lg-9">
        <div class="cta-section--inner txt--center">
          <!-- Slider -->
          <ul class="cta-items slippry list--flat">
            <?php // loop through posts
            foreach( $posts as $post ):
              // set up post data
              setup_postdata( $post ); ?>

              <li class="cta-item cta-section--item slippry-item">
                <?php /* Headline */
                if ( get_field( 'cta_headline' ) ) { ?>
                  <h2 class="cta-headline cta-section--headline txt--shadow mt0 color--wht"><?php the_field( 'cta_headline' ); ?></h2>
                <?php }

                /* Text */
                if ( get_field( 'cta_text' ) ) {
                  echo wpautop( get_field( 'cta_text' ) );
                }

                /* Button */
                if ( get_field( 'cta_button_link' ) && get_field( 'cta_button_text' ) ) {
                  // set up button link
                  $cta_btl = get_field( 'cta_button_link' );
                  $cta_url = get_permalink( $cta_btl->ID ); ?>

                  <a class="cta-button cta-section--button button-brand" href="<?php echo $cta_url; ?>">
                    <i class="icon-right-open"></i>
                    <span><?php the_field( 'cta_button_text' ); ?></span>
                    <i class="icon-left-open"></i>
                  </a>
                <?php } ?>
              </li>
            <?php endforeach; ?>
          </ul><!-- .cta-items -->

          <!-- Nav -->
          <div class="owl-carousel--nav carousel-nav"></div>
        </div>
      </div>
    </div>
  </div>
</section>
