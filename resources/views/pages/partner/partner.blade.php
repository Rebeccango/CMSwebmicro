@extends('layouts.layout')
@section('title')
Explore our Partner Products
@stop
@section('meta')
<link rel="canonical" href="{{route('partner-products')}}" />
@stop
@section('description') @stop
@section('keywords')DriveWorks, Simerics,LogoPress, DataKit, Optis, Visual Components, CAMWorks, ExactFlat, KeyShot, SWOOD, BuiltWorks @stop
@push('after-styles')
<style>
  .icon-block .btn-white {
    position: absolute;
    bottom: 30px;
    margin: 0 auto;
    left: 50%;
    margin-left: -85px !important;
  }

  .icon-block {
    padding-bottom: 70px !important;
  }

  .icon-content {
    max-width: 280px !important;
  }
</style>
@endpush
@section('body')
<section>
  <div class="container-fluid">
    <div class="content">
      <div class="section-title center-block mx-auto">
        <h1 class="wow fadeIn" data-wow-delay="0.5s">EXPLORE OUR PARTNER PRODUCTS</h1>
        <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
      </div>
      <div class="section-block">
        <div class="section-icon-group row" style="margin-top:-30px;">
          <div class="icon-block col-lg-4 col-md-4 col-sm-6 col-xs-12  " data-wow-delay="0.5s"
            style="padding-top:40px;">
            <div class='icon-content'>
              <a class="icon-link" href="{{route('driveWorks')}}">
                <div class="icon"
                  style="background-image:url('{{asset('storage/images/partner/DriveWorks_logo.png')}}'); background-size: contain; width: auto; height: 120px;">
                </div>
                <h2 class="icon-title">Explore DriveWorks Software</h2>
              </a>
              <div class="icon-body">
                <p>
                  An easy-to-use product configurator that works inside SolidWorks, and delivers
                  Knowledge-Based-Engineering to your team.
                </p>
              </div>
            </div>
            <a class="btn btn-sm btn-white  btn-rounded" href="{{route('driveWorks')}}">Learn More</a>
          </div>
          <div class="icon-block col-lg-4 col-md-4 col-sm-6 col-xs-12  " data-wow-delay="0.5s">
            <div class='icon-content'>
              <a class="icon-link" href="{{route('simerics')}}">
                <div class="icon"
                  style="background-image:url('{{asset('storage/images/partner/simerics.png')}}'); background-size: contain; width: auto; height:120px;">
                </div>
                <h2 class="icon-title" style="margin-top:30px;">Explore Simerics</h2>
              </a>
              <div class="icon-body">
                <p>
                  Simerics CFD for SOLIDWORKS is a multi-purpose Computational Fluid Dynamics (CFD) and multi-physics simulation tool that provides fast and accurate solutions for  predicting the real-world performance of a variety of products. </p>
              </div>
            </div>
            <a class="btn btn-sm btn-white btn-rounded" href="{{route('simerics')}}">Learn More</a>
          </div>
          <div class="icon-block col-lg-4 col-md-4 col-sm-6 col-xs-12  " data-wow-delay="0.5s">
            <div class='icon-content'>
              <a class="icon-link" href="{{route('logoPress')}}">
                <div class="icon"
                  style="background-image:url('{{asset('storage/images/partner/logopress3_logo.png')}}'); background-size: contain; width: auto; height:120px;">
                </div>
                <h2 class="icon-title" style="margin-top:30px;">Explore Logopress3 Products</h2>
              </a>
              <div class="icon-body">
                <p>
                  Offers a line of Gold-Certified SolidWorks Partner Products that deliver powerful tools and libraries
                  for Tool and Die design.
                </p>
              </div>
            </div>
            <a class="btn btn-sm btn-white  btn-rounded" href="{{route('logoPress')}}">Learn More</a>
          </div>
          <div class="icon-block col-lg-4 col-md-4 col-sm-6 col-xs-12  " data-wow-delay="0.5s">
            <div class='icon-content'>
              <a class="icon-link" href="{{route('dataKit')}}">
                <div class="icon"
                  style="background-image:url('{{asset('storage/images/partner/datakit_fond_blanc.png')}}');background-size: contain; width:auto">
                </div>
                <h2 class="icon-title">Explore Datakit CrossCAD</h2>
              </a>
              <div class="icon-body">
                <p>
                  These tools enable users to transfer a wealth of native data: 2D, 3D, geometric, topological,
                  attributes and more.
                </p>
              </div>
            </div>
            <a class="btn btn-sm btn-white  btn-rounded" href="{{route('dataKit')}}">Learn More</a>
          </div>
          <div class="icon-block col-lg-4 col-md-4 col-sm-6 col-xs-12  " data-wow-delay="0.5s">
            <div class='icon-content'>
              <a class="icon-link" href="{{route('visualComponents')}}">
                <div class="icon"
                  style="background-image:url('{{asset('storage/images/partner/visual_components_logo.jpg')}}'); background-size: contain; width: auto;">
                </div>
                <h2 class="icon-title">Explore Visual Components</h2>
              </a>
              <div class="icon-body">
                <p>
                  Is an affordable plant layout and process simulation suite of software that leverages native
                  SolidWorks data
                </p>
              </div>
            </div>
            <a class="btn btn-sm btn-white  btn-rounded" href="{{route('visualComponents')}}">Learn More</a>
          </div>
          <div class="icon-block col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class='icon-content'>
              <a class="icon-link" href="{{route('camWorks')}}">
                <div class="icon"
                  style="background-image:url('{{asset('storage/images/partner/camworks_logo.png')}}'); background-size: contain; width: auto;">
                </div>
                <h2 class="icon-title">CAMWorks</h2>
              </a>
              <div class="icon-body">
                <p>
                  As the first fully integrated CAM solution for SolidWorks – CAMWorks helps manufacturers across
                  aerospace, automotive, electronics and medical industries optimize and evolve their CAM automation
                  process.
                </p>
              </div>
            </div>
            <a class="btn btn-sm btn-white  btn-rounded" href="{{route('camWorks')}}">Learn More</a>
          </div>
          <div class="icon-block col-lg-4 col-md-4 col-sm-6 col-xs-12  " data-wow-delay="0.5s">
            <div class='icon-content'>
              <a class="icon-link" href="{{route('exactFlat')}}">
                <div class="icon"
                  style="background-image:url('{{asset('storage/images/partner/exactflat_logo.jpg')}}'); background-size: contain; width: auto;">
                </div>
                <h2 class="icon-title">Explore ExactFlat</h2>
              </a>
              <div class="icon-body">
                <p>
                  Faster, Simpler Product Development: Software for Manufacturers Using Composites, Industrial Fabrics
                  &amp; Technical Textiles.
                </p>
              </div>
            </div>
            <a class="btn btn-sm btn-white  btn-rounded" href="{{route('exactFlat')}}">Learn More</a>
          </div>
          {{-- <div class="icon-block col-lg-4 col-md-4 col-sm-6 col-xs-12  " data-wow-delay="0.5s">
            <div class='icon-content'>
              <a class="icon-link" href="{{route('keyShot')}}">
                <div class="icon"
                  style="background-image:url('{{asset('storage/images/partner/keyshot_logo.jpg')}}'); background-size: contain; width: auto;">
                </div>
                <h2 class="icon-title">KeyShot</h2>
              </a>
              <div class="icon-body">
                <p>
                  Keyshot is a standalone 3D rendering and animation application developed for designers and engineers.
                </p>
              </div>
            </div>
            <a class="btn btn-sm btn-white  btn-rounded" href="{{route('keyShot')}}">Learn More</a>
          </div> --}}
          <div class="icon-block col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class='icon-content'>
              <a class="icon-link" href="{{route('swood.index')}}">
                <div class="icon"
                  style="background-image:url('{{asset('storage/images/partner/swood_logo.png')}}'); background-size: contain; width: auto; height:120px">
                </div>
                <h2 class="icon-title">SWOOD</h2>
              </a>
              <div class="icon-body">
                <p>
                  SWOOD Design makes it easy to create projects with a range of specific features dedicated to wood and
                  panel sectors. Design Booster for panel and wood sectors in SolidWorks. Design your fittings and
                  furniture by drag and drop.
                </p>
              </div>
            </div>
            <a class="btn btn-sm btn-white btn-rounded" href="{{route('swood.index')}}">Learn More</a>
          </div>
          <div class="icon-block col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class='icon-content'>
              <a class="icon-link" href="{{route('builtWorks')}}">
                <div class="icon"
                  style="background-image:url('{{asset('storage/images/partner/BuiltWorks_logoRGB.jpg')}}'); background-size: contain; width: auto; height:120px;">
                </div>
                <h2 class="icon-title" style="margin-top:30px;">Explore BuiltWorks Products</h2>
              </a>
              <div class="icon-body">
                <p>
                  SOLIDWORKS Certified Gold add-ons that provide specialized functionality and automation for mining,
                  industrial &amp; commercial Steelwork.
                </p>
              </div>
            </div>
            <a class="btn btn-sm btn-white  btn-rounded" href="{{route('builtWorks')}}">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@stop