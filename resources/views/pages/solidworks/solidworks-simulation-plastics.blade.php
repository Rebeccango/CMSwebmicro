@extends('layouts.layout')
@section('title')
SolidWorks Simulation - Plastics
@stop
@section('meta')
<link rel="canonical" href="{{route('solidworks-simulation-plastics')}}" />
@stop
@section('description')SolidWorks Flow Simulation takes the complexity out of computational fluid dynamics. You can
quickly and easily simulate fluid flow, heat transfer, and fluid forces that are critical to the success of your
design.@stop
@section('keywords')SolidWorks, Flow, Simulation, Flow Simulation, Computational fluid dynamics @stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
  style="min-height:450px; background-image:url({{asset('storage/banners/solidworks_simulation_banner.jpg')}})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">SolidWorks Plastics</h1>
          <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
        </div>
        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
          <p class="parallax-section__description">SolidWorks Plastics brings easy-to-use injection molding simulation
            directly to the designers of plastic parts and
            injection molds, as well as advanced CAE analysis.</p>
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
          <h3 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">SolidWorks Plastics</h3>
          <br />
          <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
            SolidWorks Plastics brings easy-to-use injection molding simulation directly to the designers of plastic
            parts and injection molds,
            as well as advanced CAE analysis. It simulates how melted plastic flows during the injection molding process
            to predict manufacturing-related defects
            on parts and molds. You can quickly evaluate manufacturability while you design, to eliminate costly mold
            rework, improve part quality, and accelerate time
            to market. A Results Adviser provides troubleshooting steps and practical design advice to help diagnose and
            avoid potential problems.
          </p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
         <div class="embed-responsive embed-responsive-16by9">
            <iframe src="https://www.youtube.com/embed/-swavE-rEEQ" class="embed-responsive-item" frameborder="0"
              allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="videoCaption w-100">What's New in SOLIDWORKS 2021 - Plastics</div>
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
                <a href="{{asset('storage/pdfs/solidworks/2020/Data Sheet - Plastics.pdf')}}" class="pdf-item">
                  <figure>
                    <div class="figimg">
                      <img src="{{asset('storage/pdfs/solidworks/2020/Data Sheet - Plastics.png')}}" style="width:100%;"
                        alt="SOLIDWORKS Plastics Data Sheet">
                    </div>
                    <figcaption>SolidWorks Plastics Data Sheet</figcaption>
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
                  <video class="video-js vjs-16-9" controls preload="auto"
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
  <section class="pt-0">
    <div class="container-fluid">
      <h2 class="main-title mt-0">Plastics capabilities</h2>
      <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">Listed below, are some of the powerful
        features that SolidWorks Plastics users benefit from. If you would like to know more or have any questions,
        please contact us</p>
      <div class="responsive-tabs-block row mt-3">
        <div class="">
          <!-- required for floating -->
          <ul class="nav nav-tabs tabs-left responsive-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#plasticsStandard" role="tab">SolidWorks Plastics
                Standard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#plasticsProfessional" role="tab">SolidWorks Plastics
                Professional</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#plasticsPremium" role="tab">SolidWorks Plastics Premium</a>
            </li>
          </ul>
        </div>
        <div class="col-md-8">
          <div class="tab-content responsive-tabsContent">
            <div class="tab-pane active" id="plasticsStandard" role="tabpanel">
              <h3>SolidWorks Plastics Standard</h3>
              <p>
                For plastics part designers, SolidWorks Plastics Standard enables you to optimize parts for
                manufacturability in the early stages of design.
                Easy to learn and use, SolidWorks Plastics Standard is fully embedded within the SolidWorks CAD
                environment so you can analyze and modify designs at
                the same time you optimize for form, fit, and function.
              </p>
            </div>
            <div class="tab-pane" id="plasticsProfessional" role="tabpanel">
              <h3>SolidWorks Plastics Professional</h3>
              <p>
                SolidWorks Plastics Professional gives anyone who designs or builds injection molds an accurate,
                easy-to-use way to optimize them. You can quickly
                create and analyze single-cavity, multi-cavity, and family mold layouts, including sprues, runners, and
                gates. You can even balance runner systems and
                estimate cycle time, clamp tonnage, and shot size, enabling you to optimize feed system design and avoid
                costly mold rework.
            </div>
            <div class="tab-pane" id="plasticsPremium" role="tabpanel">
              <h3>SolidWorks Plastics Premium</h3>
              <p>
                SolidWorks Plastics Premium includes everything in SolidWorks Plastics Professional plus advanced
                simulation functionality that allows CAE analysts and
                mold designers to analyze mold cooling line layouts and predict molded part warpage. Users can design
                and analyze simple or complex mold cooling line
                layouts, optimize cooling system design to minimize cycle times and decrease manufacturing costs and
                optimize part and mold design, material selection
                and processing parameters to reduce or eliminate molded part warpage.
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