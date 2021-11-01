@extends('layouts.layout')
@section('title')
Design | 3DEXPERIENCE Platform
@stop
@section('meta')
<link rel="canonical" href="{{route('solidworks.3dexperience.design.index')}}" />
@stop
@section('description')Products are becoming increasingly complex and connected while the need for developing engaging
and memorable consumer experiences is becoming compulsory in today’s market. The ability to readily access product
development data and effectively collaborate with stakeholders across the world is more critical than ever. With the
3DEXPERIENCE Platform any business can take advantage of new capabilities to meet these demands.@stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
  style="min-height:250px; background-image:url({{asset('/images/pages/solidworks/3dexperience/3dexperience2015-1550x345.jpg')}});">
  {{-- <div class="parallax-section__shadow"></div> --}}
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          <h1>INTUITIVE DESIGN IN THE CLOUD</h1>
          <div class="section-title-divider"></div>
        </div>
        <div class="Left">
          <p class="parallax-section__description h4">3DEXPERIENCE Platform</p>
        </div>
        <div class="d-flex justify-content-center align-items-center">
          <button type="button" class="btn btn-lg btn-rounded btn-white mx-auto text-sm" data-toggle="modal"
            data-target="#experience">
            Learn More<i class="ml-2 far fa-caret-square-right"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section-secondary">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-sm-12 py-3">
        <h2 class="mb-4">The Future of Design is Collaboration</h2>
        <p class="lead">Products are becoming increasingly complex and connected while the need for developing engaging
          and memorable
          consumer experiences is becoming compulsory in today’s market. The ability to readily access product
          development data and effectively collaborate with stakeholders across the world is more critical than ever.
          With the 3DEXPERIENCE Platform any business can take advantage of new capabilities to meet these demands.</p>
      </div>
      <div class="col-lg-6 col-sm-12 py-3">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" width="100%" height="auto"
            src="https://www.youtube.com/embed/lBNHPwZIcRg" frameborder="0" allow="autoplay; encrypted-media"
            allowfullscreen></iframe>
        </div>
        <div class="videoCaption">Video: First Look 3DEXPERIENCE SOLIDWORKS</div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="row d-flex align-items-start justify-content-end icon-circles p-0 mx-0">
      <div class="col-xl-6 col-lg-5 col-md-12 py-5 py-lg-0 text-left m-auto">
        <div>
          <h2>SOLIDWORKS on the 3DEXPERIENCE Platform</h2>
          <p>Make collaborative design your business advantage – SOLIDWORKS on the 3DEXPERIENCE platform enables an
            entirely
            new
            design experience. Create innovative products in a truly collaborative and connected environment with the
            same
            SOLIDWORKS you know and love.</p>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-12">
        <div class="h4">Key Benefits:</div>
        <ul>
          <li>Quickly create, evaluate and iterate on your design with powerful parametric and direct modeling tools
          </li>
          <li>Manage your designs the way you think with agile, intuitive design & management tools in a single modeling
            environment</li>
          <li>Share your design data and collaborate with all stakeholders anywhere, at any time.</li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section class="section-secondary">
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-12 py-5 py-lg-0 text-center m-auto">
        <div class="w-100 mx-auto" style="max-width:600px">
          <h2>3DEXPERIENCE SOLIDWORKS Offers</h2>
          <p>Connecting the SOLIDWORKS you know and love, to the 3DEXPERIENCE platform, for a single cloud-based product
            development
            environment.</p>
        </div>
      </div>
      <div class="col-xl-12 col-lg-12 py-4 pt-2 col-md-12">
        <div class="row">
          <div class="col-md-4 py-3 text-center d-flex justify-content-center">
            <div class="card border-0 align-self-stretch shadow-sm w-100">
              <div class="card-body">
                <h5 class="card-title mb-4"><strong>Standard Offer</strong> includes:</h5>
                <p class="card-text">
                  <ul class="list-group">
                    <li class="list-group-item">3D Creator</li>
                    <li class="list-group-item">3DEXPERIENCE SOLIDWORKS Standard</li>
                    <li class="list-group-item">Collaborative Industry Innovator</li>
                    <li class="list-group-item">Collaborative Business Innovator</li>
                  </ul>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 py-3 text-center d-flex justify-content-center">
            <div class="card border-0 align-self-stretch shadow-sm w-100">
              <div class="card-body">
                <h5 class="card-title mb-4"><strong>Professional Offer</strong> includes:</h5>
                <p class="card-text">
                  <ul class="list-group">
                    <li class="list-group-item">3D Sculptor</li>
                    <li class="list-group-item">3D Creator</li>
                    <li class="list-group-item">3DEXPERIENCE SOLIDWORKS Professional</li>
                    <li class="list-group-item">Collaborative Industry Innovator</li>
                    <li class="list-group-item">Collaborative Business Innovator</li>
                  </ul>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 py-3 text-center d-flex justify-content-center">
            <div class="card border-0 align-self-stretch shadow-sm w-100">
              <div class="card-body">
                <h5 class="card-title mb-4"><strong>Premium Offer</strong> includes:</h5>
                <p class="card-text">
                  <ul class="list-group">
                    <li class="list-group-item">3D Sculptor</li>
                    <li class="list-group-item">3D Creator</li>
                    <li class="list-group-item">3DEXPERIENCE SOLIDWORKS Simulation Designer</li>
                    <li class="list-group-item">3DEXPERIENCE SOLIDWORKS Premium</li>
                    <li class="list-group-item">Collaborative Industry Innovator</li>
                    <li class="list-group-item">Collaborative Business Innovator</li>
                  </ul>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="row d-flex align-items-start justify-content-end icon-circles p-0 mx-0">
    <div class="col-xl-6 col-lg-5 col-md-12 py-5 py-lg-0 text-left m-auto">
      <div class="w-100 mx-auto text-center" style="max-width:500px">
        <h2>Additional Design Roles on the 3DEXPERIENCE Platform</h2>
        <p>Extend SOLIDWORKS capabilities by tapping into a vast set of concept-to-market solutions that work together
          seamlessly.</p>
      </div>
    </div>
  </div>
</section>
<section class="p-0">
  <div class="row d-flex align-items-start justify-content-end icon-circles p-0 mx-0">
    <div class="col-xl-6 col-lg-6 col-md-12 m-0 px-0 align-self-center d-flex justify-content-center order-0">
      <img src="{{asset('images/pages/solidworks/3dexperience/3d-sculptor.jpg')}}" class="img-fluid" alt="...">
    </div>
    <div class="col-xl-6 col-lg-5 col-md-12 py-5 py-lg-0 text-left m-auto">
      <div class="w-100 mx-auto" style="max-width:500px">
        <small>3DEXPERIENCE</small>
        <h2>3D SCULPTOR</h2>
        <p>Deliver innovative products to market faster with the ability to quickly create & collaborate on organic
          shapes and complex surfaces in the cloud</p>
        <a href="{{route('solidworks.3dexperience.design.3d-sculptor')}}" class="btn btn-rounded btn-primary">Learn
          More</a>
      </div>
    </div>
  </div>
</section>
<section class="p-0">
  <div class="row d-flex align-items-start justify-content-end icon-circles p-0 mx-0">
    <div
      class="col-xl-6 col-lg-6 col-md-12 m-0 px-0 align-self-center d-flex justify-content-center order-lg-2 order-1">
      <img src="{{asset('images/pages/solidworks/3dexperience/3d-creator.jpg')}}" class="img-fluid" alt="...">
    </div>
    <div class="col-xl-6 col-lg-5 col-md-12 py-5 py-lg-0 text-right m-auto  order-2 order-lg-1">
      <div class="w-100 mx-auto" style="max-width:500px">
        <small>3DEXPERIENCE</small>
        <h2>3D CREATOR</h2>
        <p>Quickly create and collaborate on 3D designs in the cloud and deliver innovative products to market faster.
        </p>
        <a href="{{route('solidworks.3dexperience.design.3d-creator')}}" class="btn btn-rounded btn-primary">Learn
          More</a>
      </div>
    </div>
  </div>
</section>
<section class="p-0">
  <div class="row d-flex align-items-start justify-content-end icon-circles p-0 mx-0">
    <div class="col-xl-6 col-lg-6 col-md-12 m-0 px-0 align-self-center d-flex justify-content-center">
      <img src="{{asset('images/pages/solidworks/3dexperience/drafter.jpg')}}" class="img-fluid" alt="...">
    </div>
    <div class="col-xl-6 col-lg-5 col-md-12 py-5 py-lg-0 text-left m-auto">
      <div class="w-100 mx-auto" style="max-width:500px">
        <small>3DEXPERIENCE</small>
        <h2>DRAFTER</h2>
        <p>Speed up the Design-to-Manufacture process with the ability to quickly generate and detail 2D drawings from
          3D models.</p>
        <a href="{{route('solidworks.3dexperience.design.drafter')}}" class="btn btn-rounded btn-primary">Learn More</a>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="col-lg-4 order-1 order-lg-0">
        <figure class="text-center">
          <a target="_blank" href="{{url('resources/187/3dexperience-solidworks-offers-product-matrix')}}"
            class="pdf-item text-center mx-auto">
            <img class="img-fluid shadow-sm rounded-sm"
              src="{{url('storage/resources/July2020/us2aM0AjhnKE27BnA2XY.jpg')}}" style="max-height:300px;">
          </a>
        </figure>
      </div>
      <div class="col-lg-8 order-0 order-lg-0">
        <h2 class="ml-0 display-5 mb-4">3DEXPERIENCE SOLIDWORKS Offers Product Matrix</h2>
        <a target="_blank" class="btn rounded-pill btn-outline-primary" href="{{url('resources/187/3dexperience-solidworks-offers-product-matrix')}}">View Product Matrix</a>
      </div>
    </div>
  </div>
</section>
@stop

@push('foot')
<div class="modal fade" id="experience" tabindex="-1" role="dialog" aria-labelledby="experience" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Learn More: 3D Experience Platform</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div data-form-block-id="6f52f019-1d57-ea11-a811-000d3a33fc30"></div>
        <div id="dNevIQowLlWmwWnPzOAUEtL5ZX2m8wXi-TSM7Z6I5zrY"></div>
      </div>
    </div>
  </div>
</div>
@endpush