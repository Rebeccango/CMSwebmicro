<!DOCTYPE html>
<html>
  <head>
		<title>
			@yield('title') | {!! Voyager::setting('site.title') !!}
		</title>
		{{-- ADDED META --}} @yield('meta')
		{{-- ADDED IMPORTS --}} @yield('imports')
		{{-- @include('layouts.imports') --}}
    <link href='{{asset('css/store.css')}}' rel='stylesheet'>
    <link href='{{asset('css/print.css')}}' rel='stylesheet'>
    @stack('head.style')
    <style>
      * {
        font-family: Helvetica, Arial, sans-serif
      }
    </style>
  </head>
  <body>
    <main>
    <table width="100%" style="max-width:600px; padding: 10px 0; margin:0 auto">
      <tr>
        <td width="150px">
          <a href="{{route('store')}}"><img src="{{asset('images/logos/logo.png')}}" width="auto" height="100px" /></a>
        </td>
        <td>
          <h1 style="line-height:100px; margin:0; font-size: 18px;">@yield('print.title')</h1>
        </td>
      </tr>
    </table>
    </main>
    @yield('body')
  </body>
</html>
