<?php
/**
 * Template Name: About Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>

  <?php /* Hero */
  if ( has_post_thumbnail() ) {
    get_template_part( 'templates/global/hero', 'section' );
  } ?>

  <div id="content" class="site-content">

    <div id="primary" class="content-area">
      <main id="main" class="site-main" role="main">

        <?php while ( have_posts() ) : the_post(); ?>

          <div class="container">
            <div class="row">

              <div class="col-xs-12 col-sm-10 col-sm-offset-1">

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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

              </div><!-- .col-xs-12 -->

            </div><!-- .row -->
          </div><!-- .container -->

          <?php /* CTA Section */
          get_template_part( 'templates/pages/cta', 'loader' ); ?>

        <?php endwhile; // End of the loop. ?>

      </main><!-- #main -->
    </div><!-- #primary -->

  </div><!-- #content -->

<?php get_footer(); ?>
