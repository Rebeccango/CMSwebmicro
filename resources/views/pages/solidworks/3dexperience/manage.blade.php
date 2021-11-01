@extends('layouts.layout')
@section('title')
Manage | 3DEXPERIENCE Platform
@stop
@section('meta')
<link rel="canonical" href="{{route('solidworks.3dexperience.manage')}}" />
@stop
@section('description')SOLIDWORKS® Manage is a unique set of advanced data management tools that leverages the file
management capabilities of SOLIDWORKS PDM Professional and adds powerful project, process and item management
capabilities with interactive dashboards and reports.@stop
@section('body')
<section class="parallax-window parallax-section trans-header-window d-flex parallax"
  style="min-height:450px; background-image:url({{asset('/images/pages/solidworks/3dexperience/hero-startups.jpg')}})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          <h1>Data & Lifecycle Management in the Cloud</h1>
          <div class="section-title-divider"></div>
        </div>
        <p class="parallax-section__description h4">3D Experience Platform</p>
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
<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-sm-12 col-xs-12">
        <h3 class="mb-5 pt-4">Data & Lifecycle Management in the Cloud</h3>
      </div>
      <div class="col-lg-8 col-sm-12 col-xs-12">
        <p>Leverage applications within the 3DExperience Platform, including a broad portfolio of technical and business
          applications, to build and execute a successful plan for your enterprise</p>
        <p>Plan, develop and release more efficiently than ever with the collaboration tools offered on the 3DExperience
          Platform. The data and lifecycle management solutions enable you to seamlessly manage all stages of product
          development in your organization.</p>
      </div>
    </div>
  </div>
</section>
{{-- <section>
  <div class="container-fluid">
    <div class="content">
      <div class="section-title center-block mx-auto mb-0">
        <h2>WHAT SOLUTIONS DOES IT OFFER?</h2>
        <div class="section-title-divider"></div>
      </div>
      <div class="d-flex justify-content-center align-items-center w-100 row">
        <div class="col-lg-4 col-md-5 col-sm-12 col-12">
          <ul class="list-group content-center" style="max-width:700px">
            <li class="list-group-item d-flex flex-row align-items-center"><i class="fas fa-check mr-4"></i>Design</li>
            <li class="list-group-item d-flex flex-row align-items-center"><i class="fas fa-check mr-4"></i>Simulation
            </li>
            <li class="list-group-item d-flex flex-row align-items-center"><i class="fas fa-check mr-4"></i>Data
              Management</li>
            <li class="list-group-item d-flex flex-row align-items-center"><i
                class="fas fa-check mr-4"></i>Collaboration</li>
          </ul>
          <a href="https://www.youtube.com/watch?v=pGwtdAvStbE"
            class="my-4 mp-popup-video mp-single btn btn-primary btn-rounded"><i class="fab fa-youtube mr-3"></i>Short
            introduction video</a>
        </div>
        <div class="col-lg-8 col-md-7 col-sm-12 col-12">
          <img src="{{asset('images/pages/solidworks/3dexperience/3ds-compass.png')}}" class="w-100 my-4">
</div>
</div>
</div>
</div>
</section> --}}
<section class="pt-0">
  <div class="">
    <div class="custom-nav-pills">
      <ul class="nav nav-pills d-flex justify-content-center mx-auto border-left-0 border-right-0 border-top-0"
        role="tablist">
        <li class="nav-item">
          <a class="nav-link active in" data-toggle="tab" href="#enovia" role="tab">Project Planner by ENOVIA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#component-designer" role="tab">3D Component Designer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#industry-innovation" role="tab">Industry Innovation</a>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade show active in  border-0" id="enovia" role="tabpanel">
          <div class="row d-flex justify-content-center align-items-start">
            <div class="col-xl-6 col-lg-5 col-md-6 p-5">
              <small>MANAGE | 3DEXPERIENCE</small>
              <div class="h3">Project Planner by ENOVIA</div>
              <p>Manage projects and tasks, and automatically optimize activities and resources in your organization to
                meet key milestones and delivery dates.</p>
              <div class="h5">Key Features:</div>
              <ul class="p-3">
                <li>Improve team productivity</li>
                <li>Accelerate time from concept to delivery</li>
                <li>Collaborate securely with team members through ad-hoc access rights</li>
                <li>Connect attachments & deliverables to tasks for review by team members</li>
                <li>Define project scope, min-max task durations, dependencies and milestones</li>
                <li>Automatically schedule & optimize resources</li>
                <li>Stay up to date on progress with real time notifications</li>
                <li>Access project data anywhere and anytime</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="tab-pane fade  border-0" id="component-designer" role="tabpanel">
          <div class="row d-flex justify-content-center align-items-start">
            <div class="col-xl-6 col-lg-5 col-md-6 p-5">
              <small>MANAGE | 3DEXPERIENCE</small>
              <div class="h3">3D Component Designer</div>
              <p>Manage product designs and documents while performing lifecycle operations including revise, release
                and lock/unlock directly from your SOLIDWORKS desktop.</p>
              <div class="h5">Key Features:</div>
              <ul class="p-3">
                <li>Connect SOLIDWORKS CAD users to the 3DExperience Platform</li>
                <li>Perform lifecycle operations including revise, release and lock/unlock</li>
                <li>Easily navigate product structures to visualize designs and related changes</li>
                <li>Search, explore & select relevant design context from a web browser</li>
                <li>View and markup 3D product designs from within a web browser</li>
                <li>Leverage SOLIDWORKS data within 3DExperience apps for design, simulation, manufacturing and
                  governance</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="tab-pane fade  border-0" id="industry-innovation" role="tabpanel">
          <div class="row d-flex justify-content-center align-items-start">
          
            <div class="col-xl-6 col-lg-5 col-md-6 p-5">
              <small>MANAGE | 3DEXPERIENCE</small>
              <div class="h3">Industry Innovation</div>
              <p>Securely access product data, basic lifestyle management, and compliance services and enable real-time,
                secure and structured collaboration on product content. Leverage a scalable, online environment for
                managing product design, multi-physics simulation, and manufacturing process planning with maximum
                traceability and flexability.</p>
              <div class="h5">Key Features:</div>
              <ul class="p-3">
                <li>Enable efficient team collaboration through secured concurrent access to data and lifecycle management</li>
                <li>One single source of truth for all your product IP including multi CAD design dat</li>
                <li>Enable hybrid data and model-based driven engineering as enabler of end-to-end digital continuity</li>
                <li>Natural support of collaborative 3D validation scenario in a hybrid CAD environment</li>
                <li>Easily organize, optimize, access and execute work through tasks</li>
                <li>Compliance to standard enterprise business processes (Change, Project, Quality)</li>
                <li>Provides mobility and security via the Cloud</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@php
$resources = App\Resource::find([62,64,66]);
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