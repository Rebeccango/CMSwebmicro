@extends('layouts.layout')
@section('title')
Simulia Simulation Foundation | 3DEXPERIENCE Platform
@stop
@section('meta')
<link rel="canonical" href="{{route('solidworks.3dexperience.simulate.simulia-simulation-foundation')}}" />
@stop
@section('description')Make informed design decisions by providing insight through realistic simulation. Connect to a
cloud dashboard to access a library of simulation methods or find, monitor and resume simulation studies.@stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
  style="min-height:250px; background-image:url({{asset('/images/pages/solidworks/3dexperience/PRODUCTS-SIMULATION-FOUNDATION-studies-dashboard-CFD-validation-hero-001.jpg')}});">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          <h1>Simulia Simulation Foundation</h1>
          <div class="section-title-divider"></div>
          <p class="parallax-section__description h4">3DEXPERIENCE Platform</p>
          <h2 class="text-center mx-auto lead h6" style="max-width:500px">Make informed design decisions by providing
            insight through realistic simulation. Connect to a cloud dashboard to access a library of simulation methods
            or find, monitor and resume simulation studies.</h2>
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
        <h3 class="mb-5">Why Choose SIMULIA Simulation Foundation?</h3>
        <p class="lead mb-0">Focusing on ease of use and efficiency, SIMULIA® Simulation Foundation helps you leverage
          your organization’s library of deployed simulation processes to make more informed decisions and design better
          products. It can act as a dashboard for finding, monitoring, or resuming previous simulations.</p>
      </div>
    </div>
  </div>
</section>
<section class="p-0">
  <div class="row d-flex align-items-start justify-content-end icon-circles p-0 mx-0">
    <div class="col-xl-6 col-lg-6 col-md-12 m-0 px-0 align-self-center d-flex justify-content-center order-0">
      <img
        src="{{asset('images/pages/solidworks/3dexperience/product-3dexperience-scs-most-relevant-information-001-vp-1.jpg')}}"
        class="img-fluid w-100">
    </div>
    <div class="col-xl-6 col-lg-5 col-md-12 py-5 py-lg-0 text-left m-auto">
      <div class="w-100 mx-auto" style="max-width:500px">
        <div class="section-title center-block mx-auto my-5 text-center">
          <div class="h2">Discover the features in Industry Innovation</div>
          <div class="section-title-divider"></div>
        </div>
        <table class="table table-striped" id="industry-innovation-accordion">
          <tbody>
            <tr>
              <td>
                <div data-toggle="collapse" data-target="#accesssimlib" aria-expanded="true" aria-controls="accesssimlib">
                  <i class="fas fa-plus fa-xs  ml-2 mr-4"></i>Access Simulation Library</div>
                <div id="accesssimlib" class="collapse mt-4" data-parent="#industry-innovation-accordion">
                  <p>Access and run your company's library of deployed simulation processes.</p>
                </div>
              </td>
            </tr>{{-- end --}}
            <tr>
              <td>
                <div data-toggle="collapse" data-target="#customsimdisplay" aria-expanded="true" aria-controls="customsimdisplay">
                  <i class="fas fa-plus fa-xs  ml-2 mr-4"></i>Customized Simulation Display
                </div>
                <div id="customsimdisplay" class="collapse mt-4" data-parent="#industry-innovation-accordion">
                  <p>Build your own simulation dashboard, with widgets to view all recent simulation content, track any
                    running jobs, or open a simulation in more detail.</p>
                </div>
              </td>
            </tr>{{-- end --}}
            <tr>
              <td>
                <div data-toggle="collapse" data-target="#simcollab" aria-expanded="true" aria-controls="simcollab">
                  <i class="fas fa-plus fa-xs  ml-2 mr-4"></i>Simulation Collaboration</div>
                <div id="simcollab" class="collapse mt-4" data-parent="#industry-innovation-accordion">
                  <p>Share simulation results with non-Simulation users with 3DPlay. Review simulation analytics from
                    multiple analysis for decision-making and trade-off analysis.</p>
                </div>
              </td>
            </tr>{{-- end --}}
            <tr>
              <td>
                <div data-toggle="collapse" data-target="#simimpactanalysis" aria-expanded="true" aria-controls="simimpactanalysis">
                  <i class="fas fa-plus fa-xs  ml-2 mr-4"></i>Simulation Impact Analysis</div>
                <div id="simimpactanalysis" class="collapse mt-4" data-parent="#industry-innovation-accordion">
                  <p>Impact analysis for understanding which inputs and tools were used to generate your results and
                    determine if they are synchronized.</p>
                </div>
              </td>
            </tr>{{-- end --}}
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
@php
$resources = App\Resource::find([65]);
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
          <p class="lead">Contact us to learn more and get started with Simulia Simulation Foundation</p>
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