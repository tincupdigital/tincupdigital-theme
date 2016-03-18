<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php // check for post thumbnail
  if ( has_post_thumbnail() ) { ?>
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-8 last-xs first-sm">
        <header class="entry-header">
          <div class="entry-meta mb1 color--hdl">
            <span class="posted-on"><?php echo get_the_date( 'F j, Y' ); ?></span>
          </div><!-- .entry-meta -->

          <?php the_title( sprintf( '<h2 class="entry-title h1 m0 color--hdl"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
        </header><!-- .entry-header -->

        <div class="entry-content">
          <?php _s_custom_excerpt( 20 ); ?>
          <?php
            wp_link_pages( array(
              'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
              'after'  => '</div>',
            ) );
          ?>
        </div><!-- .entry-content -->
      </div>

      <div class="col-xs-12 col-sm-6 col-md-4 first-xs last-sm">
        <div class="entry-image">
          <?php the_post_thumbnail( 'thumbnail', array( 'class' => 'img--round img--center' ) ); ?>
        </div>
      </div>
    </div>
  <?php } else { ?>
    <header class="entry-header">
      <?php if ( 'post' === get_post_type() ) : ?>
        <div class="entry-meta mb1 color--hdl">
          <span class="posted-on"><?php echo get_the_date( 'F j, Y' ); ?></span>
        </div><!-- .entry-meta -->
      <?php endif; ?>

      <?php the_title( sprintf( '<h2 class="entry-title h1 mt0 color--hdl"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
      <?php _s_custom_excerpt( 55 ); ?>
      <?php
        wp_link_pages( array(
          'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
          'after'  => '</div>',
        ) );
      ?>
    </div><!-- .entry-content -->
  <?php } ?>
</article><!-- #post-## -->
