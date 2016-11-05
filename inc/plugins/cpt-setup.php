<?php
/**
 * CPT Class setup
 *
 * @package _s
 */

/**
 * Load the CPT class
 */
include_once get_template_directory() . '/inc/vendor/wp-custom-post-type-class/src/CPT.php';

// Dashicons for 'menu_icon' value can be found here:
// https://developer.wordpress.org/resource/dashicons

/**
 * CPT: Case Studies
 */
$case_study_labels = array(
  'post_type_name' => 'case_study',
  'singular' => 'Case Study',
  'plural' => 'Case Studies',
  'slug' => 'case-studies'
);
$case_study_options = array(
  'public' => true,
  'has_archive' => true,
  'rewrite' => false,
  'supports' => array( 'editor', 'revisions', 'thumbnail', 'title' ),
  'menu_icon' => 'dashicons-portfolio'
);
$case_study = new CPT( $case_study_labels, $case_study_options );

/**
 * CPT: CTAs
 */
$cta_labels = array(
  'post_type_name' => 'cta',
  'singular' => 'CTA',
  'plural' => 'CTAs',
  'slug' => 'ctas'
);
$cta_options = array(
  'public' => true,
  'has_archive' => false,
  'rewrite' => false,
  'supports' => array( 'revisions', 'title' ),
  'menu_icon' => 'dashicons-portfolio'
);
$cta = new CPT( $cta_labels, $cta_options );

/**
 * Featured image column
 */
$cpts = array( $case_study );

// add column to each $cpt setup variable
if ( $cpts ) {
	foreach ( $cpts as $cpt ) {
		$cpt->columns( array(
			'cb' => '<input type="checkbox" />',
			'title' => __( 'Title' ),
      'author' => __( 'Author' ),
			'date' => __( 'Date' ),
      'feat_img' => __( 'Featured Image' )
		) );
		$cpt->populate_column( 'feat_img', function( $column, $post ) {
			if ( has_post_thumbnail() ) {
				the_post_thumbnail( array( 64, 64 ) );
			}
		} );
	}
}
