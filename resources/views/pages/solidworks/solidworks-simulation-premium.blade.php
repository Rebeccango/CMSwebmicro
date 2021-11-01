@extends('layouts.layout')
@section('title')
SOLIDWORKS Simulation
@stop
@section('meta')
<link rel="canonical" href="{{route('solidworks-simulation')}}" />
@stop
@section('description')SOLIDWORKS Simulation Premium expands your virtual testing environment. You can determine product
durability and natural frequencies and test heat transfer and buckling instabilities.@stop
@section('keywords')SolidWorks, Flow, Simulation, Flow Simulation, Computational fluid dynamics, Simulation Premium
@stop
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
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
 style="min-height:450px; background-image:url({{asset('storage/banners/products_simulation_banner.jpg')}})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">SolidWorks Simulation</h1>
          <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
        </div>
        <div class="wow fadeIn">
          <p class="parallax-section__description">Subject your designs to real world conditions to raise product
            quality while reducing prototyping and physical testing costs.</p>
        </div>
        <div>
          @include('layouts.generic_contact_buttons')
        </div>
      </div>
    </div>
  </div>
</section>
<section id="solidworks-products">
  <div>
    <div class="container-fluid">
      <div class="section-block row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <h2>Why Choose SOLIDWORKS Simulation?</h2>
          <br />
          <p>SOLIDWORKS® Simulation is an easy-to-use portfolio of structural analysis tools that use the Finite Element
            Analysis (FEA) method to predict a product’s real-world physical behavior by virtually testing CAD models.
            The portfolio provides linear, non-linear static and dynamic analysis capabilities.</p>
          <div class="w-100 my-2">
            <img class="mx-auto d-block" src="{{asset('storage/banners/PRODUCTS_SW-SIMULATION-wireframe-001.png')}}"
              width="300px" height="auto" alt="Why Choose SOLIDWORKS Simulation?" typeof="foaf:Image">
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="videoWrapper">
            <iframe width="100%" height="auto" style="min-height:280px;" src="https://www.youtube.com/embed/oo_yqIEtf00"
              frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
          <div class="videoCaption mb-4">What's New in SOLIDWORKS 2021 - Simulation</div>
        </div>
      </div>
    </div>
  </div>
  <section>
    <div class="container-fluid">
      <div class="custom-nav-pills">
        <ul class="nav nav-pills" role="tablist">
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#feature-matrix" role="tab">Matrix</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#datasheet" role="tab">Data Sheet</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active in" data-toggle="tab" href="#whatsnew" role="tab">What's New</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#videos" role="tab">Video Archive</a>
          </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane fade" id="feature-matrix" role="tabpanel">
            @include('pages.matrix.solidworks-simulation')
          </div>
          <div class="tab-pane fade" id="datasheet" role="tabpanel">
            <div class="row" style="margin:0; padding:0">
              <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <a href="{{asset('storage/pdfs/solidworks/2020/Data Sheet - Simulation.pdf')}}" class="pdf-item">
                  <figure>
                    <div class="figimg">
                      <img src="{{asset('storage/pdfs/solidworks/2020/Data Sheet - Simulation.png')}}" style="width:100%;"
                        alt="SOLIDWORKS Flow Simulation Data Sheet">
                    </div>
                    <figcaption>SolidWorks Flow Simulation Data Sheet</figcaption>
                  </figure>
                </a>
              </div>
            </div>
          </div>
          <div class="tab-pane fade  show active in" id="whatsnew" role="tabpanel">
            <div class="row" style="margin:0; padding:0">
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
          <div class="tab-pane fade" id="videos" role="tabpanel">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-3">
                <div class="videoWrapper">
                  <video class="video-js vjs-16-9 vjs-default-skin vjs-big-play-centered" controls preload="auto"
                    src="{{asset('storage/videos/SolidWorks/SolidWorks Video1.mp4')}}"
                    poster="{{asset('storage/videos/SolidWorks/Productivity_smIcon.jpg')}}"
                    data-setup='{"fluid": true}'>
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
                    poster="{{asset('storage/videos/SolidWorks/workprocesses_smIcon.jpg')}}"
                    data-setup='{"fluid": true}'>
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

  <section
    style="background-image:url('{{asset('storage/banners/background-package-features.jpg')}}'); background-size:cover;">
    <div class="container-fluid">
      <div class="content">
        <div class="section-title center-block mx-auto">
          <h1>Which SOLIDWORKS
            Simulation package is right for you?</h1>
          <div class="section-title-divider"></div>
        </div>
        <div class="row" id="swPackages">
          <div class="col col-lg-4 col-sm-12 col-xs-12 py-4">
            <div class="card img-shadow">
              <div class="card-body p-5 text-center">
                <div class="h4 text-center w-100 my-2 mb-4">
                  SOLIDWORKS Simulation Standard
                </div>
                <p class="text-center w-100">SOLIDWORKS Simulation Standard is an intuitive virtual testing environment
                  for static linear, time-based motion, and high-cycle fatigue simulation. It delivers a concurrent
                  engineering approach, helping you know if your product will perform properly and how long it will
                  last—during the design phase.</p>
              </div>
              <div class="button-bottom">
                <button class="btn btn-sm btn-white wow fadeInUp btn-dialog" id="contact" data-wow-duration="1s"
                  data-toggle="modal" data-target="#contactModal" data-wow-delay="0.2s" data-type="contact"
                  data-title="Contact an Agent"
                  style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInUp;">Contact
                  Us</button>
              </div>
            </div>
          </div>
          <div class="col col-lg-4 col-sm-12 col-xs-12 py-4">
            <div class="card  img-shadow">
              {{-- <img  src="https://static.markforged.com/wf-assets/362-wf-l8podqz7-646.jpg" width="100%" height="auto" /> --}}
              <div class="card-body p-5 text-center">
                <div class="h4 text-center w-100 my-2 mb-4">SOLIDWORKS Simulation Professional</div>
                <p class="text-center w-100">SOLIDWORKS Simulation Professional enables you to optimize your design,
                  determine product mechanical resistance, product durability, topology, natural frequencies, and test
                  heat transfer and buckling instabilities. It can also perform sequential multi-physics simulations.
                </p>
              </div>
              <div class="button-bottom">
                <button class="btn btn-sm btn-white wow fadeInUp btn-dialog" id="contact" data-wow-duration="1s"
                  data-toggle="modal" data-target="#contactModal" data-wow-delay="0.2s" data-type="contact"
                  data-title="Contact an Agent"
                  style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInUp;">Contact
                  Us</button>
              </div>
            </div>
          </div>
          <div class="col col-lg-4 col-sm-12 col-xs-12 py-4">
            <div class="card  img-shadow" style="border:3px solid #007bff;">
              <div class="badge badge-primary"
                style="text-align: center;position: absolute;top: 0;margin: 0 auto;margin-top: -15px;left: 0;right: 0;width: 143px;padding: 7px;font-size: 15px;z-index: 99; box-shadow: 3px 3px 3px rgba(0,0,0,0.5);">
                MOST POPULAR
              </div>
              {{-- <img src="https://static.markforged.com/wf-assets/362-wf-l8podqz7-647.jpg" width="100%" height="auto" /> --}}
              <div class="card-body p-5 text-center">
                <div class="h4 text-center w-100 my-2 mb-4">
                  SOLIDWORKS Simulation Premium
                </div>
                <p class="text-center w-100">SOLIDWORKS Simulation Premium lets you efficiently evaluate your designs
                  for nonlinear and dynamic response, dynamic loading, and composite materials. SOLIDWORKS Simulation
                  Premium includes three advanced studies: Non-Linear Static, Non-Linear Dynamic, and Linear Dynamics.
                </p>
              </div>
              <div class="button-bottom">
                <button class="btn btn-sm btn-white wow fadeInUp btn-dialog" id="contact" data-wow-duration="1s"
                  data-toggle="modal" data-target="#contactModal" data-wow-delay="0.2s" data-type="contact"
                  data-title="Contact an Agent"
                  style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInUp;">Contact
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
      <h2 class="main-title" style="margin-top:0;">SOLIDWORKS Simulation Premium Capabilities</h2>
      <p class="wow fadeInUp">Listed below, are some of the powerful features that SolidWorks Simulation Premium users
        benefit from. If you would like to know more or have any questions, please contact us.</p>
      <div class="responsive-tabs-block row" style="margin-top:10px">
        <div class="">
          <!-- required for floating -->
          <ul class="nav nav-tabs tabs-left responsive-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#dropTestAnalysis" role="tab">Drop Test Analysis</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#thermalStructuralAnalysis" role="tab">Thermal Structural
                Analysis</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#plasticRubberPartAnalysis" role="tab">Plastic and Rubber Part
                Analysis</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#vibrationAnalysis" role="tab">Vibration Analysis</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#frequencyAnalysis" role="tab">Frequency Analysis</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#finiteElementAnalysis" role="tab">Finite Element Analysis</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#linearStressAnalysis" role="tab">Linear Stress Analysis</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#structuralAnalysis" role="tab">Structural Analysis</a>
            </li>
          </ul>
        </div>
        <div class="col-md-8">
          <!-- Tab panes -->

          <div class="tab-content responsive-tabsContent">
            <div class="tab-pane active" id="dropTestAnalysis" role="tabpanel">
              <h3>Drop Test Analysis</h3>
              <p>
                Find out quickly and efficiently how dropping a product onto a “floor” will affect its structural
                integrity using drop test analysis with SolidWorks Simulation.
                Understanding impact strength is an important consideration to ensure an adequate service life for many
                portable products. Multiple drops must be accounted for to
                ensure that the product continues to perform correctly and meets requirements for strength and safety.
                Tightly integrated with SolidWorks CAD, drop test analysis
                using SolidWorks Simulation can be a regular part of your design process—reducing the need for costly
                prototypes, eliminating rework or delays,
                and saving time and development costs.
              </p>
            </div>
            <div class="tab-pane" id="thermalStructuralAnalysis" role="tabpanel">
              <h3>Thermal Structural Analysis</h3>
              <p>
                Determine thermal effects on a given design—or the impact of design changes on component
                temperatures—using fast, efficient thermal structural analysis with SolidWorks Simulation.
                Tightly integrated with SolidWorks CAD, thermal structural analysis using SolidWorks Simulation can be a
                regular part of your design process—reducing the need for costly prototypes, eliminating rework and
                delays, and saving time and development costs.
              </p>
            </div>
            <div class="tab-pane" id="plasticRubberPartAnalysis" role="tabpanel">
              <h3>Plastic and Rubber Part Analysis</h3>
              <div class="videoWrapper">
                <video id="plasticRubberPartAnalysisVideo" class="video-js  vjs-16-9" controls preload="auto"
                  src="{{asset('storage/videos/SolidWorks/Plastic-and-Rubber-Parts.mp4')}}" data-setup='{"fluid": true}'
                  poster="{{asset('storage/videos/solidworks_thumbnail.jpg')}}">
                  <source src="{{asset('storage/videos/SolidWorks/Plastic-and-Rubber-Parts.mp4')}}" type='video/mp4'>
                  <!-- <source src="MY_VIDEO.webm" type='video/webm'> -->
                  <p class="vjs-no-js">
                    To view this video please enable JavaScript, and consider upgrading to a web browser that
                    <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                  </p>
                </video>
              </div>
              <div class="videoCaption">Video: Plastic and Rubber Part Analysis Preview</div>
              <p>
                Quickly and efficiently carry out stress analysis of plastic components and rubber parts with SolidWorks
                Simulation while you design to optimize material selection and part design, ensuring high product
                quality, performance, and safety.
                Tightly integrated with SolidWorks CAD, stress analysis of plastic and rubber parts using SolidWorks
                Simulation can be a regular part of your design process—reducing the need for costly prototypes,
                eliminating rework and delays, and saving time and development costs.
              </p>
            </div>
            <div class="tab-pane" id="vibrationAnalysis" role="tabpanel">
              <h3>Vibration Analysis</h3>
              <div class="videoWrapper">
                <video id="vibrationAnalysisVideo" class="video-js  vjs-16-9" controls preload="auto"
                  src="{{asset('storage/videos/SolidWorks/3D CAD/Vibration-analysis.mp4')}}"
                  data-setup='{"fluid": true}' poster="{{asset('storage/videos/solidworks_thumbnail.jpg')}}">
                  <source src="{{asset('storage/videos/SolidWorks/3D CAD/Vibration-analysis.mp4')}}" type='video/mp4'>
                  <!-- <source src="MY_VIDEO.webm" type='video/webm'> -->
                  <p class="vjs-no-js">
                    To view this video please enable JavaScript, and consider upgrading to a web browser that
                    <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                  </p>
                </video>
              </div>
              <div class="videoCaption">Video: Vibration Analysis Preview</div>
              <p>
                Uncover potential issues early and make adjustments during design by conducting vibration analysis with
                SolidWorks Simulation. You can identify trouble spots that could cause problems (such as, resonance,
                fatigue, and assembly techniques) and avoid costly rework and delays during the prototype phase.
                SolidWorks Simulation provides detailed vibration data through frequency analysis and dynamic analysis
                to ensure product performance and safety. Vibration analysis is an important consideration when an
                applied load is not constant (static), inducing unstable modes of vibration (resonance) which result in
                a shortened service life and cause unexpected failures.
              </p>
            </div>
            <div class="tab-pane" id="frequencyAnalysis" role="tabpanel">
              <h3>Frequency Analysis</h3>
              <div class="videoWrapper">
                <video id="frequencyAnalysisVideo" class="video-js  vjs-16-9" controls preload="auto"
                  src="{{asset('storage/videos/SolidWorks/Frequecy-Analysis.mp4')}}" data-setup='{"fluid": true}'
                  poster="{{asset('storage/videos/solidworks_thumbnail.jpg')}}">
                  <source src="{{asset('storage/videos/SolidWorks/Frequecy-Analysis.mp4')}}" type='video/mp4'>
                  <!-- <source src="MY_VIDEO.webm" type='video/webm'> -->
                  <p class="vjs-no-js">
                    To view this video please enable JavaScript, and consider upgrading to a web browser that
                    <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                  </p>
                </video>
              </div>
              <div class="videoCaption">Video: Frequency Analysis Preview</div>
              <p>
                Quickly and efficiently investigate the natural frequencies of a design—with and without loads and
                boundary conditions—with easy-to-use SolidWorks Simulation. Ensure that the natural modes of vibration
                are away from environmental forcing frequencies, indicating that the design will meet the required
                service life.
                Tightly integrated with SolidWorks CAD, frequency analysis using SolidWorks Simulation can be a regular
                part of your design process, reducing the need for costly prototypes, eliminating rework and delays, and
                saving time and development costs.
              </p>
            </div>
            <div class="tab-pane" id="finiteElementAnalysis" role="tabpanel">
              <h3>Finite Element Analysis</h3>
              <p>
                Efficiently optimize and validate each design step using fast-solving, CAD integrated SolidWorks
                Simulation to ensure quality, performance, and safety.
                Tightly integrated with SolidWorks CAD, SolidWorks Simulation solutions and capabilities can be a
                regular part of your design process—reducing the need for costly prototypes, eliminating rework and
                delays, and saving time and development costs.
              </p>
            </div>
            <div class="tab-pane" id="linearStressAnalysis" role="tabpanel">
              <h3>Linear Stress Analysis</h3>
              <p>
                Linear stress analysis with SolidWorks Simulation enables designers and engineers to quickly and
                efficiently validate quality, performance, and safety—all while creating their design.
                Tightly integrated with SolidWorks CAD, linear stress analysis using SolidWorks Simulation can be a
                regular part of your design process, reducing the need for costly prototypes, eliminating rework and
                delays, and saving time and development costs.
              </p>
            </div>
            <div class="tab-pane" id="structuralAnalysis" role="tabpanel">
              <h3>Structural Analysis</h3>
              <p>
                CAD-embedded SolidWorks Simulation enables every designer and engineer to carry out structural
                simulation on parts and assemblies with finite element analysis (FEA) while they work to improve and
                validate performance and reduce the need for costly prototypes or design changes later on.
                Structural simulation covers a wide range of FEA problems—from the performance of a part under a
                constant load to the stress analysis of a moving assembly under dynamic loading, all of which can be
                determined using SolidWorks Simulation tools.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</section>
@stop

@push('after-scripts')
<script>
  $(function() {

    $('#swPackages .card').matchHeight();

    $('#videos .row > div').matchHeight();

    $(window).resize(function() {
      $('.modal-content').css({
        'margin-top': function() {
          var w = $(window).height();
          var b = $(".modal-dialog").height();
          var h = (w - b) / 4;
          return h + "px";
        }
      });
    });
  })
</script>
@endpush