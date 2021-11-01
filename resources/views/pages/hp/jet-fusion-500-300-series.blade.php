@extends('layouts.layout')
@section('title')
HP Jet Fusion 580/380 Color and 540/340 3D Printers | HP 3D Printing Solutions
@stop
@section('meta')
<link rel="canonical" href="{{route('jet-fusion-500-300-series')}}" />
@stop
@section('description')CAD MicroSolutions is an authorized reseller of the new HP Jet Fusion 580/380 Color and 540/340
3D Printers! Produce functional parts in full color, black or white with voxel control in a fraction of the time! @stop
@section('keywords')3D,Jet
Fusion,500,300,580,380,540,40,color,solution,prototyping,printer,fast,mechanical,accurate,speed,parts,HP @stop
@section('body')
<section class="trans-header-window p-0">
  <section class="cd-hero">
    <ul class="cd-hero-slider cd-hero-100vh" data-height="600">
      <li class="cd-bg-video selected">
        <div class="cd-bg-video-wrapper" data-poster="{{asset('storage/videos/hp/ambient_vulcan.jpg')}}"
          data-video="{{asset('storage/videos/hp/ambient_vulcan')}}">
        </div>
      </li>
    </ul>
  </section> <!-- .cd-hero -->
  <div class="trans-heading">
    <div class="container-fluid">
      <div class="content white-content d-flex justify-content-center align-items-center">
        <div class="d-flex justify-content-center align-items-center h-100 flex-column">
          <div class="wow fadeIn text-center" data-wow-duration="1s" data-wow-delay="0.2s">
            <h1>HP Jet Fusion 300 &amp; 500 Series 3D Printers</h1>
            <h2 class="h5">Produce functional parts in full color, black or white with voxel control in a fraction of
              the time!</h3>
          </div>
          <div class="w-100">
            @include('layouts.generic_contact_buttons')
          </div>
          <div class="w-100 d-flex align-items-center justify-content-center mt-5">
            <button type="button" data-toggle="modal" data-target="#scheduleTechCentreDemo" style="max-width:auto"
              class="h6 btn btn-lg btn-outline-light rounded-pill">Schedule a visit to see the HP 580</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- <section class="section-secondary mt-0">
  <div class="container-fluid">
    <div class="d-flex justify-content-center align-items-center flex-column text-center">
      <button type="button" data-toggle="modal" data-target="#scheduleTechCentreDemo"
        class="h6 btn btn-lg btn-primary mt-3">Schedule a visit to see the HP 580</button>
    </div>
  </div>
</section> --}}
<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
        <h1>HP Jet Fusion 580/380 Color and 540/340 3D Printers</h1>
        <p class="lead">The cost-effective HP 3D printer tailored for small/medium-sized product development teams,
          design firms, and universities.</p>
        <p class="lead">Now you can prototype and produce with the same technology.</p>
        <img src="{{asset('storage/images/hp/hp_300_500_cost.png')}}" style="width:100%; height:auto; margin:15px 0;"
          width="100%" height="auto" />

      </div>
      <div class="col-lg-6 text-center">
        <div class="videoWrapper">
          <iframe width="100%" src="https://www.youtube.com/embed/Ftu0ZKCSnBs" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="videoCaption">Video: Introducing HP Jet Fusion 300/500 Series | Jet
          Fusion 3D Printing | HP</div>
        <div class="section-secondary text-center mx-auto mt-5">
          @if (Cookie::get('downloadFlyerFormFilled') !== null)
          <a class="btn btn-lg btn-primary" href="{{route('download-hp-jet-fusion-300-500-flyer')}}" target="_blank">
            DOWNLOAD THE FLYER
          </a>
          @else
          <button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#downloadFlyerForm">
            DOWNLOAD THE FLYER
          </button>
          @endif
        </div>
        <img src="https://www.cadmicro.com/storage/images/hp/Custom-Insignia.png" width="300px" height="auto" class="pt-5" />
      </div>
    </div>
  </div>
</section>
<section class="section-secondary my-5">
  <div class="container-fluid">
    <div class="row align-items-center">
      <div class="col-lg-7">
        <img src="{{asset('storage/images/hp/hp_jet_fusion_300_500.png')}}"
          style="width:100%; height:auto; margin:15px 0;" width="100%" height="auto" />
      </div>
      <div class="col-lg-5">
        <span class="h4">Full Color</span>
        <p class="mb-0">Available on HP Jet Fusion 580/380 3D Printers</p>
        <p>8-agent-configurability</p>
        <span class="h4">Black &amp; White</span>
        <p class="mb-0">HP Jet Fusion 540/340 3D Printers</p>
        <p>4-agent configurability</p>
        <span class="h4">Full Color</span>
        <p class="mb-0">Available on HP Jet Fusion 580/380 3D Printers</p>
        <p>8-agent-configurability</p>
        <span class="h4">Materials</span>
        <p class="">Access a wide range of future materials and applications with the HP Multi Jet Fusion Open
          Platform.</p>
        {{-- <span class="h4">Services</span>
        <p class="mb-0">Gain peace of mind—we’re here to meet your in-house 3D printing needs with HP’s world-class
          training, support,and services</p> --}}
      </div>
    </div>
  </div>
</section>
<section class="container-fluid">
  <div class="section-title center-block mx-auto">
    <h2 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">About the HP Fusion 300 &amp; 500 Series 3D
      Printing Solutions</h2>
    <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
  </div>
  <div class="section-block pl-3 pr-3" style="margin-top:-30px;">
    <div class="s40"></div>
    <div class="section-icon-group row">
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class='icon-content' style="max-width:100%;">
          <div class="icon-link">
            <div class="icon"
              style="background-image:url('{{asset('storage/images/hp/hp_icon_1.png')}}'); background-size: contain; height:100px; margin-bottom:20px; width: auto;"
              alt="SolidWorks 3D CAD">
            </div>
            <h3 class="icon-title" style="margin-top:20px;">Produce accurate, functional parts with intricate detail
            </h3>
          </div>
          <div class="icon-body">
            <ul style="font-size:12px">
              <li>Produce engineering-grade thermoplastic parts with optimal mechanical properties</li>
              <li>Achieve fine detail and high dimensional accuracy for small features</li>
              <li>Access a wide range of future materials and applications with the HP Multi Jet Fusion Open Platform
              </li>
              <li>Get accurate and repeatable results</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class='icon-content' style="max-width:100%;">
          <div class="icon-link">
            <div class="icon"
              style="background-image:url('{{asset('storage/images/hp/hp_icon_2.png')}}'); background-size: contain; height:100px; margin-bottom:20px; width: auto;"
              alt="SolidWorks 3D CAD">
            </div>
            <h3 class="icon-title" style="margin-top:20px;">Accelerate your design cycle—create, test, iterate in just
              hours</h3>
          </div>
          <div class="icon-body">
            <ul style="font-size:12px">
              <li>Increase your productivity—produce multiple prototype iterations in the same time it takes to print a
                single part</li>
              <li>Access convenient in-house automated production with the most compact HP Jet Fusion device</li>
              <li>Get the parts you want when you need them, easily, reliably, and predictably</li>
              <li>Move smoothly from prototyping to final part production with the same HP Multi Jet Fusion platform
              </li>
              <li>Gain peace of mind—we’re here to meet your in-house 3D printing needs with HP’s world-class training,
                support, and services</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class='icon-content' style="max-width:100%;">
          <div class="icon-link">
            <div class="icon"
              style="background-image:url('{{asset('storage/images/hp/rgb.svg')}}'); background-size: contain; height:100px; margin-bottom:20px; width: auto;"
              alt="SolidWorks 3D CAD">
            </div>
            <h3 class="icon-title" style="margin-top:20px;">Create full spectrum color parts with a voxel-control
              system poised for future innovation</h3>
          </div>
          <div class="icon-body">
            <ul style="font-size:12px">
              <li>Produce brilliant, full-color functional parts while maintaining optimal mechanical properties</li>
              <li>Stay ahead with a future-ready technology, configurable for voxel control beyond color</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="s40"></div>
<section class="container-fluid d-flex justify-content-start align-items-start pb-5">
  <div class="col-lg-9 col-md-9 col-xs-12 col-sm-12">
    <h2 class="main-title wow fadeInLeft" data-wow-duration="1s" style="margin-left:0;" data-wow-delay="0.2s">Technical
      information</h2>
    <table class="table table-striped ctable">
      <thead class="thead-inverse">
        <tr>
          <th></th>
          <th>Details</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Printable build size
            580/540 Printers:</th>
          <td>up to 7.5 x 13.1 x 9.8 inches
            (190 mm x 332 mm x 248 mm)</td>
        </tr>
        <tr>
          <th scope="row">Printable build size
            380/340 Printers:</th>
          <td>up to 7.5 x 10 x 9.8 inches
            (190 mm x 254 mm x 248 mm)</td>
        </tr>
        <tr>
          <th>
            Layer thickness:
          </th>
          <td>0.08mm</td>
        </tr>
        <tr>
          <th>
            Productivity:
          </th>
          <td>Full bucket with 52 parts in about 15 hours, as
            many as 5 parts in around four hours</td>
        </tr>
        <tr>
          <th>
            Printer dimensions:
          </th>
          <td>Printer dimensions: 61.6 x 37.6 x 59.3 inches
            (1565mm x 955mm x 1,505mm) Rear module
            can be temporarily removed to fit through a
            36-inch (900mm) door</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12 img-shadow wow fadeInRight" data-wow-duration="1s"
    data-wow-delay="0.2s" style="background: #f0f0f0; padding-bottom: 30px;">
    <h2 class="main-title">Looking for large production runs?</h2>
    <h3>
      Upgrade to HP’s 3D MultiJet Fusion 4200 Production Series!
    </h3>
    <a class="btn btn-sm btn-white wow fadeInUp" style="margin:0 auto;display:block;width: inherit;margin-top:20px;"
      data-wow-duration="1s" data-wow-delay="0.2s" href="{{route('jet-fusion-4200')}}">Learn More</a>
  </div>
</section>
@php
$resources = App\Resource::find([196,200,197]);
@endphp
@if(count($resources))
<section>
  <div class="container">
    <h2 class="main-title ml-0">Service Plans</h2>
    <div class="d-flex flex-wrap">
      @foreach ($resources as $resource)
      <div class="p-3">

        <a target="_blank" href="{{asset("storage/".json_decode(trim($resource->file),true)[0]['download_link'])}}"
          class="pdf-item text-center mx-auto">
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
</section>
@endif
@stop

@push('foot')
<div class="modal fade" id="downloadFlyerForm" tabindex="-1" role="dialog" aria-labelledby="downloadFlyerFormLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="downloadFlyerFormLabel">Download the Jet Fusion 300/500 Flyer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div data-form-block-id="fc0d5e07-61ad-e911-a987-000d3a3702ca"></div>
        <div id="dq670WIEuT0nWDjxzeq6ZZyDeULVBeNikhpxBPsVVNgg"></div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="scheduleTechCentreDemo" tabindex="-1" role="dialog" aria-labelledby="scheduleTechCentreDemo"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Schedule a visit to the HP 580 demonstration site</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div data-form-block-id="6920d969-60ad-e911-a987-000d3a3702ca"></div>
        <div id="dVgOLzoc2WccmHK3LBJcCs-tnaKPxVU1v-tIGyVfcjPU"></div>
      </div>
    </div>
  </div>
</div>
@endpush
@push('after-styles')
<style>
  .ctable * {
    font-size: 12px;
  }
</style>
@endpush