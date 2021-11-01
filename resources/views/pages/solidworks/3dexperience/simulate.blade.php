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
3DExperience Platform any business can take advantage of new capabilities to meet these demands.@stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
  style="min-height:250px; background-image:url({{asset('/images/pages/solidworks/3dexperience/3dexperience2015-1550x345.jpg')}});">
  {{-- <div class="parallax-section__shadow"></div> --}}
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          <h1>TEST & VALIDATE YOUR PRODUCT FASTER</h1>
          <div class="section-title-divider"></div>
        </div>
        <div class="Left">
          <p class="parallax-section__description h4">With SIMULIA applications for the 3DExperience Platform</p>
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
      <div class="col-lg-6 col-sm-12 col-xs-12 text-left text-md-center px-3 order-2 order-lg-1">
        <div class="videoWrapper">
          <iframe width="100%" height="auto" style="min-height:280px;" src="https://www.youtube.com/embed/c4GCzbtpGw8"
            frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div class="videoCaption">Video: The Fundamentals of SOLIDWORKS Sell</div>
      </div>
      <div class="col-lg-6 col-sm-12 col-xs-12 text-left text-md-center p-4 d-flex justify-content-center align-items-center order-1 order-lg-2">
        <p class="lead">The SIMULIA applications on the 3DExperience Platform enable users to explore, test and optimize
          the real world behavior of their products through multiphysics simulation and high performance computing
          (HPC). Accelerate the process of evaluating the performance, reliability and safety of your products before
          creating any physical prototypes.</p>
      </div>
    </div>
  </div>
</section>
<section class="p-0">
  <div class="row d-flex align-items-start justify-content-end icon-circles p-0 mx-0">
    <div class="col-xl-6 col-lg-6 col-md-12 m-0 px-0 align-self-center d-flex justify-content-center order-0">
      <img src="{{asset('images/pages/solidworks/3dexperience/spe_hero_banner_2.jpg')}}" class="img-fluid" alt="...">
    </div>
    <div class="col-xl-6 col-lg-5 col-md-12 py-5 py-lg-0 text-left m-auto">
      <div class="w-100 mx-auto" style="max-width:500px">
        <small>3DEXPERIENCE</small>
        <h2>Structural Professional Engineer</h2>
        <p>Quickly and cost-effectively validate your complex product designs to speed up innovation, enhance quality
          and reduce time-to-market.</p>
        <a href="{{route('solidworks.3dexperience.simulate.structural-professional-engineer')}}"
          class="btn btn-rounded btn-primary">Learn
          More</a>
      </div>
    </div>
  </div>
</section>
<section class="p-0">
  <div class="row d-flex align-items-start justify-content-end icon-circles p-0 mx-0">
    <div
      class="col-xl-6 col-lg-6 col-md-12 m-0 px-0 align-self-center d-flex justify-content-center order-lg-2 order-1">
      <img
        src="{{asset('images/pages/solidworks/3dexperience/PRODUCTS-SIMULATION-FOUNDATION-studies-dashboard-CFD-validation-hero-001.jpg')}}"
        class="img-fluid" alt="...">
    </div>
    <div class="col-xl-6 col-lg-5 col-md-12 py-5 py-lg-0 text-right m-auto  order-2 order-lg-1">
      <div class="w-100 mx-auto" style="max-width:500px">
        <small>3DEXPERIENCE</small>
        <h2>Simulation Foundation Engineer</h2>
        <p>Make informed design decisions by providing insight through realistic simulation. Connect to a cloud
          dashboard to access a library of simulation methods or find, monitor and resume simulation studies.</p>
        {{-- <a href="{{route('solidworks.3dexperience.simulate.simulia-simulation-foundation')}}"
          class="btn btn-rounded btn-primary">Learn
          More</a> --}}
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