(function($) {
  "use strict"; // Start of use strict

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger').click(function() {
    var elem = $(this).attr('href');
    var headerHeight = $('header').outerHeight() + 20;
    $('html,body').animate({scrollTop: $(elem).offset().top - headerHeight}, 700);
    return false;
  });

  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

  // Activate scrollspy to add active class to navbar items on scroll
  $('body').scrollspy({
    target: '#mainNav',
    offset: 54
  });

})(jQuery); // End of use strict
