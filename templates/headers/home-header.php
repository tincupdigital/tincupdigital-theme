<?php
/**
 * Template part for the home navigation
 *
 * @package _s
 */
?>

<header id="masthead" class="site-header" role="banner">
  <nav id="site-navigation" class="main-navigation" role="navigation">
    <div class="column main-navigation--column">
      <?php wp_nav_menu( array( 'theme_location' => 'main-nav_part-1', 'menu_id' => 'main-nav_part-1' ) ); ?>
    </div>
    <div class="column main-navigation--column">
      <?php wp_nav_menu( array( 'theme_location' => 'main-nav_part-2', 'menu_id' => 'main-nav_part-2' ) ); ?>
    </div>
  </nav><!-- #site-navigation -->
</header><!-- #masthead -->