var $ = jQuery;

function videoControls(){
	var $videoSlides = $('.vj_video__slide'),
		$videoControls = $('.vj_video button');

	// play/pause features for individual video slides
	$videoSlides.on('click', function(){
		var $video = $(this).children('video').get(0),
			$text = $(this).children('.vj_video__slide--text'),
			$container = $(this).parent(),
			$containerOffset = $(this).offset().top;

		$text.toggle();
		$videoControls.toggle();

		if ( $video.paused ) {
			$video.play();
		} else {
			$video.pause();
		}

		$(window).scroll(function(){
			if ( $(window).scrollTop() > $containerOffset ) {
				$video.pause();
				$text.show();
				$videoControls.show();
			}
		});
	});
}

function videoCarousel() {
	var $videoSlides = $('.vj_video__slide'),
		$videoControls = $('.vj_video button'),
		$videoControlsLeft = 'vj_video__controls--leftnav',
		$videoControlsRight = 'vj_video__controls--rightnav';

		function previousSlide(){
			var $currentSlide = $('.vj_video__slide:first'),
				$width = $currentSlide.width(),
				$previousSlide = $('.vj_video__slide:last');

				$previousSlide.css({marginLeft: -$width})
			    $currentSlide.before($previousSlide);
			    $previousSlide.animate({marginLeft: 0}, 500, function(){
			    	// does binding this do anything?
			    });
		}

		function nextSlide(){
		    var $currentSlide = $('.vj_video__slide:first'),
		    	$width = $currentSlide.width();
		    
		    $currentSlide.animate({marginLeft: -$width}, 500, function(){
		      var $lastSlide = $('.vj_video__slide:last');

		      $lastSlide.after($currentSlide);
		      $currentSlide.css({marginLeft: 0})
		    });
		}

	$videoControls.on('click', function(){						
		if ( $(this).attr('class') == $videoControlsLeft ){	
			previousSlide();
		} else if ( $(this).attr('class') == $videoControlsRight ) {
			nextSlide();
		}
	});
}

function minimizeHeader() {
	$(window).scroll(function(){
		if ( $(window).scrollTop() > 0 ) { 
			$('.vj_header').addClass('minimize');
		} else {
			$('.vj_header').removeClass('minimize');
		}
	});
}

function productImagesNav() {
	$('.vj_product__images--navigation img').on('click',function(){
		var $targetUrl = $(this).attr('src');

		$('.vj_product__images--main').attr('src',$targetUrl);
	});
}

// when to best load this?
$(function(){
	videoControls();
	videoCarousel();
	minimizeHeader();
	productImagesNav();
});