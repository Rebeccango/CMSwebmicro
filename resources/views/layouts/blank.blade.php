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
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

})(window,document,'script','dataLayer','GTM-WJZJGZF');
   </script>
   <!-- End Google Tag Manager -->
</head>

<body id="body">
   <!-- Google Tag Manager (noscript) -->

   <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WJZJGZF" height="0" width="0"
         style="display:none;visibility:hidden"></iframe></noscript>

   <!-- End Google Tag Manager (noscript) -->
   <div id="app" style="box-shadow:none;">
      @yield('body')
   </div>
   @stack('before-scripts')
   @stack('after-scripts')

   <script type="text/javascript">
      var APP_URL = {!! json_encode(url('/')) !!}
   </script>

   <script src="https://mktdplp102cdn.azureedge.net/public/latest/js/form-loader.js?v=1.38.1025.0"></script>
   <script language="javascript" type="text/javascript">
      (function (id, f, t, ws, ms_tr_il_08, ms_tr_il_w_01) { var tr = function (cb) { var count = 0; var callback = function () { if (count == 0) { count++; if (w) { w.w(id, t, cb); } } }; var ts = document.createElement('script'); ts.src = ws; ts.type = 'text/javascript'; ts.onload = callback; ts.onreadystatechange = function () { if (this.readyState == 'complete' || this.readyState == 'loaded') { callback(); } }; var head = document.getElementsByTagName('head')[0]; head.appendChild(ts); }; if (typeof ms_tr_il_08 === 'function') { if (ms_tr_il_w_01 === null) { tr(function() { ms_tr_il_08(id, f, t); }); } else { ms_tr_il_w_01.w(id, t, function(websiteVisitedParams) { ms_tr_il_08(id, f, t, websiteVisitedParams); }); } } else { tr(); }})('uKpTjoX2Momu5Yp8PhB5usB1bOAnjosUtKgTnWF6HlA', 'https://886fcd5471d940dbb9156315b1a90b90.svc.dynamics.com/f', 'https://886fcd5471d940dbb9156315b1a90b90.svc.dynamics.com/t', 'https://886fcd5471d940dbb9156315b1a90b90.svc.dynamics.com/t/w', typeof ms_tr_il_08 === "undefined" ? null : ms_tr_il_08, typeof ms_tr_il_w_01 === "undefined" ? null : ms_tr_il_w_01);
   </script>
   <script type="text/javascript">
      _linkedin_partner_id = "1579092"; window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || []; window._linkedin_data_partner_ids.push(_linkedin_partner_id); 
   </script>
   <script type="text/javascript">
      (function(){var s = document.getElementsByTagName("script")[0]; var b = document.createElement("script"); b.type = "text/javascript";b.async = true; b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js"; s.parentNode.insertBefore(b, s);})(); 
   </script> <noscript> <img height="1" width="1" style="display:none;" alt=""
         src="https://px.ads.linkedin.com/collect/?pid=1579092&fmt=gif" /> </noscript>
</body>

</html>