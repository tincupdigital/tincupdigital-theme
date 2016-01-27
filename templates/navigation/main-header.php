<?php
/**
 * Template part for the main (non-home) header
 *
 * @package _s
 */
?>

<header id="masthead" class="site-header" role="banner">
  <div class="site-branding">
    <h1 class="site-title m0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
    <p class="site-description screen-reader-text"><?php bloginfo( 'description' ); ?></p>
  </div><!-- .site-branding -->

  <nav id="site-navigation" class="main-navigation txt--center" role="navigation">
    <button class="menu-toggle btn btn-primary" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', '_s' ); ?></button>
    <?php wp_nav_menu( array( 'theme_location' => 'main-nav', 'menu_id' => 'main-nav', 'container_class' => 'nav-menu--container' ) ); ?>
  </nav><!-- #site-navigation -->
</header><!-- #masthead -->