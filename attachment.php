<?php
/**
 * Template for attachment pages.
 *
 * @package _s
 */

// redirect attachment page to parent
wp_redirect( get_permalink( $post->post_parent ) );
