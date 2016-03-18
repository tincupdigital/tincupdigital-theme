<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package _s
 */

get_header(); ?>

  <div id="content" class="site-content">

    <div class="container">
      <div class="row">

        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
  				<div id="primary" class="content-area">
  					<main id="main" class="site-main" role="main">

  					<?php while ( have_posts() ) : the_post(); ?>

  						<?php get_template_part( 'templates/content', 'single' ); ?>

  						<?php
  							// If comments are open or we have at least one comment, load up the comment template.
  							if ( comments_open() || get_comments_number() ) :
  								comments_template();
  							endif;
  						?>

  					<?php endwhile; // End of the loop. ?>

  					</main><!-- #main -->
  				</div><!-- #primary -->
  			</div>

      </div><!-- .row -->
    </div><!-- .container -->

  </div><!-- #content -->

  <?php /* Divider */
  get_template_part( 'templates/global/content', 'divider' ); ?>

<?php get_footer(); ?>
