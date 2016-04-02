<?php
/**
 * Template Name: Contact Page
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

    <div class="container">
      <div class="row">

        <div class="col-xs-12 col-sm-10 col-sm-offset-1">
          <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

              <?php while ( have_posts() ) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                  <header class="entry-header">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                  </header><!-- .entry-header -->

                  <div class="entry-content">
                    <?php the_content(); ?>

                    <?php /* Footer */
                    if ( get_field( 'page_footer' ) ) { ?>
                      <div class="page-footer contact-footer contact-page--footer">
                        <?php echo wpautop( get_field( 'page_footer' ) ); ?>

                        <?php /* Phone */
                        if ( get_theme_mod( 'phone_number' ) ) {
                          $p_num = get_theme_mod( 'phone_number' ); ?>

                          <div class="contact-footer--block contact-footer--phone mb2">
                            <label>Call Us</label>
                            <a class="contact-footer--link h3 mt0" href="<?php echo _s_get_phone_link( $p_num ); ?>"><?php echo $p_num; ?></a>
                          </div>
                        <?php }

                        /* Email */
                        if ( get_theme_mod( 'email_address' ) ) {
                          $e_add = get_theme_mod( 'email_address' ); ?>

                          <div class="contact-footer--block contact-footer--email">
                            <label>Email Us</label>
                            <a class="contact-footer--link h3 mt0" href="mailto:<?php echo $e_add; ?>"><?php echo $e_add; ?></a>
                          </div>
                        <?php } ?>
                      </div>
                    <?php } ?>

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
        </div>

      </div><!-- .row -->
    </div><!-- .container -->

  </div><!-- #content -->

  <?php /* Divider */
  get_template_part( 'templates/global/content', 'divider' ); ?>

<?php get_footer(); ?>
