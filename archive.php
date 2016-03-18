<?php
/**
 * The template for displaying archive pages.
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

            <?php if ( have_posts() ) : ?>

              <header class="page-header mb3">
                <?php
                  the_archive_title( '<h1 class="page-title">', '</h1>' );
                  the_archive_description( '<div class="taxonomy-description">', '</div>' );
                ?>

                <!-- Blog widgets -->
                <div class="blog-widget-area blog-widget-area--top mt2 hidden-xs">
                  <?php get_template_part( 'templates/global/blog', 'widget_area' ); ?>
                </div>
              </header><!-- .page-header -->

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

            <!-- Blog widgets -->
            <div class="blog-widget-area blog-widget-area--bottom mt2 visible-xs">
              <?php get_template_part( 'templates/global/blog', 'widget_area' ); ?>
            </div>

            </main><!-- #main -->
          </div><!-- #primary -->
        </div>

      </div><!-- .row -->
    </div><!-- .container -->

  </div><!-- #content -->

  <?php /* Divider */
  get_template_part( 'templates/global/content', 'divider' ); ?>

<?php get_footer(); ?>