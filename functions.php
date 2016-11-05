<?php
/**
 * _s functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package _s
 */

/**
 * Core theme setup
 */
require get_template_directory() . '/inc/core-setup.php';

/**
 * Core theme functions
 */
require get_template_directory() . '/inc/core-functions.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Extra theme functions
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions and fields
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * CPT Class
 */
require get_template_directory() . '/inc/plugins/cpt-setup.php';

/**
 * TGM Plugin Activation
 */
require get_template_directory() . '/inc/plugins/tgm-setup.php';

/**
 * Advanced Custom Fields
 */
include get_template_directory() . '/inc/plugins/acf-setup.php';
