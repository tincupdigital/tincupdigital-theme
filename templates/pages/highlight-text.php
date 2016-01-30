<?php
/**
 * Template part for the service section highlight text.
 *
 * @package _s
 */

// set up grid columns
if ( $row_num == 'odd' ) {
  $grid_cols = 'col-xs-12 col-sm-7 first-sm';
} else {
  $grid_cols = 'col-xs-12 col-sm-7';
}

// set highlight field vars
$h_hdl = get_sub_field( 'highlight_headline' );
$h_txt = get_sub_field( 'highlight_text' ); ?>

<div class="<?php echo $grid_cols; ?>">
  <div class="highlight-text highlight-section--text">
    <?php /* Headline */
    if ( $h_hdl ) { ?>
      <h2 class="service-headline h3 mt0">
        <?php echo $h_hdl; ?>
      </h2>
    <?php }

    /* Text */
    if ( $h_txt ) {
      echo wpautop( $h_txt );
    } ?>
  </div>
</div>