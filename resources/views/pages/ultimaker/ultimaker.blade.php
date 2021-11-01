@extends('layouts.layout')
@section('title')
Ultimaker | Accessible & Professional 3D Printing
@stop
@section('meta')
<link rel="canonical" href="{{route('ultimaker')}}" />
@stop
@section('description')Flexible, future-proof and ready to turn your creative concept into reality, Ultimaker ensures
accurate, consistent results – tailored to your needs. Enjoy a seamlessly integrated 3D printing experience – where
hardware, software and materials work in a perfect harmony.@stop
@section('keywords')Ultimaker, 3D Printers, CAD, Design, high-quality 3D printers, Software, Plastics, PLA, ABS @stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
  style="min-height:450px; background-image:url({{asset('/storage/images/ultimaker/hero/hero-10.jpg')}})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          <h1>Ultimaker 3D Desktop Printers</h1>
          <div class="section-title-divider"></div>
          <h2 class="h3">Professional 3D Printing Redefined</h2>
        </div>
        <div>
          @include('layouts.generic_contact_buttons')
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container-fluid">
    <div class="row justify-content-center align-items-center">
      <div class="col-md-6 col-sm-12 mt-0 mt-sm-3 order-md-1 order-sm-2 order-xs-2">
        <img width="100%" height="" src="{{asset('images/pages/ultimaker/s5-bundle.png')}}" />
      </div>
      <div class="col-md-6 col-sm-12 order-md-2 order-sm-1 order-xs-1">
        <h2 class="h2">Ultimaker products</h2>
        <p class="lead mt-4">Flexible, future-proof and ready to turn your creative concept into reality, Ultimaker
          ensures accurate, consistent results – tailored to your needs. Enjoy a seamlessly integrated 3D printing
          experience – where hardware, software and materials work in a perfect harmony.</p>
      </div>
    </div>
    <div class="row justify-content-center align-items-center mt-3">
      <div class="col-md-6 col-sm-12 ">
        <h3 class="h2">Ultimaker Materials</h3>
        <p class="lead mt-4">Ultimaker filaments are formulated to ensure the highest print quality and cover a wide
          range of applications. Enjoy a seamless 3D printing experience with our optimized Ultimaker Cura profiles or
          easily customize them for your needs.</p>
      </div>
      <div class="col-md-6 col-sm-12 mt-0 mt-sm-3">
        <img width="100%" height=""
          src="{{asset('storage/images/ultimaker/ultimaker-materials/Ultimaker-Materials-display.png')}}" />
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    @component('components.ResourceTabs.tabs')
    @slot('datasheet')
    @component('components.ResourceTabs.resources', ['resources' => [56,54,51,50,49,48,184]]) @endcomponent
    @endslot
    @slot('cases')
    @component('components.ResourceTabs.resources', ['resources' => [89,88,87,55]]) @endcomponent
    <div class="p-3">
      <a href="{{asset('storage/pdfs/ultimaker/Volkswagen.pdf')}}" class="pdf-item">
        <figure>
          <div class="figimg">
            <img src="{{asset('storage/pdfs/ultimaker/Volkswagen.png')}}" style="width:100%;"
              alt="Ultimaker Volkswagen Case study">
          </div>
          <figcaption>Case Study: Volkswagen</figcaption>
        </figure>
      </a>
    </div>
    <div class="p-3">
      <a href="{{asset('storage/pdfs/ultimaker/ABB Robotics.pdf')}}" class="pdf-item">
        <figure>
          <div class="figimg">
            <img src="{{asset('storage/pdfs/ultimaker/ABB Robotics.png')}}" style="width:100%;"
              alt="Ultimaker ABB Robotics Case Study">
          </div>
          <figcaption>Case Study: ABB Robotics</figcaption>
        </figure>
      </a>
    </div>
    <div class="p-3">
      <a href="{{asset('storage/pdfs/ultimaker/JeffDESIGN.pdf')}}" class="pdf-item">
        <figure>
          <div class="figimg">
            <img src="{{asset('storage/pdfs/ultimaker/JeffDESIGN.png')}}" style="width:100%;"
              alt="Ultimaker Jeff Design Case Study">
          </div>
          <figcaption>Case Study: Jeff Design</figcaption>
        </figure>
      </a>
    </div>
    @endslot
    @slot('customTabs')
    <li class="nav-item">
      <a class="nav-link active in" data-toggle="tab" href="#product-family" role="tab">Product Family</a>
    </li>
    @endslot
    @slot('customPanes')
    <div class="tab-pane fade show active in" id="product-family" role="tabpanel">
      @include('pages.matrix.ultimaker-matrix')
    </div>
    @endslot
    @endcomponent
  </div>
</section>
@endsection