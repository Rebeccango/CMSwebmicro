@extends('layouts.layout')
@section('title')
SolidWorks Flow Simulation
@stop
@section('meta')
<link rel="canonical" href="{{route('solidworks-simulation-flowSimulation')}}" />
@stop
@section('description')SolidWorks Flow Simulation takes the complexity out of computational fluid dynamics. You can
quickly and easily simulate fluid flow, heat transfer, and fluid forces that are critical to the success of your
design.@stop
@section('keywords')SolidWorks, Flow, Simulation, Flow Simulation, Computational fluid dynamics @stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
  style="min-height:450px; background-image:url({{asset('images/pages/solidworks/flowsim/PRODUCTS-FLOW-SIMULATION-CFD-coooling-HVAC-hero-001.jpg')}})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          <h1>SolidWorks Flow Simulation</h1>
          <div class="section-title-divider " data--duration="0.8s" data--delay="0.5s"></div>
        </div>
        <div>
          <p class="parallax-section__description">Simulate the fluid flow, heat transfer, and fluid forces that are
            critical to the success of your designs.</p>
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
    <div class="content">
      <div class="section-title center-block mx-auto">
        <h1>SolidWorks Flow Simulation</h1>
        <div class="section-title-divider"></div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="section-block row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h2 class="font-weight-bold main-title mt-0">Why Choose SOLIDWORKS Flow Simulation?</h2>
        <p>
          Easily simulate fluid flow, heat transfer, and fluid forces that are critical to the success of your design
          with
          SOLIDWORKS Flow Simulation. Fully embedded within SOLIDWORKS 3D CAD, Flow Simulation is an intuitive
          Computational Fluid
          Dynamics (CFD) tool that enables you to simulate liquid and gas flow in real world conditions, run “what if”
          scenarios,
          and efficiently analyze the effects of fluid flow, heat transfer, and related forces on immersed or
          surrounding
          components.
        </p>
        <p>
          Compare design variations to make better decisions and ultimately create products with superior performance.
          Driven by
          engineering goals, SOLIDWORKS Flow Simulation enables Product Engineers to use CFD insights for making their
          technical
          decision through a concurrent engineering approach. Additional HVAC and Electronic Cooling modules offer
          dedicated fluid
          flow simulation tools for detailed analysis.
        </p>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe src="https://www.youtube.com/embed/h5rEQsPXCvg" class="embed-responsive-item" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="videoCaption w-100">Introduction to Flow Simulation - SOLIDWORKS</div>
      </div>
    </div>
  </div>
</section>
<section
  style="background-image:url('{{asset('storage/banners/background-package-features.jpg')}}'); background-size:cover;">
  <div class="container-fluid">
    <div class="content">
      <div class="section-title center-block mx-auto">
        <h1 style="color:white; max-width:800px; margin:auto">Which SOLIDWORKS Flow Simulation package is  for you?
        </h1>
        <div class="section-title-divider"></div>
      </div>
      <div class="row">
        <div class="col col-lg-4 col-sm-12 col-xs-12 py-4 d-flex align-items-stretch">
          <div class="card img-shadow d-flex justify-content-center align-items-center pb-4">
            <div class="card-body p-5 pt-3 text-center">
              <div class="h4 text-center w-100 my-2 mb-4">
                SOLIDWORKS Flow Simulation
              </div>
              <p class="text-center w-100">SOLIDWORKS Flow Simulation is a general parametric flow simulation tool that
                uses the Finite Volume Method (FVM) to
                calculate product performance through “what if” studies that allow you to perform optimization using the
                results.</p>
            </div>
            <button class="btn btn-primary btn-rounded btn-dialog px-4" data-toggle="modal" data-target="#contactModal"
              title="Contact us">Contact Us</button>
          </div>
        </div>
        <div class="col col-lg-4 col-sm-12 col-xs-12 py-4 d-flex align-items-stretch">
          <div class="card img-shadow d-flex justify-content-center align-items-center pb-4">
            <div class="card-body p-5 pt-3 text-center">
              <div class="h4 text-center w-100 my-2 mb-4">
                HVAC Module
              </div>
              <br />
              <p class="text-center w-100">Dedicated heating, cooling, and ventilation tools for simulating HVAC systems
                and radiation phenomena.</p>
            </div>
            <button class="btn btn-primary btn-rounded btn-dialog px-4" data-toggle="modal" data-target="#contactModal"
              title="Contact us">Contact Us</button>
          </div>
        </div>
        <div class="col col-lg-4 col-sm-12 col-xs-12 py-4 d-flex align-items-stretch">
          <div class="card img-shadow d-flex justify-content-center align-items-center pb-4">
            <div class="card-body p-5 pt-3 text-center">
              <div class="h4 text-center w-100 my-2 mb-4">
                Electronics Cooling Module
              </div>
              <p class="text-center w-100">Dedicated thermal management study simulation tools for accurate thermal
                analysis of electronic Printed Circuit Board
                (PCB) and enclosure designs.</p>
            </div>
            <button class="btn btn-primary btn-rounded btn-dialog px-4" data-toggle="modal" data-target="#contactModal"
              title="Contact us">Contact Us</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container-fluid">
    @component('components.ResourceTabs.tabs')
    @slot('datasheet')
    @component('components.ResourceTabs.resources', ['resources' => [159]]) @endcomponent
    @endslot
    @slot('matrix')
    @include('pages.matrix.solidworks-flow-simulation')
    @endslot
    @slot('cases')
    @component('components.ResourceTabs.resources', ['resources' => [160]]) @endcomponent
    @endslot
    @endcomponent
  </div>
</section>
@stop