<?php
/**
 * Template part for the CTA section.
 *
 * @package _s
 */

// check if CTA items exist on this post
if ( get_field( 'cta_items' ) ) {

  // set $posts variable
  $posts = get_field( 'cta_items' );
  // get the template
  include( locate_template( '/templates/global/cta-slider.php' ) );

} else {

  // check for home page rows
  if ( have_rows( 'home_sections', _s_get_home_ID() ) ) {
    while ( have_rows( 'home_sections', _s_get_home_ID() ) ): the_row();
      if ( get_row_layout() == 'cta_section' ) {

        // set $posts variable
        $posts = get_sub_field( 'cta_items', _s_get_home_ID() );
        // get the template
        include( locate_template( '/templates/global/cta-slider.php' ) );

      }
    endwhile;
  }
}
