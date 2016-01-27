<?php
/**
 * Template part for the services section image block
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
  <div class="service-block service-image-area">
    <?php /* Image */
    if ( $s_img ) { ?>
      <img class="service-image img--round" src="<?php echo $img_url; ?>" alt="<?php echo $img_alt; ?>" title="<?php echo $img_ttl; ?>">
    <?php } ?>
  </div>
</div>