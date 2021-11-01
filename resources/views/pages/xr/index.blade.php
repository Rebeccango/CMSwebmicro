@extends('layouts.layout')
@section('title')
XR for Industry Services & Solutions
@stop
@section('meta')
<link rel="canonical" href="{{route('xr.index')}}" />
@stop
@section('description') We create personalized Virtual, Augmented &amp; Mixed Reality software services for industry.
@stop
@section('keywords') XR, VR, Extended Reality, Virtual Reality, Augmented Reality, Mixed Reality, AR, Custom VR
Experiences, Industry, Services @stop
@section('body')
<section class="trans-header-window p-0">
   <section class="cd-hero">
      <ul class="cd-hero-slider cd-hero-100vh autoplay" data-autoPlayDelay="0" data-height="100vh">
         <li class="cd-bg-video selected">
            <div class="cd-bg-video-wrapper" data-poster="{{asset('storage/videos/xr/cms-xr-demo.jpg')}}"
               data-video="{{asset('storage/videos/xr/cms-xr-demo')}}">
            </div>
         </li>
      </ul>
   </section> <!-- .cd-hero -->
   <div class="trans-heading">
      <div class="container-fluid">
         <div class="content white-content d-flex justify-content-center align-items-center">
            <div class="d-flex flex-wrap justify-content-center align-items-center">
               <div class="wow fadeIn text-center" data-wow-duration="1s" data-wow-delay="0.2s">
                  <h1>XR for Industry</h1>
                  <h2 class="h5">Virtual, Augmented & Mixed Reality (XR) software and services for industry</h2>
               </div>
               <div class="w-100">
                  @include('layouts.generic_contact_buttons')
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<section>
   <div class="container">
      <div class="section-title center-block mx-auto" style="max-width:700px">
         <h2>Extended Reality Services for Industrial Solutions</h2>
         <div class="section-title-divider"></div>
      </div>
      <div class="section-block pl-3 pr-3" >
         <div class="section-icon-group row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 p-5">
               <div class='icon-content' style="max-width:100%;">
                  <div class="icon-link">
                     <img class="mx-auto d-block" src="{{asset('storage/images/xr/icons/xr-training.png')}}">
                     <h3 class="icon-title mt-5">Photorealistic Realtime AR/VR Asset Consulting, Training, and Authoring</h3>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 p-5">
               <div class='icon-content' style="max-width:100%;">
                  <div class="icon-link">
                     <img class="mx-auto d-block" src="{{asset('storage/images/xr/icons/xr-architectural.png')}}">
                     <h3 class="icon-title mt-5">Architectural Engineering and Construction</h3>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 p-5" >
               <div class='icon-content' style="max-width:100%;">
                  <div class="icon-link">
                     <img class="mx-auto d-block" src="{{asset('storage/images/xr/icons/xr-robotics.png')}}">
                     <h3 class="icon-title mt-5">Automation and Robotic Workcell</h3>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 p-5" >
               <div class='icon-content' style="max-width:100%;">
                  <div class="icon-link">
                     <img class="mx-auto d-block" src="{{asset('storage/images/xr/icons/xr-retail.png')}}">
                     <h3 class="icon-title mt-5">Retail Display</h3>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 p-5" >
               <div class='icon-content' style="max-width:100%;">
                  <div class="icon-link">
                     <img class="mx-auto d-block" src="{{asset('storage/images/xr/icons/xr-nuclear.png')}}">
                     <h3 class="icon-title mt-5">Nuclear</h3>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 p-5" >
               <div class='icon-content' style="max-width:100%;">
                  <div class="icon-link">
                     <img class="mx-auto d-block" src="{{asset('storage/images/xr/icons/xr-automotive.png')}}">
                     <h3 class="icon-title mt-5">Automotive</h3>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 p-5" >
               <div class='icon-content' style="max-width:100%;">
                  <div class="icon-link">
                     <img class="mx-auto d-block" src="{{asset('storage/images/xr/icons/xr-aerospace.png')}}">
                     <h3 class="icon-title mt-5">Aerospace</h3>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection
@push('after-styles')
<style>
   .ctable * {
      font-size: 12px;
   }
</style>
@endpush