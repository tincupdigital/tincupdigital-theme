<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
  return;
}
?>

<div id="comments" class="comments-area">

  <?php // You can start editing here -- including this comment! ?>

  <?php if ( have_comments() ) : ?>
    <h2 class="comments-title">
      <?php
        printf( // WPCS: XSS OK.
          esc_html( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', '_s' ) ),
          number_format_i18n( get_comments_number() ),
          '<span>' . get_the_title() . '</span>'
        );
      ?>
    </h2>

    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
    <nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
      <h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', '_s' ); ?></h2>
      <div class="nav-links">

        <div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', '_s' ) ); ?></div>
        <div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', '_s' ) ); ?></div>

      </div><!-- .nav-links -->
    </nav><!-- #comment-nav-above -->
    <?php endif; // Check for comment navigation. ?>

    <ol class="comment-list">
      <?php
        wp_list_comments( array(
          'style'      => 'ol',
          'short_ping' => true,
        ) );
      ?>
    </ol><!-- .comment-list -->

    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
    <nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
      <h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', '_s' ); ?></h2>
      <div class="nav-links">

        <div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', '_s' ) ); ?></div>
        <div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', '_s' ) ); ?></div>

      </div><!-- .nav-links -->
    </nav><!-- #comment-nav-below -->
    <?php endif; // Check for comment navigation. ?>

  <?php endif; // Check for have_comments(). ?>

  <?php
    // If comments are closed and there are comments, let's leave a little note, shall we?
    if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
  ?>
    <p class="no-comments"><?php esc_html_e( 'Comments are closed.', '_s' ); ?></p>
  <?php endif; ?>

  <?php // set up comment form here
  $fields = array(
    'author' =>
      '<div class="comment-name mb1">
      <label for="author">Name</label>
      <input id="author" name="author" type="text" placeholder="Name" aria-required="true" class="field">
      </div>',
    'email' =>
      '<div class="comment-email mb1">
      <label for="email">Email</label>
      <input id="email" name="email" type="email" placeholder="Email" aria-describedby="email-notes" aria-required="true" class="field">
      </div>'
  );

  $comment_field =
  '<div class="comment-text mb1">
  <label for="comment">Comment</label>
  <textarea id="comment" name="comment" cols="45" rows="4" placeholder="" aria-required="true" class="field"></textarea>
  </div>';

  $args = array(
    'fields' => apply_filters( 'comment_form_default_fields', $fields ),
    'comment_field' => $comment_field,
    'class_submit' => 'btn btn-primary mt2'
  );
  comment_form( $args );
  ?>

</div><!-- #comments -->
