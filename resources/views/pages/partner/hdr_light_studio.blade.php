@extends('layouts.layout')
@section('title')
HDR LIGHT STUDIO for SolidWorks Visualize
@stop
@section('meta')
<link rel="canonical" href="{{route('hdrlightstudio')}}" />
@stop
@section('description')Create the perfect HDRI environment in minutes with HDR Light Studio. Lighting shots is now fast,
precise and easy. Simply click on the model in SOLIDWORKS Visualize to position lights on a live HDRI. @stop
@section('keywords')3D, Design Software, CAD, 3D CAD, SolidWorks, 3D Software, Product Design, HDRI, lighting,
studio,visualize @stop
@section('body')
<section class="parallax-window parallax-section trans-header-window d-flex parallax"
  style="min-height:450px; background-image:url({{asset('storage/images/SolidWorks/hdr-lightstudio-hero.jpg')}})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">HDR LIGHT STUDIO</h1>
          <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
        </div>
        <div class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
          <p class="parallax-section__description">Create the perfect HDRI environment in minutes with HDR Light Studio.
          </p>
        </div>
        <div>
          @include('layouts.generic_contact_buttons')
        </div>
      </div>
    </div>
  </div>
</section>
<section id="solidworks-products">
  <div class="container-fluid">
    <div class="section-block row">
      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <img src="{{asset('/storage/images/hdr/HDR LIGHT STUDIO FOR SWVIZ_logo.png')}}" width="400px"
          style="margin:10px 0;" />
        <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
          Create the perfect HDRI environment in minutes with HDR Light Studio. Lighting shots is now fast, precise
          and easy. Simply click on the model in SOLIDWORKS Visualize to position lights on a live HDRI.
        </p>
        <div class="quote">
          <blockquote>
            “It allows me to create custom HDRI environment maps in minutes to achieve the exact lighting and
            reflections I envision in my mind. The live integration with SOLIDWORKS Visualize makes placing lights in
            your scene a breeze”
          </blockquote>
          <small class="author">Brian Hillner, Portfolio Manager - SOLIDWORKS Corp</small>
        </div>
        <div class="h6">HDR Light Studio transforms your SOLIDWORKS Visualize lighting workflow:</div>
        <ul>
          <li>
            Studio Lighting
          </li>
          <li>
            Lighting to match a back-plate image
          </li>
          <li>
            Adding lights/adjustments to existing HDRI maps
          </li>
        </ul>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeInRight hidden-sm-down" data-wow-duration="1s"
        data-wow-delay="0.2s">
        <img src="{{asset('storage/images/hdr/HDR LIght Studio for SWVIZ packshot.png')}}" width="80%"
          style="float:right; max-height:400px; width:auto;">
      </div>
    </div>
  </div>
</section>
<section class="section-secondary" style="margin-top:40px;">
  <div class="container-fluid">
    <div class="content">
      <div class="row">
        <div class="col-lg-6">
          <div class="h5" style="margin-bottom:20px;">Key Benefits:</div>
          <div class="h6">Improve Image Quality</div>
          <ul>
            <li>Create perfect ‘custom’ HDRI lighting for your shot.
            <li>Lights can be precisely positioned to enhance a product’s form and materials.
            <li>Photographic studio light sources bring realism to your images.
          </ul>
          <div class="h6">Fast Lighting Workflow</div>
          <ul>
            <li>LightPaint – click on the 3D model in SOLIDWORKS Visualize to position lights on the HDRI map.
            <li>Light directly on the camera view without navigating in 3D to position lights.
            <li>HDRI map containing all lights will render faster than individual 3D lights.
          </ul>
        </div>
        <div class="col-lg-6">
          <div class="h5" style="margin-bottom:20px;">Key Features:</div>
          <ul>
            <li>LightPaint – click on the 3D model in SOLIDWORKS Visualize to position lights
            <li>Create and edit HDRI maps in real-time
            <li>Procedural lights, image based lights and procedural sky
            <li>Includes a large library of HDRI light source captures
            <li>HDR Light Studio project is stored in the SOLIDWORKS Visualize scene file
          </ul>
        </div>
        <a href="{{asset('storage/images/hdr/HDR LIGHT STUDIO INTERFACE WITH SW VIZ.png')}}" target="_blank"
          style="width:100%">
          <img src="{{asset('storage/images/hdr/HDR LIGHT STUDIO INTERFACE WITH SW VIZ.png')}}"
            style="width:100%; margin-top:25px;"></a>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container-fluid">
    <h2 class="main-title wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" style="margin-top:0;">HDR Light
      Studio for SOLIDWORKS Visualize</h2>
    <div class="responsive-tabs-block row" style="margin-top:10px">
      <div class="">
        <!-- required for floating -->
        <ul class="nav nav-tabs tabs-left responsive-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#howitworks" role="tab">How does HDR Light Studio work
              with SOLIDWORKS Visualize</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#requirements" role="tab">Requirements</a>
          </li>
        </ul>
      </div>
      <div class="col-md-8">
        <div class="tab-content responsive-tabsContent">
          <div class="tab-pane active" id="howitworks" role="tabpanel">
            <div class="h4">
              How does HDR Light Studio work with SOLIDWORKS Visualize?
            </div>
            <span style="margin-bottom:10px">The model has materials applied, the camera view is setup, you are now
              ready to light…</span>
            <ul>
              <li>Start HDR Light Studio from the SOLIDWORKS Visualize environment
              <li>Load an existing HDRI map to edit, or start with a blank canvas
              <li>Add a new lights in HDR Light Studio
              <li>Click on the 3D model in SOLIDWORKS Visualize to position lights
              <li>To finish, HDR Light Studio generates a high-res HDRI map for the SOLIDWORKS Visualize environment
              <li>The SOLIDWORKS Visualize scene is now ready for final rendering
            </ul>
          </div>
          <div class="tab-pane" id="requirements" role="tabpanel">
            <div class="h4">
              Requirements
            </div>
            <ul>
              <li>Software delivery via internet download
              <li>Internet connection required for license activation
              <li> HDR Light Studio software requires approx. 200MB disc space
              <li>Preset light content requires approx. 6.2GB disc space
              <li>CPU based, no special graphics card required
              <li>Compatible with:
                <ul>
                  <li>SOLIDWORKS Visualize 2016 (Standard and Pro) - SP1
                  <li>SOLIDWORKS Visualize 2017 (Standard and Pro) - SP0 and above
                </ul>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@stop