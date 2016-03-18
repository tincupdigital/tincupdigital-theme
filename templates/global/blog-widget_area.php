<?php
/**
 * Template part for blog widget area.
 *
 * @package _s
 */
?>

<div class="blog-widget-area--inner">
  <div class="row">
    <!-- Categories -->
    <div class="col-xs-6">
      <?php the_widget( 'WP_Widget_Categories', array( 'dropdown' => 1 ) ); ?>
    </div>
    <div class="col-xs-6 txt--right">
      <form role="search" method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <div>
          <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
          <input class="field searchform-field" type="text" value="<?php echo get_search_query(); ?>" name="s" id="search" placeholder="Search" />
          <button class="searchform-button" type="submit"><i class="icon-search"></i></button>
        </div>
      </form>
    </div>
  </div>
</div>