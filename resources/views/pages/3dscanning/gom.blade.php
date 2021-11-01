@extends('layouts.layout')
@section('title') GOM: Precise Industrial 3D Metrology
@stop
@section('meta')
<link rel="canonical" href="{{route('3d-scanning.index')}}" />
@stop
@section('description')Organizations around the world are improving product quality and accelerating product development
and manufacturing processes with precise industrial 3D metrology. GOM develops, produces and distributes software, machines
and systems that enable automated 3D coordinate measuring and 3D testing.
@stop
@section('keywords')GOM, 3D Metrology, 3D Scanner, Industrial, Manufacturing, Analysis, Technology @stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax" style="min-height:450px;
background-image:url({{ asset('storage/images/gom/OBJ_GRAF-0000016586-XX-001-VIEW.jpg') }})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid mt-5">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto wow fadeIn" data-wow-duration="0.8s"
          data-wow-delay="0.5s">
          <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">GOM: Precise Industrial 3D Metrology</h1>
          <div class="section-title-divider"></div>
          <h2 class="h3">Improving product quality and accelerating product development and manufacturing processes</h2>
        </div>
        {{-- <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
          <p class="parallax-section__description">The Most Powerful Data and Build Preparation Software</p>
        </div> --}}
        <div>
          @include('layouts.generic_contact_buttons')
        </div>
      </div>
    </div>
  </div>
</section>
<section class="p-0">
  <div class="d-flex flex-wrap w-100 h-100" style="z-index:1;">
    <div class="d-flex col-12 col-md-12 col-lg-6 col-sm-12 justify-content-md-center justify-content-sm-center align-items-md-center flex-column align-items-sm-center mb-sm-5 mb-md-0">
      <div class="d-flex flex-column justify-content-end text-center text-lg-right p-5">
        <h3 class="h1">GOM: Precise Industrial 3D Metrology</h3><br>
        <h4 class="h5">Organizations around the world are improving product quality and accelerating product development and manufacturing processes with precise industrial 3D metrology. GOM develops, produces and distributes software, machines and systems that enable automated 3D coordinate measuring and 3D testing.</h4>
      </div>
    </div>
    <div class="d-flex col-12 col-md-12 col-lg-6 col-sm-12 justify-content-md-end justify-content-sm-end align-items-md-end flex-column align-items-sm-end">
      <img src="{{ asset("storage/images/gom/gom_atos-core_model-plate.jpg ") }}" width="100%">
    </div>
  </div>
</section>
<section class="py-0">
  <div class="row border-bottom">
    <div class="col-lg-4 col-sm-12 col-md-12 col-xs-12 text-center px-5 py-5 border-right border-top">
      <div class="d-flex align-items-center justify-content-center flex-column h-100">
        <div class="w-100 position-relative" style="z-index:1">
          <h2 class="text-center mt-5 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">ATOS</h2>
          <h3 class="h5 text-center m-0 px-4 wow fadeInUp mx-auto" style="max-width:600px" data-wow-duration="1s" data-wow-delay="0.6s">Industrial 3D Scanning Technology</h3>
          <p class="mt-4 mx-auto wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s" style="max-width:600px">Providing accurate scans with detailed resolution at high speeds, GOM’s ATOS series of industrial 3D scanners are suitable for a wide range of industries and applications. ATOS systems deliver 3D measurement data and analysis for various industrial components, including sheet metal parts, injection molded parts, tools and dies, turbine blades, prototypes, castings and more.</p>
        </div>
        <div class="d-flex align-items-center justify-content-center flex-column h-100">
          <img src="{{asset('storage/images/gom/OBJ_GRAF-0000012572-XX-001-VIEW.jpg')}}" class="mx-auto wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s"
            width="100%" height="auto" style="max-width:400px" />
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-sm-12 col-md-12 col-xs-12 text-center px-5 py-5 border-right border-top">
      <div class="d-flex align-items-center justify-content-center flex-column h-100">
        <div class="w-100 position-relative" style="z-index:1">
          <h2 class="text-center mt-5 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">ATOS ScanBox</h2>
          <h3 class="h5 text-center m-0 px-4 wow fadeInUp mx-auto" style="max-width:600px" data-wow-duration="1s" data-wow-delay="0.6s">Optical 3D Measuring Machine</h3>
          <p class="mt-4 mx-auto wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s" style="max-width:600px">Developed by GOM for efficient quality control in production and manufacturing processes, the ATOS ScanBox is a complete optical 3D measuring machine.</p>
        </div>
        <div class="d-flex align-items-center justify-content-center flex-column">
          <img src="{{asset('storage/images/gom/OBJ_GRAF-0000014510-XX-001-VIEW.jpg')}}" class="m-auto wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s"
            width="100%" height="auto" style="max-width:400px" />
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-sm-12 col-md-12 col-xs-12 text-center px-5 py-5 border-top" style="background-color:#FFF">
      <div class="d-flex align-items-center justify-content-center flex-column h-100">
        <div class="w-100 position-relative" style="z-index:1">
          <h2 class="text-center mt-5 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">TRITOP</h2>
          <h3 class="h5 text-center m-0 px-4 wow fadeInUp mx-auto" style="max-width:600px" data-wow-duration="1s" data-wow-delay="0.6s">Optical 3D Coordinate Measuring Machine</h3>
          <p class="mt-4 mx-auto wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s" style="max-width:600px">Portable and compact, the TRITOP system quickly and precisely measures the coordinates of 3D objects. Measuring tasks traditionally performed by tactile 3D coordinate measuring machines are now easily achieved with GOM’s TRITOP system.</p>
        </div>
        <div class="d-flex align-items-center justify-content-center flex-column">
          <img src="{{asset('storage/images/gom/tritop.jpg')}}" class="m-auto wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s"
            width="100%" height="auto" style="max-width:400px" />
        </div>
      </div>
    </div>
  </div>
</section>

<section class="px-4 px-sm-3 border-bottom">
  <h4 class="h1 text-center mb-5">Manufacturing Processes</h4>
  <div class="row">
    <div class="col-lg-4 px-lg-5 p-sm-3">
      <img class="w-100" src="{{ asset("storage/images/gom/sheetmetal.jpg") }}"style="max-height:270px">
      <h5 class="mt-4">Sheet Metal Forming</h5>
      <p>GOM measuring systems are used to ensure consistent quality in bending, stamping, drawing, pressing and forming process
        chains. They’re used to determine sheet metal properties, accelerate tool try-out and first article inspection, perform
        assembly analysis and more.</p>
    </div>
    <div class="col-lg-4 px-lg-5 p-sm-3">
      <img src="{{ asset("storage/images/gom/csm_gom_industries_casting_header_3f6a1a359a.jpg") }}" style="max-height:270px">
      <h5 class="mt-4">Casting and Foundry</h5>
      <p>GOM measuring systems are used to ensure consistent quality in sand, pressure die and investment casting processes,
        and allow for inspection planning based on design data. They’re used to perform simulation verification, accelerate
        tool try-out and first article inspection.</p>
    </div>
    <div class="col-lg-4 px-lg-5 p-sm-3">
      <img class="w-100" src="{{ asset("storage/images/gom/industrie_injection-molding_header.jpg") }}" style="max-height:270px">
      <h5 class="mt-4">Plastics & Injection Molding</h5>
      <p>3D metrology supports and speeds up all phases in injection molding, blow molding and thermoforming processes, from
        prototype & tool construction to first article inspection reports, assembly analysis and load testing.</p>
    </div>
  </div>
</section>

<section class="px-4 px-sm-3">
    <h4 class="h1 text-center mb-5">Industries</h4>
    <div class="row">
      <div class="col-lg-4 px-lg-5 p-sm-3">
        <img class="w-100" src="{{ asset("storage/images/gom/OBJ_GRAF-0000014595-XX-001.jpg") }}">
        <h5 class="mt-4">Automotive</h5>
        <p>Used throughout the entire product development process, GOM systems help to:</p>
        <ul>
          <li>Measure data and provide information regarding material characteristics and part behavior from:
            <ul>
              <li>crash and fatigue tests</li>
              <li>climate chambers</li>
              <li>wind tunnels</li>
              <li>tire tests</li>
            </ul>
          </li>
          <li>Full-field geometry acquisition by 3D scanning provides data for quality control on tools, castings, plastic and sheet metal parts, assemblies and complete car bodies
          </li>
        </ul>
      </div>
      <div class="col-lg-4 px-lg-5 p-sm-3">
        <img class="w-100" src="{{ asset("storage/images/gom/csm_industrie_aerospace_header_02084e069b.jpg ") }}">
        <h5 class="mt-4">Aerospace</h5>
        <p>Used by the aerospace industry and suppliers, GOM systems provide precise part geometries and material characteristics that
        are used for:</p>
        <ul>
          <li>Reverse engineering
          <li>Quality control of complex freeform surfaces
          <li>Inspection of airfoils or engines, terrestrial gas & stream turbines and turbocharging systems
        </ul>
      </div>
      <div class="col-lg-4 px-lg-5 p-sm-3">
        <img class="w-100" src="{{ asset("storage/images/gom/OBJ_GRAF-0000012023-XX-001-VIEW.jpg") }}">
        <h5 class="mt-4">Consumer Goods</h5>
        <p>GOM systems are used for all consumer goods production processes, including:</p>
        <ul>
          <li>Construction and materials testing through tool and mold making
            <li>First article inspection
              <li>Assembly analysis
                <li>Load tests
        </ul>
      </div>
      <div class="col-lg-4 px-lg-5 p-sm-3">
        <img class="w-100" src="{{ asset("storage/images/gom/ATOS_Core_Casted_Aluminum_Gear_Housing.jpg") }}">
        <h5 class="mt-4">Power Generation / Propulsion</h5>
        <p>GOM optical 3D scanners are used in quality control of complex freeform surfaces, making them useful in the inspection of:</p>
        <ul>
          <li>Airfoils of aircraft engines
            <li>Terrestrial gas & steam turbines
              <li>Turbocharging systems
        </ul>
        <p>3D metrology helps to identify faulty spots or parts to be replaced, resulting in accelerated maintenance, service and upgrading
        of turbines.</p>
      </div>
      <div class="col-lg-4 px-lg-5 p-sm-3">
        <img class="w-100" src="{{ asset("storage/images/gom/industrie_transportation_header.jpg ") }}">
        <h5 class="mt-4">Transportation</h5>
        <p>GOM mobile optical metrology systems are leveraged for quality control in a range of transportation sectors, including:</p>
        <ul>
          <li>Railway engineering
            <li>Shipbuilding
              <li>Utility vehicles
        </ul>
      </div>
      <div class="col-lg-4 px-lg-5 p-sm-3">
        <img class="w-100" src="{{ asset("storage/images/gom/csm_education_atos_industrial-hardware_ce9b1a3f02.jpg") }}">
        <h5 class="mt-4">ATOS for Education</h5>
        <p>"ATOS for Education" is a complete package for theoretical and practical teaching at schools, higher education institutes
        and universities. The educational package from GOM includes industrial hardware and software for 3D scanning and inspection
        as well as ready-to-use laboratory experiments and lecture material with detailed background information. In addition, GOM
        offers a powerful inspection software for students, practical training for instructors and expert support from experienced
        engineers.</p>
      </div>
    </div>
</section>
<section class="p-0" style="background:#F2F2F2">
  <div class="row">
    <div class="col-md-6 col-sm-12 justify-content-end d-flex align-items-center pb-0">
      <img src="{{ asset("storage/images/gom/aOBJ_GRAF-0000016194-XX-001-VIEW.jpg") }}" style="width:100%;">
    </div>
    <div class="col-md-6 col-sm-12 d-flex justify-content-center align-items-center">
      <div class="px-5">
      <h5 class="h1 mb-0">GOM Inspect</h5>
      <span class="h3">Evaluation software for 3D measurement data</span>
      <p class="mt-4">GOM Inspect software is used in product development, quality control and production. It facilitates shape and dimension analysis,
      3D inspection and mesh processing for 3D point clouds and CAD data sets from fringe projection or laser scanners, coordinate
      measurement machines (CMM) and other measuring systems.</p>
      </div>
    </div>
  </div>
</section>
@stop