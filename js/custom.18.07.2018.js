//get all elements with class and get the biggest box
function get_biggest(elements){
	var biggest_height = 0;
	for ( var i = 0; i < elements.length ; i++ ){
		var element_height = $(elements[i]).outerHeight();
		//compare the height, if bigger, assign to variable
		if(element_height > biggest_height ) biggest_height = element_height;
	}
	return biggest_height;
}

function resize() {
	var windowWidth = $(window).width();
	var windowHeight = $(window).height();

	// STICKY FOOTER
	var headerHeight = $('header').outerHeight();
	var footerHeight = $('footer').outerHeight();
	var footerTop = (footerHeight) * -1;
	$('footer').css({marginTop: footerTop});
	$('#main-wrapper').css({paddingBottom: footerHeight});

	// for vertically middle content
	$('.bp-middle').each(function() {
		var bpMiddleHeight = $(this).outerHeight() / 2 * - 1;
		$(this).css({marginTop: bpMiddleHeight});
	});

	// for equalizer
	$('.in-services-list').css({minHeight: 0});
	var ClassName = get_biggest($('.in-services-list'));
	$('.in-services-list').css({minHeight: ClassName});

	// for equalizer for Speaker
	$('.e-s-lists').css({minHeight: 0});
	var Speakers = get_biggest($('.e-s-lists'));
	$('.e-s-lists').css({minHeight: Speakers});

	// Home Slider get child height
	var childHeight = $('.cl-i-inner').height();
	$('.carousel-inner').css('height',childHeight);

	// what we do get same height
	var siblingHeight = $('.w-w-d-r-holder').height();
	$('.w-w-d-left').css('height',siblingHeight);

	// Industries mobile
	if(window.innerWidth <= 991 ){

		// Industries mobile
		$('.ex-l-inner').each(function(){
			var width = 0;
			var thisElem = $(this);
			var $this = thisElem.children();

			$this.each(function() {
				width += $(this).outerWidth( true );
			});
			thisElem.css('min-width', width + 20 +'px');
		});

		// Solutions mobile
		$('.w-w-d-r-inner').each(function(){
			var width = 0;
			var thisElem = $(this);
			var $this = thisElem.children();

			$this.each(function() {
				width += $(this).outerWidth( true );
			});
			thisElem.css('min-width', width - 20 + 'px');
		});

		// Insight mobile
		$('.h-whats-new-inner').each(function(){
			var width = 0;
			var thisElem = $(this);
			var $this = thisElem.children();

			$this.each(function() {
				width += $(this).outerWidth( true );
			});
			thisElem.css('min-width', width + 15 +'px');
		});

		//
		$('.in-service-holder').each(function(){
			var width = 0;
			var thisElem = $(this);
			var $this = thisElem.children();

			$this.each(function() {
				width += $(this).outerWidth( true ) / 2;
			});
			thisElem.css('min-width', width + 100 +'px');
		});

	} else {
		$('.ex-l-inner, .w-w-d-r-inner,.h-whats-new-inner,.in-service-holder ').css('min-width', '100px');
	}

	isotope();
	detectImgHeight();
}

function detectImgHeight() {
	// Make sure wide images fit
	$(".item-img > img").each(function() {
		var containerHeight = $(this).parent().height();
		var imageHeight = $(this).height();

		if(imageHeight > containerHeight) {
			$(this).addClass("img-object-fit");
		}
	});
}

function isotope() {
	// for isotope Stories
	var $container = $('#st-grid');
			filters = {};

	$container.isotope({
		itemSelector: '.item',
		percentPosition: true,
		filter: '',
		layoutMode: 'fitRows',
		fitRows: {
			columnWidth: '.item',
		}
	});

	$('.selectpicker').change(function() {
    var $this = $(this);

    var $optionSet = $this;
    var group = $optionSet.attr('data-filter-group');
				filters[group] = $this.find('option:selected').attr('data-filter-value');

    var isoFilters = [];
    for (var prop in filters) {
      isoFilters.push(filters[prop]);
    }
    var selector = isoFilters.join('');
    $container.isotope({
      filter: selector
    });

    return false;
  });
}

$(window).resize(function() {
	resize();
	isotope();
});

$(document).ready(function() {

	$('.carousel').on('slide.bs.carousel', function () {
		setTimeout(function(){
			detectImgHeight();
		}, 100);
	});

	if (Modernizr.touch) {
		$('html').addClass('bp-touch');
	}

	resize();

	// Mobile Burger Menu
	$('.burger-menu').click(function(){
		$('.mobile-nav').addClass('open');
		$('body').addClass('ov-hidden');
	});

	// Mobile Close navigation
	$('.mb-close, .mb-bottom-nav .clickScroll').click(function(){
		var $this = $(this);
		if($this.hasClass('disabled')) {
			$('.mb-contact, .mobile-search, .c-u-w-mobile, .lvl, .mb-search').removeClass('open');
			$(this).removeClass('disabled');
		} else {
			$('.mobile-nav, .mb-contact, .c-u-w-mobile, .lvl, .mobile-search, .mb-search').removeClass('open');
			$('body').removeClass('ov-hidden');
		}
	});

	// Mobile Level 1 Nav

	$('.lvl-btn a[data-level], .mb-bottom-nav a[data-level]').click(function(e){
		e.preventDefault();
		var $this = $(this).attr('data-level');
		$('.lvl2-holder').removeClass('open');
		$('.' + $this).addClass('open');
	});

	// Mobile Nav Back
	$('.mb-back-nav').click(function(e){
		e.preventDefault();
		$('.lvl').removeClass('open');
	});

	// Mobile Nav Back Level
	$('.mb-sub-tl-inner').click(function(e){
		e.preventDefault();
		var $this = $(this).attr('data-level');
		$('.' + $this).removeClass('open');
	});

	// Mobile Open/Close Contact Wedgit
	$('.mb-contact').click(function(){
		var $this = $(this);
		if($this.hasClass('open')) {
			$this.removeClass('open');
			$('.c-u-w-mobile').removeClass('open');
			$('.mb-close').removeClass('disabled');
		} else {
			$this.addClass('open');
			$('.c-u-w-mobile').addClass('open');
			$('.mb-close').addClass('disabled');
			$('.mobile-search').removeClass('open');
			$('.mb-search').removeClass('open');
		}
	});

	// Mobile Open/Close Search
	$('.mb-search').click(function(){
		var $this = $(this);
		if($this.hasClass('open')) {
			$this.removeClass('open');
			$('.mobile-search').removeClass('open');
			$('.mb-close').removeClass('disabled');
		} else {
			$this.addClass('open');
			$('.mobile-search').addClass('open');
			$('.mb-close').addClass('disabled');
			$('.c-u-w-mobile').removeClass('open');
			$('.mb-contact').removeClass('open');
		}
	});

	// Home Page Hero slider
	var totalItems = $('.item').length;
	var currentIndex = $('.item.active').index() + 1;

	$('#myCarousel').on('slid.bs.carousel', function() {
	  currentIndex = $('.item.active').index() + 1;
		$('.items').removeClass('active');
		$('.item-'+currentIndex).addClass('active');
	});

	$('#storiesSlider').on('slid.bs.carousel', function() {
		currentIndex = $('.item.active').index() + 1;
		$('.items').removeClass('active');
		$('.item-'+currentIndex).addClass('active');
	});

	$('#insightSlider').on('slid.bs.carousel', function() {
		currentIndex = $('.item.active').index() + 1;
		$('.items').removeClass('active');
		$('.item-'+currentIndex).addClass('active');
	});

	// Footer Register
	$('#register').on('focus', function(){
		$(this).parent().addClass('focus');
	}).on('blur', function(){
		$(this).parent().removeClass('focus');
	});

	$('.search').on('focus', function(){
		$(this).parent().parent().addClass('focus');
	}).on('blur', function(){
		$(this).parent().parent().removeClass('focus');
	});

	// Stories Share
	$('.auto-scroll').each(function(){
		var $this = $(this);
		var elem = $this.attr('href');

		$this.click(function(event){
			event.preventDefault();
			var headerHeight = $('header').outerHeight() + 20;
			$('html,body').animate({scrollTop: $(elem).offset().top - headerHeight}, 700);
		});
	});

	// Contact Us Widget
	$('.contact-btn').click(function(e){
		e.preventDefault();
		$('.contact-us-box-widget').css('display','block').addClass('animated').removeClass('bounceOutDown');
		$('.contact-popup').hide();
	});

	// Contact Us close
	$('.close-contact, .contact-widget-close').click(function(event){
		event.preventDefault();
		$('.contact-popup, .contact-us-box-widget').addClass('bounceOutDown');
	});

	// Contact us
	$(".preventload").submit(function(e) {
    e.preventDefault();
	});

	// Input Email
	$('.form-controls.email').on('keyup', function(){
		if($(this).val().length == 0) {
			$(this).removeClass('valid');
		} else {
			$(this).addClass('valid');
		}
	});

	// Input Number Prevent Letter
	$(document).on('keypress','.form-controls[type="number"]',  function(evt){
		if (evt.which < 48 || evt.which > 57)
    {
      evt.preventDefault();
    }
	});

	$('.xp-list').mouseenter(function(){
		$('.h-explore').stop(false,true).addClass('hover');
	}).mouseleave(function(){
		$('.h-explore').stop(false,true).removeClass('hover');
	});

	// Industry change background
	var defaultBackground = 'dist/images/home/no_background.png';
	var industryImgArray = [
		'dist/images/home/xp_thumb_bg_1.jpg',
		'dist/images/home/xp_thumb_bg_2.jpg',
		'dist/images/home/xp_thumb_bg_3.jpg',
		'dist/images/home/xp_thumb_bg_4.jpg',
		'dist/images/home/xp_thumb_bg_5.jpg',
		'dist/images/home/xp_thumb_bg_6.jpg',
	];
	$('.xp-list').on('mouseenter mouseleave',function(e){
		var industryBg = $(this).attr('data-id');
		var industImg = industryImgArray[industryBg];
		var image = e.type === 'mouseenter' ? industImg : defaultBackground;
		$('.xp-cons-bg').css('background', 'url('+image+')');
	});

	// What we do Hover container
	var solutionsImgArray = [
		'dist/images/home/what_we_do_1.jpg',
		'dist/images/home/what_we_do_2.jpg',
		'dist/images/home/what_we_do_3.jpg',
		'dist/images/home/what_we_do_4.jpg',
		'dist/images/home/what_we_do_5.jpg',
		'dist/images/home/what_we_do_6.jpg',
		'dist/images/home/what_we_do_7.jpg',
		'dist/images/home/what_we_do_8.jpg',
		'dist/images/home/what_we_do_9.jpg',
	];
	$('.w-w-d-list').on('mouseenter mouseleave',function(e){
		var industryBg = $(this).attr('data-id');
		var industImg = solutionsImgArray[industryBg];
		var image = e.type === 'mouseenter' ? industImg : 'dist/images/home/what_we_do_1.jpg';
		$('.w-w-d-r-content').css('background', 'url('+image+')');
	});

	$('.w-w-d-list').mouseenter(function(){
		$('.w-w-d-r-content').addClass('open');
	}).mouseleave(function(){
		$('.w-w-d-r-content').removeClass('open');
	});

	var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname;

	// Data Center Extensive Coverage
	$('.dc-list').click(function(event){
		event.stopPropagation();
		var $this = $(this);
		var id = $this.attr('id');
		if($this.hasClass('open')) {
			$this.find('.maps-holder').hide(300);
			$this.find('.dc-x-content').show(300);
		} else {
			$('.dc-list').removeClass('open');
			$('.maps-holder').fadeIn(300);
			$('.dc-x-content').slideUp(300);
			$this.addClass('open');
			$this.find('.maps-holder').fadeOut(300);
			$this.find('.dc-x-content').slideDown(300);
		}

		window.history.pushState({path:newurl},'',newurl + '?'+id);
	});

	// Data Center Extensive Coverage Close
	$('.dc-x-close').click(function(event){
		event.stopPropagation();
		var $this = $(this).parents('.dc-list');
		var id = $this.attr('id');
		if($this.hasClass('open')) {
			$('.dc-list').removeClass('open');
			$this.removeClass('open');
			$this.find('.maps-holder').fadeIn(300);
			$this.find('.dc-x-content').slideUp(300);

			window.history.pushState({path:newurl},'',newurl + '');
		} else {
			$('.dc-list').removeClass('open');
			$('.maps-holder').fadeIn(300);
			$('.dc-x-content').slideUp(300);
			$this.addClass('open');
			$this.find('.maps-holder').fadeOut(300);
			$this.find('.dc-x-content').slideDown(300);
			window.history.pushState({path:newurl},'',newurl + '?'+id);
		}
	});

	// Reset Lazyload on Filter click
	$('.filter-option').on('change', function(){
		$.lazyload.refresh('lazyload');
	});

});

$(window).load(function() {
	resize();

	// First Navigation
	setTimeout(function(){
		$('.header-nav > ul > li').mouseenter(function(){
			$('.main-dropdown',this).stop(true, false).fadeIn(200);
		}).mouseleave(function(){
			$('.main-dropdown',this).stop(true, false).fadeOut(200);

			// reset menu tab
			$('.m-d-left li', this).removeClass('active');
			$('.m-d-left li', this).first().addClass('active');

			$('.ov-auto .nav-tab', this).removeClass('active');
			$('.ov-auto .nav-tab', this).first().addClass('active');
		});

		// First Navigation hide second Navigation
		$('.header-nav > ul > li.dDown').mouseenter(function(){
			$('.header-bottom').stop(true, false).fadeOut();
		}).mouseleave(function(){
			$('.header-bottom').stop(true, false).fadeIn();
		});
	}, 600);

	$('.m-d-left li').click(function(event){
		event.preventDefault();
		var $this = $(this);
		var elem = $this.attr('data-tab');

		$this.siblings().removeClass('active');
		$this.parents('.main-dropdown').find('.nav-tab').siblings().removeClass('active');
		$('.'+elem).addClass('active');
		$this.addClass('active');
	});

	// Second Navigation
	$('.header-b-nav > ul > li').mouseenter(function(){
		$('ul',this).stop(true,false).slideDown();
	}).mouseleave(function(){
		$('ul',this).stop(true,false).slideUp();
	});

	// Scroll top
	$('.back-top, .clickScroll').click(function(){
		$('.main-dropdown').stop(true, false).fadeOut();
		$('.header-bottom').stop(true, false).fadeIn();
	});

	// search
	$('.search-btn').click(function(){
		$('.menu-search-holder').toggleClass('open');
		$(this).toggleClass('open');
	});

	// Auto scroll on Section
	setTimeout(function() {
		var hash_loc = window.location;
		var hash_str = hash_loc.toString();
		var hash_link = hash_str.split('?');

		var hashUrl = $(location).attr("href").split('?').pop();

		if (hash_link[1] === hashUrl) {
			var offSet = $('header').outerHeight() + 20;
			$('body, html').animate({scrollTop:$('#'+hash_link[1]).offset().top - offSet}, 1000);

			setTimeout(function(){
				$('#' + hash_link[1]).addClass('open');
				$('#' + hash_link[1]).find('.maps-holder').fadeOut(300);
				$('#' + hash_link[1]).find('.dc-x-content').slideDown(300);
			}, 1100);
		}
	});



	// Header Function Click
	// Read the cookie and if it's defined scroll to id
	var scroll = localStorage.getItem('scroll');
	if(scroll){
		 scrollToID(scroll, 1000);
		localStorage.clear('scroll');
	}

	// Handle event onclick, setting the cookie when the href != #
	$('.main-dropdown .clickScroll, .mb-bottom-nav .clickScroll').click(function (e) {
		e.preventDefault();
		var id = $(this).data('id');
		var href = $(this).attr('href');

		if(href === '#'){
			scrollToID(id, 1000);
			var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + '?'+id;
			window.history.pushState({path:newurl},'',newurl);
		}else{
			localStorage.setItem('scroll', id);
			window.location.href = href+'?'+id;
		}


	});

	// scrollToID function
	function scrollToID(id, speed) {
		var offSet = $('header').outerHeight() + 20;
		var obj = $('#' + id).offset();
		var targetOffset = obj.top - offSet;
		$('html,body').animate({ scrollTop: targetOffset }, speed);

		$('.dc-list').removeClass('open');
		$('.maps-holder').fadeIn(300);
		$('.dc-x-content').slideUp(300);

		setTimeout(function(){
			$('#' + id).addClass('open');
			$('#' + id).find('.maps-holder').fadeOut(300);
			$('#' + id).find('.dc-x-content').slideDown(300);
		}, 1100);
	}

	// Industry Slide
	$('#industry-carousel').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: true,
    slideshow: true,
    itemWidth: 113,
    itemMargin: 10,
		move: 1,
    asNavFor: '#industry-slide',
		after: function(slider){
			if (!slider.playing) {
	      slider.play();
	    }
		}
  });

  $('#industry-slide').flexslider({
    animation: "fade",
    controlNav: false,
    animationLoop: false,
    slideshow: true,

    sync: "#industry-carousel",
		start: function(slider) {
			var activeSlide = slider.currentSlide;
			// console.log(activeSlide);

			$('.in-slide-caption').hide();
			$('.capID_'+activeSlide+'').fadeIn();

		},
		after: function(slider){
			var activeSlide = slider.currentSlide;
			// console.log(activeSlide);

			$('.in-slide-caption').hide();
			$('.capID_'+activeSlide+'').fadeIn();

			if (!slider.playing) {
	      slider.play();
	    }
		}
  });

	// Industry Slide Thumbnail Holder
	setInterval(function(){
		var industrySlideHeight = $('.industry-slide').height();
		$('.in-if-left-holder').css('min-height', industrySlideHeight);
	},100);

	// Industry Desktop Sns share
	$('.share-desktop-holder').mouseenter(function(){
		$('.share-desktop-list').stop(true, false).slideDown(300);
	}).mouseleave(function(){
		$('.share-desktop-list').stop(true, false).slideUp(300);
	});

	// Industry Mobile Sns share
	$('.share-mobile-btn').click(function(e){
		e.preventDefault();
		$(this).next('.share-mb-list').stop(true, false).slideToggle(300);
	});

});

// Hide Loading
$(window).scroll(function(){
	var footerHeight = $('footer').outerHeight();
	if($(window).scrollTop() + $(window).height() == $(document).height()) {
    $('.loading').removeClass('active');
  }

});

// Navigation Animate on Scroll
var lastScrollTop = 0;
$(window).scroll(function(event){
  var st = $(this).scrollTop();
  if (st > lastScrollTop){
		$('header').addClass('down');
    $('header').removeClass('up');

	} else if ($(window).scrollTop() == 0){
		$('header').addClass('down');
		$('header').removeClass('up');

	} else {
		$('header').addClass('up');
    $('header').removeClass('down');
  }
  lastScrollTop = st;
});

// preloader once done
Pace.on('done', function() {
	// totally hide the preloader especially for IE
	setTimeout(function() {
		$('.pace-inactive').hide();
	}, 700);

	if(Modernizr.touch === false) {
		$.stellar({
			responsive:1,
			hideDistantElements: false,
		});
	}
});

// lazyload
$('.stories-container .lazyload, .insight-container .lazyload').lazyload({load: function(){
	setTimeout(function(){
		$('.gridding').isotope('reloadItems').isotope();
	}, 100);
}});
