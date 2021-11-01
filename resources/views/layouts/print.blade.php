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
		<meta property="og:locale" content="en_US">
		<meta property="og:site_name" content="{{config('app.name')}}">
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
		{{-- ADDED META --}} @yield('meta')
		{{-- ADDED IMPORTS --}} @yield('imports')
		@include('layouts.imports')
    <link href='{{asset('css/store.css')}}' rel='stylesheet'>
    <link href='{{asset('css/print.css')}}' rel='stylesheet'>
     @stack('head.style')
  </head>
  {{-- @include('layouts.scripts') --}}
  <main>
    <div class="container-fluid d-flex mt-4 mb-4 text-left">
			<a class="d-inline-block mr-4" href="{{route('store')}}"><img src="{{asset('images/logos/logo.png')}}" width="auto" height="100px" /></a>
      <div class="d-inline-block align-middle">
        <h1 class="align-middle m-0" style="line-height:100px">@yield('print.title')</h1>
      </div>
    </div>
    @yield('body')
  </main>
  </body>
</html>
