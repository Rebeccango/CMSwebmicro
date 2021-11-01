<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta http-equiv="expires" content="0" />
  <meta http-equiv="cache-control" content="max-age=0" />
  <meta http-equiv="expires" content="-1" />
  <meta http-equiv="pragma" content="no-cache" />
  <meta http-equiv="cache-control" content="no-cache" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta property="og:locale" content="en_US">
  <meta property="og:site_name" content="{{config('app.name')}}">
  <meta property="og:title" content="@yield('title', Voyager::setting('site.title'))">
  <meta property="og:description" content="@yield('description','')" />
  <title>
    @yield('title') | {!! Voyager::setting('site.title') !!}
  </title>
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
  <meta name="g-recaptcha-sitekey" content="{{ env('NOCAPTCHA_SITEKEY') }}">
  @yield('meta')
  @stack('meta-tags')
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
  <div id="app">
    @include('layouts.menu')
    {{-- <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
      </div> --}}
    <div class="wrap">
      <main>
        @yield('body')
      </main>
      @include('pages.store.footer')
      @include('layouts.footer',array('enableChat'=>true))
    </div>
  </div>
  @stack('before-scripts')
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> --}}
  <script src="{{mix('js/frontend.js')}}"></script>
  <script src="{{mix('js/store.js')}}"></script>
  @stack('foot')
  @stack('after-scripts')
  @include('pages.popup')
  @include('layouts.generic_contact_forms')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
  <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/pdfmake.min.js"></script>
  <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/vfs_fonts.js"></script>
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script> --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.18/jquery.touchSwipe.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/mouse0270-bootstrap-notify/3.1.7/bootstrap-notify.min.js">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.js"></script>
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script> --}}
</body>

</html>