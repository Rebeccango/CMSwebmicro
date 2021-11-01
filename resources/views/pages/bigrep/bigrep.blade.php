@extends('layouts.layout')
@section('title')
  BIGREP 3D Printers | Large Scale Industrial 3D Printing
@stop
@section('meta')
  <link rel="canonical" href="{{route('bigrep')}}"/>
@stop
@section('description')BIGREP 3D Printers - Large scale manufacturing and rapid prototyping from BigRep GmbH. Discover our 3D printers the BigRep ONE, BigRep Studio.@stop
@section('keywords')3D, 3D CAD, 3D Printers, BigRep, Large, Scale, Industrial, @stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex" style="min-height:450px;
  background-image:url({{asset('/storage/images/bigrep/Banner_3dprinters-2-web.jpg')}});">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto wow fadeIn" data-wow-duration="0.8s"
          data-wow-delay="0.5s">
          <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">BIGREP 3D Printers</h1>
          <div class="section-title-divider"></div>
          <h2 class="h3">Large Scale Industrial 3D Printing Solution</h2>
        </div>
        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
          <p class="parallax-section__description">BIGREP 3D Printers - Large scale manufacturing and rapid prototyping from BigRep GmbH. Discover our 3D printers the BigRep ONE, BigRep Studio.</p>
        </div>
        <div>
          @include('layouts.generic_contact_buttons')
        </div>
      </div>
    </div>
  </div>
</section>
<section class="py-0">
  <div class="section-secondary">
    <div class="container-fluid">
      <h1 class="main-title wow fadeInLeft" data-wow-duration="1s" style="margin-left:15px;" data-wow-delay="0.2s">DISCOVER BIGREP <strong>3D PRINTERS</strong></h1>
      <div class="section-block row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 order-last order-md-first" style="margin-bottom:15px;">
          <div class="videoWrapper">
            <iframe width="1364" height="630" src="https://www.youtube.com/embed/vxUI_yK7Wo4" width="100%" height="360" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
          <div class="videoCaption">Video: DISCOVER BIGREP 3D PRINTERS</div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <img class="my-3 mt-0 mt-sm-3 d-block mx-auto" style="max-height:120px" height="100%" width="auto" src="{{asset('/storage/images/bigrep/BigRep Logo.png')}}" />
          <h3 class="">Why BIGREP 3D Printers?</h3>
          <p class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">BigRep 3D printers were created for a range of applications: from industrial rapid prototyping to ready-to-go design products. They provide you an affordable and easy-to-use technology for large objects and ideas.</p>
          <p>Both the BigRep One and Studio 3D printers are optimized for large scale 3D printing. They are created to ease the process production of one-to-one models and large-scale products. Printing a large amount of parts is also possible by splitting print jobs among several machines in a “print farm”, to increase efficiency, variability and speed.</p>
        </div>
      </div>
    </div>
  </div>
  <section>
    <div class="container-fluid">
      <div class="d-flex flex-wrap">
        <div class="col-lg-6 col-sm-12 col-xs-12 py-4">
          <a href="{{route('bigrep-one')}}"><img class="rounded d-block img-shadow" src="{{asset('storage/images/bigrep/bigrep One.png')}}" width="100%" height="auto" /></a>
          <div class="h4 w-100 mt-5">
            Big, Bigger, the Biggest
          </div>
          <p class="lead">
            Build Volume
          </p>
          <p class="text-left w-100">With a capacity of one cubic meter, the BigRep ONE provides the largest FFF build volume for professional and industrial use.</p>
          <a href="{{route('bigrep-one')}}">Discover More <i class="fas fa-angle-double-right"></i></a>
        </div>
        <div class="col-lg-6 col-sm-12 col-xs-12 py-4">
          <a href="{{route('bigrep-studio')}}"><img class="rounded d-block img-shadow" src="{{asset('storage/images/bigrep/bigrep Studio.png')}}" width="100%" height="auto" /></a>
          <div class="h4 w-100 mt-5">
            Speed and Precision.
          </div>
          <p class="lead">
            From initial concept to end product
          </p>
          <p class="text-left w-100">With a capacity of one cubic meter, the BigRep ONE provides the largest FFF build volume for professional and industrial use.</p>
          <a href="{{route('bigrep-studio')}}">Discover More <i class="fas fa-angle-double-right"></i></a>
        </div>
        <div class="col-lg-6 col-sm-12 col-xs-12 py-4">
          <a href="{{route('bigrep-pro')}}"><img class="rounded d-block img-shadow"
              src="{{asset('storage/images/bigrep/bigrep-pro-banner.png')}}" width="100%" height="auto" /></a>
          <div class="h4 w-100 mt-5">
            LARGE-SCALE & GERMAN ENGINEERED
          </div>
          <p class="lead">
            An Industrial Machine for Professional Prints
          </p>
          <p class="text-left w-100">Whether for functional prototypes, composite tooling or end-use parts, the BigRep PRO is a solution that delivers.</p>
          <a href="{{route('bigrep-pro')}}">Discover More <i class="fas fa-angle-double-right"></i></a>
        </div>
        <div class="col-lg-6 col-sm-12 col-xs-12 py-4">
          <a href="{{route('bigrep-edge')}}"><img class="rounded d-block img-shadow"
              src="{{asset('storage/images/bigrep/bigrep-edge-banner.png')}}" width="100%" height="auto" /></a>
          <div class="h4 w-100 mt-5">
            THE CUTTING-EDGE OF 3D PRINTING
          </div>
          <p class="lead">
            Industry leader for high-end materials
          </p>
          <p class="text-left w-100">The EDGE uses high end thermoplastic materials for end-use products, functional prototypes and composite tooling.</p>
          <a href="{{route('bigrep-edge')}}">Discover More <i class="fas fa-angle-double-right"></i></a>
        </div>
      </div>
    </div>
  </section>
  <section class="section-secondary">
    <div class="container-fluid">
      <img src="{{asset('storage/images/bigrep/SMART SOLUTIONS FOR Copy.png')}}" style="display: block; height: 110px; margin: 12px 0; margin: 32px auto;" />
      <ul style="max-width: 700px;margin: 0 auto;">
        <li>With the BigRep ONE your business will have access to a large industrial machine with an open format. The BigRep STUDIO provides a fast and powerful 3D print service that can be installed in any working environment.
        <li>You can choose between single or dual extrusion configuration. Having two print heads enables you to print with different filaments, which helps in the printing of complex parts that needs support material or two different colors.
        <li>The all-metal hot-end of the extruders allows for a large variety of 3D printing filaments. BigRep also provides you with high-quality material for your 3D printers.
        <li>The graphical user interface provides of features to monitor your work. Its user-friendly interface was developed in-house and is available for both 3D printers.<br /><a href="https://www.youtube.com/watch?v=N4TbGoqWSFE" class="mp-popup-video mp-single">Short introduction video</a>
      </ul>
    </div>
  </section>
</section>
@stop
