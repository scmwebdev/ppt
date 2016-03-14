$(document).ready(function() {
    console.log('start custom js');
    var siteTitle = $('.site-title');
    siteTitle.addClass('animated bounceInLeft');
    setInterval(function() {
        siteTitle.removeClass('bounceInLeft');
    }, 2000);
    $('#Container').mixItUp();
    $('#video .item').mixItUp();
    $('#the_filter .filter').click(function() {
        $(this).removeClass('active');
        $(this).addClass('active').siblings().removeClass('active');
    });
    $('.testimonial .item').slick({
        arrows: false,
        swipe: false,
        autoplay: true
    });

    $('.ads-mobile').slick({
        autoplay: true
    })
    $('.slickSlider.item').slick({
        slidesToShow: 2,
        // variableWidth: true,
        draggable: true,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 6,
                    slidesToScroll: 3,
                }
            }, {
                breakpoint: 600,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 2
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
});
