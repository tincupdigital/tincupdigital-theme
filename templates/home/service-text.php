<?php
/**
 * Template part for the service text.
 *
 * @package _s
 */

// set up grid columns
if ( $row_num == 'odd' ) {
  $grid_cols = 'col-xs-12 col-sm-7 first-sm col-md-8';
} else {
  $grid_cols = 'col-xs-12 col-sm-7 col-md-8';
}

// set service field vars
$s_hdl = get_sub_field( 'service_headline' );
$s_txt = get_sub_field( 'service_text' );

$b_txt = get_sub_field( 'button_text' );
$b_lnk = get_sub_field( 'button_link' );

// switch the button text if it's too long
if ( !isset( $b_txt ) || strlen( $b_txt ) > 20 ) {
  $b_txt = 'Learn more';
} ?>

<div class="<?php echo $grid_cols; ?>">
  <div class="service-text service-item--text">
    <?php /* Headline */
    if ( $s_hdl ) { ?>
      <h2 class="service-headline service-section--headline h3 mt0"><?php echo $s_hdl; ?></h2>
    <?php }

    /* Text */
    if ( $s_txt ) {
      echo wpautop( $s_txt );
    }

    /* Button */
    if ( $b_lnk ) { ?>
      <a class="service-button service-section--button button-brand color--txt" href="<?php echo get_permalink( $b_lnk ); ?>">
        <span>Learn more</span><i class="icon-right-open"></i>
      </a>
    <?php } ?>
  </div>
</div>