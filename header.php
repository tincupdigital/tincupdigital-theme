<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Web fonts -->
<!-- This font is huge... shit. -->
<link href='https://fonts.googleapis.com/css?family=Raleway:400,600,400italic,700' rel='stylesheet' type='text/css'>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/favicon.ico">
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', '_s' ); ?></a>

  <header id="masthead" class="site-header" role="banner">
    <nav id="site-navigation" class="main-navigation" role="navigation">
      <div class="container">
        <div class="row middle-xs">
          <div class="col-xs-6 col-sm-12">
            <?php wp_nav_menu( array( 'theme_location' => 'main-nav', 'menu_id' => 'main-nav', 'menu_class' => 'main-nav--menu', 'container_class' => 'nav-container', 'items_wrap' => _s_nav_wrap() ) ); ?>
          </div>
          <div class="col-xs-6 visible-xs">
            <button class="menu-toggle icon-menu btn btn-primary" aria-controls="primary-menu" aria-expanded="false"></button>
          </div>
        </div>
      </div>
    </nav><!-- #site-navigation -->
  </header><!-- #masthead -->
