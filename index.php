<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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

            <header class="page-header mb3">
              <!-- Blog widgets -->
              <div class="blog-widget-area">
                <?php get_template_part( 'templates/global/blog', 'widget_area' ); ?>
              </div>
            </header>

            <?php if ( have_posts() ) : ?>

              <?php if ( is_home() && ! is_front_page() ) : ?>
                <header>
                  <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                </header>
              <?php endif; ?>

              <?php /* Start the Loop */ ?>
              <?php while ( have_posts() ) : the_post(); ?>

                <?php

                  /*
                   * Include the Post-Format-specific template for the content.
                   * If you want to override this in a child theme, then include a file
                   * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                   */
                  get_template_part( 'templates/content', get_post_format() );
                ?>

              <?php endwhile; ?>

              <?php the_posts_navigation(); ?>

            <?php else : ?>

              <?php get_template_part( 'templates/content', 'none' ); ?>

            <?php endif; ?>

            </main><!-- #main -->
          </div><!-- #primary -->
        </div>

      </div><!-- .row -->
    </div><!-- .container -->

  </div><!-- #content -->

  <?php /* Divider */
  get_template_part( 'templates/global/content', 'divider' ); ?>

<?php get_footer(); ?>
