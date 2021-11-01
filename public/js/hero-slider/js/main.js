jQuery(document).ready(function($){

	var slidesWrapper = $('.cd-hero-slider');
	//check if a .cd-hero-slider exists in the DOM
	if ( slidesWrapper.length > 0 ) {
		var primaryNav = $('.cd-primary-nav'),
			sliderNav = $('.cd-slider-nav'),
			navigationMarker = $('.cd-marker'),
			slidesNumber = slidesWrapper.children('li').length,
			buttons = $('.cd-slider-button'),
			visibleSlidePosition = 0,
			autoPlayId,
			loopVideo = true,
			autoPlayDelay =  8000;
			//
			// if(slidesNumber > 1) {
			// 	var slidesWrapper = $('.cd-hero-slider').css('cursor','pointer');
			// }

		if (typeof slidesWrapper.data('autoplaydelay') !== 'undefined') {
			autoPlayDelay = slidesWrapper.data('autoplaydelay');
		}

		if (typeof slidesWrapper.data('loopvideo') !== 'undefined') {
			loopVideo = slidesWrapper.data('loopvideo');
		}

		if(slidesNumber <= 1){
			$('.cd-slider-next').addClass('hide');
			$('.cd-slider-prev').addClass('hide');
			$('.cd-slider-nav').hide();
		}

		//upload videos (if not on mobile devices)
		uploadVideo(slidesWrapper);

		//autoplay slider
		setAutoplay(slidesWrapper, slidesNumber, autoPlayDelay);


		maxHeight();

		//on mobile - open/close primary navigation clicking/tapping the menu icon
		primaryNav.on('click', function(event){
			if($(event.target).is('.cd-primary-nav')) $(this).children('ul').toggleClass('is-visible');
		});

		//change visible slide
		sliderNav.on('click', 'li', function(event){
			event.preventDefault();
			var selectedItem = $(this);
			if(!selectedItem.hasClass('selected')) {
				// if it's not already selected
				var selectedPosition = selectedItem.index(),
					activePosition = slidesWrapper.find('li.selected').index();

				if( activePosition < selectedPosition) {
					nextSlide(slidesWrapper.find('.selected'), slidesWrapper, sliderNav, selectedPosition);
				} else {
					prevSlide(slidesWrapper.find('.selected'), slidesWrapper, sliderNav, selectedPosition);
				}

				//this is used for the autoplay
				visibleSlidePosition = selectedPosition;

				updateSliderNavigation(sliderNav, selectedPosition);
				updateNavigationMarker(navigationMarker, selectedPosition+1);
				slidesWrapper.removeClass('autoplay');
				clearInterval(autoPlayId);
				//reset autoplay
				setAutoplay(slidesWrapper, slidesNumber, autoPlayDelay);
			}

		});

		slidesWrapper.swipe({
		  swipeLeft:function(event, direction, distance, duration, fingerCount) {
				if(visibleSlidePosition + 1 < slidesNumber) {
					visibleSlidePosition +=1;
					nextSlide(slidesWrapper.find('.selected'), slidesWrapper, sliderNav, visibleSlidePosition);
				}else{
					visibleSlidePosition = 0;
					prevSlide(slidesWrapper.find('.selected'), slidesWrapper, sliderNav, visibleSlidePosition);
				}

				updateNavigationMarker(navigationMarker, visibleSlidePosition);
				updateSliderNavigation(sliderNav, visibleSlidePosition);

				setAutoplay(slidesWrapper, slidesNumber, autoPlayDelay);
		  },
			swipeRight:function(event, direction, distance, duration, fingerCount) {
				if(visibleSlidePosition - 1 >= 0) {
					visibleSlidePosition -= 1;
					prevSlide(slidesWrapper.find('.selected'), slidesWrapper, sliderNav, visibleSlidePosition);
				}else{
					visibleSlidePosition = slidesNumber - 1;
					nextSlide(slidesWrapper.find('.selected'), slidesWrapper, sliderNav, visibleSlidePosition);
				}

				updateNavigationMarker(navigationMarker, visibleSlidePosition);
				updateSliderNavigation(sliderNav, visibleSlidePosition);

				setAutoplay(slidesWrapper, slidesNumber, autoPlayDelay);
		 },
		 threshold:100
		});


		buttons.on('click', function(event){

			if( $(this).hasClass('cd-slider-next')) {
				visibleSlidePosition +=1;
				nextSlide(slidesWrapper.find('.selected'), slidesWrapper, sliderNav, visibleSlidePosition);
			} else if( $(this).hasClass('cd-slider-prev')) {
				visibleSlidePosition -= 1;
				prevSlide(slidesWrapper.find('.selected'), slidesWrapper, sliderNav, visibleSlidePosition);
			}
			updateNavigationMarker(navigationMarker, visibleSlidePosition);
			updateSliderNavigation(sliderNav, visibleSlidePosition);

			setAutoplay(slidesWrapper, slidesNumber, autoPlayDelay);
		});

		slidesWrapper.on('click', 'li', function(event){
			slidesWrapper.removeClass('autoplay');
			clearInterval(autoPlayId);
		});

		$(window).scroll(function(){
			slidesWrapper.addClass('autoplay');
			setAutoplay(slidesWrapper, slidesNumber, autoPlayDelay);
		});

		$(document).on('click', function (e) {
			if ($(e.target).closest(sliderNav).length === 0  && $(e.target).closest(slidesWrapper).length === 0) {
				if(!slidesWrapper.hasClass('autoplay')) {
					slidesWrapper.addClass('autoplay');
	        setAutoplay(slidesWrapper, slidesNumber, autoPlayDelay);
				}
	    }
		});
	}

	$(window).resize(function(){
		maxHeight();
	})

	function maxHeight(){
			if(slidesWrapper.data('height')){
				slidesWrapper.css('height',slidesWrapper.data('height'));
			}else{
				if(slidesWrapper.height() + $('header').height() > $(window).height()){
					slidesWrapper.css('height', $(window).height() - $('header').height());
				}else{
					slidesWrapper.css('height',"");
				}
			}
	}

	function nextSlide(visibleSlide, container, pagination, n){
		visibleSlide.removeClass('selected from-left from-right').addClass('is-moving').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
			visibleSlide.removeClass('is-moving');
		});

		if(n == 0){
			$('.cd-slider-prev').addClass('hide');

		}else{
			$('.cd-slider-prev').removeClass('hide');
		}

		if(n == slidesNumber - 1){
			$('.cd-slider-next').addClass('hide');
			container.children('li').eq(n).addClass('selected from-right').prevAll().addClass('move-left');
		}else{
			$('.cd-slider-next').removeClass('hide');
			container.children('li').eq(n).addClass('selected from-right').removeClass('move-left').nextAll().removeClass('move-left');
		}



		checkVideo(visibleSlide, container, n);
	}

	function prevSlide(visibleSlide, container, pagination, n){
		visibleSlide.removeClass('selected from-left from-right').addClass('is-moving').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
			visibleSlide.removeClass('is-moving');
		});

		if(n == 0){
			$('.cd-slider-prev').addClass('hide');
		}else{
			$('.cd-slider-prev').removeClass('hide');
		}

		if(n == slidesNumber - 1){
			$('.cd-slider-next').addClass('hide');
		}else{
			$('.cd-slider-next').removeClass('hide');
		}

		container.children('li').eq(n).addClass('selected from-left').removeClass('move-left').nextAll().removeClass('move-left');
		checkVideo(visibleSlide, container, n);
	}

	function updateSliderNavigation(pagination, n) {
		var navigationDot = pagination.find('.selected');
		navigationDot.removeClass('selected');
		pagination.find('li').eq(n).addClass('selected');
	}

	function setAutoplay(wrapper, length, delay) {
		if(wrapper.hasClass('autoplay') && delay > 0) {
			clearInterval(autoPlayId);
			autoPlayId = window.setInterval(function(){autoplaySlider(length)}, delay);
		}
	}

	function autoplaySlider(length) {
		if( visibleSlidePosition < length - 1) {
			nextSlide(slidesWrapper.find('.selected'), slidesWrapper, sliderNav, visibleSlidePosition + 1);
			visibleSlidePosition +=1;
		} else {
			prevSlide(slidesWrapper.find('.selected'), slidesWrapper, sliderNav, 0);
			visibleSlidePosition = 0;
		}
		updateNavigationMarker(navigationMarker, visibleSlidePosition+1);
		updateSliderNavigation(sliderNav, visibleSlidePosition);
	}

	function uploadVideo(container) {
		container.find('.cd-bg-video-wrapper').each(function(){
			var videoWrapper = $(this);
			// if( videoWrapper.is(':visible') ) {
			// if visible - we are not on a mobile device
			var	videoUrl = videoWrapper.data('video'),
				videoPoster = videoWrapper.data('poster'),
				overlay = (videoWrapper.attr('data-overlay') ? videoWrapper.data('overlay') : 'true'),
				video = $('<video ' + (loopVideo ? "loop" : "") +' autoplay muted style="background-image:url('+videoPoster+');"><source src="'+videoUrl+'.mp4" type="video/mp4" /><source  src="'+videoUrl+'.webm" type="video/webm" /></video>');
			video.appendTo(videoWrapper);

			if(overlay == "true"){
				var videoOverlay = $('<div class="background-video-overlay"/>');
				videoOverlay.appendTo(videoWrapper);
			}
			// play video if first slide
			if(videoWrapper.parent('.cd-bg-video.selected').length > 0) {
				var playPromise = video.get(0).play();
				if (playPromise !== undefined) {
					playPromise.then(_ => {
						// Automatic playback started!
						// Show playing UI.
					}).catch(error => {
						// Auto-play was prevented
						// Show paused UI.
					});
				}
			}
		});
	}

	function checkVideo(hiddenSlide, container, n) {
		//check if a video outside the viewport is playing - if yes, pause it
		var hiddenVideo = hiddenSlide.find('video');
		if( hiddenVideo.length > 0 ) hiddenVideo.get(0).pause();

		//check if the select slide contains a video element - if yes, play the video
		var visibleVideo = container.children('li').eq(n).find('video');
		if( visibleVideo.length > 0 ) {
			var playPromise = visibleVideo.get(0).play();
			if (playPromise !== undefined) {
				playPromise.then(_ => {
					// Automatic playback started!
					// Show playing UI.
				}).catch(error => {
					// Auto-play was prevented
					// Show paused UI.
				});
			}
		}
	}

	function updateNavigationMarker(marker, n) {
		marker.removeClassPrefix('item').addClass('item-'+n);
	}

	$.fn.removeClassPrefix = function(prefix) {
		//remove all classes starting with 'prefix'
	    this.each(function(i, el) {
	        var classes = el.className.split(" ").filter(function(c) {
	            return c.lastIndexOf(prefix, 0) !== 0;
	        });
	        el.className = $.trim(classes.join(" "));
	    });
	    return this;
	};
});
