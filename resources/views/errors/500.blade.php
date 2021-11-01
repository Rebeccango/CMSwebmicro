@extends('layouts.error')
@section('title')
ERROR 500 - There was a problem loading this page! | {{config('app.name')}}
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
    <h1>500</h1>
    <h2>THERE WAS A PROBLEM LOADING THIS PAGE!</h2>
    <p class="text-large">
      Please try again at a later time.
    </p>
    <br />
    <a class="btn btn-primary btn-rounded btn-dialog px-3" href="{{route('home')}}"><i class="fa fa-home mr-3"
        aria-hidden="true"></i> RETURN HOME</a>
  </div>
</section>
@stop