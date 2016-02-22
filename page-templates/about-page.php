<?php
/**
 * Template Name: About Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

        <div class="container">
          <div class="row">

            <div class="col-xs-12 col-sm-10 col-sm-offset-1">
				      <?php get_template_part( 'templates/content', 'page' ); ?>
            </div>

          </div><!-- .row -->
        </div><!-- .container -->

        <?php /* CTA Section */
        // cta field is attached to home page
        // so let's not do the work twice.
        if ( have_rows( 'home_sections', _s_get_home_ID() ) ):
          while ( have_rows( 'home_sections', _s_get_home_ID() ) ): the_row();

            /* CTA */
            if ( get_row_layout() == 'cta_section' ) {
              get_template_part( 'templates/global/cta', 'section' );
            }

          endwhile;
        endif; ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
