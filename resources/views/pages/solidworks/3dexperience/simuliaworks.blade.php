@extends('layouts.layout')
@section('title')
SIMULIAworks | 3DEXPERIENCE Platform
@stop
@section('meta')
<link rel="canonical" href="{{route('solidworks.3dexperience.simulate.simuliaworks')}}" />
@stop
@section('description')Leveraging the power of Abaqus technology, SIMULIAworks enables advanced simulation to help users
make better design
decisions faster.@stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
  style="min-height:250px; background-image:url({{asset('/images/pages/solidworks/3dexperience/spe_hero_banner_4.jpg')}});">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          <h1>SIMULIAworks: Scalable Simulation and Engineering Collaboration on the Cloud</h1>
          <div class="section-title-divider"></div>
          <p class="parallax-section__description h4">3DEXPERIENCE Platform</p>
          <p class="text-center mx-auto lead" style="max-width:500px">Featuring Abaqus technology, SIMULIAworks brings
            advanced simulation capabilities to your product development process.</p>
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
      <div class="col-lg-12 col-sm-12 col-xs-12">
        <h3 class="mb-5">SIMULIAworks Cloud Simulation Powers Innovation</h3>
      </div>
      <div class="col-md-6 col-sm-12">
        <div class="embed-responsive embed-responsive-16by9" style="max-width:800px">
          <iframe src="https://www.youtube.com/embed/kuZhti5QwOk" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-md-6 col-sm-12">
        <p class="py-4 py-md-0 lead">As part of the cloud-based 3DEXPERIENCE WORKS portfolio, SIMULIAworks offers a scalable
          solution to meet your needs,
          giving you the flexibility to decide which simulation capabilities you need, when you need them. It gives
          novices and
          experts alike the ability to perform non-linear and complex linear analyses to validate product designs and make
          better-informed product design decisions faster. Any engineer on your team can easily access advanced
          simulation capabilities without the need for expensive hardware, and can benefit from real-time collaboration and
          data sharing.</p>
      </div>
    </div>
  </div>
</section>
<section class="p-0">
  <div class="section-title center-block mx-auto my-5 text-center">
    <div class="h2">Discover SIMULIAworks Capabilities</div>
    <div class="section-title-divider"></div>
  </div>
  <div class="row d-flex align-items-start justify-content-end icon-circles p-0 mx-0">
    <div class="col-xl-6 col-lg-6 col-12 m-0 order-0">
      <img
        src="{{asset('images/pages/solidworks/3dexperience/Simulation-Mower-Impact.jpg')}}"
        class="img-fluid w-100">
    </div>
    <div class="col-xl-6 col-lg-6 col-12 py-5 py-lg-0">
      <div class="w-100 mx-auto">
        <table class="table table-striped" id="simuliaworks-capabilities">
          <tbody>
            <tr>
              <td>
                <div data-toggle="collapse" data-target="#connected" aria-expanded="true"
                  aria-controls="connected">
                  <i class="fas fa-plus fa-xs  ml-2 mr-4 display-4"></i>Connected</div>
                <div id="connected" class="collapse mt-4 show" data-parent="#simuliaworks-capabilities">
                  <ul>
                    <li>Maintain continuity with SOLIDWORKS data and workflows</li>
                    <li>Expensive hardware and IT infrastructure not required</li>
                    <li>Choose the simulation solution that scales to meet your project needs</li>
                  </ul>
                </div>
              </td>
            </tr>{{-- end --}}
            <tr>
              <td>
                <div data-toggle="collapse" data-target="#powerful" aria-expanded="true"
                  aria-controls="powerful">
                  <i class="fas fa-plus fa-xs  ml-2 mr-4"></i>Powerful
                </div>
                <div id="powerful" class="collapse mt-4" data-parent="#simuliaworks-capabilities">
                  <ul>
                    <li>Conduct analyses with proven industry-leading Abaqus technology</li>
                    <li>Leverage implicit and explicit solvers for linear and non-linear analysis, static & dynamic events</li>
                    <li>Create high-quality meshes and solve complex simulations including drop test and impact</li>
                  </ul>
                </div>
              </td>
            </tr>{{-- end --}}
            <tr>
              <td>
                <div data-toggle="collapse" data-target="#collaborative" aria-expanded="true" aria-controls="collaborative">
                  <i class="fas fa-plus fa-xs  ml-2 mr-4"></i>Collaborative</div>
                <div id="collaborative" class="collapse mt-4" data-parent="#simuliaworks-capabilities">
                  <ul>
                    <li>Access and visualize 3D simulation results from anywhere with a web browser</li>
                    <li>Share the status and simulation results with your team</li>
                    <li>Save, manage and iterate on your projects from anywhere</li>
                  </ul>
                </div>
              </td>
            </tr>{{-- end --}}
          </tbody>
        </table>
        <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <h3 class="display-5">SIMULIAworks Matrix</h3>
            <p class="lead">Discover all of the capabilities & benefits</p>
            <a class="btn btn-primary btn-rounded" href='https://www.cadmicro.com/resources/130/simuliaworks-product-matrix' target="_blank">Learn More<i class="fas fa-chevron-right ml-3"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@php
$resources = App\Resource::find([130,131,132]);
@endphp
@if(count($resources) > 0)
<section>
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
          <p class="lead">Contact us to learn more and get started with SIMULIAworks</p>
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