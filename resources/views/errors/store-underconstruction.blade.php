@extends('layouts.error')
@section('title')
Store is currently under construction | {{config('app.name')}}
@stop
@push('after-styles')
<style>
  html,
  body {
    height: 100%;
    overflow: auto;
  }
</style>
@endpush
@section('body')
<section class="error-page d-flex justify-content-center align-items-center py-4" style="min-height:100vh">
  <div class="p-3">
    <img class="mb-0" src="{{asset('images/pages/error/under-construction.svg')}}" width="300"/>
    <h1 style="font-size:38px; line-height:unset" class="mt-5">UNDER CONSTRUCTION</h1>
    <h3>Our online store is currently under construction</h2>
    <p class="lead">Sorry for any inconveniences this may cause you.<br />Please come back at a later time.</p>
    <br />
    <a class="btn btn-primary btn-rounded btn-dialog px-3" href="{{route('home')}}"><i class="fa fa-home mr-3"
        aria-hidden="true"></i> RETURN HOME</a>
  </div>
</section>
@stop