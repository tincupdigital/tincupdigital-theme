<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */
?>

  <footer id="colophon" class="site-footer" role="contentinfo">
    <!-- Top -->
    <div class="footer-top site-footer--top">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-8 col-sm-offset-2">
            <div class="footer-top--inner txt--center">
              <?php /* Logo */
              if ( get_theme_mod( 'color_logo' ) ) { ?>
                <div class="footer-logo footer-top--logo">
                  <img src="<?php echo get_theme_mod( 'color_logo' ); ?>">
                </div>
              <?php } ?>

              <?php /* Contact Info */
              // set contact info variables
              $phone = get_theme_mod( 'phone_number' );
              $email = get_theme_mod( 'email_address' );

              if ( $phone || $email ) { ?>
                <ul class="footer-contact footer-top--contact txt--bold mb1">
                  <?php
                  /* Phone */
                  if ( $phone ) { ?>
                    <li><span>Call Us</span> <a href="<?php echo _s_get_phone_link( $phone ); ?>"><?php echo $phone; ?></a></li>
                  <?php }
                  /* Email */
                  if ( $email ) { ?>
                    <li><span>Email Us</span> <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></li>
                  <?php } ?>
                </ul>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Bottom -->
    <div class="footer-bottom site-footer--bottom py2 txt--center txt--bold">
      <?php // set up copyright line
      $copy = '&copy;' . date( 'Y' ) . '&nbsp' . get_bloginfo( 'name' ) . ', Inc.'; ?>

      <span><?php echo $copy; ?></span>
    </div>
  </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>