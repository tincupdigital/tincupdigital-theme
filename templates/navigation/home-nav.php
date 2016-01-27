<?php
/**
 * Template part for the home navigation
 *
 * @package _s
 */
?>

<nav id="site-navigation" class="main-navigation txt--center" role="navigation">
	<button class="menu-toggle btn btn-primary" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', '_s' ); ?></button>
	<?php wp_nav_menu( array( 'theme_location' => 'main-nav', 'menu_id' => 'main-nav', 'container_class' => 'nav-menu--container' ) ); ?>
</nav><!-- #site-navigation -->