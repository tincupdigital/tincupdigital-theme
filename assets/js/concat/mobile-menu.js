/**
 * mobile-menu.js
 *
 * Handles toggling the navigation menu for small screens and enables tab
 * support for dropdown menus.
 */

(function($){
  // clone the main nav menu
  var myClone = $('.main-nav--container').clone();

  // prepend it to <body> tag
  $(document.body).prepend(myClone);

  // add mobile class
  myClone.addClass('mobile-menu');

  // add click function to toggle class
  $('.menu-toggle').click(function() {
    $('.site').toggleClass('pushed');
  });

  // remove class if click outside menu
  $(document).mouseup(function(e) {
    var myTarget = $('.mobile-menu .menu');
    if ( !myTarget.is(e.target) && ( myTarget.has(e.target).length === 0 ) ) {
      $('.site').removeClass('pushed');
    }
  });

}(jQuery));
