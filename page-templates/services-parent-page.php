<?php
/**
 * Template Name: Services Parent Page
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

          <div class="service-section">
            <?php /* Hero */
            get_template_part( 'templates/global/hero', 'section' ); ?>

            <div class="service-section--inner pos--rel z5">
              <?php /* Nav */
              wp_nav_menu( array( 'theme_location' => 'services-nav', 'menu_id' => 'services-nav' ) ); ?>

              <div class="container">
                <div class="row">

                  <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                      <header class="entry-header">
                        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                      </header><!-- .entry-header -->

                      <div class="entry-content">
                        <?php the_content(); ?>
                        <?php
                          wp_link_pages( array(
                            'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
                            'after'  => '</div>',
                          ) );
                        ?>
                      </div><!-- .entry-content -->
                    </article><!-- #post-## -->
                  </div>

                </div><!-- .row -->
              </div><!-- .container -->
            </div>

            <?php /* CTA Section */
            get_template_part( 'templates/pages/cta', 'loader' ); ?>
          </div><!-- .service-section -->

        <?php endwhile; // End of the loop. ?>

      </main><!-- #main -->
    </div><!-- #primary -->

  </div><!-- #content -->

<?php get_footer(); ?>
