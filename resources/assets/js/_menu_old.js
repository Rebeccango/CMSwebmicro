$(function () {
    //Browse Store Bar
    $('.expand_store_bar').on('click', function () {
        if ($('.store_bar').hasClass('expanded')) {
            $('.store_bar_content.collapse').collapse('hide').on('hidden.bs.collapse', function () {
                $('.store_bar').removeClass('expanded');
            });
        } else {
            $('.store_bar_content.collapse').collapse('show').on('shown.bs.collapse', function () {
                $('.store_bar').addClass('expanded');
            });
        }
    })
    $(document).click(function (e) {
        if (!$(e.target).parents('.store_bar').is('.store_bar') && !$(e.target).is('.expand_store_bar')) {
            if ($('.store_bar').hasClass('expanded')) {
                $('.store_bar').removeClass('expanded');
                $('.store_bar_content.collapse').collapse('hide');
            }
        }
    });

    var closeMenuTimer, openMenuTimer;

    $('.badge').click(function () {
        $('.shoppingcart_dropdown .dropdown-toggle').collapse("toggle");
    })

    $('header .navbar-nav .nav-link[data-toggle="collapse"], header .full-width-dropdown').on('mouseenter',
        function () {
            clearTimeout(closeMenuTimer);
            var t = $(this);

            if ($('.store_bar').hasClass('expanded')) {
                $('.store_bar_content.collapse').collapse('hide').on('hidden.bs.collapse', function () {
                    $('.store_bar').removeClass('expanded');
                });
            }

            openMenuTimer = setTimeout(function () {
                if (!$(t).is('.full-width-dropdown')) {
                    $('header .navbar-nav .nav-link[data-toggle="collapse"]').removeClass('active');
                    $('header .full-width-dropdown').not($(t).attr('href')).collapse('hide');

                    var menu = $($(t).attr('href')).css('height', 'inherit').collapse('show');

                    setTimeout(function () {
                        var h = $(t).attr('href').replace("#", "");
                        $('header .navbar-nav .nav-link[href!="#' + h + '"][data-toggle="collapse"]').removeClass(
                            'active');
                        $('header .full-width-dropdown').not($(t).attr('href')).collapse('hide');
                    }, 200);
                }
                $(t).addClass('active');
            },400)

            $(this).on('mouseleave', function () {
                clearTimeout(openMenuTimer);
            });
        });

    $('header .full-width-dropdown, header .navbar-nav .nav-item a').on('mouseleave', function () {
        clearTimeout(closeMenuTimer);
        closeMenuTimer = setTimeout(function () {
            $('header .navbar-nav .nav-link').removeClass('active');
            $('header .full-width-dropdown').collapse('hide');
        }, 400);
    });

    $('header .navbar-nav .nav-link[data-toggle="collapse"][data-href]').on('click', function () {
        window.location = $(this).data('href');
     })

    $(window).resize(function () {
        updateScrolled();
    });

    $(window).scroll(function (event) {
        updateScrolled(event);
    });

    updateScrolled();

    function updateScrolled(event = null) {

        if(event != null){
            if (event.originalEvent.wheelDelta >= 0) {
                console.log('Scroll up');
            }
            else {
                console.log('Scroll down');
            }
        }

        if ($(window).scrollTop() > 80) {
            $('body').addClass("scrolled");
            $(".back-to-top").css('display', 'block').removeClass('animated zoomOut').addClass('animated zoomIn');
        }else {
            $('body').removeClass("scrolled");
            $(".back-to-top").removeClass('animated zoomIn').addClass('animated zoomOut');
        };
    }
});




