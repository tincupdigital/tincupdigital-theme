<?php
/**
 * Template part for the main (non-home) header
 *
 * @package _s
 */
?>

<header id="masthead" class="site-header" role="banner">
  <nav id="site-navigation" class="main-navigation" role="navigation">
    <!-- Nav #1 -->
    <?php wp_nav_menu( array( 'theme_location' => 'main-nav-1', 'menu_id' => 'main-nav-1', 'container_class' => 'main-nav-container' ) ); ?>

    <!-- Site Branding -->
    <div class="site-branding">
      <h1 class="site-title m0">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
          <img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/logo-hz-white.png">
        </a>
      </h1>
      <p class="site-description screen-reader-text"><?php bloginfo( 'description' ); ?></p>
    </div><!-- .site-branding -->

    <!-- Nav #2 -->
    <?php wp_nav_menu( array( 'theme_location' => 'main-nav-2', 'menu_id' => 'main-nav-2', 'container_class' => 'main-nav-container' ) ); ?>
  </nav><!-- #site-navigation -->
</header><!-- #masthead -->