var $ = jQuery.noConflict();

$(document).ready(function () {

    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.scroll_to_top').addClass('active');
        } else {
            $('.scroll_to_top').removeClass('active');
        }
    });

    $('.scroll_to_top').click(function () {
        $("html, body").animate({scrollTop: 0}, "slow");
        return false;
    });

    $(".wrapper_menu .close").on("click", function () {
        $(".wrapper_menu").toggleClass("open");
        $("body, html").removeClass("body_overflow");
    });

    $(".burger_menu").on("click", function () {
        $(".wrapper_menu").toggleClass("open");
        $("body, html").addClass("body_overflow");
    });

    $(document).on("scroll", window, function () {
        if ($(window).scrollTop() > 30) {
            $('header').addClass('header_scroll');
        } else {
            $('header').removeClass('header_scroll');
        }
    });

    $('.js_slider_top').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        prevArrow: $('.prev'),
        nextArrow: $('.next'),
        infinite: false,
        speed: 500,
        fade: true,
        autoplay: true,
        autoplaySpeed: 3000,
    });

    $('input, textarea').focus(function () {
        $(this).parents('.form-group').addClass('focused');
    });

    $('input, textarea').blur(function () {
        var inputValue = $(this).val();
        if (inputValue == "") {
            $(this).removeClass('filled');
            $(this).parents('.form-group').removeClass('focused');
        } else {
            $(this).addClass('filled');
        }
    })

    $(".open-modal").click(function () {
        var modalId = $(this).data("modal");
        var modal = $("#" + modalId);
        modal.fadeIn();
        $("body, html").addClass("body_overflow");
        return false;
    });

    $(document).on("mouseup", ".overlay", function (e) {
        e.preventDefault();
        if (e.target.classList.contains("overlay")) {
            $(".overlay").fadeOut();
            $("body, html").removeClass("body_overflow");
            if ($(window).width() < 991) {
                $("body, html").addClass("body_overflow");
            }
        }
    });

    $(document).on("click", ".close_popup", function () {
        $("body, html").removeClass("body_overflow");
        if ($(window).width() < 991) {
            $("body, html").addClass("body_overflow");
        }

        $(".overlay").fadeOut();
        return false;
    });


    $(' .module__main-menu > ul > li > a').on('click', function () {
        $(this).next('.sub_menu').toggleClass('open');
        $(this).toggleClass('open_nesting');
        return false;
    });

});
