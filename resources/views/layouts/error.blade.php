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
  <title>
    @yield('title')
  </title>
  <meta name='description' content='{{config('app.name')}}'>
  <meta name='author' content='{{config('app.name')}}'>
  <!--GENERIC STYLING-->
  <link rel="stylesheet" href="{{ mix('css/frontend.css') }}">
  @stack('after-styles')
</head>

<body id="body">
  @yield('body')
  {{-- <script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js"></script> --}}
  <script src="{{mix('js/frontend.js')}}"></script>
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.18/jquery.touchSwipe.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mouse0270-bootstrap-notify/3.1.7/bootstrap-notify.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.js"></script> --}}
</body>

</html>