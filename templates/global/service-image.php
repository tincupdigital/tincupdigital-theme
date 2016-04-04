<?php
/**
 * Template part for the service image.
 *
 * @package _s
 */

// set up grid columns
if ( $row_num == 'odd' ) {
  $grid_cols = 'col-xs-12 col-sm-5 last-sm col-md-4';
} else {
  $grid_cols = 'col-xs-12 col-sm-5 col-md-4';
}

// set image field variable
$s_img = get_sub_field( 'service_image' );

// set rest of variables
if ( $s_img ) {
  $img_url = $s_img['sizes']['medium'];
  $img_alt = $s_img['alt'];
} ?>

<div class="<?php echo $grid_cols; ?>">
  <div class="image-container service-image--container">
    <?php /* Image */
    if ( $s_img ) { ?>
      <img class="service-image service-item--image img--round" src="<?php echo $img_url; ?>" alt="<?php echo $img_alt; ?>">
    <?php } ?>
  </div>
</div>