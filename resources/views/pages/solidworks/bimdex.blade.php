@extends('layouts.layout')
@section('title')
BIMDeX - BIM Data Exchange (BXF)
@stop
@section('meta')
<link rel="canonical" href="{{route('bimdex')}}" />
@stop
@section('description')BIMDeX provides BIM tools, Plugins, Free, SolidWorks to Revit, Creo to Revit, Creo to IFC,
Inverntor to IFC, Excel to Revit, Sketchup, Rhino, Maya, Unity, AutoCAD, Civil 3D, Converters, Exporters, Importers,
Extensions, Addons/Addins, API Development, Cost Estimation, BIM Automation, Integrating BIM standards, Importing
external data, @stop
@section('keywords')BIM Data Exchange, Free BIM Tools, BIM Plugins, SolidWorks to Revit, Upcoming Webinar Solidworks
model to revit, Creo to IFC, Inverntor to IFC, Excel to Revit, Creo to Revit Exporter, Sketchup, Rhino, Unity, Maya,
AutoCAD, Civil 3D, Convertor, Importer, addons/addins, BIM Automation, BXF @stop
@section('body')
<section class="parallax-window parallax-section trans-header-window d-flex parallax"
  style="min-height:450px; background-image:url({{asset('storage/images/bimdex/building-information-modeling-services.jpg')}})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">BIM DeX</h1>
          <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
        </div>
        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
          <p class="parallax-section__description">BIMDeX provides a platform for effortless data exchange between
            various CAD, Design and BIM Software</p>
        </div>
        <div>
          @include('layouts.generic_contact_buttons')
        </div>
      </div>
    </div>
  </div>
</section>
<section class="p-0" style="background-color:#FFF">
  <div class="container-fluid">
    <img src="{{asset('storage/images/bimdex/solidworks-rivet.png')}}" class='d-block mx-auto p-5' width="auto"
      height="auto" style="max-height:400px; width:auto" />
    <div class="content">
      <div class="section-title center-block mx-auto mb-3">
        <div class="h3 text-center">Export Native Parametric Revit Files</div>
        <div class="section-title-divider"></div>
      </div>
      <p class="text-center mx-auto" style="max-width:500px;">
        The BIMDeX Revit Exporter for SolidWorks is a data exchange tool which creates parametric Revit
        Families/Projects from SolidWorks parts and assemblies.
      </p>
    </div>
  </div>
</section>
<section style="background-color:#FFF" id="whatIsBimDex">
  <div class="container-fluid">
    <div class="section-block row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <span class="h3 main-title mb-4 d-inline-block align-middle">What is BIMDeX?</span>
        <br />
        <p>
          BIMDeX is for anyone that uses SOLIDWORKS to design or manufacture products for buildings and/or needs to
          provide native parametric Revit files as part of a project, bidding and sales process or for upload to online
          library sites.
        </p>
        <p>Typical products include furniture, millwork, store fixtures, lighting, HVAC equipment; any equipment that
          that is required to be in a Revit family format so that Architectural and Interior design firms can import
          your product into Revit in a manageable manner.</p>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="videoWrapper">
          <iframe width="100%" height="264" src="https://www.youtube.com/embed/yPWHxsKManI" frameborder="0"
            allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div class="videoCaption">Video: BIMDeX Corporate Video</div>
      </div>
    </div>
  </div>
</section>
<section class="section-secondary" id="benefits">
  <div class="section-title center-block mx-auto">
    <div class="h3 text-center">Benefits of BIMDeX</div>
    <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
  </div>
  <div class="container-fluid ">
    <div class="d-flex">
      <div class="d-sm-none d-md-block d-block">
        <img class="d-inline" style="max-height:300px"
          src="http://www.bim-dex.com/images/slider/rev/shop/autocad-design-exchange-software.png" /></img>
      </div>
      <div class="order-sm-first order-lg-last col-sm-12">
        <p>CAD MicroSolutions offers two options. You can either purchase the required software or we will do the
          required conversions for you on a contract basis.</p>
        <div class="h4 main-title mb-4 d-inline-block align-middle">The benefits of using BIMDeX are:</div>
        <ul>
          <li>Fast and easy translation of SOLIDWORKS assemblies to native Revit parametric family and project files
          <li>Provide your clients with content they requested and not content that is difficult for them to use.
          <li>Reduce the time and effort by more than 70%
          <li>Knowledge of BIM is not required
          <li>Reduce remodeling errors
        </ul>
      </div>
    </div>
  </div>
</section>
{{-- <section id="blm">
  <div class="section-title center-block mx-auto">
    <div class="h3 text-center mx-auto" style="max-width:400px">Building Lifecycle Management (BLM)</div>
    <div class="section-title-divider wow fadeInB" data-wow-duration="1s" data-wow-delay="0.5s"></div>
  </div>
  <div class="container-fluid">
  <div class="row pb-4 order-sm-1">
    <div class="col-lg-4  wow fadeInBottom" data-wow-duration="1s" data-wow-delay="0s">
      <img src="http://www.bim-dex.com/images/services/blm-building-lifecycle-management-services.jpg" class="d-block mw-100 mx-auto text-center" style="max-height:400px" />
    </div>
    <div class="col-lg-8 align-self-center  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0s">
      <div class="text-primary h2 text-center text-sm-center text-lg-left">Cloud Based Building Lifecycle Management(BLM)</div>
      <div class="text-primary h5 text-center text-sm-center text-lg-left">
        DESIGNED FOR ADVANCED 3D NAVIGATION
      </div>
      <p  class="text-center text-sm-center text-lg-left">Building Lifecycle Management (BLM) is the practice of designing, constructing, and operating a facility with a single set of interoperable data. Key Benefits: Improve Productivity, Increase Quality and Value from Suppliers, Reduce Waste, Risk and Cost.</p>
      <div class="h4 main-title mb-4 d-inline-block align-middle">Features of collaborated Revit, PDM Systems and BIM 360/Forge Platforms:</div>
      <ul>
        <li>Digital 3D Model
        <li>Design Information
        <li>Model/Drawing Lifecycle Management
        <li>Document Management
        <li>3D Visualization
        <li>Common Data Environment
        <li>Version Control
        <li>Release Management
      </ul>
    </div>
  </div>
</div>
</section> --}}
@stop