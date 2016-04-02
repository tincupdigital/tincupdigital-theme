<?php
/**
 * Template part for the CTA section.
 *
 * @package _s
 */

// get the repeater field posts
$posts = get_sub_field( 'cta_items', _s_get_home_ID() );

// check if posts exist
if ( $posts ) {
  include( locate_template( '/templates/global/cta-slider.php' ) );
}
