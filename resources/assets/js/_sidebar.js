
//SIDEBAR SCRIPT
(function ($) {
    var windowHeight = $(window).outerHeight();
    $('.sidebar-offcanvas').css('max-height', windowHeight);

    $(window).resize(function () {
        $.fn.matchHeight._update();
        var windowHeight = $(window).outerHeight();
        var header = $('header').height();
        $('.sidebar-offcanvas').css('max-height', windowHeight);
    });

    $('.sidebar-submenu, .sidebar-menu').height($(window).height());
   
    $(window).resize(function () {
        $('.sidebar-submenu, .sidebar-menu').height($(this).height());
    });
})(jQuery);