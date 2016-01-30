<?php
/**
 * Template part for the service section highlight image.
 *
 * @package _s
 */

// set up grid columns
if ( $row_num == 'odd' ) {
  $grid_cols = 'col-xs-12 col-sm-5 last-sm';
} else {
  $grid_cols = 'col-xs-12 col-sm-5';
}

// set image field variable
$h_img = get_sub_field( 'highlight_image' );

// set rest of variables
if ( $h_img ) {
  $img_url = $h_img['sizes']['medium'];
  $img_alt = $h_img['alt'];
  $img_ttl = $h_img['title'];
} ?>

<div class="<?php echo $grid_cols; ?>">
  <div class="highlight-image highlight-section--image">
    <?php /* Image */
    if ( $h_img ) { ?>
      <img class="service-area-image img--round" src="<?php echo $img_url; ?>" alt="<?php echo $img_alt; ?>" title="<?php echo $img_ttl; ?>">
    <?php } ?>
  </div>
</div>