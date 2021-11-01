@extends('layouts.layout')
@section('title')
SWOOD CAM
@stop
@section('meta')
<link rel="canonical" href="{{route('swood.cam')}}" />
@stop
@section('description')SWOOD CAM manages NC machines dedicated to woodworking and their technologies. Create your
programs and production
documents directly inside SOLIDWORKS with full associativity.
@stop
@section('body')
<section class="parallax-window parallax-section trans-header-window d-flex parallax"
  style="min-height:450px; background-image:url({{asset('images/pages/partner/swood/swood_cam-hero.jpg')}})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          <h1>SWOOD CAM</h1>
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
            src="https://www.youtube.com/embed/neojBPeoHI8" frameborder="0" allow="autoplay; encrypted-media"
            allowfullscreen></iframe>
        </div>
        <div class="videoCaption">SWOOD CAM Introduction Video</div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 order-0 order-md-1 pt-0 pt-md-5 pb-4">
        <h1 class="display-4">SWOOD CAM</h1>
        <p class="lead">Discover SWOOD CAM, a SolidWorks Add-In dedicated to wood working.
          Create easily your NC programs and manufacturing documents directly in your SolidWorks design models with all
          woodworking technologies: multiple head, multiple spindles, aggregates, laser positioning, chip suction and
          deflector
          management.</p>
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
          <li class="list-group-item">Multiple head, multiple spindles, multiple drilling aggregate and horizontal
            spindle</li>
          <li class="list-group-item">Multiple positioning, parametric worktable management</li>
          <li class="list-group-item">Woodworking specific operations: grooving, sawing, mortising, tenoning</li>
          <li class="list-group-item">Customizable post-processor and reporting</li>
          <li class="list-group-item">Nesting capabilities</li>
        </ul>
      </div>
      <div class="col-lg-6">
        <h3 class="h1 mb-4">Key Benefits:</h3>
        <ul class="list-group">
          <li class="list-group-item">Native management of the woodworking machinery technologies</li>
          <li class="list-group-item">Easy to use</li>
          <li class="list-group-item">Associativity with SWX models and machining rules based on SWX models</li>
          <li class="list-group-item">Storage of re-usable machining strategies</li>
          <li class="list-group-item">Export of full project data (cut list, tool list, cup position, programs)</li>
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
      <div class="col-lg-12 d-flex flex- align-self-stretch py-3">
        <div class="card rounded-lg shadow-lg align-self-stretch align-items-center justify-items-center w-100">
          <a href="{{route('swood.design')}}"
            class="card-body p-5 d-flex flex-column justify-items-between align-items-center text-decoration-none">
            <img class="img-fluid" width="100%" style="max-width:350px"
              src="{{asset('images/pages/partner/swood/Meuble2016_600X500.png')}}" />
            <img src="{{asset('images/pages/partner/swood/SWOOD_DESIGN_280X100.png')}}" height="80px">
            <p class="text-center my-5 p-0 m-0 text-dark">SWOOD Design makes it easier to achieve your woodworking
              projects.
              Design faster using drag & drop.</p>
            <div class="btn btn-outline-primary rounded-pill">Learn More</div>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
@stop