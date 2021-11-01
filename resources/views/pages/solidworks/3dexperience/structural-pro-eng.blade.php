@extends('layouts.layout')
@section('title')
Structural Professional Engineer | 3DEXPERIENCE Platform
@stop
@section('meta')
<link rel="canonical" href="{{route('solidworks.3dexperience.simulate.structural-professional-engineer')}}" />
@stop
@section('description')Quickly and cost-effectively validate your complex product designs to speed up innovation,
enhance quality and reduce time-to-market.@stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
  style="min-height:250px; background-image:url({{asset('/images/pages/solidworks/3dexperience/3d-sculptor.jpg')}});">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          <h1>Structural Professional Engineer</h1>

          <div class="section-title-divider"></div>
          <p class="parallax-section__description h4">3DEXPERIENCE Platform</p>

          <h2 class="text-center mx-auto lead h6" style="max-width:500px">Quickly and cost-effectively validate your
            complex product designs to speed up innovation, enhance quality and reduce time-to-market.</h2>
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
  <div class="container-fluid py-5">
    <div class="row">
      <div class="col-lg-12 col-sm-12 col-xs-12">
        <h3 class="mb-5">Solve Complex Physics with Confidence</h3>
        <p class="lead mb-0">Extend SOLIDWORKS® Simulation with a tightly integrated, cloud-based solution and conduct
          structural static, frequency, buckling, modal dynamic response, and structural-thermal analysis of parts and
          assemblies. Structural Professional Engineer, a part of the SIMULIAWORKS portfolio of solutions, provides
          advanced simulation capabilities to SOLIDWORKS users. Built on the cloud-based Dassault Systèmes 3DEXPERIENCE®
          platform, it enables you to run simulations on both your local machine or in the cloud. Leverage the growing
          suite of apps available on the platform aiming to help you with all facets of creating innovative, successful
          products.</p>
      </div>
    </div>
  </div>
</section>
<section class="p-0">
  <div class="row d-flex align-items-start justify-content-end icon-circles p-0 mx-0">
    <div class="col-xl-6 col-lg-6 col-md-12 m-0 px-0 align-self-center d-flex justify-content-center order-0">
      <img src="{{asset('images/pages/solidworks/3dexperience/sse-non-llinear-solver-beamy-bending-001.jpg')}}" class="img-fluid">
    </div>
    <div class="col-xl-6 col-lg-5 col-md-12 py-5 py-lg-0 text-left m-auto">
      <div class="w-100 mx-auto" style="max-width:500px">
        <small>Structural Professional Engineer | Design</small>
        <h3>Handle High Complexity with Nonlinear Solver</h3>
        <p>Solve complex nonlinear static structural problems with an intuitive advanced simulation technology powered
          by SIMULIA Abaqus, the proven world-class Finite Element Analysis Solver. Speed up post-processing and the
          visualization of large models. Capture a precise load history of multiple and sequential load cases.</p>
      </div>
    </div>
  </div>
</section>
<section class="p-0">
  <div class="row d-flex align-items-start justify-content-end icon-circles p-0 mx-0">
    <div
      class="col-xl-6 col-lg-6 col-md-12 m-0 px-0 align-self-center d-flex justify-content-center order-lg-2 order-1">
      <img src="{{asset('images/pages/solidworks/3dexperience/sse-reuse-existing-designs-through-tight-integration-001.jpg')}}"
        class="img-fluid w-100">
    </div>
    <div class="col-xl-6 col-lg-5 col-md-12 py-5 py-lg-0 text-left m-auto  order-2 order-lg-1">
      <div class="w-100 mx-auto" style="max-width:500px">
        <small>Structural Professional Engineer | Design</small>
        <h3>Reuse Existing Designs through Tight Integration</h3>
        <p>Access Structural Professional Engineer directly from SOLIDWORKS Simulation and let your geometry and model
          features be transferred into the former with a single click. Set advanced simulations in less time by reusing
          loads, boundary conditions, mesh definitions, and material properties. Every time you modify your SOLIDWORKS
          CAD design, your simulation model in Structural Professional Engineer updates automatically.</p>
      </div>
    </div>
  </div>
</section>
<section class="p-0">
  <div class="row d-flex align-items-start justify-content-end icon-circles p-0 mx-0">
    <div class="col-xl-6 col-lg-6 col-md-12 m-0 px-0 align-self-center d-flex justify-content-center">
      <img src="{{asset('images/pages/solidworks/3dexperience/sse-accelerate-design-process-cloud-computing-001.jpg')}}" class="img-fluid w-100">
    </div>
    <div class="col-xl-6 col-lg-5 col-md-12 py-5 py-lg-0 text-left m-auto">
      <div class="w-100 mx-auto" style="max-width:500px">
        <small>Structural Professional Engineer | Design</small>
        <h3>Accelerate the Design Process with Cloud Computing</h3>
        <p>Enable multi-threaded cloud computing for rendering and visualization computations of your large-scale
          simulation data. Running your simulation on the cloud lets you access more processing cores. This helps you
          run complex simulations with speed, clarity, and control and make design decisions faster. It also frees up
          your local machines for other design or simulation work.</p>
      </div>
    </div>
  </div>
</section>
<section class="p-0">
  <div class="row d-flex align-items-start justify-content-end icon-circles p-0 mx-0">
    <div
      class="col-xl-6 col-lg-6 col-md-12 m-0 px-0 align-self-center d-flex justify-content-center order-lg-2 order-1">
      <img
        src="{{asset('images/pages/solidworks/3dexperience/sse-boost-accuracy-advanced-meshing-tools-001.jpg')}}"
        class="img-fluid w-100">
    </div>
    <div class="col-xl-6 col-lg-5 col-md-12 py-5 py-lg-0 text-left m-auto  order-2 order-lg-1">
      <div class="w-100 mx-auto" style="max-width:500px">
        <small>Structural Professional Engineer | Design</small>
        <h3>Boost Accuracy with Advanced Meshing Tools</h3>
        <p>Choose between controlled or automated mesh creation and generate high-quality solid and shell meshes. Select
          from different element types and shapes including quads and triangles for shell elements and bricks and
          tetrahedra for solid elements. Automate the creation of repetitive meshes with Rule-Based Meshing and
          automatic feature recognition for holes, fillets, and beads.</p>
      </div>
    </div>
  </div>
</section>
<section class="p-0">
  <div class="row d-flex align-items-start justify-content-end icon-circles p-0 mx-0">
    <div class="col-xl-6 col-lg-6 col-md-12 m-0 px-0 align-self-center d-flex justify-content-center">
      <img src="{{asset('images/pages/solidworks/3dexperience/sse-save-time-general-contact-001.jpg')}}" class="img-fluid w-100">
    </div>
    <div class="col-xl-6 col-lg-5 col-md-12 py-5 py-lg-0 text-left m-auto">
      <div class="w-100 mx-auto" style="max-width:500px">
        <small>Structural Professional Engineer | Design</small>
        <h3>Save Time with General Contact</h3>
        <p>Define contact with greater ease, especially for multiple components and complex topology. Instead of setting
          contact pairs, use a single interaction to encompass contact globally. Maintain flexibility within the global
          definition to modify interactions of sub-regions or deactivate them if desired.</p>
      </div>
    </div>
  </div>
</section>
<section class="p-0">
  <div class="row d-flex align-items-start justify-content-end icon-circles p-0 mx-0">
    <div
      class="col-xl-6 col-lg-6 col-md-12 m-0 px-0 align-self-center d-flex justify-content-center order-lg-2 order-1">
      <img
        src="{{asset('images/pages/solidworks/3dexperience/sse-accurately-simulate-complex-materials-001.jpg')}}"
        class="img-fluid w-100">
    </div>
    <div class="col-xl-6 col-lg-5 col-md-12 py-5 py-lg-0 text-left m-auto  order-2 order-lg-1">
      <div class="w-100 mx-auto" style="max-width:500px">
        <small>Structural Professional Engineer | Design</small>
        <h3>Accurately Simulate Complex Materials</h3>
        <p>Explore nonlinear material models including metal plasticity, rubber hyperelasticity, as well as
          viscoelasticity and material failure. Structural Professional Engineer helps you to simulate your material
          behavior realistically in conjunction with the various available element types and the robust and efficient
          Abaqus Solver.</p>
      </div>
    </div>
  </div>
</section>
<section class="p-0">
  <div class="row d-flex align-items-start justify-content-end icon-circles p-0 mx-0">
    <div class="col-xl-6 col-lg-6 col-md-12 m-0 px-0 align-self-center d-flex justify-content-center">
      <img src="{{asset('images/pages/solidworks/3dexperience/sse-design-better-products-easy-access-simulation-data-001.jpg')}}" class="img-fluid w-100">
    </div>
    <div class="col-xl-6 col-lg-5 col-md-12 py-5 py-lg-0 text-left m-auto">
      <div class="w-100 mx-auto" style="max-width:500px">
        <small>Structural Professional Engineer | Design</small>
        <h3>Design Better Products with Easy Access to Simulation Data</h3>
        <p>Build your own simulation dashboards in the cloud. Use widgets to view all of your recent simulation content,
          track any running jobs or open up a simulation in more detail. Create a lightweight visualization of the
          geometry and simulation results and easily share engineering and design insights with non-specialist users.
        </p>
      </div>
    </div>
  </div>
</section>
<section class="p-0">
  <div class="row d-flex align-items-start justify-content-end icon-circles p-0 mx-0">
    <div
      class="col-xl-6 col-lg-6 col-md-12 m-0 px-0 align-self-center d-flex justify-content-center order-lg-2 order-1">
      <img
        src="{{asset('images/pages/solidworks/3dexperience/sse-instill-innovation-cloud-based-platform-001.jpg')}}"
        class="img-fluid w-100">
    </div>
    <div class="col-xl-6 col-lg-5 col-md-12 py-5 py-lg-0 text-left m-auto  order-2 order-lg-1">
      <div class="w-100 mx-auto" style="max-width:500px">
        <small>Structural Professional Engineer | Design</small>
        <h3>Instill Innovation with a Cloud-Based Platform</h3>
        <p>With its expanding app portfolio, provided by your trusted partner, Dassault Systèmes, the 3DEXPERIENCE
          platform can meet all of your product needs. From ideation and program management, to design, manufacturing
          and documentation, it aims to give you the tools, data management, and collaborative environment needed to
          accelerate innovation. For example, storing data in the cloud lets you share your model and results in real
          time anywhere with a web browser. You can easily create dashboards to review and share the latest data and
          make informed decisions faster.</p>
      </div>
    </div>
  </div>
</section>
@php
$resources = App\Resource::find([67, 68]);
@endphp
@if(count($resources) > 0)
<section class="pt-0">
  <div class="container">
    <div class="custom-nav-pills">
      <ul class="nav nav-pills" role="tablist">
        <li class="nav-item">
          <a class="nav-link active in" data-toggle="tab" href="#datasheet" role="tab">Data Sheets</a>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade active show" id="datasheet" role="tabpanel">
          <div class="row" style="margin:0; padding:0">
            @foreach ($resources as $resource)
            <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a target="_blank" href="{{$resource->publicURL}}" class="pdf-item text-center mx-auto">
                <figure class="text-center">
                  <div class="figimg text-center">
                    <img src="{!! thumbnail($resource->thumbnail) !!}" style="width:100%;" alt="{{$resource->name}}">
                  </div>
                  <figcaption>{{$resource->name}}</figcaption>
                </figure>
              </a>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endif
<section class=" parallax-section parallax d-flex"
  style="min-height:500px; background-image:url({{asset('/images/pages/solidworks/3dexperience/3dxworksbannerb10.jpg')}});">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-start align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block text-left">
          <h3 class="h1 text-left">It's Time to Transform the Way You Work</h3>
          <p class="lead">Contact us to learn more and get started with Structural Professional Engineer</p>
        </div>
        <button type="button" class="btn btn-lg btn-rounded btn-white mx-auto text-sm" data-toggle="modal"
          data-target="#experience">
          Learn More<i class="ml-2 far fa-caret-square-right"></i>
        </button>
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