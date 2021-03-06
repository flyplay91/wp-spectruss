$(document).ready(function() {
	current_url = $(location).attr('href'),
    split_url = current_url.split("/"),
	last_param = split_url[split_url.length-2];
	if (last_param == 'about') {
		$(window).on('scroll', function() {
			if ($(this).scrollTop() > $('.about-brand-items').offset().top - window.innerHeight * 4 / 5) {
				$('.about-page .about-brand-items').addClass('animating');
			}
		});
	}
	

	firstCaseStudyAnimation();

	$(window).on('scroll', doAnimations);
	$(window).trigger('scroll');
	  
	$('body').on('click', '.header-nav .hamburger-nav', function() {
		$('.header-hamburger-menu').addClass('active');
	});

	$('body').on('click', '.hamburger-top img', function() {
		$('.header-hamburger-menu').removeClass('active');
	});

	$('body').on('click', '.news-nav-block li a', function() {
		$('.news-nav-block li a').removeClass('active');
		$(this).addClass('active');
		var selectedNewsCat = $(this).data('value');
		var ajaxUrl = $('#ajax-url').val();
		$.ajax({
            type: 'POST',
            url: myAjax.ajaxurl,
            data: {
				action: "filter_posts",
				catgory_id: selectedNewsCat
			},
            success: function(data) {
				jsonRes = JSON.parse(data);
				
				var posData = jsonRes[0];
				var linkData = jsonRes[1];
				var imgData = jsonRes[2];
				$('.news-story .news-story-item').remove();
				
				$.each(posData, function(idx, val) {
					// console.log(idx);
					var link = linkData[idx];
					var img = imgData[idx];
					var html = '';
					html += '<div class="news-story-item">';
                        html +=	'<a href="' + link + '">';
                            html +=	'<h2>' + val.post_title + '</h2>';
                                html +=	'<div class="news-story-image">';
                                    html += img;
                                    	html +=	'<label>' + val.post_date + '</label>';
                                html += '</div>';
                                html +=	'<p class="trim-news">' + val.post_excerpt + '</p>';
                                html +=	'<div class="news-story-arrow">';
                                    html += '<p>Go To <b>Story</b></p>';
                                    html += '<img src="http://local.wp-spectruss.com/wp-content/themes/twentytwenty-child/assets/images/right_arrow.png">';
                                html += '</div>';
                            html += '</a>';
						html += '</div>';

						$('.news-story').append(html);
				});
			},
            error: function(x, t, m) {
                
			},
            dataType: "html"
        });
	});

	document.addEventListener( 'wpcf7mailsent', function( event ) {
		window.location.replace('/thank-you');
	}, false );
	
});

var doAnimations = function() {
    
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