<!DOCTYPE html>
<html>
<head>
   <title>
      @yield('title') | {!! Voyager::setting('site.title') !!}
   </title>
   {{-- ADDED META --}} @yield('meta')
   {{-- ADDED IMPORTS --}} @yield('imports')
   {{-- @include('layouts.imports') --}}
   {{-- <link href='{{asset('css/store.css')}}' rel='stylesheet'> --}}
   {{-- <link href='{{asset('css/print.css')}}' rel='stylesheet'> --}}
   <link rel="stylesheet" href="{{ mix('css/frontend.css') }}">
   @stack('head.style')
   <style>
      * {
         font-family: Helvetica, Arial, sans-serif !important;
      }
   </style>
</head>
<body>
   @yield('body')
</body>
</html>