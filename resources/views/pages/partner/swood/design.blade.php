@extends('layouts.layout')
@section('title')
SWOOD DESIGN - Woodworking
@stop
@section('meta')
<link rel="canonical" href="{{route('swood.design')}}" />
@stop
@section('description')SWOOD Design acts as a booster for woodworking projects within SOLIDWORKS. With a range of drag &
drop features
dedicated to wood and panel processing, SWOOD Design makes it quicker and easier to make production-ready designs.
@stop
@section('body')
<section class="parallax-window parallax-section trans-header-window d-flex parallax"
  style="min-height:450px; background-image:url({{asset('images/pages/partner/swood/swood_design-hero.jpg')}})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          <h1>SWOOD DESIGN</h1>
          <div class="section-title-divider"></div>
          <h2 class="h3" style="max-width:600px">Boosting SOLIDWORKS woodworking projects from design to production.
          </h2>
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
    <div class="row d-flex align-items-center">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 order-1 order-md-0">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" width="100%" height="auto"
            src="https://www.youtube.com/embed/8GcprPRhp_M" frameborder="0" allow="autoplay; encrypted-media"
            allowfullscreen></iframe>
        </div>
        <div class="videoCaption">SWOOD Design Introduction Video</div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 order-0 order-md-1 pt-0 pt-md-5 pb-4">
        <h1 class="display-4">SWOOD Design</h1>
        <h2 class="h5">WOODWORKING CAD/CAM</h2>
        <p class="mt-4 lead">Discover SWOOD Design, a SolidWorks Add-In dedicated to wood working.
          Its dedicated features (connectors, SWOODBox, ...) help you to create your wood project in SolidWorks.</p>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
        <h3 class="h1 mb-4">Key Features:</h3>
        <ul class="list-group">
          <li class="list-group-item">Efficient material management: Part thickness, Décor/grain direction, edgebanding,
            laminates</li>
          <li class="list-group-item">Connectors: Insertion of parametric fittings between panels with mortise & tenon,
            cam
            & bolt, dowels,
            lamellos</li>
          <li class="list-group-item">SWOOD Box: A unique library of reusable assemblies including hardware and
            machining of
            adjacent parts</li>
          <li class="list-group-item">Profiling: Profile your pieces with a simple drag & drop</li>
          <li class="list-group-item">Reporting: Customizable documents, including cut list, hardware list, labels and
            more
          </li>
        </ul>
      </div>
      <div class="col-lg-6">
        <h3 class="h1 mb-4">Key Benefits:</h3>
        <ul class="list-group">
          <li class="list-group-item">Design faster</li>
          <li class="list-group-item">Production ready design (Reliability, design rules homogenized)</li>
          <li class="list-group-item">Storage of customized and reusable parametric items</li>
          <li class="list-group-item">Woodworking dedicated reporting</li>
        </ul>
      </div>
    </div>
  </div>
</section>
<hr />
<section>
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="col-lg-6 order-1 order-lg-0">
        <a target="_blank" href="{{url('resources/178/on-demand-webinar-swood-woodworking-cad-cam-for-solidworks')}}"
          class="pdf-item text-center mx-auto" style="min-height: auto; max-width:600px; width:100%">
          <figure class="text-center">
            <div class="figimg text-center" style="min-height: auto; max-width:600px; width:100%">
              <img class="img-fluid" src="{{url('storage/resources/June2020/vOL0D7S1fGTQWFzwqivd.png')}}"
                style="width:100%;">
            </div>
          </figure>
        </a>
      </div>
      <div class="col-lg-6 order-0 order-lg-0">
        <h2 class="main-title ml-0">On Demand Webinar:</h2>
        <h2 class="display-4">SWOOD Woodworking CAD/CAM for SOLIDWORKS</h2>
      </div>
    </div>
  </div>
</section>
<section class="section-secondary">
  <div class="container-fluid">
    <div class="row d-flex">
      <div class="col-lg-12 d-flex align-self-stretch py-3">
        <div class="card rounded-lg shadow-lg align-self-stretch align-items-center justify-items-center w-100">
          <a href="{{route('swood.cam')}}"
            class="card-body p-5 d-flex flex-column justify-items-center justify-content-between align-items-center text-decoration-none">
            <img class="img-fluid" width="100%" style="max-width:350px"
              src="{{asset('images/pages/partner/swood/Machine2016_600X500.png')}}" />
            <img src="{{asset('images/pages/partner/swood/SWOOD_CAM_280X100.png')}}" height="80px">
            <p class="text-center my-5 p-0 m-0 text-dark">SWOOD CAM manages NC machines dedicated to woodworking and
              their technologies. Create your programs and production documents directly inside SOLIDWORKS.</p>
            <div class="btn btn-outline-primary rounded-pill">Learn More</div>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
@stop