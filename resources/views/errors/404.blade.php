@extends('layouts.error')
@section('title')
ERROR 404 - Could not find this page! | {{config('app.name')}}
@stop
@push('after-styles')
<style>
  html,
  body {
    height: 100%;
  }
</style>
@endpush
@section('body')
<section class="error-page d-flex justify-content-center align-items-center py-4" style="min-height:100vh">
  <div class="p-3">
    <h1>404</h1>
    <h2>OOPS, THIS PAGE CANNOT BE FOUND!</h2>
    <p class="text-large">
      But we have lots of other pages for you to see.
    </p>
    <br />
    <a class="btn btn-primary btn-rounded btn-dialog px-3" href="{{route('home')}}"><i class="fa fa-home mr-3"
        aria-hidden="true"></i> RETURN HOME</a>
  </div>
</section>
@stop