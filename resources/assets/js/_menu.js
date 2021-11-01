$(document).on('click scroll', function(event) {
  // If the target is not the container or a child of the container, then process
  // the click event for outside of the container.
  if (
    $(event.target).closest('.mega-dropdown.show .dropdown-content-box')
      .length === 0
  ) {
    if (event.type != "scroll" || (event.type == "scroll" && !$('#body').hasClass('sidebar-open'))) {
      $(
        'header .navbar-nav .nav-link[data-toggle="collapse"].active'
      ).removeClass('active show')
      $('.mega-dropdown.active').collapse('hide')
    }
  }
})

$(function() {
  var tabs = []

  $('header .mega-dropdown .btn-back').click(function() {
    if ($(window).width() <= 990) {
      $(this).attr('href', $(tabs[tabs.length - 1]).attr('href'))

      var tab = tabs.pop()

      var section = tab.parents('.mega-dropdown-section')
      if (section.is('.mega-dropdown-section')) {
        section.find('.nav-tabs .nav-title').removeClass('hidden')
      }

      tab.removeClass('active')
    }
  })

  $('header .nav-link').click(function() {
    var tab = $(this)

    if ($(window).width() <= 990) {
      var back = tab
        .parents('.mega-dropdown')
        .find('.btn-back')
        .first()

      if (tab.is('[role=tab]')) {
        if (tabs.length > 1) {
          if (tab.parent().is($(tabs[tabs.length - 1]).parent())) {
            tabs.pop()
          }
        }

        tabs.push(tab)

        back.attr('href', $(tabs[tabs.length - 1]).attr('href'))

        // console.log(tabs);

        var section = tab.parents('.mega-dropdown-section')
        // if (section.is('.mega-dropdown-section')) {
          section.find('> .nav-tabs .nav-title').addClass('hidden')
          tab.removeClass('hidden');
          $(tab.attr('href')).find('> .nav-tabs .nav-title').removeClass('hidden')
          tab.show()
        // }
      }
    }

    var tab = $(this)
      .parent()
      .find('.nav-link[role=tab][aria-selected=true]')

    if (!$(this).is('[role=tab]')) {
      $(tab).removeClass('active show')
      $($(tab).attr('href')).removeClass('active show')
    } else {
      $($(this).attr('href')).collapse('show')
    }

    $(this).tab('show')
  })

  $('header .nav-link > a').on('click', function(e) {
    window.location = $(this).attr('href')
  })

  $('header .mega-dropdown .dropdown-content-box').overlayScrollbars({
    resize: 'none',
    autoUpdate: true,
    overflowBehavior: {
      x: 'hidden',
      y: 'scroll'
    }
  })

  var closeMenuTimer, openMenuTimer

  $(
    'header .navbar-nav .nav-link[data-toggle="collapse"], header .mega-dropdown'
  )
    .on('mouseenter', function() {
      if ($(window).width() > 990) {
        clearTimeout(closeMenuTimer)
        var t = $(this)
        // openMenuTimer = setTimeout(function() {
        if (!$(t).is('.mega-dropdown')) {
          $(
            'header .navbar-nav .nav-link[data-toggle="collapse"].active'
          ).removeClass('active')
          $('header .mega-dropdown.show')
            .not($(t).attr('href'))
            .collapse('hide')

          var menu = $($(t).attr('href')).collapse('show')
        }
        $(t).addClass('active')
      }
    })
    .click(function(event) {
      if ($(window).width() > 990) {
        event.stopPropagation()
        event.preventDefault()
      }
    })

  $('header .mega-dropdown, header .navbar-nav .nav-item a').on(
    'mouseleave',
    function() {
      if ($(window).width() > 990) {
        clearTimeout(closeMenuTimer)
        closeMenuTimer = setTimeout(function() {
          $('header .navbar-nav .nav-link').removeClass('active')
          $('header .mega-dropdown').collapse('hide')
        }, 1000)
      }
    }
  )

  $(window).resize(function() {
    updateScrolled()
  })

  $(window).scroll(function(event) {
    updateScrolled()
  })

  updateScrolled()

  var previousScroll = 0

  function updateScrolled() {
    var currentScroll = $(this).scrollTop()
    if (currentScroll > previousScroll && currentScroll > 200) {
      // $(
      //   'header .navbar-nav .nav-link[data-toggle="collapse"].active'
      // ).removeClass("active");
      // $(".mega-dropdown.active").collapse("hide");
      $('body').addClass('scrolled-down')
    } else {
      $('body').removeClass('scrolled-down')
    }
    previousScroll = currentScroll

    if ($(window).scrollTop() > 80) {
      $('body').addClass('scrolled')
      $('.back-to-top')
        .css('display', 'block')
        .removeClass('animated zoomOut')
        .addClass('animated zoomIn')
    } else {
      $('body').removeClass('scrolled')
      $('.back-to-top')
        .removeClass('animated zoomIn')
        .addClass('animated zoomOut')
    }
  }


  //OPEN AND CLOSE SIDEBAR
  var openX = 280
  var curX = 0
  var isOpen = false
  if ($('body').hasClass('sidebar-open')) {
    curX = openX
    isOpen = true
    toggleTransformX(0)
  }

  $('[data-toggle=offcanvas]').click(function() {
    if ($('.sidebar-submenu').hasClass('collapse in')) {
      $('.sidebar-submenu').collapse('hide')
    } else {
      $('body').toggleClass('sidebar-moving')
      toggleTransformX()
    }
  })

  $('main').click(function() {
    if ($('body').hasClass('sidebar-open')) {
      if ($('.sidebar-submenu').hasClass('collapse in')) {
        $('.sidebar-submenu').collapse('hide')
      } else {
        $('body').toggleClass('sidebar-moving')
        toggleTransformX()
      }
    }
  })

  function toggleTransformX(duration = 400) {
    if (!isOpen) {
      $('#app').animate(
        {
          x1: 0,
          x2: -openX
        },
        {
          duration: duration,
          easing: 'linear',
          step: function(val) {
            $(this).css('transform', `translateX(${val}px)`)
          },
          done: function() {
            $('body').removeClass('sidebar-moving')
            $('body').addClass('sidebar-open')
            isOpen = true
          }
        }
      )
    } else {
      $('#app').animate(
        {
          x1: -openX,
          x2: 0
        },
        {
          duration: duration,
          easing: 'linear',
          step: function(val) {
            $(this).css('transform', `translateX(${val}px)`)
          },
          done: function() {
            $('body').removeClass('sidebar-moving')
            $('body').removeClass('sidebar-open')
            $('body').addClass('sidebar-closed')
            $('#app').removeAttr('style')
            isOpen = false
          }
        }
      )
    }
  }
})
