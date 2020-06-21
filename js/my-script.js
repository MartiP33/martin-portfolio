$(function () {

    $(window).scroll(function () {

        //  Da je header transparent ce je gor pa dobi background color ce user poskrola dol cez landing screen
        if ($(window).scrollTop() < $(window).height()) {
            $('.site-header').addClass('transparent-background');
        }
        else $('.site-header').removeClass('transparent-background');
    });
    $(window).scroll();

    //  Izbiratelj storitve
    $('.service-inner').hover(function () {
        $(this).addClass('service-active');
        $('.service-inner').not(this).removeClass('service-active');
        $(this).find('.service-description').addClass('service-description-active');
    }, function () {
        $('*').removeClass('service-active');
        $('.service-description').removeClass('service-description-active');
    });

});