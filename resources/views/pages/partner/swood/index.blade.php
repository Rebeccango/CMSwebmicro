@extends('layouts.layout')
@section('title')
SWOOD - WOODWORKING CAD/CAM
@stop
@section('meta')
<link rel="canonical" href="{{route('swood.index')}}" />
@stop
@section('description')Are you using SOLIDWORKS for cabinets, case goods, shelves, or office furniture? Find out
how SWOOD can turn your SOLIDWORKS environment into a fully automated CAD/CAM ecosystem purpose built for woodworking.
@stop
@section('body')
<section>
  <div class="container-fluid">
    <div class="row d-flex align-items-center">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 order-1 order-md-0">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" width="100%" height="auto"
            src="https://www.youtube.com/embed/4n-cXQ4_p8o" frameborder="0" allow="autoplay; encrypted-media"
            allowfullscreen></iframe>
        </div>
        <div class="videoCaption">On Demand Webinar: SWOOD Woodworking CAD/CAM for SOLIDWORKS</div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 order-0 order-md-1 pt-0 pt-md-5 pb-4">
        <h1 class="display-4">SWOOD</h1>
        <h2 class="h5">WOODWORKING CAD/CAM</h2>
        <p class="mt-4 lead">Are you using SOLIDWORKS for cabinets, case goods, shelves, or office furniture? Find out
          how SWOOD can turn your SOLIDWORKS environment into a fully automated CAD/CAM ecosystem purpose built for
          woodworking.</p>
      </div>
    </div>
  </div>
</section>
<section class="section-secondary">
  <div class="container-fluid">
    <div class="row d-flex">
      <div class="col-lg-6 d-flex flex- align-self-stretch py-3">
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
      <div class="col-lg-6 d-flex align-self-stretch py-3">
        <div class="card rounded-lg shadow-lg align-self-stretch align-items-center justify-items-center w-100">
          <a href="{{route('swood.cam')}}"
            class="card-body p-5 d-flex flex-column justify-items-center justify-content-between align-items-center text-decoration-none">
            <img class="img-fluid" width="100%" style="max-width:350px"
              src="{{asset('images/pages/partner/swood/Machine2016_600X500.png')}}" />
            <img src="{{asset('images/pages/partner/swood/SWOOD_CAM_280X100.png')}}" height="80px">
            <p class="text-center my-5 p-0 m-0 text-dark">SWOOD CAM manages NC machines dedicated to woodworking and
              their
              technologies.
              Create your programs and production documents directly inside SOLIDWORKS.</p>
            <div class="btn btn-outline-primary rounded-pill">Learn More</div>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
@stop