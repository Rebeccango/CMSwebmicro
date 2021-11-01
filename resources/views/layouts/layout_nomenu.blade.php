<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<meta http-equiv="expires" content="-1" />
	<meta http-equiv="pragma" content="no-cache" />
	<meta http-equiv="cache-control" content="max-age=0" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:site_name" content="{{config('app.name')}}">
	<meta property="og:title" content="@yield('title', setting('.title'))">
	<meta property="og:description" content="@yield('description','')" />
	<title>@yield('title') | {!! setting('.title') !!}</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="g-recaptcha-sitekey" content="{{ env('NOCAPTCHA_SITEKEY') }}">
	<meta name='description' content="@yield('description', config('app.description'))">
	<meta name='keywords' content="@yield('keywords', config('app.keywords'))">
	<meta name='author' content="{{config('app.name')}}">
	<link rel="apple-touch-icon" sizes="180x180" href="{{asset('/favi/apple-touch-icon.png')}}">
	<link rel="icon" type="image/png" href="{{asset('/favi/favicon-32x32.png')}}" sizes="32x32">
	<link rel="icon" type="image/png" href="{{asset('/favi/favicon-16x16.png')}}" sizes="16x16">
	<link rel="manifest" href="{{asset('/favi/manifest.json')}}">
	<link rel="mask-icon" href="{{asset('/favi/safari-pinned-tab.svg')}}" color="#3781ef">
	<meta name="apple-mobile-web-app-title" content="{{config('app.name')}}">
	<meta name="application-name" content="{{config('app.name')}}">
	<meta name="theme-color" content="#ffffff">
	{{-- ADDED META --}}
	@yield('meta') @stack('meta-tags')
	{{-- ADDED IMPORTS --}}
	@stack('before-styles')
	<link rel="stylesheet" href="{{ mix('css/frontend.css') }}">
	@stack('after-styles')
	@yield('imports')
	@stack('head')
	<!-- Google Tag Manager -->
	<script>
		(function (w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-WJZJGZF');
	</script>
	<!-- End Google Tag Manager -->

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-29444763-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-29444763-1');
	</script>
	<!-- END Global Site Tag -->

	<!-- BABLIC Translation Script -->
	<script src="//d.bablic.com/snippet/58e5530100df3e3f8e18b8ef.js?version=3.9"></script>
	<!-- END BABLIC Translation Script -->

	<!-- ZoomInfo -->
	<script>
		(function () {
            var zi = document.createElement('script');
            zi.type = 'text/javascript';
            zi.async = true;
            zi.referrerPolicy = 'unsafe-url';
            zi.src = 'https://ws.zoominfo.com/pixel/szFbEQFp0UWJVA5hxEyF';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(zi, s);
          })();
	</script>
	<!-- END ZoomInfo -->
</head>

<body id="body">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WJZJGZF" height="0" width="0"
		 style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<div id="app">
		@yield('header')
		<div class="wrap" style="background:white">
			<main>
				@yield('body')
			</main>
			@if(!(isset($hidechat) && $hidechat == true))
			@include('layouts.footer',array('enableChat'=>true))
			@else
			@include('layouts.footer',array('enableChat'=>false))
			@endif
		</div>
	</div>

	@stack('before-scripts')

	<script src="{{mix('js/frontend.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.18/jquery.touchSwipe.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/mouse0270-bootstrap-notify/3.1.7/bootstrap-notify.min.js">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.js"></script>

	@stack('foot')
	@stack('after-scripts')

	@if(!(isset($hideforms) && $hideforms == true))
	@include('pages.popup')
	@include('layouts.generic_contact_forms')
	@endif

	<script type="text/javascript">
		var APP_URL = {!! json_encode(url('/')) !!}
	</script>

	<!-- ClickDimensions Marketing Script -->
	<script type="text/javascript" src=https://analytics.clickdimensions.com/ts.js> </script> <script
	 type="text/javascript">
		var cdAnalytics = new clickdimensions.Analytics('analytics.clickdimensions.com');
			  cdAnalytics.setAccountKey('au6MyFbxwzEG0aImwLbO6G');
			  cdAnalytics.setDomain('cadmicro.com');
			  cdAnalytics.setScore(typeof(cdScore) == "undefined" ? 0 : (cdScore == 0 ? null : cdScore));
			  cdAnalytics.trackPage();
	</script>
	<!-- END ClickDimensions Marketing Script -->

	<!-- Microsoft Marketing Script -->
	<script src="https://mktdplp102cdn.azureedge.net/public/latest/js/form-loader.js?v=1.38.1025.0"></script>
	<script language="javascript" type="text/javascript">
		(function (id, f, t, ws, ms_tr_il_08, ms_tr_il_w_01) {
		      var tr = function (cb) {
		        var count = 0;
		        var callback = function () {
		          if (count == 0) {
		            count++;
		            if (w) {
		              w.w(id, t, cb);
		            }
		          }
		        };
		        var ts = document.createElement('script');
		        ts.src = ws;
		        ts.type = 'text/javascript';
		        ts.onload = callback;
		        ts.onreadystatechange = function () {
		          if (this.readyState == 'complete' || this.readyState == 'loaded') {
		            callback();
		          }
		        };
		        var head = document.getElementsByTagName('head')[0];
		        head.appendChild(ts);
		      };
		      if (typeof ms_tr_il_08 === 'function') {
		        if (ms_tr_il_w_01 === null) {
		          tr(function () {
		            ms_tr_il_08(id, f, t);
		          });
		        } else {
		          ms_tr_il_w_01.w(id, t, function (websiteVisitedParams) {
		            ms_tr_il_08(id, f, t, websiteVisitedParams);
		          });
		        }
		      } else {
		        tr();
		      }
		    })('uKpTjoX2Momu5Yp8PhB5usB1bOAnjosUtKgTnWF6HlA', 'https://886fcd5471d940dbb9156315b1a90b90.svc.dynamics.com/f',
		      'https://886fcd5471d940dbb9156315b1a90b90.svc.dynamics.com/t',
		      'https://886fcd5471d940dbb9156315b1a90b90.svc.dynamics.com/t/w', typeof ms_tr_il_08 === "undefined" ? null :
		      ms_tr_il_08, typeof ms_tr_il_w_01 === "undefined" ? null : ms_tr_il_w_01);
	</script>
	<!-- END Microsoft Marketing Script -->

	<!-- LinkedIn Partner Script -->
	<script type="text/javascript">
		_linkedin_partner_id = "1579092"; window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || []; window._linkedin_data_partner_ids.push(_linkedin_partner_id);
	</script>
	<script type="text/javascript">
		(function(){var s = document.getElementsByTagName("script")[0]; var b = document.createElement("script"); b.type = "text/javascript";b.async = true; b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js"; s.parentNode.insertBefore(b, s);})();
	</script> <noscript> <img height="1" width="1" style="display:none;" alt=""
		 src="https://px.ads.linkedin.com/collect/?pid=1579092&fmt=gif" /> </noscript>
	<!-- END LinkedIn Partner Script -->

	<!-- ZoomInfo Tracking -->
	<noscript>
		<img src="https://ws.zoominfo.com/pixel/szFbEQFp0UWJVA5hxEyF" width="1" height="1" style="display: none;" />
	</noscript>
	<!-- END ZoomInfo Tracking -->

	<!-- OKTOPOST Tracking -->
	<script>
		(function(a, b, c, d, e, m) {
		       a['OktopostTrackerObject'] = d;
		       a[d] = a[d] || function() {
		             (a[d].q = a[d].q || []).push(arguments);
		       };
		       e = b.createElement('script');
		       m = b.getElementsByTagName('script')[0];
		       e.async = 1;
		       e.src = c;
		       m.parentNode.insertBefore(e, m);
		})(window, document, 'https://static.oktopost.com/oktrk.js', '_oktrk');

		_oktrk('create', '0014uz3euyrj3up');
	</script>
	<!-- END OKTOPOST Tracking -->
</body>

</html>