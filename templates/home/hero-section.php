<?php
/**
 * Template part for the hero section.
 *
 * @package _s
 */

// set up hero image
if ( get_sub_field( 'hero_image' ) ) {
	$h_img = get_sub_field( 'hero_image' );
	$h_img = $h_img['sizes']['hero'];
} else {
	$h_img = get_template_directory() . '/assets/img/hero.jpg';
}

// is hero present?
if ( $h_img ) { ?>
<section class="section home-section home-section--hero hero-section bg-cover pos--rel z1" style="background-image: url('<?php echo $h_img; ?>');">

	<?php /* Logo */
	// check if white version of logo has been uploaded
	if ( get_theme_mod( 'brand_logo_white' ) ) { ?>
		<div class="hero-section--logo hero-logo home-logo pos--rel z2">
			<img src="<?php echo get_theme_mod( 'brand_logo_white' ); ?>">
		</div>
	<?php } ?>

</section>
<?php }