// Current URL
var url = window.location.href;

// Detect Language
function lang() {
	if(url.indexOf("/en/") != -1) {
		var lang = "en";
	}
	else if(url.indexOf("/sc/") != -1) {
		var lang = "sc";
	}

	return lang;
}

// Add Transition
function enableTransition() {
	$(".transition").each(function() {
		$(this).css( "-o-transition", "all .3s ease-in-out" );
		$(this).css( "-moz-transition", "all .3s ease-in-out" );
		$(this).css( "-webkit-transition", "all .3s ease-in-out" );
		$(this).css( "transition", "all .3s ease-in-out" );
	});
}

// Event RSVP Submit
function eventRSVP() {
	$(".event_registration_loading").addClass("show");

	$.ajax({
		type: "POST",
		url: "phase1/include/ajax.php",
		data: $("form.event_rsvp").serialize(),
		success: function() {
			 // alert(data);

			$(".event_registration_loading .success").addClass("show");

			setTimeout(function() {
				$(".event_registration_loading").removeClass("show");
				$(".event_registration_loading .success").removeClass("show");

				// Clear form fields
				$("form.event_rsvp .should_clear").each(function() {
					$(this).val("");
				});
			}, 2000);
		}
	});
}

// Contact Step 1
function contactStep1(target) {
	$(".contact_us_load").addClass("show");

	$.ajax({
		type: "POST",
		url: "phase1/include/ajax.php",
		data: $(target).serialize(),
		success: function(data) {
			// alert(data);
			$(".contact_us_load .success").addClass("show");

			// Show step 2
			$(target).parents(".contact-form1").css("display", "none");
			$(target).parents(".contact-form1").next(".contact-form2").css("display", "block");

			// Inject new ID into form 2
			$(target).parents(".contact-form1").next(".contact-form2").find(".prev_id").val(data);

			setTimeout(function() {
				$(".contact_us_load").removeClass("show");
				$(".contact_us_load .success").removeClass("show");
			}, 1000);
		}
	});
}

// Contact Step 2
function contactStep2(target) {
	$(".contact_us_load").addClass("show");

	$.ajax({
		type: "POST",
		url: "phase1/include/ajax.php",
		data: $(target).serialize(),
		success: function(data) {
			// alert(data);

			// Show step 1
			$(target).parents(".contact-form2").css("display", "none");
			$(target).parents(".contact-form2").prev(".contact-form1").css("display", "block");

			// Clear Step 1 fields
			$(target).parents(".contact-form2").prev(".contact-form1").find(".should_clear").each(function() {
				$(this).val("");
			});

			$(".contact_us_load .success").addClass("show");
			$(".contact_us_load .success .message").addClass("show");

			setTimeout(function() {
				$(".contact_us_load").removeClass("show");
				$(".contact_us_load .success").removeClass("show");
				$(".contact_us_load .success .message").removeClass("show");

				// Close Widget
				if($(target).hasClass("desktop_widget")) {
					$(target).parents(".contact-us-box").addClass("bounceOutDown");
				}
			}, 2000);

		}
	});
}

// Contact Skip Step 2
function contactSkipStep2(target) {
	$(".contact_us_load").addClass("show");
	$(".contact_us_load .success").addClass("show");
	$(".contact_us_load .success .message").addClass("show");

	setTimeout(function() {
		// Show step 1
		$(target).parents(".contact-form2").css("display", "none");
		$(target).parents(".contact-form2").prev(".contact-form1").css("display", "block");

		// Clear Step 1 fields
		$(target).parents(".contact-form2").prev(".contact-form1").find(".should_clear").each(function() {
			$(this).val("");
		});

		setTimeout(function() {
			$(".contact_us_load").removeClass("show");
			$(".contact_us_load .success").removeClass("show");
			$(".contact_us_load .success .message").removeClass("show");

			// Close Widget
			if($(target).hasClass("desktop_widget")) {
				$(target).parents(".contact-us-box").addClass("bounceOutDown");
			}
		}, 2000);
	}, 500);
}

// Search Query
function searchQuery(target) {
	var keyword = $(target).val();
	window.location.href = baseUrl + lang() + "/search/" + keyword;
}

// D-Infinitum change hash from filters
function diChangeHash(target) {
	var hash = $(target).val();
	location.hash = hash;
}

// D-Infinitum detect hash change and process
function diDetectHashChange() {
	var hash = window.location.hash;
	hash = hash.replace(/[^a-z/-]+/g, ''); // allow only letters - /
	hash = hash.split("/"); // explode into array
	var type = hash[0];
	var location = hash[1];

	if(location!="all" && location!=undefined) {
		switch(type) {
			case "region":
				diFilterRegion(location);
				break;

			case "country":
				diFilterCountry(location);
				break;

			case "city":
				diFilterCity(location);
				break;
		}

		diShowLocation(location);
	}
}

// D-Infinitum filter type region
function diFilterRegion(location) {
	$(".parameter select.region option[data-country=" + location + "]").prop('selected',true);

	// Select Country
	$(".parameter select.country option").prop('selected',false);
	// Select City
	$(".parameter select.city option").prop('selected',false);

	// Show only eligible countries
	$(".parameter select.country option").addClass("disable");
	$(".parameter select.country option[data-region=" + location + "]").removeClass("disable");
	$(".parameter select.country option:first-child").removeClass("disable");

	// Show only eligible cities
	$(".parameter select.city option").addClass("disable");
	$(".parameter select.city option[data-region=" + location + "]").removeClass("disable");
	$(".parameter select.city option:first-child").removeClass("disable");

	$(".parameter select.region > option:first").hide();
	$(".parameter select.country > option:first").show();
	$(".parameter select.city > option:first").show();
}

// D-Infinitum filter type country
function diFilterCountry(location) {
	$(".parameter select.country option[data-country=" + location + "]").prop('selected',true);
	var currentRegion = $(".parameter select.country option[data-country=" + location + "]").attr("data-region");

	// Select Region
	$(".parameter select.region option[data-region=" + currentRegion + "]").prop('selected',true);
	// Select City
	$(".parameter select.city option").prop('selected',false);

	// Show only eligible countries
	$(".parameter select.country option").addClass("disable");
	$(".parameter select.country option[data-region=" + currentRegion + "]").removeClass("disable");
	$(".parameter select.country option:first-child").removeClass("disable");

	// Show only eligible cities
	$(".parameter select.city option").addClass("disable");
	$(".parameter select.city option[data-country=" + location + "]").removeClass("disable");
	$(".parameter select.city option:first-child").removeClass("disable");

	$(".parameter select.region > option:first").hide();
	$(".parameter select.country > option:first").hide();
	$(".parameter select.city > option:first").show();
}

// D-Infinitum filter type city
function diFilterCity(location) {
	$(".parameter select.city option[data-city=" + location + "]").prop('selected',true);
	var currentCountry = $(".parameter select.city option[data-city=" + location + "]").attr("data-country");
	var currentRegion = $(".parameter select.city option[data-city=" + location + "]").attr("data-region");

	// Select Region
	$(".parameter select.region option[data-region=" + currentRegion + "]").prop('selected',true);
	// Select Country
	$(".parameter select.country option[data-country=" + currentCountry + "]").prop('selected',true);

	// Show only eligible countries
	$(".parameter select.country option").addClass("disable");
	$(".parameter select.country option[data-region=" + currentRegion + "]").removeClass("disable");
	$(".parameter select.country option:first-child").removeClass("disable");

	// Show only eligible cities
	$(".parameter select.city option").addClass("disable");
	$(".parameter select.city option[data-country=" + currentCountry + "]").removeClass("disable");
	$(".parameter select.city option:first-child").removeClass("disable");

	$(".parameter select.region > option:first").hide();
	$(".parameter select.country > option:first").hide();
	$(".parameter select.city > option:first").hide();
}

// D-Infinitum show appropriate locations
function diShowLocation(location) {
	$(".di_location").addClass("disable");
	$(".di_location." + location).removeClass("disable");
}

// D-Infinitum clear filters
function diClearFilter() {
	$(".parameter select.region > option:first").show();
	$(".parameter select.country > option:first").show();
	$(".parameter select.city > option:first").show();

	$(".di_location").removeClass("disable");
	$(".parameter select option").removeClass("disable");
	// $(".parameter select option").prop('selected',false);
	// $('.parameter select option:first').prop("selected", true);

	$(".parameter select.region > option:first").prop("selected", true);
	$(".parameter select.country > option:first").prop("selected", true);
	$(".parameter select.city > option:first").prop("selected", true);

	location.hash = "";
}


$(document).ready(function() {
	enableTransition();

	// Event RSVP
	$("form.event_rsvp").on("submit", function (e) {
		e.preventDefault();
		eventRSVP();
	});

	// Search Query
	$('input.search_query').keypress(function (e) {
		if (e.which == 13) {
			searchQuery(this);
		}
	});

	// Contact Form 1
	$("form.contact1").on("submit", function (e) {
		e.preventDefault();
		contactStep1(this);
	});

	// Contact Form 2
	$("form.contact2").on("submit", function (e) {
		e.preventDefault();
		contactStep2(this);
	});

	// Contact Skip Form 2
	$(".skip_step_2").click(function() {
		contactSkipStep2(this);
	});

	// D-Infinitum change hash from filters
	$('.parameter select').on("change", function() {
		diChangeHash(this);
	});

	// D-Infinitum detect hash
	$(window).on("hashchange", function() {
		diDetectHashChange();
	});
	if($("section#main-wrapper").hasClass("p1_global_coverage")) {
		diDetectHashChange();
	}

	// D-Infinitum detect hash
	$('.parameter select').on("change", function() {
		diDetectHashChange();
	});

	// D-Infinitum clear selection
	$(".clear_selection").click(function(e) {
		e.preventDefault();
		diClearFilter();
	});
});

$(window).load(function() {
	enableTransition();
});

$(window).resize(function() {

});

$(window).on("scroll touchmove", function() {

});
