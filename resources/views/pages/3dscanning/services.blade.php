@extends('layouts.layout')
@section('title') 3D Metrology &amp; 3D Scanning Services
@stop
@section('meta')
<link rel="canonical" href="{{route('3d-scanning.services')}}" />
@stop
@section('description')CAD MicroSolutions provides 3D Metrology and 3D Scanning services for reverse engineering, 3d
scanning and inspection using the most advanced 3D Metrology hardware available. @stop
@section('keywords')GOM, reverse engineering, 3d scanning, inspection, 3D Metrology, 3D Scanner, Industrial,
Manufacturing, Analysis, Technology @stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax" style="min-height:450px;
  background-image:url({{ asset('storage/images/gom/OBJ_GRAF-0000016586-XX-001-VIEW.jpg') }})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid mt-5">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto wow fadeIn" data-wow-duration="0.8s"
          data-wow-delay="0.5s">
          <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">3D METROLOGY & 3D SCANNING SERVICES</h1>
          <div class="section-title-divider"></div>
          {{-- <h2 class="h3">Improving product quality and accelerating product development and manufacturing processes</h2> --}}
        </div>
        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
          <p class="parallax-section__description">Leveraging GOM precise 3D metrology technology and software, we
            provide services for reverse engineering, 3D scanning and inspection for projects large and small.</p>
        </div>
        <div>
          @include('layouts.generic_contact_buttons')
        </div>
      </div>
    </div>
  </div>
</section>
<section class="py-0">
  <div class="row border-bottom">
    <div class="col-lg-4 col-sm-12 col-md-12 col-xs-12 text-center p-0 border-right border-top">
      <div class="d-flex align-items-center justify-content-center flex-column h-100">
        <div class="w-100 position-relative p-5 wow fadeInUp" style="z-index:1" data-wow-duration="1s"
          data-wow-delay="0.5s">
          <h2 class="text-center mt-5">Reverse Engineering
          </h2>
          <a href="#inquire" class="btn btn-md btn-primary btn-rounded px-3 mt-3">Contact Us</a>
          <p class="mt-4 mx-auto" style="max-width:600px">Quickly and precisely convert your physical part into precise
            digital 3D models for reverse engineering purposes. Save
            the time it takes to design models from scratch by digitizing your products and parts into workable 3D CAD
            data.</p>
        </div>
        <div class="d-flex align-items-center justify-content-end flex-column h-100">
          <img src="{{asset('storage/images/gom/industrie_injection-molding_header.jpg')}}" class="mx-auto wow fadeIn"
            data-wow-duration="1s" data-wow-delay="0.8s" width="100%" height="auto" />
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-sm-12 col-md-12 col-xs-12 text-center p-0 border-right border-top">
      <div class="d-flex align-items-center justify-content-center flex-column h-100">
        <div class="w-100 position-relative p-5 wow fadeInUp" style="z-index:1" data-wow-duration="1s"
          data-wow-delay="0.5s">
          <h2 class="text-center mt-5">3D Scanning</h2>
          <a href="#inquire" class="btn btn-md btn-primary btn-rounded px-3 mt-3">Contact Us</a>
          <p class="mt-4 mx-auto" style="max-width:600px">3D scanning services provide precise, reliable measurement
            data for your projects. Have your part, prototype, tool,
            assembly or other physical object scanned to capture the geometry in a digital format.</p>
        </div>
        <div class="d-flex align-items-center justify-content-end flex-column h-100">
          <img src="{{asset('storage/images/gom/OBJ_GRAF-0000012023-XX-001-VIEW.jpg')}}" class="wow fadeIn"
            data-wow-duration="1s" data-wow-delay="0.8s" width="100%" height="auto" />
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-sm-12 col-md-12 col-xs-12 text-center p-0 border-top" style="background-color:#FFF">
      <div class="d-flex align-items-center justify-content-center flex-column h-100">
        <div class="w-100 position-relative p-5 wow fadeInUp" style="z-index:1" data-wow-duration="1s"
          data-wow-delay="0.5s">
          <h2 class="text-center mt-5">Inspection Services</h2>
          <a href="#inquire" class="btn btn-md btn-primary btn-rounded px-3 mt-3">Contact Us</a>
          <p class="mt-4 mx-auto" style="max-width:600px">Improve product quality with inspection services provided by
            our team of 3D metrology experts. Be confident that your parts are meeting specs and are error free while
            shortening manufacturing and production cycles.</p>
        </div>
        <div class="d-flex align-items-center justify-content-end flex-column h-100">
          <img src="{{ asset("storage/images/gom/gom_atos-core_model-plate.jpg ") }}" class="wow fadeIn"
            data-wow-duration="1s" data-wow-delay="0.8s" width="100%" height="auto" />
        </div>
      </div>
    </div>
  </div>
</section>
<section class="px-4 px-sm-3 border-bottom" id="inquire">
  <div class="section-title parallax-section__title center-block mx-auto wow fadeIn" data-wow-duration="0.8s"
    data-wow-delay="0.5s">
    <h4 class="text-center">Inquire on 3D Metrology Services</h4>
    <div class="section-title-divider"></div>
    <p class="text-center mt-5 h4">To inquire about our 3D metrology and scanning services,<br /> or for a quick quote
      on your project, fill out the form below:</p>
  </div>
  <div class="d-flex justify-content-center">
    <div data-form-block-id="3fd0dab1-3902-ea11-a811-000d3a33f89d"></div>
    <div id="dxPUGYCf617ldgpPMUwRFtZjIz45_0pZ6_x3PRKm_y44"></div>
  </div>
</section>
@stop