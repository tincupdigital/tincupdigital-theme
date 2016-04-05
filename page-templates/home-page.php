<?php
/**
 * Template Name: Home Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>

  <?php /* Home Hero */
  if ( have_rows( 'home_sections' ) ):
    while ( have_rows( 'home_sections' ) ): the_row();

      /* Hero */
      if ( get_row_layout() == 'hero_section' ) {
        get_template_part( 'templates/home/hero', 'section' );
      }

    endwhile;
  endif; ?>

  <nav id="home-navigation" class="sub-navigation" role="navigation">
    <?php wp_nav_menu( array( 'theme_location' => 'main-nav', 'menu_id' => 'main-nav', 'menu_class' => 'main-nav--menu', 'container_class' => 'nav-container' ) ); ?>
  </nav><!-- #site-navigation -->

  <div id="content" class="site-content site-content--home">

    <div id="primary" class="content-area">
      <main id="main" class="site-main site-main--home" role="main">

        <?php while ( have_posts() ) : the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="entry-content">
              <?php /* Sections */
              if ( have_rows( 'home_sections' ) ):
                while ( have_rows( 'home_sections' ) ): the_row();

                  /* About */
                  if ( get_row_layout() == 'about_section' ) {
                    get_template_part( 'templates/home/about', 'section' );
                  }

                  /* Services */
                  if ( get_row_layout() == 'services_section' ) {
                    get_template_part( 'templates/home/services', 'section' );
                  }

                  /* CTA */
                  if ( get_row_layout() == 'cta_section' ) {
                    get_template_part( 'templates/home/cta', 'section' );
                  }

                endwhile;
              endif; ?>

              <?php
                wp_link_pages( array(
                  'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
                  'after'  => '</div>',
                ) );
              ?>
            </div><!-- .entry-content -->
          </article><!-- #post-## -->

        <?php endwhile; // End of the loop. ?>

      </main><!-- #main -->
    </div><!-- #primary -->

  </div><!-- #content -->

<?php get_footer(); ?>
