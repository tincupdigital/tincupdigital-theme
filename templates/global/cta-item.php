<?php
/**
 * Template part for CTA items.
 *
 * @package _s
 */

// set up the CTA item post object
$post_object = get_field( 'cta_item' );

// set up background image and background class
if ( get_field( 'cta_item_background' ) ) {
  $cta_bg = get_field( 'cta_item_background' );
  $cta_bg = $cta_bg['sizes']['large'];
  $bg_class = 'bg-cover';
} else {
  $cta_bg = get_bloginfo( 'template_directory' ) . '/assets/img/cta-bg.png';
  $bg_class = 'bg-repeat';
}

if ( $post_object ) {
  $post = $post_object;
  setup_postdata( $post ); ?>

  <div class="cta-item--single <?php echo $bg_class; ?> pos--rel z1" style="background-image: url('<?php echo $cta_bg; ?>');">
    <div class="cta-inner cta-item--inner txt--center pos--rel z2">
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
    </div>
  </div>
  <?php wp_reset_postdata(); // this is important!
}