<?php
/**
 * Initialize theme setup
 *
 * @package _s
 */

if ( ! function_exists( '_s_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function _s_setup() {
  /*
   * Make theme available for translation.
   * Translations can be filed in the /languages/ directory.
   * If you're building a theme based on _s, use a find and replace
   * to change '_s' to the name of your theme in all the template files.
   */
  load_theme_textdomain( '_s', get_template_directory() . '/languages' );

  // Add default posts and comments RSS feed links to head.
  add_theme_support( 'automatic-feed-links' );

  /*
   * Let WordPress manage the document title.
   * By adding theme support, we declare that this theme does not use a
   * hard-coded <title> tag in the document head, and expect WordPress to
   * provide it for us.
   */
  add_theme_support( 'title-tag' );

  /*
   * Enable support for Post Thumbnails on posts and pages.
   *
   * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
   */
  add_theme_support( 'post-thumbnails' );

  // This theme uses wp_nav_menu() in one location.
  register_nav_menus( array(
    'main-nav' => esc_html__( 'Main Nav', '_s' ),
    'services-nav' => esc_html__( 'Services Nav', '_s' )
  ) );

  /*
   * Switch default core markup for search form, comment form, and comments
   * to output valid HTML5.
   */
  add_theme_support( 'html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ) );

  /*
   * Enable support for Post Formats.
   * See https://developer.wordpress.org/themes/functionality/post-formats/
   */
  add_theme_support( 'post-formats', array(
    'aside',
    'image',
    'video',
    'quote',
    'link',
  ) );

  // Set up the WordPress core custom background feature.
  add_theme_support( 'custom-background', apply_filters( '_s_custom_background_args', array(
    'default-color' => 'ffffff',
    'default-image' => '',
  ) ) );
}
endif; // _s_setup
add_action( 'after_setup_theme', '_s_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function _s_content_width() {
  $GLOBALS['content_width'] = apply_filters( '_s_content_width', 780 );
}
add_action( 'after_setup_theme', '_s_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function _s_widgets_init() {
  register_sidebar( array(
    'name'          => esc_html__( 'Main Sidebar', '_s' ),
    'id'            => 'main-sidebar',
    'description'   => 'The default sidebar used on the blog page and elsewhere.',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h2 class="widget-title h3">',
    'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', '_s_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function _s_scripts() {
  if ( WP_ENV !== 'development' ) {
    wp_enqueue_style( '_s-style', get_template_directory_uri() . '/assets/css/style.min.css' );
    wp_enqueue_script( '_s-scripts', get_template_directory_uri() . '/assets/js/scripts.min.js', array( 'jquery' ), '', true );
  } else {
    wp_enqueue_style( '_s-style', get_template_directory_uri() . '/assets/css/style.css' );
    wp_enqueue_script( '_s-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), '', true );
  }

  /* Modernizr */
  wp_enqueue_script( '_s-modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr.min.js', array(), '', false );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', '_s_scripts' );