<?php
/**
 * Template Name: Services Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>

  <div id="content" class="site-content">

    <div id="primary" class="content-area">
      <main id="main" class="site-main" role="main">

        <?php while ( have_posts() ) : the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="entry-content">
              <?php /* Hero */
              get_template_part( 'templates/global/hero', 'section' ); ?>

              <?php /* Services */
              if ( have_rows( 'services' ) ) {
                get_template_part( 'templates/pages/services', 'section' );
              } ?>

              <?php /* CTA Section */
              get_template_part( 'templates/pages/cta', 'loader' ); ?>

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
