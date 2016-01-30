<?php
/**
 * Template part for the home service section image.
 *
 * @package _s
 */

// set up grid columns
if ( $home_row_num == 'odd' ) {
  $grid_cols = 'col-xs-12 col-sm-5 last-sm';
} else {
  $grid_cols = 'col-xs-12 col-sm-5';
}

// set image field variable
$s_img = get_sub_field( 'service_image' );

// set rest of variables
if ( $s_img ) {
  $img_url = $s_img['sizes']['medium'];
  $img_alt = $s_img['alt'];
  $img_ttl = $s_img['title'];
} ?>

<div class="<?php echo $grid_cols; ?>">
  <div class="service-image home-service--image">
    <?php /* Image */
    if ( $s_img ) { ?>
      <img class="service-area-image img--round" src="<?php echo $img_url; ?>" alt="<?php echo $img_alt; ?>" title="<?php echo $img_ttl; ?>">
    <?php } ?>
  </div>
</div>