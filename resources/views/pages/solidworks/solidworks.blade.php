@extends('layouts.layout')
@section('title')
SOLIDWORKS Products
@stop
@section('meta')
<link rel="canonical" href="{{route('solidworks')}}" />
@stop
@section('description')SOLIDWORKS 3D CAD software enables you to increase productivity and product development, reduce
manufacturing costs, improve product quality and reliability.@stop
@section('keywords')3D, Design Software, CAD, 3D CAD, SOLIDWORKS, 3D Software, Product Design, Engineering Software, 3D
Design, Design Analysis,Translate, Electrical, PDM, Project Management, Connector, Conceptual Designer, Flow
Simulation, Simulation, Sustainability, Inspection, Model Based Defintion, Professional, Standard, Premium @stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
  style="min-height:450px; background-image:url({{asset('/storage/banners/solidworks_bg.jpg')}})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          <h1>SOLIDWORKS 2021</h1>
          <div class="section-title-divider"></div>
        </div>
        <div class="Left">
          <p class="parallax-section__description">Accelerate innovation, speed up and improve your product development
            process.</p>
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
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="section-title center-block mx-auto">
          <h2 class="">WHAT’S NEW IN SOLIDWORKS 2021</h2>
          <div class="section-title-divider "></div>
        </div>
        <div class="main-title h4">
          PROVEN DESIGN TO MANUFACTURE SOLUTION
        </div>
        <p>SOLIDWORKS 2021 adds enhancements and additional capabilities and workflows for design, documentation, data management,
        and validation. SOLIDWORKS 2021 delivers the performance needed to get your work done faster. You can also expand your
        capabilities and collaboration by connecting to the 3DEXPERIENCE platform. Tackle more challenges and accelerate
        innovation together with SOLIDWORKS 2021 and 3DEXPERIENCE WORKS.</p>

        {{-- [Check Out What’s New in 2021] - 1 new message (cadmicro.com) --}}

        <a class="btn btn-primary has-icon btn-rounded btn-md mx-auto d-block" target="_blank"
          href="{{asset('storage/pdfs/solidworks/2020/Top 10 3D CAD.pdf')}}" style="width: fit-content"><i
            class="fas fa-download mr-3" aria-hidden="true"></i>What’s New SOLIDWORKS 2021 3D
          CAD</a>

        <div class="main-title h4">
          SOLIDWORKS 2021 TOP 10 NEW FEATURES & ENHANCEMENTS
        </div>
        <div class="row row-centered section-secondary m-0 p-3">
          <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <a target="_blank" href="{{asset('storage/pdfs/solidworks/2020/Top 10 Design to Manufacture.pdf')}}"
              class="pdf-item">
              <figure style="width:200px;">
                <div class="figimg">
                  <img class="w-100" src="{{asset('storage/pdfs/solidworks/2020/Top 10 Design to Manufacture.png')}}"
                    alt="Design to Manufacturing Top 10 2020">
                </div>
                <figcaption>Design to Manufacturing Top 10</figcaption>
              </figure>
            </a>
          </div>
          <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <a target="_blank" href="{{asset('storage/pdfs/solidworks/2020/Top 10 ECAD.pdf')}}" class="pdf-item">
              <figure style="width:200px;">
                <div class="figimg">
                  <img class="w-100" src="{{asset('storage/pdfs/solidworks/2020/Top 10 ECAD.png')}}"
                    alt="ECAD Top 10 2020">
                </div>
                <figcaption>ECAD Top 10</figcaption>
              </figure>
            </a>
          </div>
          <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <a target="_blank" href="{{asset('storage/pdfs/solidworks/2020/Top 10 Data Management.pdf')}}"
              class="pdf-item">
              <figure style="width:200px;">
                <div class="figimg">
                  <img src="{{asset('storage/pdfs/solidworks/2020/Top 10 Data Management.png')}}" class="w-100"
                    alt="PDM Top 10 2020">
                </div>
                <figcaption>PDM Top 10</figcaption>
              </figure>
            </a>
          </div>
          <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <a href="{{asset('storage/pdfs/solidworks/2020/Top 10 Simulation.pdf')}}" class="pdf-item">
              <figure>
                <div class="figimg">
                  <img src="{{asset('storage/pdfs/solidworks/2020/Top 10 Simulation.png')}}" style="width:100%;"
                    alt="What's new in SOLIDWORKS Simulation 2020">
                </div>
                <figcaption>SOLIDWORKS Simulation Top 10 in 2020</figcaption>
              </figure>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section-secondary">
  <div class="container-fluid">
    <div class="content">
      <div class="section-title center-block mx-auto">
        <h2 class="">EXPLORE SOLIDWORKS</h2>
        <div class="section-title-divider "></div>
      </div>
      <div class="section-block">
        <div class="section-icon-group row" style="margin-top:-30px;">
          <div class="icon-block col-lg-4 col-md-4 col-sm-6 col-xs-12  Up">
            <div class='icon-content'>
              <a class="icon-link" href="{{route('solidworks-3dcad')}}">
                <div class="icon"
                  style="background-image:url('{{asset('storage/icons/3DCADPro.png')}}'); background-size: 250px; width: auto;"
                  alt="SolidWorks 3D CAD">
                </div>
                <h3 class="icon-title">Explore SolidWorks 3D CAD</h3>
              </a>
              <div class="icon-body">
                <p>
                  Three solutions (Standard, Pro, and Premium) that utilize the intuitive SOLIDWORKS user interface to
                  speed your engineering and design processes.
                </p>
              </div>
            </div>
            <a class="btn btn-sm btn-white Up" data-swiper-parallax="400" href="{{route('solidworks-3dcad')}}">Learn
              More</a>
          </div>
          <div class="icon-block col-lg-4 col-md-4 col-sm-6 col-xs-12  Up">
            <div class='icon-content'>
              <a class="icon-link" href="{{route('solidworks-simulation')}}">
                <div class="icon"
                  style="background-image:url('{{asset('storage/icons/Simulation_Premium.png')}}'); background-size: 250px; width: auto;"
                  alt="SolidWorks Simulation">
                </div>
                <h3 class="icon-title">Explore SolidWorks Simulation</h3>
              </a>
              <div class="icon-body">
                <p>
                  SOLIDWORKS Simulation let you set up a virtual real-world environment to test and analyze all of your
                  product designs.
                </p>
              </div>
            </div>
            <a class="btn btn-sm btn-white Up" data-swiper-parallax="400"
              href="{{route('solidworks-simulation')}}">Learn More</a>
          </div>
          <div class="icon-block col-lg-4 col-md-4 col-sm-6 col-xs-12  Up">
            <div class='icon-content'>
              <a class="icon-link" href="{{route('solidworks-simulation-plastics')}}">
                <div class="icon"
                  style="background-image:url('{{asset('storage/icons/PlasticsSTD.png')}}'); background-size: 250px; width: auto;"
                  alt="SolidWorks Plastics">
                </div>
                <h3 class="icon-title">Explore SolidWorks Plastics</h3>
              </a>
              <div class="icon-body">
                <p>
                  SOLIDWORKS Plastics brings injection molding simulation directly to the designers of plastic parts
                  and injection molds.
                </p>
              </div>
            </div>
            <a class="btn btn-sm btn-white Up" data-swiper-parallax="400"
              href="{{route('solidworks-simulation-plastics')}}">Learn More</a>
          </div>
          <div class="icon-block col-lg-4 col-md-4 col-sm-6 col-xs-12  Up">
            <div class='icon-content'>
              <a class="icon-link" href="{{route('solidworks-dataManagement')}}">
                <div class="icon" style="background-image:url('{{asset('storage/icons/sw_4.jpg')}}');"
                  alt="SolidWorks PDM Professional">
                </div>
                <h3 class="icon-title">Explore SolidWorks PDM</h3>
              </a>
              <div class="icon-body">
                <p>
                  Enterprise PDM Eliminates concerns about version control and data loss to improve design
                  collaboration and reuse.
                </p>
              </div>
            </div>
            <a class="btn btn-sm btn-white Up" data-swiper-parallax="400"
              href="{{route('solidworks-dataManagement')}}">Learn More</a>
          </div>
          <div class="icon-block col-lg-4 col-md-4 col-sm-6 col-xs-12  Up">
            <div class='icon-content'>
              <a class="icon-link" href="{{route('solidworks-technical-composer')}}">
                <div class="icon"
                  style="background-image:url('{{asset('storage/icons/Composer.png')}}'); background-size: 250px; width: auto;"
                  alt="SolidWorks Composer">
                </div>
                <h3 class="icon-title">Explore SolidWorks Composer</h3>
              </a>
              <div class="icon-body">
                <p>
                  SOLIDWORKS Composer helps user create everything from training manuals, user guides, service manuals
                  from sales and marketing materials.
                </p>
              </div>
            </div>
            <a class="btn btn-sm btn-white Up" data-swiper-parallax="400"
              href="{{route('solidworks-technical-composer')}}">Learn More</a>
          </div>
          <div class="icon-block col-lg-4 col-md-4 col-sm-6 col-xs-12  Up">
            <div class='icon-content'>
              <a class="icon-link" href="{{route('solidworks-Electrical-electrical')}}">
                <div class="icon"
                  style="background-image:url('{{asset('storage/icons/Electrical.png')}}'); background-size: 250px; width: auto;"
                  alt="SolidWorks Electrical">
                </div>
                <h3 class="icon-title">Explore SolidWorks Electrical</h3>
              </a>
              <div class="icon-body">
                <p>
                  SOLIDWORKS Electrical solutions help Design Engineers reduce the risk inherent in innovation and get
                  their products to market faster with less physical prototyping to decrease costs.
                </p>
              </div>
            </div>
            <a class="btn btn-sm btn-white Up" data-swiper-parallax="400"
              href="{{route('solidworks-Electrical-electrical')}}">Learn More</a>
          </div>
          <div class="icon-block col-lg-4 col-md-4 col-sm-6 col-xs-12  Up">
            <div class='icon-content'>
              <a class="icon-link" href="{{route('solidworks-technical-inspection')}}">
                <div class="icon"
                  style="background-image:url('{{asset('storage/icons/InspectionPRO.png')}}'); background-size: 250px; width: auto;"
                  alt="SolidWorks Technical Inspection">
                </div>
                <h3 class="icon-title">Explore SolidWorks Inspection</h3>
              </a>
              <div class="icon-body">
                <p>
                  SOLIDWORKS Inspection is a First Article Inspection (FAI) and in-process inspection software that
                  streamlines and automates the creation of ballooned inspection drawings and inspection reports.
                </p>
              </div>
            </div>
            <a class="btn btn-sm btn-white Up" data-swiper-parallax="400"
              href="{{route('solidworks-technical-inspection')}}">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@stop
@push('after-scripts')
<script>
  $(function () {
    $('.icon-block .icon-body p').matchHeight();
  })
</script>
@endpush