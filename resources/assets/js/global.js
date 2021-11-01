$.fn.sectionvh = function () {
  var $this = this;
  $(window).resize(function () {
    maxHeight();
  });

  maxHeight();

  function maxHeight() {
    if ($($this).height() < $(window).height() - $('header').height()) {
      $($this).css('height', $(window).height() - $('header').height());
    }
  }
};

$(function () {

  $('.parallax-section-vh').sectionvh();

  var isMobile = false; //initiate as false
  // device detection
  if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) ||
    /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) isMobile = true;

  // $('video').resizable({
  //   aspectRatio: true,
  //   maxHeight: 300
  // });

  $('.btn-dialog').on("click", function (e) {
    //createContactCaptureForm($(this));

    var type = $(this).data('type');
    var title = $(this).data('title');
    var training = $(this).attr('data-training') != "" ? $(this).data('training') : "";
    var modal = $('#contactModal');

    modal.find('.modal-title').html(title);
    $('#FileFrame').data('src', $('#FileFrame').data('src') + "&type=" + type);
    $('#FileFrame').prop("src", function () {
      return $(this).data("src");
    });

  });

  $('#contactModal').find('form').submit(function () {
    $(this).trigger("reset");
    $(this).resetForm();
  })

  $('iframe').on('load', function () {
    $(this).parents('.modal-body').addClass('loaded');
  });

  $('.modal').on('hidden.bs.modal', function () {
    $(this).find('.modal-body').removeClass('loaded');
  });

  $('.mp-popup-gallery').magnificPopup({
    type: 'image',
    delegate: "a",
    gallery: {
      enabled: true
    }
  });

  $('.mp-popup-video.mp-single').magnificPopup({
    type: 'iframe'
  });

  $('.mp-popup-image.mp-single').magnificPopup({
    type: 'image'
  });

  // $('.parallax-window').parallax();

  //NAV TAB HASH
  var url = document.URL;
  var hash = url.substring(url.indexOf('#'));

  $(".nav-tabs, .nav-pills").find("li a").each(function (key, val) {
    // $('.tab-pane').removeClass('active in');
    if (hash == $(val).attr('href')) {
      $(val).click();
    }
    $(val).click(function (ky, vl) {
      location.hash = $(this).attr('href');
    });
  });

  $('.dropdown').find("a, div, span, input").not('.dropdown-toggle').on("click", function (e) {
    e.stopImmediatePropagation();
  });

  $('.loading').append($('<div class="sk-circle1 sk-circle"></div>\
		<div class="sk-circle2 sk-circle"></div>\
		<div class="sk-circle3 sk-circle"></div>\
		<div class="sk-circle4 sk-circle"></div>\
		<div class="sk-circle5 sk-circle"></div>\
		<div class="sk-circle6 sk-circle"></div>\
		<div class="sk-circle7 sk-circle"></div>\
		<div class="sk-circle8 sk-circle"></div>\
		<div class="sk-circle9 sk-circle"></div>\
		<div class="sk-circle10 sk-circle"></div>\
		<div class="sk-circle11 sk-circle"></div>\
		<div class="sk-circle12 sk-circle"></div>'));
});

// (function (a, e, c, f, g, h, b, d) {
//   var k = {
//     ak: "1069215812",
//     cl: "kfWjCMqT-G0QxODr_QM"
//   };
//   a[c] = a[c] || function () {
//     (a[c].q = a[c].q || []).push(arguments)
//   };
//   a[g] || (a[g] = k.ak);
//   b = e.createElement(h);
//   b.async = 1;
//   b.src = "//www.gstatic.com/wcm/loader.js";
//   d = e.getElementsByTagName(h)[0];
//   d.parentNode.insertBefore(b, d);
//   a[f] = function (b, d, e) {
//     a[c](2, b, k, d, null, new Date, e)
//   };
//   a[f]()
// })(window, document, "_googWcmImpl", "_googWcmGet", "_googWcmAk", "script");

// (function (i, s, o, g, r, a, m) {
//   i['GoogleAnalyticsObject'] = r;
//   i[r] = i[r] || function () {
//     (i[r].q = i[r].q || []).push(arguments)
//   }, i[r].l = 1 * new Date();
//   a = s.createElement(o),
//     m = s.getElementsByTagName(o)[0];
//   a.async = 1;
//   a.src = g;
//   m.parentNode.insertBefore(a, m)
// })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

// ga('create', 'UA-29444763-1', 'auto');
// ga('send', 'pageview');

//TRIGGER SCROLL CLASS
jQuery(window).trigger('resize').trigger('scroll');

$(function () {
  $('[data-toggle="popover"]').popover();
  $('[data-toggle="tooltip"]').tooltip();

  //RESPONSIVE TABS
  $('.responsive-tabs').tabCollapse({
    tabsClass: 'hidden-sm-down',
    accordionClass: 'hidden-md-up'
  });

  //ICON GROUP SECTINO MATCH HEIGHT
  $('.section-icon-group .icon-block').matchHeight();

  $('a[data-scrollTo]').each(function () {
    $(this).click(function (e) {
      $(window).scrollTo(
        $($(this).attr('href')), {
          offset: -$('header').height(),
          duration: 800
        }
      );
    })
  });
});

//MICROSOFT MARKETING FORM CAPTURE
$(function () {
  if (typeof MsCrmMkt != 'undefined') {
    MsCrmMkt.MsCrmFormLoader.afterformrender = function (formPageId, formEvent) {
      var form = $('[data-form-block-id="' + formPageId + '"]');
      $(form).prev('.loaderSpinner, #loaderSpinner').hide();
      // document.getElementById("loaderSpinner").style.display = "none";
    };

    MsCrmMkt.MsCrmFormLoader.onformsubmit = function (formPageId, formEvent) {

      var form = $('[data-form-block-id="' + formPageId + '"] form');
      var formData = $(form).serializeArray();

      $.each(formData, function (i, v) {
        var label = $(form).find('label[for="' + v.name + '"]').html()
        v.label = label;
        var field = $(form).find('[name="' + v.name + '"]');
        if ($(field).is('select')) {
          v.value = $(field).find('option:selected').text()
        }

        if ($(field).attr('type') === 'datetime-local') {
          v.value = moment($(field).val()).format('MMMM Do YYYY, h:mm:ss a')
        }
        if ($(field).attr('type') === 'date') {
          v.value = moment($(field).val()).format('MMMM Do YYYY')
        }
        if (v.label === undefined || v.label === "") {
          delete formData[i];
        }
      });


      formData.push({
        name: "URL",
        value: '<a href="' + window.location.href + '" target="_blank">' + window.location.href + '</a>',
        label: "Page URL:"
      })
      formData.push({
        name: "CreatedOn",
        value: moment(new Date()).format('MMMM Do YYYY, h:mm:ss a'),
        label: "Submitted On:"
      })

      setTimeout(function () {
        if ($('#wlspispHIPErrorContainer').length >= 1) {
          if ($('#wlspispHIPErrorContainer').css('display') == 'none') {
            $.ajax({
              url: APP_URL + "/crm/post",
              type: "POST",
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              data: {
                formdata: formData,
              },
              success: function (result) {
                console.log(result);
              },
              error: function (result) {
                console.log(result);
              }
            });

            form.trigger('reset');
            formData = null;
          }
        } else {
          $.ajax({
            url: APP_URL + "/crm/post",
            type: "POST",
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
              formdata: formData,
            },
            success: function (result) {
              console.log(result);
            },
            error: function (result) {
              console.log(result);
            }
          });

          form.trigger('reset');
          formData = null;
        }
      }, 1000);
    };
  }
});