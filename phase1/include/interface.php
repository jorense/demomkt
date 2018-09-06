<!-- Logo & Header -->
<a href="index.php?lang=<?php echo $lang; ?>">
    <div class="logo shadow default_show active">
        <img src="img_asset/logo-white.svg" />
    </div>
</a>
<div class="header shadow default_show active">
	<ul>
        <?php echo $header_menu; ?>
    	<a href="javascript:void(0);"><li class="open_side"><i class="fa fa-bars"></i></li></a>
    </ul>
</div>

<!-- Logo & Header (Wedding) -->
<a href="wedding.php?lang=<?php echo $lang; ?>">
    <div class="logo default_show active wedding grow">
        <img class="white" src="img_asset/wedding-logo-white.svg" />
        <div class="color">
	        <img src="img_asset/wedding-logo-color.svg" />
        </div>
    </div>
</a>
<div class="header default_show active wedding">
	<ul>
		<?php echo $wedding_header; ?>
    	<a href="javascript:void(0);"><li class="open_side grow"><i class="fa fa-bars"></i></li></a>
    </ul>
</div>

<!-- Overlay Cover -->
<div class="overlay default_hidden">
	&nbsp;
</div>

<!-- Side Menu -->
<div class="side shadow default_hidden">
	<a href="javascript:void(0);"><i class="fa fa-chevron-right close"></i></a>
	<div class="wrap scroll_hide_width">
    	<div class="shadow_hide">
            <div class="group">
                <a href="index.php?lang=<?php echo $lang; ?>">
	                <img class="brand" src="img_asset/logo-blue.svg" />
                </a>
                <div class="type_select">
					<?php echo $side_lang; ?>
                </div>
            </div>
        </div>
		<?php echo $side_menu; ?>
    	<div class="shadow_hide">
            <div class="group facebook">
				<div class="fb-page" data-href="<?php echo $fb_plugin; ?>" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="<?php echo $fb_plugin; ?>"><a href="<?php echo $fb_plugin; ?>">H.I.S. (Hong Kong) Co. Ltd.</a></blockquote></div></div>
            </div>
        </div>
    </div>
</div>

<!-- Side Menu (Wedding) -->
<div class="side shadow default_hidden wedding">
	<a href="javascript:void(0);"><i class="fa fa-chevron-right close"></i></a>
	<div class="wrap scroll_hide_width">
    	<div class="shadow_hide">
            <div class="group">
                <a href="wedding.php?lang=<?php echo $lang; ?>">
	                <img class="brand" src="img_asset/wedding-logo-color.svg" />
                </a>
                <div class="type_select">
					<?php echo $wedding_side_lang; ?>
                </div>
            </div>
        </div>
		<?php echo $wedding_side_wedding; ?>
		<?php echo $wedding_side_photo; ?>
		<div class="shadow_hide">
        	<div class="group">
            	<ul>
                	<a class="anchor" href="wedding.php?lang=<?php echo $lang; ?>#about">
                    	<li class="menu_about">
                        	<?php echo $wedding_menu_about; ?>
                            <i class="fa fa-info-circle fa-fw"></i>
                        </li>
					</a>
                    <a class="anchor" href="wedding.php?lang=<?php echo $lang; ?>#guide">
                    	<li class="menu_guide">
                        	<?php echo $wedding_menu_guide; ?>
                            <i class="fa fa-check-square-o fa-fw"></i>
                        </li>
					</a>
                    <a class="anchor" href="wedding.php?lang=<?php echo $lang; ?>#photography">
                    	<li class="menu_photography">
                        	<?php echo $wedding_menu_photo; ?>
                            <i class="fa fa-camera-retro fa-fw"></i>
                        </li>
					</a>
                    <a class="anchor" href="wedding.php?lang=<?php echo $lang; ?>#faq">
                    	<li class="menu_faq">
                        	<?php echo $wedding_menu_faq; ?>
                            <i class="fa fa-question-circle fa-fw"></i>
                        </li>
                    </a>
                </ul>
            </div>
        </div>
		<div class="shadow_hide">
        	<div class="group">
            	<ul>
                	<a href="contact.php?lang=<?php echo $lang; ?>">
                    	<li>
                        	<?php echo $wedding_menu_contact; ?>
                            <i class="fa fa-comments-o fa-fw"></i>
                        </li>
					</a>
                    <a href="index.php?lang=<?php echo $lang; ?>">
                    	<li>
                        	<?php echo $wedding_menu_home; ?>
                            <i class="fa fa-home fa-fw"></i>
                        </li>
                    </a>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Notification -->
<?php
	if($notification!='') {
		$notification .= '
			<a href="javascript:void(0);">
				<li class="shadow grow dismiss">
					<i class="fa fa-times-circle"></i> ' . $notification_dismiss . '
				</li>
			</a>
			<div class="clear"></div>
		';
	}
?>
<div class="notification">
	<ul>
    	<?php echo $notification; ?>
    </ul>
</div>

<!-- Async -->
<div class="async"></div>

<script type="text/javascript">
	// Mobile starting width
	function mobileThreshold() {
		var mobileThreshold = 1000
		return mobileThreshold;
	}

	// Parallax
	function parallax(){
		var parallax = document.getElementById('parallax');
		parallax.style.top = (window.pageYOffset / -2.5)+'px';
	}
	window.addEventListener("scroll", parallax, false);

	// Detect scrollbar width
	function scrollbarWidth() {
		// Create the measurement node
		var scrollDiv = document.createElement("div");
		scrollDiv.className = "scrollbar-measure";
		document.body.appendChild(scrollDiv);
		
		// Get the scrollbar width
		var scrollbarWidth = scrollDiv.offsetWidth - scrollDiv.clientWidth + 1;
		
		// Delete the DIV 
		document.body.removeChild(scrollDiv);
		
		return scrollbarWidth;
	}
	
	// Enable transition 
	function enableTransition() {
		$("body").removeClass("no_transition");
	}
	
	// Horizontal scroll
	function hScroll() {
		if (navigator.appVersion.indexOf("Win")!=-1) {
			var scrollSpeed = 50;
		}
		else {
			var scrollSpeed = 1;
		}
		$(".horizontal_scroll").mousewheel(function(event, delta) {
			this.scrollLeft -= (delta * scrollSpeed);
			event.preventDefault();
		});
	}
	
	function closeInterface() {
		$(".default_hidden").removeClass("active");
		$(".default_show").addClass("active");
	}
	
	function openSide() {
		$(".overlay, .side").addClass("active");
		$(".header, .logo").removeClass("active");
	}
	
	function getWindowWidth() {
		var windowWidth = $(window).width();
		return windowWidth;
	}

	function getWindowHeight() {
		var windowHeight = $(window).height();
		return windowHeight;
	}
	
	function getDocumentHeight() {
		var documentHeight = $(document).height();
		return documentHeight;
	}
	
	// Notification
	function openNotification() {
		$(".notification li").addClass("active");
		$(".notification li.dismiss").addClass("active");
	}
	function closeNotification() {
		$(".notification li").removeClass("active");
		$(".notification li.dismiss").removeClass("active");
	}
	
	// Toggle Page scoll
	function pageScroll() {
		$("body").toggleClass("no_scroll");
	}

	// Force page scroll
	function ensureScroll() {
		$("body").removeClass("no_scroll");
	}
	
	// Set form field default
	function formDefault() {
		$(".set_default").each(function() {
			var currentValue = $(this).val();
			var defaultValue = $(this).attr("data-default-value");
			if(currentValue!='') {
				$(this).addClass("active");
			}
			else {
				$(this).val(defaultValue);
			}
		});
	}
	
	// Clear form default
	function formFocus(field) {
		var defaultValue = $(field).attr("data-default-value");
		var currentValue = $(field).val();
		if(defaultValue==currentValue) {
			$(field).val("");
			$(field).addClass("active");
		}
	}
	
	// Check form on blur
	function formBlur(field) {
		var defaultValue = $(field).attr("data-default-value");
		var currentValue = $(field).val();
		if(currentValue=="") {
			$(field).val(defaultValue);
			$(field).removeClass("active");
		}
	}
	
	// Check dropdown state
	function dropdownState(field) {
		var defaultValue = $(field).attr("data-default-value");
		var currentValue = $(field).find('option:selected').text();
		if(defaultValue!=currentValue) {
			$(field).addClass("active");
		}
		else {
			$(field).removeClass("active");
		}
	}
	
	// Shrink Logo
	function shrinkLogo() {
		var trigger_pos = $(window).height() * 0.25;
		var current_pos = $(window).scrollTop();
		if(current_pos >= trigger_pos) {
			$(".logo").addClass("min");
			
			// Wedding 
			if($("body").hasClass("wedding")) {
				$(".logo.wedding, .header.wedding").addClass("scroll");
				$(".logo.wedding, .header.wedding").addClass("shadow");
				$(".logo.wedding, .header.wedding li").removeClass("grow");
			}
		}
		else {
			$(".logo").removeClass("min");
			
			// Wedding 
			if($("body").hasClass("wedding")) {
				$(".logo.wedding, .header.wedding").removeClass("scroll");
				$(".logo.wedding, .header.wedding").removeClass("shadow");
				$(".logo.wedding, .header.wedding li").addClass("grow");
			}
		}
	}
	
	// Match card height 
	function matchCard(element, status, moreHeight) {
		var maxHeight = -1;
		
		$(element).each(function() {
			$(this).css("height", "auto");
			currentHeight = $(this).height();
			maxHeight = maxHeight > currentHeight ? maxHeight : currentHeight;
		});
		
		if(status == 'load') {
			extraHeight = moreHeight;
		}
		else if (status == 'resize') {
			// Fix for safari so it will stop continuously add 60px to the div on resize
			if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {
				extraHeight = 0;
			}
			else {
				extraHeight = moreHeight;
			}
		}
		
		$(element).each(function() {
			$(this).height(maxHeight + extraHeight);
		});
	}
	
	// Footer 
	function footerSink() {
		$("body").removeClass("sink");
		var contentHeight = $(".content").outerHeight(true)
		var contentTop = $(".content").position().top;
		var contentBottom = contentHeight + contentTop;
		if(contentBottom<getWindowHeight()) {
			$("body").addClass("sink");
			if(contentTop>60) {
				var newContentHeight = (getWindowHeight() - contentHeight) + contentHeight;
				$(".content").height(newContentHeight);
			}
		}
		else {
			$("body").removeClass("sink");
		}
	}
	
	// Destination Menu
		// Set menu height
		function overlayBoxHeight(target) {
			$(target).height("");
			var normalHeight = $(target).height();
			var maxHeight = getWindowHeight() *0.8;
			if(normalHeight>maxHeight) {
				$(target).height(maxHeight);
			}
			else {
				$(target).height(normalHeight);
			}
		}
		
		// Open Menu
		function openDestination(target, input) {
			// Disable scroll
			pageScroll();
			
			// Activate
			$(target).addClass("active");
			$(".overlay").addClass("active");
			
			// Set text and value
			var currentValue = $(input).val();
			var place = target + " li";
			$(place).each(function() {
				var text = $(this).attr("data-text");
				if(text==currentValue) {
					$(this).addClass("active");
				}
				else {
					$(this).removeClass("active");
				}
				$(this).find("span").text(text);
			})
			
			// Set height
			overlayBoxHeight(".destination.overlay_wrap .box");
		}
		
		// Make Selection
		function selectDestination(selection, parent) {
			var text = $(selection).attr("data-text");
			var value = $(selection).attr("data-value");
			var type = $(selection).attr("data-type");
			
			var inputText = parent + " input.text";
			var inputVisible = parent + " input.set_default";
			var inputValue = parent + " input.value";
			var inputType = parent + " input.type";
			
			$(inputText).val(text);
			$(inputValue).val(value);			
			$(inputType).val(type);
			
			$(inputVisible).val(text);
			$(inputVisible).addClass("active");
			
			pageScroll();
			closeInterface();		
		}
	
	// Open search options
	function openSearch() {
		$(".search_option").toggleClass("active");
	}
	
	// No transition for datetimepicker
	function dateTransition() {
		$(".xdsoft_").addClass("no_transition");
	}
	
	// Force overlay-wrap to the size of window (so it displays properly on iphone...)
	function overlayWrapSize() {
		$(".overlay_wrap").width(getWindowWidth());
		$(".overlay_wrap").height(getWindowHeight());
	}
	
	// Clear default and submit form for parsley
	function clearSubmitForm(form) {
		var targetField = form + " .clear_parsley";
		$(targetField).each(function() {
			var defaultValue = $(this).attr("data-default-value");
			var currentValue = $(this).val();
			if(currentValue==defaultValue) {
				$(this).val("");
			}
		});
		$(form).submit();
	}
	
	// Scroll to anchor
	function scrollToAnchor(aid){
		var aTag = $("a[name='"+ aid +"']");
		$('html,body').animate({scrollTop: aTag.offset().top},'slow');
	}
	
	// Format number with comma
	function ReplaceNumberWithCommas(num) {
		//Seperates the components of the number
		var n= num.toString().split(".");
		//Comma-fies the first part
		n[0] = n[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		//Combines the two sections
		return n.join(".");
	}
	
	// Disable default value for prefilled fields
	function preFill() {
		$(".prefill").addClass("active");
		$(".prefill").addClass("set_default");
		$(".prefill").removeClass("prefill");
	}
	
	// Mail queue
	function mailQueue() {
		$(".async").load('mail_queue.php?lang=en');
	}
	
	// Wedding menu anchor
	function weddingMenu() {
		if($("body").hasClass("wedding") && $("body").hasClass("landing")) {
			$(".side.wedding a.anchor").each(function() {
				$(this).attr("href", "javascript:void(0);");
			});
			$(".footer.wedding a.anchor").each(function() {
				$(this).attr("href", "javascript:void(0);");
			});
		}
	}
	
	$(document).ready(function(){
		formDefault();
		hScroll();
		dateTransition();
		overlayWrapSize();
		preFill();
		weddingMenu()
		
		// mail queue
		mailQueue();
		window.setInterval(function(){
			mailQueue();
		}, 10000);
		
		// use setTimeout() to execute
		setTimeout(footerSink, 1000)
		
		// Notification
		setTimeout(function() {
			openNotification();
		}, 2000)
		setTimeout(function() {
			closeNotification();
		}, 7000)
		$(".notification li").click(function() {
			$(this).removeClass("active");
		});
		$(".notification li.dismiss").click(function() {
			$(".notification li").removeClass("active");
		});
		
		// Form focus
		$(".set_default").focus(function() {
			formFocus(this)
		});
		
		// Form blur
		$(".set_default").blur(function() {
			formBlur(this)
		});
		
		// Check drop down state on change
		$(".drop_down select").change(function() {
			dropdownState(this);
		});
		
		// Hide Scrollbar (vertical)
		var scrollWidth = 'calc(100% + ' + scrollbarWidth() + 'px)';
		$('.scroll_hide_width').each(function() {
            $(this).css('width', scrollWidth);
        });
		
		// Hide Scrollbar (horizontal)
		var scrollWidth = 'calc(100% + ' + scrollbarWidth() + 'px)';
		$('.scroll_hide_height').each(function() {
            $(this).css('height', scrollWidth);
        });
		
		// Close stuff with overlay cover
		$(".overlay, .close").click(function() {
			pageScroll();
			closeInterface();
		});
		
		// Open Side Menu
		$(".open_side").click(function() {
			pageScroll();
			openSide();
		});
		
		// Checkbox
		$("input.real_box").on("change", function() {
			$(this).closest("label.checkbox").toggleClass("active");
		});
		
		// Open Search Options
		$(".toggle_search").click(function() {
			openSearch();
		});

	});
	
	$(window).load(function(){
		enableTransition();
		dateTransition()
		
		// use setTimeout() to execute
		setTimeout(footerSink, 1000);
	});
	
	$(window).resize(function() {
		footerSink();
		overlayWrapSize();
	});
	
	// Scroll
	$(window).on("scroll touchmove", function() {
		shrinkLogo();
	});
	
	// Date Picker
	$.datetimepicker.setLocale('<?php echo $datepicker_locale; ?>');
	jQuery('.datepicker').datetimepicker({
		timepicker: false, // hide time picker
		minDate: '-1970/01/01', // today is minimum date
		format:'Y-m-d', // date format
		scrollInput: false
	});
	jQuery('.datepicker_nomin').datetimepicker({
		timepicker: false, // hide time picker
		format:'Y-m-d', // date format
		scrollInput: false
	});
</script>