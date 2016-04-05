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
                  <a href="<?php echo home_url(); ?>">
                    <img class="footer-logo--img" src="<?php echo get_theme_mod( 'color_logo' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
                  </a>
                </div>
              <?php } ?>

              <?php /* Contact Info */
              // set contact info variables
              $phone = get_theme_mod( 'phone_number' );
              $email = get_theme_mod( 'email_address' );

              if ( $phone || $email ) { ?>
                <ul class="footer-contact footer-top--contact txt--600 mb1 p0">
                  <?php
                  /* Phone */
                  if ( $phone ) { ?>
                    <li><span class="txt--upper">Call Us</span> <a href="<?php echo _s_get_phone_link( $phone ); ?>"><?php echo $phone; ?></a></li>
                  <?php }
                  /* Email */
                  if ( $email ) { ?>
                    <li><span class="txt--upper">Email Us</span> <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></li>
                  <?php } ?>
                </ul>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Bottom -->
    <div class="footer-bottom site-footer--bottom py2 txt--center txt--600">
      <div class="footer-bottom--inner">
        <?php /* Social */
        // set social links to variables
        $fb_url = get_theme_mod( 'facebook_url' );
        $li_url = get_theme_mod( 'linkedin_url' );
        $in_url = get_theme_mod( 'instagram_url' );
        $tw_url = get_theme_mod( 'twitter_url' );

        if ( $fb_url || $tw_url ) { ?>
          <div class="footer-bottom--1st">
            <?php
            /* Facebook */
            if ( $fb_url ) { ?>
              <a class="social-link icon-facebook-circled" href="<?php echo $fb_url; ?>" target="_blank"></a>
            <?php }
            /* Twitter */
            if ( $tw_url ) { ?>
              <a class="social-link icon-twitter-circled" href="<?php echo $tw_url; ?>" target="_blank"></a>
            <?php } ?>
          </div>
        <?php }

        if ( $in_url || $li_url ) { ?>
          <div class="footer-bottom--2nd">
            <?php
            /* Instagram */
            if ( $in_url ) { ?>
              <a class="social-link icon-instagram-circled" href="<?php echo $in_url; ?>" target="_blank"></a>
            <?php }
            /* LinkedIn */
            if ( $li_url ) { ?>
              <a class="social-link icon-linkedin-circled" href="<?php echo $li_url; ?>" target="_blank"></a>
            <?php } ?>
          </div>
        <?php } ?>

        <div class="footer-bottom--3rd">
          <span><?php echo '&copy;' . date( 'Y' ) . ' ' . get_bloginfo( 'name' ) . ', Inc.'; ?></span>
        </div>
    </div>
  </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>