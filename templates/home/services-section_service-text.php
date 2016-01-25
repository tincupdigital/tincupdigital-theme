<?php
/**
 * Template part for the services section text block
 *
 * @package _s
 */

// set up grid columns
if ( $home_row_num == 'odd' ) {
  $grid_cols = 'col-xs-12 col-sm-7 col-sm-pull-5';
} else {
  $grid_cols = 'col-xs-12 col-sm-7';
}

// set field variables
$s_hdl = get_sub_field( 'service_headline' );
$s_txt = get_sub_field( 'service_text' );
$s_btxt = get_sub_field( 'service_button_text' );
$s_blnk = get_sub_field( 'service_button_link' ); ?>

<div class="<?php echo $grid_cols; ?>">
  <div class="service-block service-text">
    <?php
    /* Headline */
    if ( $s_hdl ) { ?>
      <h2 class="service-headline h3 mt0">
        <?php echo $s_hdl; ?>
      </h2>
    <?php }

    /* Text */
    if ( $s_txt ) {
      echo wpautop( $s_txt );
    }

    /* Button */
    if ( $s_btxt && $s_blnk ) { ?>
      <a class="service-button" href="<?php echo $s_blnk; ?>">
        <?php echo $s_btxt; ?>
      </a>
    <?php } ?>
  </div>
</div>