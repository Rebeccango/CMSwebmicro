@php
if(env("APP_ENV") == "production"){
	$ip = request()->ip();
	if (!empty(Cookie::get('uniqueID'))){
	Cookie::queue(Cookie::forever('uniqueID', hash('ripemd160', $ip + uniqid())));
	}
}
@endphp

<!--LATEST JQUERY VERSION-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script> -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<script src="{{asset('js/funcs.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/css/tether.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/css/tether-theme-basic.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/css/tether-theme-arrows.min.css" />

<script src="{{asset('js/moment.js')}}"></script>
{{-- 3.6.1 --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.print.css" media="print"
	rel="stylesheet">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
	integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
	integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- Latest compiled and minified CSS -->
{{--
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="sha384-2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj"
 crossorigin="anonymous"> --}}

<!-- Latest compiled and minified JavaScript -->
{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="sha384-VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU"
 crossorigin="anonymous"></script> --}}


<!--FONTS-->
<link href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" rel="stylesheet" />
<script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
<link
	href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic'
	rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700&subset=latin-ext" rel="stylesheet">
<link
	href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
	rel="stylesheet">
<!--NORMALIZE-->
<link href='https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css' rel='stylesheet'>

<!--HOVER-->
{{--
<link href='{{asset('css/hover.css')}}' rel='stylesheet'> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.1.1/css/hover-min.css" />

<!--ANIMATE-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

<!--TEXT ROTATOR-->
<script src='{{asset('js/simpletextrotator/simpletextrotator.min.js')}}'></script>
<link href='{{asset('js/simpletextrotator/simpletextrotator.css')}}' rel='stylesheet'>

<!--MAGNIFIC POPUP-->
<link href='{{asset('js/magnificpopup/magnific-popup.css')}}' rel='stylesheet'>
<script src='{{asset('js/magnificpopup/magnific-popup.min.js')}}'></script>

<!--PARALLAX-->
{{-- <script src="{{asset('js/parallax/v2/dist/jquery.parallax.min.js')}}"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax.js/1.4.2/parallax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js"></script>
<!--SMOOTH SCROLL-->
<!-- <script src='https://cmswebapp.azurewebsites.net/js/smooth-scroll.js'></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>

<!--SUCCINCT(TRUNCATE)-->
<script src='{{asset('js/succinct/jQuery.succinct.min.js')}}'></script>

<!--MODERNIZR-->
<script src='https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js'></script>

<!--BOOTSTRAP SCROLL-->
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css" />
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js">
</script>
{{-- <script src='{{asset('js/simplr.smoothscroll.js')}}'></script> --}}

<!--TETHER-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/css/tether.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/css/tether-theme-arrows.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/css/tether-theme-basic.min.css" />

<!--GENERIC STYLING-->
<link href='{{asset('css/main.css')}}?version=4' rel='stylesheet'>

<!--OTHER SCRIPTS-->
<script src="{{asset('js/detectMobileBrowser.js')}}"></script>
{{-- <script src="{{asset('js/jqBootstrapValidation.js')}}"></script> --}}
<script src="https://unpkg.com/isotope-layout@3.0/dist/isotope.pkgd.min.js"></script>
<script src="https://npmcdn.com/imagesloaded@4.1/imagesloaded.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.18/jquery.touchSwipe.min.js"></script>
<script src="{{asset('js/appear.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/arrive/2.4.1/arrive.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Flowtype.js/1.1.0/flowtype.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/textillate/0.4.0/jquery.textillate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.7.0/jquery.lettering.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/FitText.js/1.2.0/jquery.fittext.min.js"></script>

<!-- <link rel="stylesheet" href="/styles/creativeButtons/buttonEffects.css">
<link rel="stylesheet" href="/styles/creativeButtons/linkEffects.css"> -->

<!--SWIPER-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.2/js/swiper.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.2/css/swiper.min.css" />
<script src="{{asset('js/matchHeight.js')}}"></script>

{{--
<link href="https://vjs.zencdn.net/6.6.3/video-js.css" rel="stylesheet">
<!-- If you'd like to support IE8 -->
<script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script> --}}

<link href="https://vjs.zencdn.net/7.0.3/video-js.css" rel="stylesheet">

<!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
{{-- <script src="http://vjs.zencdn.net/ie8/ie8-version/videojs-ie8.min.js"></script> --}}

<script src="{{asset('js/tabcollapse.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>

<script src="{{asset('js/dotdotdot.js')}}"></script>


<link rel="stylesheet" href="{{asset('js/calendar/monthly.css')}}">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

<!-- Latest compiled and minified CSS -->
{{--
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/bootstrap-select.min.js"></script> --}}

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<link rel="stylesheet" href="{{asset('js/jssocials/jssocials.css')}}">
<link rel="stylesheet" href="{{asset('js/jssocials/jssocials-theme-minima.css')}}">
<script src="{{asset('js/jssocials/jssocials.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/shorten.1.0.js')}}"></script>

<link rel="stylesheet" href="{{asset('js/swipebox-master/src/css/swipebox.min.css')}}">
<script type="text/javascript" src="{{asset('js/swipebox-master/src/js/jquery.swipebox.min.js')}}"></script>

<!-- DATATABLES -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
<!-- DATATABLES BUTTONS -->
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.bootstrap4.min.css">
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap4.min.js"></script>
<!-- DATATABLES OTHER -->
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/vfs_fonts.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/scroller/1.5.0/css/scroller.bootstrap4.min.css">
<script src="https://cdn.datatables.net/scroller/1.5.1/js/dataTables.scroller.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/rowgroup/1.0.3/css/rowGroup.dataTables.min.css">
<script src="https://cdn.datatables.net/rowgroup/1.0.3/js/dataTables.rowGroup.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/select/1.2.6/css/select.bootstrap4.min.css">
<script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
<!-- DATATABLES RESPONSIVE -->
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.2/css/responsive.bootstrap4.min.css">
<script src="https://cdn.datatables.net/responsive/2.2.2/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.2/js/responsive.bootstrap4.min.js"></script>


<script src="{{ asset('js/iCheck/icheck.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('js/iCheck/skins/all.css')}}">

<script src="{{asset('js/number.min.js')}}"></script>

<script src="{{asset('js/store/store.js')}}"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>


<script src="{{asset('js/formvalidation-dist-v0.8.1/dist/js/formValidation.min.js')}}"></script>

<script src="{{asset('js/formvalidation-dist-v0.8.1/dist/css/formValidation.min.css')}}"></script>

<script src="{{asset('js/formvalidation-dist-v0.8.1/dist/js/framework/bootstrap.min.js')}}"></script>

<script src="{{asset('js/formvalidation-dist-v0.8.1/dist/js/framework/bootstrap4.min.js')}}"></script>

<!-- Google Tag Manager -->

<script>
	(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

})(window,document,'script','dataLayer','GTM-KWL7TJ');
</script>

<!-- End Google Tag Manager -->

<script>
	var CaptchaCallback = function () {
		$('.g-recaptcha').each(function (index, el) {
			var id = grecaptcha.render(el, {
				'sitekey': '{{env('
				RECAPTCHA_KEY ')}}',
				'callback': function (response) {
					$('input[data-captchaid="' + id + '"]').val(response);
				}
			});
			$(el).prev('.recaptcha_validate').attr('data-captchaid', id);
		});
	};
	$(function () {
		var CaptchaCallback = function () {
			$('.g-recaptcha').each(function (index, el) {
				var id = grecaptcha.render(el, {
					'sitekey': '{{env('
					RECAPTCHA_KEY ')}}',
					'callback': function (response) {
						$('input[data-captchaid="' + id + '"]').val(response);
					}
				});
				$(el).prev('.recaptcha_validate').attr('data-captchaid', id);
			});
		};


		function verifyCallback(response) {
			var res = response;
			if (res == "" || res == undefined || res.length == 0) {
				console.log(response);
			}
		}
	})


	$(document).ready(function () {
		$('input:not([type=radio])').iCheck({
			checkboxClass: 'icheckbox_flat-blue',
			radioClass: 'iradio_flat-blue',
			increaseArea: '20%' // optional
		});

	//	$('.parallax-window').parallax();
	});

	//NAV TAB HASH
	$(function () {

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
	});
</script>

<script src="https://www.google.com/recaptcha/api.js?onload=CaptchaCallback&render=explicit" async defer></script>

<script>
	$(function () {
		$('.dropdown').find("a, div, span, input").not('.dropdown-toggle').on("click", function (e) {
			e.stopImmediatePropagation();
		});
	})
</script>

<script>
	(function (i, s, o, g, r, a, m) {
		i['GoogleAnalyticsObject'] = r;
		i[r] = i[r] || function () {
			(i[r].q = i[r].q || []).push(arguments)
		}, i[r].l = 1 * new Date();
		a = s.createElement(o),
			m = s.getElementsByTagName(o)[0];
		a.async = 1;
		a.src = g;
		m.parentNode.insertBefore(a, m)
	})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

	ga('create', 'UA-29444763-1', 'auto');
	ga('send', 'pageview');
</script>

<script type="text/javascript">
	(function (a, e, c, f, g, h, b, d) {
		var k = {
			ak: "1069215812",
			cl: "kfWjCMqT-G0QxODr_QM",
			autoreplace: "416-213-0533"
		};
		a[c] = a[c] || function () {
			(a[c].q = a[c].q || []).push(arguments)
		};
		a[g] || (a[g] = k.ak);
		b = e.createElement(h);
		b.async = 1;
		b.src = "//www.gstatic.com/wcm/loader.js";
		d = e.getElementsByTagName(h)[0];
		d.parentNode.insertBefore(b, d);
		a[f] = function (b, d, e) {
			a[c](2, b, k, d, null, new Date, e)
		};
		a[f]()
	})(window, document, "_googWcmImpl", "_googWcmGet", "_googWcmAk", "script");
</script>

<script src="https://www.google.com/recaptcha/api.js?onload=CaptchaCallback&render=explicit" async defer></script>

<script>
	$(function () {
		$('.loading').append($(
			'<div class="sk-circle1 sk-circle"></div>\
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
		<div class="sk-circle12 sk-circle"></div>'
		));
	})
</script>