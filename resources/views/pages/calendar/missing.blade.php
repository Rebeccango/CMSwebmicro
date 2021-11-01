@extends('layouts.layout')
@section('title')Missing Event - {{$eventid}}@stop
@section('body')
  <h1 class="main-title mt-0">This event is missing or does not exist!</span></h1>
  <p>
    The Event <em><strong>"{{$eventid}}"</strong></em> you are looking for has been <strong>removed</strong> or <strong>does not exist!</strong><br />
    Please check your spelling or try again later.
  </p>
@stop
