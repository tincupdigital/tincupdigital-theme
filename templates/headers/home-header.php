<?php
/**
 * Template part for the home navigation
 *
 * @package _s
 */
?>

<header id="masthead" class="site-header" role="banner">
  <nav id="site-navigation" class="main-navigation home-navigation" role="navigation">
    <!-- Nav #1 -->
    <?php wp_nav_menu( array( 'theme_location' => 'main-nav-1', 'menu_id' => 'main-nav-1', 'container_class' => 'main-nav-container' ) ); ?>

    <!-- Nav #2 -->
    <?php wp_nav_menu( array( 'theme_location' => 'main-nav-2', 'menu_id' => 'main-nav-2', 'container_class' => 'main-nav-container' ) ); ?>
  </nav><!-- #site-navigation -->
</header><!-- #masthead -->