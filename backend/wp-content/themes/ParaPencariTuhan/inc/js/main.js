$(document).ready(function() {
    console.log('start custom js');
    var siteTitle = $('.site-title');
    siteTitle.addClass('animated bounceInLeft');
    setInterval(function() {
        siteTitle.removeClass('bounceInLeft');
    }, 2000);

    $('.testimonial .item').slick({
        arrows: false,
        swipe: false,
        autoplay: true
    });

    $('.ads-mobile').slick({
        autoplay: true
    })
    $('.jilid .item').slick({
        dots: true,
        slidesToShow: 2,
        // variableWidth: true,
        draggable: true,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            }, {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
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
