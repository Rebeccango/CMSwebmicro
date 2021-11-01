@extends('layouts.layout')
@section('title')
Formlabs - Form 3: Desktop Low Force Stereolithography (LFS) 3D Printer
@stop
@section('meta')
<link rel="canonical" href="{{route('formlabs')}}" />
@stop
@section('description')Now introducing the Formlabs Form 3 - The Next Generation of Industrial 3D Printing @stop
@section('keywords')Formlabs, Form 3, 3D printers, sterolithography, laser sintering, Additive Manufacturing, Fuse 1,
Form 2
@stop
@section('body')
<section class="parallax-window parallax-section trans-header-window d-flex parallax"
style="min-height:450px; background-image:url({{asset('storage/images/formlabs/hero/hero.jpg')}})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto wow fadeIn" data-wow-duration="0.8s"
          data-wow-delay="0.5s">
          <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">Introducing the Form 3</h1>
          <div class="section-title-divider"></div>
          <h2 class="h3">Powered by Low Force
          Stereolithography (LFS)</h2>
        </div>
        {{-- <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
          <p class="parallax-section__description">The Most Powerful Data and Build Preparation Software</p>
        </div> --}}
        <div>
          @include('layouts.generic_contact_buttons')
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="d-flex justify-content-center  align-items-center flex-wrap w-100 h-100" style="z-index:1;">
    <div
      class="d-flex col-12 col-md-6 col-sm-12 justify-content-md-end justify-content-center align-items-md-end flex-column align-items-center mb-5">
      <div class="d-flex flex-column justify-content-center align-items-center">
          <h3 class="h1">Introducing the Form 3</h3><br>
          <h4 class="h5">Powered by Low Force Stereolithography (LFS)</h4>
          <a class="btn btn-primary btn-md w-50 mx-auto mt-4" href="{{ asset('/storage/pdfs/formlabs/Form 3 Brochure - Print.pdf') }}" target="_blank">Learn More <i class="ml-2 far fa-caret-square-right"></i></a>
      </div>
    </div>
    <div
      class="d-flex col-12 col-md-6 col-sm-12 justify-content-md-center justify-content-sm-start align-items-md-center flex-column align-items-sm-start">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide"
            style="background-image:url({{ asset('/storage/images/formlabs/form3-small-speaker.png') }})"></div>
          <div class="swiper-slide"
            style="background-image:url({{ asset('/storage/images/formlabs/form3-spray-bottle.png') }})"></div>
          <div class="swiper-slide"
            style="background-image:url({{ asset('/storage/images/formlabs/form3-heart.png') }})"></div>
          <div class="swiper-slide"
            style="background-image:url({{ asset('/storage/images/formlabs/form3-demogorgon.png') }})"></div>
          <div class="swiper-slide"
            style="background-image:url({{ asset('/storage/images/formlabs/form3-goggles.png') }})"></div>
          <div class="swiper-slide"
            style="background-image:url({{ asset('/storage/images/formlabs/form3-tough-manifold.png') }})"></div>
        </div>
      </div>
    </div>
  </div>
</section>
<iframe src="https://form3-tour.formlabs.com/index.html?miniPlayer=horizontal"
  style="width:100%;height:350px;top:0px;left:0px;margin:0;padding:0" frameBorder="0" allowfullscreen
  webkitallowfullscreen mozallowfullscreen class="d-block d-md-none"></iframe>
<iframe width="100%" height="1142" src="https://form3-tour.formlabs.com/index.html" class="d-none d-md-block" frameborder="0" allowfullscreen
  webkitallowfullscreen mozallowfullscreen></iframe>
<section class="py-0">
  <div class="row">
    <div
      class="col-lg-6 col-sm-12 col-md-6 col-xs-12 p-0 d-flex text-lg-right text-sm-center align-items-center justify-content-center flex-column pb-5">
      <div class="position-relative  pl-4 py-4 pr-0 pr-md-4 text-center text-md-left wow fadeInRight"
        data-wow-duration="1s" data-wow-delay="0.3s">
        <h2 class="h1 mt-5">Flawless prints, every time.</h2>
      </div>
      <ul class="h6 text-left w-50 pl-0">
        <li class="mb-3"><a href="#" data-toggle="modal" data-target="#lfs" >LFS (Low Force Stereolithography) 3D printing balances detail and speed. <i class="fas fa-info-circle"></i></a>
        <li class="mb-3">The optical system maintains a precise, dense laser spot to ensure accurate, repeatable prints.
        <li class="mb-3">Easy clean-up and smoother parts with tear-away light-touch supports.
      </ul>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 p-0 text-center white-content">
      <img src="{{asset('storage/images/formlabs/form3-parts-021.jpg')}}" class="m-auto  wow fadeInRight"
        data-wow-duration="1s" data-wow-delay="0.6s" width="100%" height="100%" />
    </div>
  </div>
</section>

<section class="py-0">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 p-0 text-center white-content order-1">
      <img src="{{asset('storage/images/formlabs/form3-parts-029.jpg')}}" class="m-auto  wow fadeInLeft"
        data-wow-duration="1s" data-wow-delay="0.6s" width="100%" height="100%" />
    </div>
    <div
      class="col-lg-6 col-sm-12 col-md-6 col-xs-12 p-0 d-flex text-lg-right text-sm-center align-items-center justify-content-center flex-column pb-5 order-md-1 order-0">
      <div class="position-relative  pl-4 py-4 pr-0 pr-md-4 text-center text-md-left wow fadeInLeft wow fadeInRight"
        data-wow-duration="1s" data-wow-delay="0.3s">
        <h2 class="h1 mt-5">Nonstop printing.</h2>
      </div>
      <ul class="h6 text-left w-50 pl-0">
        <li class="mb-3">Integrated sensors monitor and maintain ideal conditions for consistent performance over time.
        <li class="mb-3">Switch between materials in seconds with a simple cartridge system.
        <li class="mb-3">User-replaceable components and foolproof design maximize uptime.
      </ul>
    </div>
  </div>
</section>

<section class="py-0">
  <div class="row">
    <div
      class="col-lg-6 col-sm-12 col-md-6 col-xs-12 p-0 d-flex text-lg-right text-sm-center align-items-center justify-content-center flex-column pb-5">
      <div class="position-relative  pl-4 py-4 pr-0 pr-md-4 text-center text-md-left wow fadeInLeft"
        data-wow-duration="1s" data-wow-delay="0.3s">
        <h2 class="h1 mt-5">Grows with your business.</h2>
      </div>
      <ul class="h6 text-left w-50 pl-0">
        <li class="mb-3">Meet demand, now and forever. Easily transition from one to many with systems that scale.
        <li class="mb-3">Don’t wait. Print from anywhere as soon as you have files with Remote Print.
        <li class="mb-3">Works well with teams. Monitor and manage prints and teams with PreForm and Dashboard. Track
          individual usage and adjust the print queue when you need to prioritize.
      </ul>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 p-0 text-center white-content">
      <img src="{{asset('storage/images/formlabs/form3-parts-020.jpg')}}" class="m-auto  wow fadeInRight"
        data-wow-duration="1s" data-wow-delay="0.6s" width="100%" height="100%" />
    </div>
  </div>
</section>

<section class="section--grey">
  <div class="container mt-5">
    <div class="d-flex justify-content-center align-items-center flex-column w-100">
      <div class="section-title center-block mx-auto">
        <h2 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">Learn More about the Formlabs 3D Printers
        </h2>
        <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
      </div>
      <div data-form-block-id="5659197b-c0ac-e911-a987-000d3a3702ca"></div>
      <div id="dljMh8Kqx3-6_K-b_oESUR86Mb1xvCaI7z0QrqjqdUFY"></div>
    </div>
  </div>
</section>
@stop

@push('foot')
<div class="modal fade" id="lfs" tabindex="-1" role="dialog" aria-labelledby="lfs" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">
          An Introduction to Low Force Stereolithography (LFS)</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>LFS 3D printing uses a flexible tank and linear illumination to deliver incredible surface quality and print accuracy. Lower print forces allow for light-touch support structures that tear away with ease. Additionally, this process opens up a wide range of possibilities for future development of advanced, production-ready materials. Inside the Form 3 and Form 3L is a completely redesigned optics engine, the Light Processing Unit (LPU), which contains a system of lenses and mirrors to deliver accurate, repeatable prints. Within the LPU, a galvanometer positions the high-density laser beam in the Y direction, passes it through a spatial filter, and directs it to a fold mirror and parabolic mirror to consistently deliver the beam perpendicular to the build plane.</p>
      </div>
    </div>
  </div>
</div>
@endpush
@push("after-styles")
<style>
  .swiper-container {
    width: 500px;
    height: 500px;
  }

  .swiper-slide {
    background-position: center;
    background-size: cover;
  }
</style>
@endpush
@push("after-scripts")
<script>
  var swiper = new Swiper('.swiper-container', {
    spaceBetween: 30,
    effect: 'fade',
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false
    },
  });
</script>
@endpush