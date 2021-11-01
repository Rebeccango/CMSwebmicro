@extends('layouts.layout')
@section('title')
  Customer Testimonials
@stop
@section('body')
  <section class="py-5">
  <div class="container">
  	<div class="section-title center-block mx-auto" style="margin-bottom:30px;">
      <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeIn;" style="margin-top:0px;">Testimonials</h1>
      <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.5s; animation-name: fadeIn;"></div>
    </div>
    <h3 class="text-md-center">
      See what our clients are saying about us and our services
    </h3>
    @foreach($testimonials as $t)
      <div class="card p-4 pt-5 box-shadow-lt testimonial-card wow fadeUp" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="testimonial-icon d-flex justify-content-center align-items-center"><i class="fas fa-quote-left"></i></div>
        <div class="card-block row">
          @if($t->image != "")
            <div class="col-md-1">
              <img src="{{asset('storage/'.$t->image)}}" class="img-circle rounded-circle  img-shadow" />
            </div>
            <div class="col-md-11">
          @endif
          <blockquote class="blockquote">
            <p class="mb-0">{!!$t->testimonial!!}</p>
            <div class="blockquote-footer">@if($t->firstname){{$t->firstname}} @endif
            @if($t->lastname != ""){{$t->lastname}}@endif
              @if($t->position != ""), {{$t->position}} @endif
            @if($t->company != "") from <cite title="{{$t->company}}">{{$t->company}}</cite>@endif
            </div>
          </blockquote>
          @if($t->image != "")</div>@endif
        </div>
      </div>
    @endforeach
  </div>
</section>
@stop
