<?php
/**
 * Template Name: About Page
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

          <div class="container">
            <div class="row">

              <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                  <div class="entry-content">
                    <?php /* Title */
                    if ( get_field( 'page_title' ) ) { ?>
                      <h1 class="entry-title"><?php the_field( 'page_title' ); ?></h1>
                    <?php }

                    /* Image */
                    if ( has_post_thumbnail() ) {
                      the_post_thumbnail( 'large', array( 'class' => 'mt3' ) );
                    }

                    /* Intro */
                    if ( get_field( 'page_intro' ) ) { ?>
                      <div class="page-intro entry-content--intro">
                        <?php echo wpautop( get_field( 'page_intro' ) ); ?>
                      </div>
                    <?php } ?>

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
