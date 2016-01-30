<?php
/**
 * Template part for the main (non-home) header
 *
 * @package _s
 */
?>

<header id="masthead" class="site-header" role="banner">
  <nav id="site-navigation" class="main-navigation" role="navigation">
    <div class="column main-navigation--column main-nav1">
      <?php wp_nav_menu( array( 'theme_location' => 'main-nav_part-1', 'menu_id' => 'main-nav_part-1' ) ); ?>
    </div>
    <div class="column main-navigation--column">
      <div class="site-branding">
        <h1 class="site-title m0">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <?php bloginfo( 'name' ); ?>
            <img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/logo-hz-white.png">
          </a>
        </h1>
        <p class="site-description screen-reader-text"><?php bloginfo( 'description' ); ?></p>
      </div><!-- .site-branding -->
    </div>
    <div class="column main-navigation--column">
      <?php wp_nav_menu( array( 'theme_location' => 'main-nav_part-2', 'menu_id' => 'main-nav_part-2' ) ); ?>
    </div>
  </nav><!-- #site-navigation -->
</header><!-- #masthead -->