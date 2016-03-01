$(document).ready(function () {
	console.log('start custom js');
	var siteTitle = $('.site-title');
	siteTitle.addClass('animated bounceInLeft');
	setInterval(function () {
        siteTitle.removeClass('bounceInLeft');
    },2000);

    $('.testimonial .item').slick({
    	arrows: false,
    	swipe: false,
    	autoplay: true
    });
	
});