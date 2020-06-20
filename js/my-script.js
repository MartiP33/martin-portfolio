$(function () {

    /*     $(window).resize(function () {
    
            //  Da se custom image prilagodi parentu
            $(".wp-custom-header > img").css("width", ($(".custom-img-container").width()).toString() + "px");
            $(".wp-custom-header-video").css("width", ($(".custom-img-container").width()).toString() + "px");
        });
        $(window).resize(); */

    $(window).scroll(function () {

        //  Da je header transparent ce je gor pa dobi background color ce user poskrola dol cez landing screen
        if ($(window).scrollTop() < $(window).height()) {
            $(".site-header").addClass('transparent-background');
        }
        else $(".site-header").removeClass('transparent-background');
    });
    $(window).scroll();

    //  Da je tko kukr v CODu na k izbiras med warzone pa multiplayer
    $("#left_service").hover(function () {
        $("#left_service").removeClass('not-active');
        $("#right_service").addClass('not-active');
    }, function () { });

    $("#right_service").hover(function () {
        $("#left_service").addClass('not-active');
        $("#right_service").removeClass('not-active');
    }, function () { });

});