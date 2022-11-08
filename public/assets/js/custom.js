// JavaScript Document

$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    sticky = $('.header');

    if (
        scroll >= 25
    ) {
        sticky.addClass('fixed')
    } else {
        sticky.removeClass('fixed')
    }

});


$('ul.tabs li').click(function() {
    var index = $(this).index();
    $('ul.tabs li').removeClass('active');
    $(this).addClass('active');
    $('.tab_content').removeClass('active');
    $('.tab_content:eq(' + index + ')').addClass('active');
});



$(window).resize(function() {
    var getwidth = $(this).width();
    if (getwidth >= 767) {
        $('.menu').removeAttr('style');
    }
})

$(document).ready(function() {
    $('.banner_slider').slick({
        dots: false,
        infinite: true,
        speed: 1000,
        slidesToShow: 1,
        adaptiveHeight: true
    });
});


$('.testimonial45').slick({
    dots: false,
    infinite: false,
    speed: 1000,
    slidesToShow: 2,
    slidesToScroll: 1,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,

            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
        {
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