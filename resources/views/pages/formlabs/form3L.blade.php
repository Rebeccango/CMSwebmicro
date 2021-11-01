@extends('layouts.layout')
@section('title')
Formlabs - Form 3L: Affordable large format Low Force Stereolithography (LFS) 3D Printer
@stop
@section('meta')
<link rel="canonical" href="{{route('formlabs')}}" />
@stop
@section('description')Now introducing the Formlabs Form 3 - The Next Generation of Industrial 3D Printing @stop
@section('keywords')Formlabs, Form 3, 3D printers, sterolithography, laser sintering, Additive Manufacturing, Fuse 1,
Form 2
@stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
  style="min-height:450px; background-image:url({{asset('storage/images/formlabs/hero/hero.jpg')}})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto wow fadeIn" data-wow-duration="0.8s"
          data-wow-delay="0.5s">
          <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">Introducing the Form 3L</h1>
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
      class="d-flex col-12 col-md-6 col-sm-12 justify-content-md-end justify-content-sm-start align-items-md-end flex-column align-items-sm-start mb-5 order-1">
      <div class="d-flex flex-column justify-content-end text-left text-md-right">
        <h3 class="h1 mb-3">Introducing the Form 3L</h3>
        <h4 class="h5 mb-5">Powered by Low Force Stereolithography (LFS)</h4>
        <div class="d-flex justify-content-end">
          <div class="w-100" style="max-width:500px">
            <h4 class="h6 mb-3">Small details, big results.</h4>
            <p class="mb-4">Form 3L is an affordable large format 3D printer designed for professionals for fast
              turnaround of
              industrial-quality parts, printed using an <a href="#" data-toggle="modal" data-target="#lfs">advanced Low
                Force Stereolithography (LFS) process <i class="fas fa-info-circle"></i></a>.</p>
            <h4 class="h6 mb-3">Faster printing.</h4>
            <p class="mb-4">Blaze through large parts with two custom-designed Light Processing Units (LPUs). Two lasers
              simultaneously build large, dense parts fast.</p>
            <h4 class="h6 mb-3">Powerful, reliable print process.</h4>
            <p class="mb-4">Form 3L is built around the same powerful LFS process as the Form 3, for the same
              professional quality,
              ease of use, reliability, and versatility you’ve come to expect from Formlabs.</p>
            <h4 class="h6 mb-3">Cross-compatibility and uptime.</h4>
            <p class="mb-4">Use two of the same resin cartridges that are used by Form 2 and 3 to go longer without
              running out of
              resin. Use the same user-replaceable Light Processing Unit (LPU) as the Form 3.</p>
          </div>
        </div>
      </div>
    </div>
    <div
      class="d-flex col-12 col-md-6 col-sm-12 justify-content-md-center justify-content-sm-start align-items-md-center flex-column align-items-sm-start order-0 order-md-1">
      <img src="{{asset('storage/images/formlabs/form3L.png')}}" class="m-auto  wow fadeInRight" data-wow-duration="1s"
        data-wow-delay="0.6s" width="100%" height="100%" />
    </div>
  </div>
</section>

<section class="section--grey py-5">
  <div class="container py-4">
    <div class="row d-flex justify-content-center">
      <blockquote class="blockquote col-12 col-md-8 align-self-center">
        <p class="mb-0 text-md-left ml-4 lead"><i aria-hidden="true" class="fa fa-quote-left"></i>
          We worked with CAD MicroSolutions to select a large format 3D printer for our company’s new rapid prototyping
          endeavours. They were extremely helpful and offered multiple options and outlined the pros and cons of each.
          We
          ultimately chose the Form 3L printer from Formlabs and are extremely happy with our choice. It will be a very
          useful
          tool for our company’s future development projects. CAD MicroSolutions’ installation support and training was
          very
          useful for our engineering team. <i aria-hidden="true" class="fa fa-quote-right"></i></p>
        <div class="blockquote-footer ml-4 mt-4"><span class="name">
            Chris Farhall </span>
          Test Facility Manager from <cite title="Cougar Drilling Solutions - Alberta, Canada">Cougar Drilling Solutions
            -
            Alberta, Canada</cite></div>
      </blockquote>
    </div>
  </div>
</section>

<section >
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
        <p>LFS 3D printing uses a flexible tank and linear illumination to deliver incredible surface quality and print
          accuracy. Lower print forces allow for light-touch support structures that tear away with ease. Additionally,
          this process opens up a wide range of possibilities for future development of advanced, production-ready
          materials. Inside the Form 3 and Form 3L is a completely redesigned optics engine, the Light Processing Unit
          (LPU), which contains a system of lenses and mirrors to deliver accurate, repeatable prints. Within the LPU, a
          galvanometer positions the high-density laser beam in the Y direction, passes it through a spatial filter, and
          directs it to a fold mirror and parabolic mirror to consistently deliver the beam perpendicular to the build
          plane.</p>
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