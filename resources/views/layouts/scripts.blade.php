<script>
 

  $(function(){
    $('form[data-toggle="validator"]').validator()
  });


  $(function(){

    $('.responsive-tabs').tabCollapse({
      tabsClass: 'hidden-sm-down',
      accordionClass: 'hidden-md-up'
    });

    $('.responsive-tabs-block .panel-group').on('shown.bs.collapse', function (e) {
      var h = $(e.target).prev('.panel-heading').height();
      var header = $('header').height();
      $('html, body').animate({
          scrollTop: $(e.target).offset().top - header - h - 2
      }, 500);
    });
    $('.responsive-tabs-block a[data-toggle="tab"], .responsive-tabs-block a[data-toggle="collapse"]').on('shown.bs.tab shown.bs.collapse', function(e) {
      var players = $(e.target).parents('.responsive-tabs-block').find('video');
      $(players).each(function(i, v) {
        var player = videojs($(v).attr('id')).pause();
      });
    });

    $(document).arrive('video, button.vjs-big-play-button', function() {

      $(this).on('click', function(e) {
        var id = $(this).parent().find('video').attr('id');
        var vid = videojs(id);

        if (vid.paused()){
          vid.play();
        }else {
          $('video').each(function(i,v){
            if(!$(v).is("#"+id))
              videojs($(v).attr('id')).pause();
          });
        }
      });
    })
});

  jQuery(window).trigger('resize').trigger('scroll');

  $(function() {
      $('.section-icon-group .icon-block').matchHeight();

      $('header .full-width-dropdown').each(function(i,v){
        $(v).find('.list-group').parent().matchHeight();
      });
  })

  $(function() {
    $('a[data-scrollTo]').each(function() {
      $(this).click(function(e) {
        $(window).scrollTo(
          $($(this).attr('href')), {
            offset: -80,
            duration: 800
          }
        );
      })
    });
    isMobile = false;
    if (isMobile) {
      $('body').swipe({
        swipeLeft: function(event, direction, distance, duration, fingerCount) {
          $('body').addClass('sidebar-open');
        },
        swipeRight: function(event, direction, distance, duration, fingerCount) {
          if($('.sidebar-submenu').hasClass('collapse in')){
            $('.sidebar-submenu').collapse('hide');
          }else{
            $('body').removeClass('sidebar-open');
          }
        },
        threshold: 1,
        excludedElements: "button, input, select, textarea"
      });
    }

    $('[data-toggle=offcanvas]').click(function() {
      if($('.sidebar-submenu').hasClass('collapse in')){
        $('.sidebar-submenu').collapse('hide');
      }else{
        $('body').toggleClass('sidebar-open');
      }
    });

    // $('.content-shadow').click(function() {
    //   if($('.sidebar-submenu').hasClass('collapse in')){
    //     $('.sidebar-submenu').collapse('hide');
    //   }else{
    //     $('body').toggleClass('sidebar-open');
    //   }
    // });

    $('.wrap').imagesLoaded(function() {
      $('body').addClass('loaded');
    });

    (function($) {
      var windowHeight = $(window).outerHeight();
      var header = $('header').height();
      $('.sidebar-offcanvas').css('max-height', windowHeight);

      $(window).resize(function() {
        $.fn.matchHeight._update();
        var windowHeight = $(window).outerHeight();
        var header = $('header').height();
        $('.sidebar-offcanvas').css('max-height', windowHeight);
      });

      var scrollToTop = $('.back-to-top');

      var topbar  = $('.header-topbar').height();

      $(window).scroll(function(event) {
        var scroll = $(window).scrollTop();

        scrollToTop.click(function(){
          $(window).scrollTop();
        });

        var height = $(window).height() - $('.header').height() - $('.header-topbar').height();
        $("header .dropdown-content-box.mCustomScrollbar").css("max-height", height);
        $("header .dropdown-content-box.mCustomScrollbar #mCSB_2").css("max-height", height);

        if (scroll > 80 || $(window).width() < 610) {
          $('header').addClass("scrolled");
					$('.store_bar').css('top','110px');
          scrollToTop.css('display','block').removeClass('animated zoomOut').addClass('animated zoomIn');
        } else {
          $('header').removeClass("scrolled");
          $('.store_bar').css('top','140px');
          scrollToTop.removeClass('animated zoomIn').addClass('animated zoomOut');
        }

        if(scroll > 80 && $(window).width() < 542 ) {
          $(".dropdown-content-box.mCustomScrollbar #mCSB_2").css('top', '-50px');
        }else {
          $(".dropdown-content-box.mCustomScrollbar #mCSB_2").css('top', '0');
        }
      });

      $(window).on("load", function() {
        // $(".sidebar-offcanvas").mCustomScrollbar({
        //   theme: 'minimal-dark',
        //   autoHideScrollbar: true,
        //   alwaysShowScrollbar: 0
        // });
      });
    })(jQuery);
  });
</script>
