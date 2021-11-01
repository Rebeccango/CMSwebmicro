@extends('layouts.layout')
@section('title')
SOLIDWORKS 3D CAD
@stop
@section('meta')
<link rel="canonical" href="{{route('solidworks-3dcad')}}" />
@stop
@section('description')Intuitive 3D design and product development solutions from SOLIDWORKS let you conceptualize,
create, validate, communicate, manage, and transform your innovative ideas into great product designs. @stop
@section('keywords')3D, Design Software, CAD, 3D CAD, SolidWorks, 3D Software, Product Design, Engineering Software, 3D
Design, Design Analysis,Translate, Electrical, Premium, Standard, Professional @stop

@push('after-styles')
<style>
  .button-bottom {
    width: 100%;
    text-align: center;
    position: absolute;
    bottom: 0;
    padding: 30px;
  }

  #swPackages .card-body {
    padding-bottom: 100px !important;
  }
</style>
@endpush
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax" style="min-height:450px;
background-image:url(https://www.cadmicro.com/storage/banners/products_solidworks_3dcad_banner.jpg)">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid mt-5">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          <h1 class=" ">SolidWorks 3D CAD</h1>
          <div class="section-title-divider  "></div>
        </div>
        <div class=" ">
          <p class="parallax-section__description">Intuitive 3D design and product development solutions from
            SOLIDWORKS® let you conceptualize, create, validate, communicate, manage, and transform your innovative
            ideas into great product designs.</p>
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
    <div class="section-block row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h2>Why Choose SOLIDWORKS 3D CAD?</h2>
        <br />
        <p>SOLIDWORKS 3D CAD solutions provide easy-to-learn, yet extremely powerful functionality that shortens
          product development time, reduces costs, and improves quality.</p>
        <p>Dramatically improve the way you develop and manufacture products. As the foundation for the entire
          SOLIDWORKS® suite of product development solutions, SOLIDWORKS CAD packages cover design, simulation, cost
          estimation, manufacturability checks, sustainable design, and data management.</p>

        <button class="btn btn-lg btn-primary rounded-pill btn-dialog" data-toggle="modal"
          data-target="#freetrialrequestmodal">Request a free trial</button>
        <br />
        <img src="{{ asset('/images/pages/solidworks/SW_Labels_SubService_190Club_2020.jpg') }}" width="180px"
          height="auto" class="img-fluid mt-3" />
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  ">
        <div class="videoWrapper">
          <iframe width="100%" height="auto" src="https://www.youtube.com/embed/CpzyQzDxp58" frameborder="0"
            allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div class="videoCaption mb-4">Video: SOLIDWORKS 2020 Overview</div>

      </div>
    </div>
  </div>
</section>

<section
  style="background-image:url('{{asset('storage/banners/background-package-features.jpg')}}'); background-size:cover;">
  <div class="container-fluid">
    <div class="content">
      <div class="section-title center-block mx-auto">
        <h1 class=" " style="color:white">Which SOLIDWORKS 3D
          CAD package is right for you?</h1>
        <div class="section-title-divider"></div>
      </div>
      <div class="row" id="swPackages">
        <div class="col col-lg-4 col-sm-12 col-xs-12 py-4">
          <div class="card  img-shadow">
            <div class="card-body py-4 pb-4 pt-3 text-center">
              <img src="{{ asset('/images/pages/solidworks/SolidWorks-2020-STANDARD_software_box_mockup.png') }}"
                width="100%" height="auto" class="img-fluid" style="margin-top:-100px" />
              <div class="h4 text-center w-100 my-2 mb-4">
                SOLIDWORKS Standard
              </div>
              <p class="text-center w-100">Get up to speed quickly and benefit from this powerful 3D design and
                manufacturing solution. Along with part, assembly, and 2D drawing functionality, specialized tools
                are included for sheet metal, weldments, surfacing, molds, product configuration, design analysis,
                DFM, and CAM. CAM included with an active subscription.</p>
            </div>
            <div class="button-bottom">
              <button class="btn btn-sm btn-white  Up btn-dialog" id="contact" data-toggle="modal"
                data-target="#contactModal" data-type="contact" data-title="Contact an Agent"
                style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: Up;">Contact
                Us</button>
            </div>
          </div>
        </div>
        <div class="col col-lg-4 col-sm-12 col-xs-12 py-4">
          <div class="card img-shadow">
            <div class="card-body py-4 pb-4 pt-3 text-center">
              <img src="{{ asset('/images/pages/solidworks/SolidWorks-2020-PROFESSIONAL_software_box_mockup.png') }}"
                width="100%" height="auto" style="margin-top:-100px" class="img-fluid" />
              <div class="h4 text-center w-100 my-2 mb-4">
                SOLIDWORKS Professional
              </div>
              <p class="text-center w-100">SOLIDWORKS Professional builds on the capabilities of SOLIDWORKS Standard
                with ECAD/MCAD collaboration, automated cost estimation, collaboration capabilities, design and
                drawing checking, a sophisticated components and parts library, and advanced photorealistic
                rendering.</p>
            </div>
            <div class="button-bottom">
              <button class="btn btn-sm btn-white  Up btn-dialog" id="contact" data-toggle="modal"
                data-target="#contactModal" data-type="contact" data-title="Contact an Agent"
                style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: Up;">Contact
                Us</button>
            </div>
          </div>
        </div>
        <div class="col col-lg-4 col-sm-12 col-xs-12 py-4">
          <div class="card img-shadow" style="border:3px solid #007bff;">
            <div class="badge badge-primary" style="text-align: center;position: absolute; margin: 0 auto; margin: auto;
                margin-bottom: -15px; bottom:0; left: 0;right: 0;width: 143px;padding: 7px;font-size: 15px;z-index: 99; box-shadow:
                3px 3px 3px rgba(0,0,0,0.5);">
              MOST POPULAR
            </div>
            <div class="card-body py-4 pb-4 pt-3 text-center">
              <img src="{{ asset('/images/pages/solidworks/SolidWorks-2020-PREMIUM_software_box_mockup.png') }}"
                width="100%" height="auto" class="img-fluid" style="margin-top:-100px" />
              <div class="h4 text-center w-100 my-2 mb-4">
                SOLIDWORKS Premium
              </div>
              <p class="text-center w-100">SOLIDWORKS Premium builds on SOLIDWORKS Professional by adding structural
                and motion analysis capabilities, advanced surface flattening, reverse engineering, and electrical
                cable and pipe routing functionality.</p>
            </div>

            <div class="button-bottom">
              <button class="btn btn-sm btn-white  Up btn-dialog" id="contact" data-toggle="modal"
                data-target="#contactModal" data-type="contact" data-title="Contact an Agent">Contact
                Us</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container-fluid">
    <div class="custom-nav-pills">
      <ul class="nav nav-pills" role="tablist">
        <li class="nav-item">
          <a class="nav-link active in" data-toggle="tab" href="#feature-matrix" role="tab">Matrix</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#datasheet" role="tab">Data Sheet</a>
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#whatsnew" role="tab">What's new in 2020</a>
          </li> --}}
        {{-- <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#videos" role="tab">Video Archive</a>
          </li> --}}
        {{-- <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#case-studies" role="tab">Case Studies</a>
          </li> --}}
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade show active in" id="feature-matrix" role="tabpanel">
          @include('pages.matrix.solidworks-matrix')
        </div>
        <div class="tab-pane fade" id="datasheet" role="tabpanel">
          <div class="row" style="margin:0; padding:0">
            <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a href="{{asset('storage/pdfs/solidworks/2020/Data Sheet - 3D CAD.pdf')}}" target="_blank"
                class="pdf-item">
                <figure>
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/solidworks/2020/Data Sheet - 3D CAD.png')}}" style="width:100%;"
                      alt="SOLIDWORKS 3D CAD Premium">
                  </div>
                  <figcaption>SOLIDWORKS 3D CAD Premium</figcaption>
                </figure>
              </a>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="case-studies" role="tabpanel">
          <div class="row m-0 p-0">
            <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a href="{{asset('storage/pdfs/solidworks/2019/Kinder Design Case Study.pdf')}}" target="_blank"
                class="pdf-item">
                <figure>
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/solidworks/2019/Kinder Design Case Study.png')}}" class="w-100"
                      alt="Kinder Design SOLIDWORKS Case Study">
                  </div>
                  <figcaption>Kinder Design SOLIDWORKS Case Study</figcaption>
                </figure>
              </a>
            </div>
            <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a href="{{asset('storage/pdfs/solidworks/2019/Synaptive_Medical_Case_Study.pdf')}}" target="_blank"
                class="pdf-item">
                <figure>
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/solidworks/2019/Synaptive_Medical_Case_Study.png')}}" class="w-100"
                      alt="Synaptive Medical SOLIDWORKS Case Study">
                  </div>
                  <figcaption>Synaptive Medical SOLIDWORKS Case Study</figcaption>
                </figure>
              </a>
            </div>
            <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a href="{{asset('storage/pdfs/solidworks/2019/Vector Praxis CaseStudy - Modular Buildings.pdf')}}"
                target="_blank" class="pdf-item">
                <figure>
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/solidworks/2019/Vector Praxis CaseStudy - Modular Buildings.png')}}"
                      class="w-100" alt="Synaptive Medical SOLIDWORKS Case Study">
                  </div>
                  <figcaption>Vector Praxis SOLIDWORKS Case Study - Modular Buildings</figcaption>
                </figure>
              </a>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="whatsnew" role="tabpanel">
          <div class="row m-0 p-0">
            <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a href="{{asset('storage/pdfs/solidworks/2020/Top 10 3D CAD.pdf')}}" target="_blank" class="pdf-item">
                <figure style="width:200px;">
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/solidworks/2020/Top 10 3D CAD.png')}}" class="w-100"
                      alt="What's new in SOLIDWORKS 2020">
                  </div>
                  <figcaption>What's new in SOLIDWORKS 2020</figcaption>
                </figure>
              </a>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="videos" role="tabpanel">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-3">
              <div class="videoWrapper">
                <video class="video-js vjs-16-9" controls preload="auto"
                  src="{{asset('storage/videos/SolidWorks/SolidWorks Video1.mp4')}}"
                  poster="{{asset('storage/videos/SolidWorks/Productivity_smIcon.jpg')}}" data-setup='{"fluid": true}'>
                  <source src="{{asset('storage/videos/SolidWorks/SolidWorks Video1.mp4')}}" type='video/mp4'>
                  <p class="vjs-no-js">
                    To view this video please enable JavaScript, and consider upgrading to a web browser that
                    <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                  </p>
                </video>
              </div>
              <div class="videoCaption">Video: Improve Everyday Productivity</div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-3">
              <div class="videoWrapper">
                <video class="video-js vjs-16-9" controls preload="auto"
                  src="{{asset('storage/videos/SolidWorks/SolidWorks Video 2.mp4')}}"
                  poster="{{asset('storage/videos/SolidWorks/workprocesses_smIcon.jpg')}}" data-setup='{"fluid": true}'>
                  <source src="{{asset('storage/videos/SolidWorks/SolidWorks Video 2.mp4')}}" type='video/mp4'>
                  <p class="vjs-no-js">
                    To view this video please enable JavaScript, and consider upgrading to a web browser that
                    <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                  </p>
                </video>
              </div>
              <div class="videoCaption">Video: Optimize Your Work Process</div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-3">
              <div class="videoWrapper">
                <video class="video-js vjs-16-9" controls preload="auto"
                  src="{{asset('storage/videos/SolidWorks/SolidWorks Video 2.mp4')}}"
                  poster="{{asset('storage/videos/SolidWorks/Operations_smIcon.jpg')}}" data-setup='{"fluid": true}'>
                  <source src="{{asset('storage/videos/SolidWorks/SolidWorks Video 3.mp4')}}" type='video/mp4'>
                  <p class="vjs-no-js">
                    To view this video please enable JavaScript, and consider upgrading to a web browser that
                    <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                  </p>
                </video>
              </div>
              <div class="videoCaption">Video: Reduce Operations Costs</div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-3">
              <div class="videoWrapper">
                <video class="video-js vjs-16-9" controls preload="auto"
                  src="{{asset('storage/videos/SolidWorks/SolidWorks Video 4.mp4')}}"
                  poster="{{asset('storage/videos/SolidWorks/DesignChallenges_smIcon.jpg')}}"
                  data-setup='{"fluid": true}'>
                  <source src="{{asset('storage/videos/SolidWorks/SolidWorks Video 4.mp4')}}" type='video/mp4'>
                  <p class="vjs-no-js">
                    To view this video please enable JavaScript, and consider upgrading to a web browser that
                    <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                  </p>
                </video>
              </div>
              <div class="videoCaption">Video: Solve More Design Challenges</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="pt-0">
  <div class="container-fluid">
    <h2 class="main-title   mt-0">
      SOLIDWORKS
      3D CAD Premium Capabilities</h2>
    <p class=" Up">Listed below, are some of the powerful
      features that SolidWorks Premium users benefit from. With the addition of standard part libraries, utilities
      that will search for design errors, fasteners and tools that will automatically estimate your manufacturing
      costs, the capabilities are endless. If you would like to know more or have any questions, please use the box
      below.</p>
    <div class="responsive-tabs-block row" style="margin-top:10px">
      <div class="">
        <!-- required for floating -->
        <ul class="nav nav-tabs tabs-left responsive-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#motion" role="tab">Time-based Motion Analysis</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#linearStress" role="tab">Linear Stress Analysis</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tolerance" role="tab">Tolerance Analysis</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#eCADmCAD" role="tab">Electrical CAD to Mechanical CAD
              Interchange</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#piping" role="tab">Piping and Tubing Design</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#cDesign" role="tab">Electrical Cable Harness and Conduit
              Design</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#scanTo3D" role="tab">ScanTo3D</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#flatten" role="tab">Advanced Surface Flattening</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#routing" role="tab">Routing of Rectangular and Other
              Sections</a>
          </li>
        </ul>
      </div>
      <div class="col-md-8">
        <div class="tab-content responsive-tabsContent">
          <div class="tab-pane active" id="motion" role="tabpanel">
            <h3>Time-based Motion Analysis</h3>
            <div class="videoWrapper">
              <video id="motionAnalysisVideo" class="video-js" controls preload="auto"
                src="{{asset('storage/videos/SolidWorks/Simulation/Time-Based-Motion-Analysis.mp4')}}" width="100%"
                height="264" poster="{{asset('storage/videos/SolidWorks/Simulation/Time-Based-Motion-Analysis.png')}}"
                data-setup='{"fluid": true}'>
                <source src="{{asset('storage/videos/SolidWorks/Simulation/Time-Based-Motion-Analysis.mp4')}}"
                  type='video/mp4'>
                <!-- <source src="MY_VIDEO.webm" type='video/webm'> -->
                <p class="vjs-no-js">
                  To view this video please enable JavaScript, and consider upgrading to a web browser that
                  <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                </p>
              </video>
            </div>
            <div class="videoCaption">Video: First Look SolidWorks 3D CAD Premium</div>
            <p>
              Easily evaluate how your product will perform and move throughout its operational cycle with motion
              analysis using SolidWorks Simulation. Visualize your product moving as it would in the real world and
              measure the forces and loads on your design. Plus,
              use the data to correctly size motors and create the ‘correct’ mechanism to ensure performance, product
              quality, and safety.
            </p>
          </div>
          <div class="tab-pane" id="linearStress" role="tabpanel">
            <h3>Linear Stress Analysis</h3>
            <p>
              Linear stress analysis with SolidWorks Simulation enables designers and engineers to quickly and
              efficiently validate quality, performance, and safety—all while creating their design.
            </p>
          </div>
          <div class="tab-pane" id="tolerance" role="tabpanel">
            <h3>Tolerance Analysis</h3>
            <div class="videoWrapper">
              <video id="tolerance-analysis" class="video-js" controls preload="auto"
                src="{{asset('storage/videos/SolidWorks/Tolerance-Analysis.mp4')}}" width="100%" height="264"
                poster="{{asset('storage/videos/solidworks_thumbnail.jpg')}}" data-setup='{"fluid": true}'>
                <source src="{{asset('storage/videos/SolidWorks/Tolerance-Analysis.mp4')}}" type='video/mp4'>
                <!-- <source src="MY_VIDEO.webm" type='video/webm'> -->
                <p class="vjs-no-js">
                  To view this video please enable JavaScript, and consider upgrading to a web browser that
                  <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                </p>
              </video>
            </div>
            <div class="videoCaption">Video: Tolerance Analysis Preview</div>
            <p>
              Quickly and easily check dimensions and tolerances using SolidWorks 3D CAD software to assess the
              manufacturability of your design long before reaching production. Check parts and assembly tolerances
              during design, accelerating the design process, saving
              time and development costs, and increasing productivity.
            </p>
          </div>
          <div class="tab-pane" id="eCADmCAD" role="tabpanel">
            <h3>Electrical CAD to Mechanical CAD Interchange</h3>
            <p>
              Share data between electrical CAD (ECAD) and mechanical CAD (MCAD) designers using the CircuitWorks™
              tool in SolidWorks 3D CAD software. CircuitWorks enables users to share, compare, update, and track
              electrical design data so users can more quickly resolve
              electrical-mechanical integration problems. Mechanical and electrical engineers can work closely in
              creating complex designs, speeding up the product development process, saving time and development
              costs, and accelerating time-to-market.
            </p>
          </div>
          <div class="tab-pane" id="piping" role="tabpanel">
            <h3>Piping and Tubing Design</h3>
            <div class="videoWrapper">
              <video id="pipingVideo" class="video-js" controls preload="auto"
                src="{{asset('storage/videos/SolidWorks/Piping-and-Tubing-Design.mp4')}}" width="100%" height="264"
                poster="{{asset('storage/videos/solidworks_thumbnail.jpg')}}" data-setup='{"fluid": true}'>
                <source src="{{asset('storage/videos/SolidWorks/Piping-and-Tubing-Design.mp4')}}" type='video/mp4'>
                <!-- <source src="MY_VIDEO.webm" type='video/webm'> -->
                <p class="vjs-no-js">
                  To view this video please enable JavaScript, and consider upgrading to a web browser that
                  <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                </p>
              </video>
            </div>
            <div class="videoCaption">Video: Piping and Tubing Design Preview</div>
            <p>
              Accelerate the development process and save time by designing piping and tubing in 3D during system
              design with SolidWorks Premium. By integrating piping and tubing during the design process, designers
              can help ensure efficient assembly, operation, and
              serviceability, avoiding rework, delays, and extra cost.
            </p>
          </div>
          <div class="tab-pane" id="cDesign" role="tabpanel">
            <h3>Electrical Cable Harness and Conduit Design</h3>
            <div class="videoWrapper">
              <video id="electrical-video" class="video-js" controls preload="auto"
                src="{{asset('storage/videos/SolidWorks/Electrical-Cable-1.mp4')}}" width="100%" height="264"
                poster="{{asset('storage/videos/solidworks_thumbnail.jpg')}}" data-setup='{"fluid": true}'>
                <source src="{{asset('storage/videos/SolidWorks/Electrical-Cable-1.mp4')}}" type='video/mp4'>
                <!-- <source src="MY_VIDEO.webm" type='video/webm'> -->
                <p class="vjs-no-js">
                  To view this video please enable JavaScript, and consider upgrading to a web browser that
                  <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                </p>
              </video>
            </div>
            <div class="videoCaption">Video: Electrical Cable Harness and Conduit Design</div>
            <p>
              Quickly design and route electrical wiring, harnessing, cabling, and conduit assemblies of products in
              3D using the SolidWorks Premium package. Integrating these systems during product design rather than
              adding them later accelerates your development
              process, saves time and rework costs, and helps to ensure efficient product assembly and
              serviceability.
            </p>
          </div>
          <div class="tab-pane" id="scanTo3D" role="tabpanel">
            <h3>ScanTo3D</h3>
            <div class="videoWrapper">
              <video id="scanTo3DVideo" class="video-js" controls preload="auto"
                src="{{asset('storage/videos/SolidWorks/Scan-to-3D.mp4')}}" width="100%" height="264"
                poster="{{asset('storage/videos/solidworks_thumbnail.jpg')}}" data-setup='{"fluid": true}'>
                <source src="{{asset('storage/videos/SolidWorks/Scan-to-3D.mp4')}}" type='video/mp4'>
                <!-- <source src="MY_VIDEO.webm" type='video/webm'> -->
                <p class="vjs-no-js">
                  To view this video please enable JavaScript, and consider upgrading to a web browser that
                  <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                </p>
              </video>
            </div>
            <div class="videoCaption">Video: ScanTo3D Preview</div>
            <p>
              Facilitate reverse engineering that can speed up your design process, save time and development costs,
              and accelerate your time-to-market by converting scanned data of physical products into SolidWorks 3D
              CAD geometry.
            </p>
          </div>
          <div class="tab-pane" id="flatten" role="tabpanel">
            <h3>Advanced Surface Flattening</h3>
            <div class="videoWrapper">
              <video id="flattenVideo" class="video-js" controls preload="auto"
                src="{{asset('storage/videos/SolidWorks/Advanced-Surface-Flattening.mp4?')}}" width="100%" height="264"
                poster="{{asset('storage/videos/solidworks_thumbnail.jpg')}}" data-setup='{"fluid": true}'>
                <source src="{{asset('storage/videos/SolidWorks/Advanced-Surface-Flattening.mp4?')}}" type='video/mp4'>
                <!-- <source src="MY_VIDEO.webm" type='video/webm'> -->
                <p class="vjs-no-js">
                  To view this video please enable JavaScript, and consider upgrading to a web browser that
                  <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                </p>
              </video>
            </div>
            <div class="videoCaption">Video: Advanced Surface Flattening Preview</div>
            <p>
              Often products like leather goods, sports equipment, footwear, and products made from composite
              materials, like carbon fiber and fiberglass, have complex shapes, but are manufactured from materials
              that start out as flat stock, such as cow hides, nylon,
              cloth, and flat composite sheet. Therefore, it is necessary to accurately determine or estimate the
              size and shape of the surfaces in their flattened state in order to be able to cut the material from
              the flat sheet.
            </p>
          </div>
          <div class="tab-pane" id="routing" role="tabpanel">
            <h3>Routing of Rectangular and Other Sections</h3>
            <div class="videoWrapper">
              <video id="routingVideo" class="video-js" controls preload="auto"
                src="{{asset('storage/videos/SolidWorks/Routing.mp4?')}}" width="100%" height="264"
                poster="{{asset('storage/videos/solidworks_thumbnail.jpg')}}" data-setup='{"fluid": true}'>
                <source src="{{asset('storage/videos/SolidWorks/Routing.mp4?')}}" type='video/mp4'>
                <!-- <source src="MY_VIDEO.webm" type='video/webm'> -->
                <p class="vjs-no-js">
                  To view this video please enable JavaScript, and consider upgrading to a web browser that
                  <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                </p>
              </video>
            </div>
            <div class="videoCaption">Video: Routing Preview</div>
            <p>
              SolidWorks Routing users can route rectangular and round sections to meet their design needs. Equipment
              designers, product designers, machine designers, facility designers and others all need rectangular
              section routing to complete their designs that
              include ducting, cable trays, conveyors, material handling chutes, and many other systems.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="bg-primary text-white py-5">
  <div class="py-4 d-flex align-items-center justify-content-center flex-column">
    <h4 class="mb-3 text-center mb-2 h2">SOLIDWORKS RESOURCES</h4>
    <a class="btn btn-lg btn-white rounded-pill btn-dialog" target="_blank"
      href="https://www.cadmicro.com/resources?search=2021&product=&category=&type=">Learn More</a>
  </div>
</section>
@stop
@push('after-scripts')
<script>
  $(function () {
    $('#swPackages .card').matchHeight();
  });
</script>
@endpush

@push('before-scripts')
<div class="modal fade" tabindex="-1" role="dialog" id="freetrialrequestmodal" aria-labelledby="freetrialrequestmodal">
  <div class="modal-dialog" role="document" style="max-width:700px">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="demoContactModalLabel">Request a free Trial</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body p-4">
        <div class="loaderSpinner"></div>
        <div data-form-block-id="9a69244f-b0ac-e911-a987-000d3a3702ca"></div>
        <div id="dN_u1IFk1e1z-Ct4CsU9U7FyDtq1Re_XChfO7NNZIYTc"></div>
      </div>
    </div>
  </div>
</div>
@endpush