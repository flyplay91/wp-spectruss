$(document).ready(function() {
	firstCaseStudyAnimation();

	$(window).on('scroll', doAnimations);
	$(window).trigger('scroll');
	  
	$('body').on('click', '.header-nav .hamburger-nav', function() {
		$('.header-hamburger-menu').addClass('active');
	});

	$('body').on('click', '.hamburger-top img', function() {
		$('.header-hamburger-menu').removeClass('active');
	});
});

var doAnimations = function() {
    
	// Calc current offset and get all animatables
	var homeHeroHeight = $('.home-page .hero').height();
	var remainHomeHeroHeight = $(window).height() - homeHeroHeight;
    var offset = $(window).scrollTop() + $(window).height(),
        $animatables = $('.animatable');
    
    if ($animatables.length == 0) {
      $(window).off('scroll', doAnimations);
    }
    
	var scrollTop = $(window).scrollTop();

	$animatables.each(function(i) {
       	var $animatable = $(this);
		if ($animatable.offset().top + 200 < offset) {
			$animatable.removeClass('animatable').addClass('animated');
			$animatable.find('.casestudy-content').addClass('active');
		}
    });

};

var firstCaseStudyAnimation = function() {
	var homeHeroHeight = $('.home-page .hero').height();
	if ($(window).height() > homeHeroHeight) {
		$('.home-page .first-case-study').removeClass('animatable').addClass('animated');
	}
};