(function ($) {

    ('use strict');

    new WOW().init();


    $(window).on('load', function (e) {
        setTimeout(() => {
            $('video').attr('loop','loop');
        }, 15000);
    });
    // scrollToTop
    $(window).scroll(function () {
        if ($(this).scrollTop() > 150) {
            $('.back-to-top').fadeIn(100);
        } else {
            $('.back-to-top').fadeOut(500);
        }
        if ($(this).scrollTop() < 150) {
            $('.navbar').removeClass('py-1').addClass('py-3 opacity-75');
        } else {
            $('.navbar').removeClass('py-3 opacity-75').addClass('py-1');
        }
    });
    $(".back-to-top").on('click', function (e) {
        e.preventDefault();
        $('html, body').animate(
            {
                scrollTop: 0,
            },
            500
        );
        return false;
    });

    function Menu_js() {
        if ($('.submenu').length) {
            $('.submenu > .dropdown-toggle').click(function () {
                let location = $(this).attr('href');
                window.location.href = location;
                return false;
            });
        }
    }
    Menu_js();
})(jQuery);
