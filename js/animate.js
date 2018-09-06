//animation
$(window).load(function(){
  if (!Modernizr.touch) {
    setTimeout(function(){
      $('.anim-content').each(function() {
        $(this).children().each(function(index) {
          var element = $(this);
          var delayNum = 0.1 + (0.1 * index) + 's';
          $(element).addClass('inview');
          setTimeout(function() {
            $(element).css('-webkit-transition-delay', delayNum)
              .css('-moz-transition-delay', delayNum)
              .css('-ms-transition-delay', delayNum)
              .css('-o-transition-delay', delayNum);
          }, 100);
        });
      });

      $('.anim-content').appear(function(){
        var elem = $(this);
        setTimeout(function(){
          elem.addClass('visible');
        }, 100);
      });

      $.each($('.animated'),function(){
    		$(this).appear(function(event,visible){
          var element = $(this);
          var animation = element.data('animation');
          var animationDelay = element.data('delay');
          if(animationDelay) {
            setTimeout(function(){
              element.addClass(animation + ' visible');
              element.removeClass('hiding');
            }, animationDelay);
          }
    		});
    	});

      $('.animate').each(function(){
        var element = $(this);
        var animation = element.data('animation');
        var animationDelay = element.data('delay');

        setTimeout(function(){
          element.addClass('animated ' + animation);
        }, animationDelay);
      });
    }, 500);
  } else {
    $('.anim-content').removeClass('anim-content');
    $('.animated').removeClass('animated');
  }
});
