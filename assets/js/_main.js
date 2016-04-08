/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */

(function($) {

// Use this variable to set up the common and page specific functions. If you
// rename this variable, you will also need to rename the namespace below.
var Roots = {
  /* Common */
  common: {
    init: function() {
      /* WOW.js */
      new WOW().init();

      /* FitVids */
      $('.content-area .entry-content').fitVids();

      /* AnySlider */
      if ( $('.cta-slider').length > 0 ) {
        $('.cta-slider').anyslider({
          animation: 'slide', // fade not working
          interval: 10000,
          keyboard: false,
          pauseOnHover: true,
          showBullets: true,
          showControls: false,
          speed: 500,
          touch: true
        });
      }
    }
  },
  /* Home */
  home: {
    init: function() {
      /**
       * Logo fade
       * @link http://goo.gl/D9GCJ3
       */
      // set up variables
      var fadeStart = 50,
          fadeUntil = 450,
          fadeTarget = $('.hero-logo img');

      // bind to scroll function
      $(window).bind('scroll', function() {
        var offset = $(document).scrollTop(),
            opacity = 0;
        if (offset <= fadeStart) {
          opacity = 1;
        } else if (offset <= fadeUntil) {
          opacity =  1 - (offset/fadeUntil);
        }
        fadeTarget.css('opacity', opacity).html(opacity);
      });

      /* AnySlider */
      if ( $('.home-slider').length > 0 ) {
        $('.home-slider').anyslider({
          animation: 'fade',
          interval: 5000,
          keyboard: true,
          showBullets: false,
          showControls: false,
          speed: 700,
          touch: true
        });
      }

      /* Waypoint */
      var waypoints = $('.sub-navigation');
      waypoints.waypoint(function(direction) {
        if (direction === 'down') {
          $('.site-header').addClass('visible');
        } else if (direction ==='up') {
          $('.site-header').removeClass('visible');
        }
      });
    }
  }
};

// The routing fires all common scripts, followed by the page specific scripts.
// Add additional events for more control over timing e.g. a finalize event
var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = Roots;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {
    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });
  }
};

$(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
