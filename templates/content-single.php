<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="entry-meta mb1 color--hdl">
			<span class="posted-on"><?php echo get_the_date( 'F j, Y' ); ?></span>
		</div><!-- .entry-meta -->

		<?php the_title( '<h1 class="entry-title mb0">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php /* Image */
		if ( has_post_thumbnail() && _s_has_img_caption() ) {
			_s_feat_img_caption( 'large', 'mt3' );
		} elseif ( has_post_thumbnail() ) {
			the_post_thumbnail( 'large', array( 'class' => 'mt3' ) );
		} ?>

		<?php the_content(); ?>

		<?php /* CTA */
		if ( get_field( 'add_cta_item' ) ) {
			get_template_part( 'templates/global/cta', 'item' );
		} ?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer mb2">
		<?php _s_entry_footer(); ?>
	</footer><!-- .entry-footer -->

  <div class="back-link--area mb3">
    <a class="back-link" href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">&laquo; Back to blog</a>
  </div>
</article><!-- #post-## -->

