<?php
/**
 * Initialize theme functions
 *
 * @package _s
 */

/**
 * Flush rewrite rules on theme activation
 */
function _s_flush_rewrite_rules() {
  flush_rewrite_rules();
}
add_action( 'after_switch_theme', '_s_flush_rewrite_rules' );

/**
 * Hide update notices for all but me
 */
function _s_hide_update_notices_all() {
  global $wp_version;
  return(object) array( 'last_checked' => time(), 'version_checked' => $wp_version );
}
if ( wp_get_current_user()->user_login !== 'sean' ) {
  add_filter( 'pre_site_transient_update_core', '_s_hide_update_notices_all' );
  add_filter( 'pre_site_transient_update_plugins', '_s_hide_update_notices_all' );
  add_filter( 'pre_site_transient_update_themes', '_s_hide_update_notices_all' );
}

/**
 * Google analytics setup
 */
function _s_google_analytics() { ?>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', '<?php echo get_theme_mod( 'analytics_id' ); ?>', 'auto');
    ga('send', 'pageview');
  </script>
<?php }
if ( get_theme_mod( 'analytics_id' ) ) {
  add_action( 'wp_head', '_s_google_analytics' );
}

/**
 * Clean up some header items
 */
// hat tip: http://gomakethings.com/remove-junk-from-the-wordpress-header
function _s_header_area_cleanup() {
  remove_action( 'wp_head', 'rsd_link' );
  remove_action( 'wp_head', 'wlwmanifest_link' );
  remove_action( 'wp_head', 'wp_generator' );
  remove_action( 'wp_head', 'feed_links_extra', 3 );
  remove_action( 'wp_head', 'start_post_rel_link' );
  remove_action( 'wp_head', 'index_rel_link' );
  remove_action( 'wp_head', 'adjacent_posts_rel_link' );
  remove_action( 'wp_head', 'rel_canonical', 10, 0 );
  remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
}
add_action( 'init', '_s_header_area_cleanup' );

/**
 * Add custom image sizes
 *
 * @link http://codex.wordpress.org/Function_Reference/add_image_size
 */
function _s_update_image_sizes() {
  update_option( 'thumbnail_size_w', 350 );
  update_option( 'thumbnail_size_h', 350 );
  update_option( 'thumbnail_crop', 1 );

  update_option( 'medium_size_w', 600 );
  update_option( 'medium_size_h', 600 );
  update_option( 'medium_crop', 1 );

  update_option( 'large_size_w', 1024 );
  update_option( 'large_size_h', 768 );
  update_option( 'large_crop', 0 );

  add_image_size( 'hero', 1920, 768, true );
}
add_action( 'init', '_s_update_image_sizes' );

/**
 * Strip &nbsp; from end of posts
 */
function _s_trim_trailing_whitespace( $content ) {
  $content = preg_replace( "/&nbsp;/", "☺", $content );
  $content = rtrim( $content, "☺" . " \t\n\r\0\x0B" );
  $content = preg_replace( "/☺/", "&nbsp;", $content );
  return $content;
}
add_filter( 'the_content', '_s_trim_trailing_whitespace', 0 );

/**
 * Yoast SEO meta box priority
 */
function _s_move_yoast_seo_meta() {
  return 'low';
}
add_filter( 'wpseo_metabox_prio', '_s_move_yoast_seo_meta' );

/**
 * Add SVG support and fix ACF thumbnail sizes
 */
function _s_add_svg_media_upload( $mimes ) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
function _s_fix_svg_thumbnails() {
  echo '<style>
    .acf-input img[src$=".svg"] {
      max-width: 150px;
      max-height: 150px;
    }
  </style>';
}
add_filter( 'upload_mimes', '_s_add_svg_media_upload' );
add_action( 'admin_head', '_s_fix_svg_thumbnails' );

/**
 * Page template slug body class
 */
function _s_page_template_body_class( $classes ) {
  global $post;
  if ( isset( $post ) ) {
    $template = get_post_meta( $post->ID, '_wp_page_template', true );
    $replace = array( 'page-templates/', '.php' );
    $classes[] = str_replace( $replace, '', $template );
  }
  return $classes;
}
add_filter( 'body_class', '_s_page_template_body_class' );

/**
 * Featured image column for posts
 *
 * @link https://codex.wordpress.org/Plugin_API/Filter_Reference/manage_posts_columns
 */
function _s_add_feat_img_column( $columns ) {
  return array_merge( $columns,
    array( 'feat_img' => __( 'Featured Image' ) )
  );
}
add_filter( 'manage_posts_columns', '_s_add_feat_img_column' );

function _s_feat_img_column( $column, $post_id ) {
  switch( $column ) {
    case 'feat_img':
      if ( has_post_thumbnail( $post_id ) ) {
        the_post_thumbnail( array( 64, 64 ) );
      }
      break;
  }
}
add_action( 'manage_posts_custom_column', '_s_feat_img_column', 10, 2 );

/**
 * Get featured image URL
 *
 * @link http://goo.gl/fzHOaB
 */
function _s_get_feat_img_url( $size ) {
  $img_id = get_post_thumbnail_id();
  $img_array = wp_get_attachment_image_src( $img_id, $size );
  $img_url = $img_array[0];
  return $img_url;
}

/**
 * Get home page ID
 */
function _s_get_home_ID() {
  $home_id = get_option( 'page_on_front' );
  return $home_id;
}

/**
 * Get raw phone number
 */
function _s_get_phone_link( $phone ) {
  $phone = preg_replace( "/[^0-9,.]/", "", $phone );
  $link = "tel:" . $phone;
  return $link;
}

/**
 * Add brand logo at end of nav
 *
 * @link https://goo.gl/mDhYeh
 */
function _s_nav_wrap() {
  // check if logo is uploaded
  if ( get_theme_mod( 'white_logo' ) ) {
    // set up variables needed by logo
    $img = get_theme_mod( 'white_logo' );
    $lnk = esc_url( home_url( '/' ) );
    $alt = get_bloginfo( 'name' );

    // set up the nav wrapper
    $wrap = '<ul id="%1$s" class="%2$s">';
    $wrap .= '%3$s';
    $wrap .= '<li class="site-logo"><a class="site-logo--img bg-contain" href="'. $lnk .'">Tin Cup Digital</a></li>';
    $wrap .= '</ul>';
  } else {
    $wrap = '<ul id="%1$s" class="%2$s">%3$s</ul>';
  }
  return $wrap;
}

/**
 * Check for feat. image caption
 */
function _s_has_img_caption() {
  $cap = get_post( get_post_thumbnail_id() )->post_excerpt;
  if ( $cap ) {
    return true;
  } else {
    return false;
  }
}

/**
 * Featured image w/caption
 */
function _s_feat_img_caption( $size = 'large', $class = 'mt3' ) {
  echo '<figure class="wp-caption alignone '. $class .'">';
  the_post_thumbnail( $size );
  echo '<figcaption class="wp-caption-text">' . get_post( get_post_thumbnail_id() )->post_excerpt . '</figcaption>';
  echo '</figure>';
}

/**
 * Custom excerpt using wp_trim_words()
 */
function _s_custom_excerpt( $words ) {
  $exc = wp_trim_words( get_the_content(), $words, '...' );
  echo wpautop( $exc );
}

/**
 * Only show posts in search results
 */
function _s_search_only_posts( $query ) {
  if ( $query->is_search ) {
    $query->set( 'post_type', 'post' );
  }
  return $query;
}
add_filter( 'pre_get_posts', '_s_search_only_posts' );
