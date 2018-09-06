function resizes() {
	// Mobile Detail
	if($(window).width() < 992 ){
		// Show Map
		$('.show-map').click(function(event){
			event.stopPropagation();
			var $this = $(this);
			$this.parent().prev().find('.map').addClass('full-map');
			$this.parents('.d-c-list').addClass('pop');
			$('.close-map').show();
			$('body').addClass('locked');
			$('.d-c-list').removeClass('open');
			$('.d-i-detail').stop().slideUp(300);
			$('.mb-expand span').text('Expand Details');
		});

		// Close Map
		$('.close-map').click(function(){
			$('.map').removeClass('full-map');
			$('.d-c-list').removeClass('pop');
			$(this).hide();
			$('body').removeClass('locked');
		});

		// Search Location
		$('.search-location').click(function(){
			$('html,body').animate({ scrollTop: $('.mobile-filter').offset().top - 57 }, 1000);
		});

	} else {
		$('.d-i-d-inner').css('width', 'auto');
	}
}

function detailExpanded() {
	if($(window).width() < 992 ){
		$('.d-i-d-inner').each(function(){
			var width = 0;
			var thisElem = $(this);
			var $this = thisElem.children();

			$this.each(function() {
				width += $(this).outerWidth( true );
			});
			thisElem.css('min-width', width + 1 + 'px');
		});
	} else {
		$('.d-i-d-inner').css('width', 'auto');
	}
}

function expandDetail() {
	// Expand Detail

	$(document).on('click', '.d-c-list', function(event){
		detailExpanded();
		event.stopPropagation();
		var thisParent = $(this);
		var thisElem = $(this).children().find('.map-holder');
		var thisContainer = $(this).children().find('.d-c-l-inner');

		$('.close-map').hide();
		$('.map').removeClass('full-map');
		$('body').removeClass('locked');

		var finalHeight;

		finalHeight = setInterval(function(){
			thisParent.height();
			setTimeout(function(){
				clearInterval(finalHeight);
			}, 300);
		},300);

		console.log(finalHeight);

		if($(window).width() > 991 ){

			if(thisParent.hasClass('open')) {
				$('.map-holder').css({'height':101 }, 0).removeClass('col-md-4').addClass('col-md-5');
				thisElem.css({'height': 492 }, 300).removeClass('col-md-5').addClass('col-md-4');
			} else {
				$('.d-i-detail').stop().slideUp(300);
				thisParent.find('.d-i-detail').stop().slideDown(300);

				$('.d-c-list').removeClass('open');
				thisParent.addClass('open');

				$('.map-holder').animate({'height':101 }, 0).removeClass('col-md-4').addClass('col-md-5');
				thisElem.animate({'height': 492 }, 300).removeClass('col-md-5').addClass('col-md-4');

				$('.d-c-l-inner').removeClass('col-md-8').addClass('col-md-7');
				thisContainer.removeClass('col-md-7').addClass('col-md-8');
			}

		} else {

			if(thisParent.hasClass('pop')) {
				$('html,body').animate({ scrollTop: thisParent.offset().top - 57 }, 1000);
				setTimeout(function(){
					thisParent.removeClass('pop');
				},100);
			}

			if(thisParent.not('.open')) {
				$('.d-c-list').removeClass('open');
				thisParent.addClass('open');

				$('.d-i-detail').stop().slideUp(300);
				thisParent.find('.d-i-detail').stop().slideDown(300);

				$('.mb-expand span').text('Expand Details');
				thisParent.find('.mb-expand span').text('Hide Details');

				$('.d-c-list').unbind('click');
			}

			detailExpanded();
		}
	});

	$('.map').click(function(event){
		detailExpanded();
		event.stopPropagation();
		var thisParent = $(this).parents('.d-c-list');
		var thisElem = thisParent.children().find('.map-holder');
		var thisContainer = thisParent.children().find('.d-c-l-inner');

		$('.close-map').hide();
		$('.map').removeClass('full-map');
		$('body').removeClass('locked');
		if($(window).width() > 991 ){

			if(thisParent.hasClass('open')) {
				$('.map-holder').css({'height':101 }, 0).removeClass('col-md-4').addClass('col-md-5');
				thisElem.css({'height':492 }, 300).removeClass('col-md-5').addClass('col-md-4');
			} else {
				$('.d-i-detail').stop().slideUp(300);
				thisParent.find('.d-i-detail').stop().slideDown(300);

				$('.d-c-list').removeClass('open');
				thisParent.addClass('open');

				$('.map-holder').animate({'height':101 }, 0).removeClass('col-md-4').addClass('col-md-5');
				thisElem.animate({'height':492 }, 300).removeClass('col-md-5').addClass('col-md-4');

				$('.d-c-l-inner').removeClass('col-md-8').addClass('col-md-7');
				thisContainer.removeClass('col-md-7').addClass('col-md-8');
			}

		} else {

			if(thisParent.hasClass('pop')) {
				$('html,body').animate({ scrollTop: thisParent.offset().top - 57 }, 1000);
				setTimeout(function(){
					thisParent.removeClass('pop');
				},100);
			}

			if(thisParent.not('.open')) {
				$('.d-c-list').removeClass('open');
				thisParent.addClass('open');

				$('.d-i-detail').stop().slideUp(300);
				thisParent.find('.d-i-detail').stop().slideDown(300);

				$('.mb-expand span').text('Expand Details');
				thisParent.find('.mb-expand span').text('Hide Details');

				$('.d-c-list').unbind('click');
			}

			detailExpanded();
		}
	});

	// Close Desktop
	$(document).on('click', '.expand-btn', function(event){
		event.stopPropagation();
		var thisParent = $(this).parents('.d-c-list');
		var thisElem = thisParent.children().find('.map-holder');
		var thisContainer = thisParent.children().find('.d-c-l-inner');
		thisParent.removeClass('pop');
		$('.close-map').hide();
		$('.map').removeClass('full-map');
		$('body').removeClass('locked');

		if(thisParent.hasClass('open')) {
			$('.d-i-detail').stop().slideUp(300);
			thisParent.find('.d-i-detail').stop().slideUp(300);

			$('.d-c-list').removeClass('open');
			thisParent.removeClass('open');

			$('.map-holder').animate({'height':101 }, 300).removeClass('col-md-4').addClass('col-md-5');
			thisElem.animate({'height':101 }, 300).removeClass('col-md-4').addClass('col-md-5');

			$('.d-c-l-inner').removeClass('col-md-8').addClass('col-md-7');
			thisContainer.removeClass('col-md-8').addClass('col-md-7');

		} else {
			$('.d-i-detail').stop().slideUp(300);
			thisParent.find('.d-i-detail').stop().slideDown(300);

			$('.d-c-list').removeClass('open');
			thisParent.addClass('open');

			$('.map-holder').animate({'height':101 }, 0).removeClass('col-md-4').addClass('col-md-5');
			thisElem.animate({'height':492 }, 300).removeClass('col-md-5').addClass('col-md-4');

			$('.d-c-l-inner').removeClass('col-md-8').addClass('col-md-7');
			thisContainer.removeClass('col-md-7').addClass('col-md-8');
		}

	});

	// Close Mobile
	$(document).on('click', '.mb-expand', function(event){
		event.stopPropagation();
		var thisParent = $(this).parents('.d-c-list');
		var thisElem = thisParent.children().find('.map-holder');
		var thisContainer = thisParent.children().find('.d-c-l-inner');

		$('.close-map').hide();
		$('.map').removeClass('full-map');
		$('body').removeClass('locked');

		if(thisParent.hasClass('pop')) {
			$('html,body').animate({ scrollTop: thisParent.offset().top - 57 }, 1000);
			setTimeout(function(){
				thisParent.removeClass('pop');
			},100);
		}

		if(thisParent.hasClass('open')) {
			$('.d-c-list').removeClass('open');
			thisParent.removeClass('open');

			$('.d-i-detail').stop().slideUp(300);
			$(this).prev().slideUp(300);

			$('.mb-expand span').text('Expand Details');
			thisParent.find('.mb-expand span').text('Expand Details');

		} else {
			$('.d-c-list').removeClass('open');
			thisParent.addClass('open');

			$('.d-i-detail').stop().slideUp(300);
			$(this).prev().slideDown(300);

			$('.mb-expand span').text('Expand Details');
			thisParent.find('.mb-expand span').text('Hide Details');
		}

		detailExpanded();
	});
}

$(window).resize(function() {
	resizes();
	detailExpanded();
});

$(document).ready(function() {
	if (Modernizr.touch) {
		$('html').addClass('bp-touch');
	}

	resizes();
	expandDetail();
	detailExpanded();


	// Stop Propagation
	$('.d-infinitum-btn, .map-holder').click(function(event){
		event.stopPropagation();
	});

	// Clear Filter
	$('.clear-filter').click(function(event){
		event.preventDefault();
		$('.d-i-sorting .selectpicker option').prop("selected", false).trigger('change');
	});

	// Mobile Filter
	$('.mobile-filter').click(function(){
		$('.mb-menu').addClass('open');
		$('.mobile-cover').fadeIn();
		$('body').addClass('locked');
	});

	// Close Mobile Filter
	$('.close-filter-mobile, .search-location, .mobile-cover').click(function(){
		$('.mb-menu').removeClass('open');
		$('.mobile-cover').fadeOut();
		$('body').removeClass('locked');
	});

	// Close Cover
	$('.cover').click(function(){
		$(this).fadeOut();
	});

	// Mobile Select
	$('.selectpicker').change(function() {
    var $option = $(this).find('option:selected');
    var text = $option.text();
		$('.mobile-filter').html(text);
	});

});

// Click Outside the container
$(document).on("click", function(e) {
  if ($(e.target).is(".no-touch .d-i-sorting") === false) {
    $(".d-i-sorting").removeClass("d-i-shadow");
		$('.cover').fadeOut();
  }
});

// Bootstrap Select click outside the container
$(document).on('click', '.d-infinitum .dropdown-toggle', function(){
	if ($('.bootstrap-select').hasClass('open')) {
		$('.d-i-sorting').addClass('d-i-shadow');
		$('.cover').fadeIn();
	} else {
		$('.d-i-sorting').removeClass('d-i-shadow');
		$('.cover').fadeOut();
	}
});

$(window).load(function() {
	resizes();
});
