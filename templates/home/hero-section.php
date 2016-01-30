<?php
/**
 * Template part for the home page hero section.
 *
 * @package _s
 */

// set up hero image
if ( get_sub_field( 'hero_image' ) ) {
	$h_img = get_sub_field( 'hero_image' );
	$h_img = $h_img['sizes']['hero'];
}

// is hero present?
if ( $h_img ) { ?>
  <section class="section home-section home-section--hero hero-section bg-cover pos--rel z1" style="background-image: url('<?php echo $h_img; ?>');">

  	<!-- Logo -->
		<div class="hero-logo hero-section--logo pos--rel z2">
			<img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/logo-hz-white.png">
		</div>

  </section>
<?php }