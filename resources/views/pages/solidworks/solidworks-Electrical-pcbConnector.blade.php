@extends('layouts.layout')
@section('title')
SOLIDWORKS PCB Connector
@stop
@section('meta')
<link rel="canonical" href="{{route('solidworks-Electrical-pcbConnector')}}" />
@stop
@section('description')SOLIDWORKS® PCB —powered by Altium®— is a mechatronics/electronics
design solution that provides the best in PCB design technology with an integrated electro-mechanical collaboration
solution. @stop
{{-- @section('keywords')3D, Design Software, CAD, 3D CAD, SOLIDWORKS, 3D Software, Product Design, Engineering Software, 3D Design, Electrical, PCB, Schematic, Connector @stop --}}
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
  style="min-height:450px; background-image:url({{ asset("storage/images/SolidWorks/electrical/solidworks-electrical-pcb-hero.jpg") }})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">SolidWorks PCB Connector</h1>
          <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
        </div>
        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
          <p class="parallax-section__description">SOLIDWORKS® PCB —powered by Altium®— is a mechatronics/electronics
            design solution that provides the best in PCB design technology with an integrated electro-mechanical
            collaboration solution.</p>
        </div>
        <div>
          @include('layouts.generic_contact_buttons')
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h2>SEAMLESS DESIGN COLLABORATION</h2>
        <br />
        <p>
          When the electronic and mechanical design domains are working together, it’s easy to get products to market
          on time and on-budget. The SOLIDWORKS PCB Connector extension makes collaboration an easy and streamlined
          process with linked design data between Altium Designer and your mechanical designer’s environment in
          SOLIDWORKS®.
        </p>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <video id="seamless-design-collaboration" class="video-js" controls preload="auto"
          src="{{asset('storage/videos/SolidWorks/Electrical/Integrated-Design-Data.mp4')}}" width="100%" height="264"
          poster="{{asset('storage/videos/solidworks_thumbnail.jpg')}}" data-setup='{"fluid": true}'>
          <source src="{{asset('storage/videos/SolidWorks/pcb/SW_PCB_2017_Connector_ECAD_MCAD.mp4')}}" type='video/mp4'>
          <!-- <source src="MY_VIDEO.webm" type='video/webm'> -->
          <p class="vjs-no-js">
            To view this video please enable JavaScript, and consider upgrading to a web browser that
            <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
          </p>
        </video>
        <div class="videoCaption">Video: First Look SolidWorks PCB Connector</div>
      </div>
    </div>
  </div>
</section>
<section class="container">
  <h3>Features</h3>
  <div class="row">
    <div class="col-lg-4 dark-text">
      <h3 class="main-title">MANAGED ECAD/MCAD CHANGE PROCESS</h3>
      <p>Keep everyone on the same page in the design process. Instantly push changes to component placement, board
        shape, and mounting holes and other critical aspects of your designs between Altium Designer and your
        mechanical designer’s environment with a managed change process.
      </p>
    </div>
    <div class="col-lg-4 dark-text">
      <h3 class="main-title">DESIGN COMMENTING AND REVISION MANAGEMENT</h3>
      <p>Always remain in the know about what changes were made to your design and when. A detailed comment and
        revision history shows exactly what changes were made to your design with the ability to accept or reject
        changes instantly.</p>
    </div>
    <div class="col-lg-4 dark-text">
      <h3 class="main-title">DESIGN COLLABORATION NETWORK</h3>
      <p>Seamlessly communicate and collaborate with your entire design team, regardless of their physical location.
        Store design files on your network and you can collaborate with your team wherever they may be.</p>
    </div>
  </div>
</section>
<section class="section-secondary">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h2>INTEGRATED DESIGN DATA</h2>
        <br />
        <p>
          Intelligently connected design data between Altium Designer and your mechanical designer’s environment opens
          up new possibilities for design synchronicity. Integrated design data allows your mechanical designer to
          start a board design in his trusted environment, and opens up a rich source of electronic design data for
          deeper analysis and discovery options with new simulation options.
        </p>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <video id="integrated-design-data" class="video-js" controls preload="auto"
          src="{{asset('storage/videos/SolidWorks/Electrical/Integrated-Design-Data.mp4')}}" width="100%" height="264"
          poster="{{asset('storage/videos/solidworks_thumbnail.jpg')}}" data-setup='{"fluid": true}'>
          <source src="{{asset('storage/videos/SolidWorks/Electrical/Integrated-Design-Data.mp4')}}" type='video/mp4'>
          <!-- <source src="MY_VIDEO.webm" type='video/webm'> -->
          <p class="vjs-no-js">
            To view this video please enable JavaScript, and consider upgrading to a web browser that
            <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
          </p>
        </video>
        <div class="videoCaption">Video: Integrated Design Data</div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="custom-nav-pills">
      <ul class="nav nav-pills" role="tablist">
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#matrix" role="tab">Matrix</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active in" data-toggle="tab" href="#datasheet" role="tab">Data Sheet</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#whatsnew" role="tab">What's New</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#videos" role="tab">Video Archive</a>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade" id="matrix" role="tabpanel">
          @include('pages.matrix.solidworks-matrix')
        </div>
        <div class="tab-pane fade show active in" id="datasheet" role="tabpanel">
          <div class="row m-0 p-0">
            <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a href="{{asset('storage/pdfs/solidworks/2020/Data Sheet - Electrical.pdf')}}" class="pdf-item">
                <figure>
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/solidworks/2020/Data Sheet - Electrical.png')}}" style="width:100%;"
                      alt="SOLIDWORKS ECAD Data Sheet">
                  </div>
                  <figcaption>SolidWorks ECAD Data Sheet</figcaption>
                </figure>
              </a>
            </div>
            <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a href="{{asset('storage/pdfs/solidworks/2020/Data Sheet - PCB.pdf')}}" class="pdf-item">
                <figure>
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/solidworks/2020/Data Sheet - PCB.png')}}" style="width:100%;"
                      alt="SOLIDWORKS PCB 2020">
                  </div>
                  <figcaption>SolidWorks PCB 2020</figcaption>
                </figure>
              </a>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="whatsnew" role="tabpanel">
          <div class="row">
            <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a href="{{asset('storage/pdfs/solidworks/2020/Top 10 ECAD.pdf')}}" class="pdf-item">
                <figure>
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/solidworks/2020/Top 10 ECAD.png')}}" style="width:100%;"
                      alt="SOLIDWORKS ECAD Top 10 in 2020">
                  </div>
                  <figcaption>SOLIDWORKS ECAD Top 10 in 2020</figcaption>
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
<section>
  <div class="container">
    <h3 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">Features</h3>
    <div class="row">
      <div class="col-lg-4 dark-text">
        <h3 class="main-title">OUTPUT PCB COPPER GEOMETRIES</h3>
        <p>Ensure that your boards are efficiently designed and operational with expanded simulation options in your
          mechanical designer’s environment. Open board assemblies with included copper information and perform detailed
          thermal, vibration, and other simulations in your mechanical environment.
        </p>
      </div>
      <div class="col-lg-4 dark-text">
        <h3 class="main-title">PARASOLID SUPPORT</h3>
        <p>Get the most precise data to understand your mechanical designer’s original design intent by linking to
          Parasolid models for enclosures and component models. Native mechanical models takes the guesswork out of your
          3D clearance checking process, ensuring that your board fits right the first time.</p>
      </div>
      <div class="col-lg-4 dark-text">
        <h3 class="main-title">UNIFIED COMPONENT DATA</h3>
        <p>Save time when developing components by intelligently linking your electronic and mechanical data for
          components together. By treating components as one connected whole, you can make changes to electronic data or
          mechanical models and have those changes reflected in either design domain.</p>
      </div>
    </div>
  </div>
</section>

<section class="section-secondary">
  <div class="container">
    <div class=" row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h2 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">DISTINCT WORKFLOWS AND LIFECYCLES</h2>
        <br />
        <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
          Maintain your distinct workflows without having to sacrifice your own productivity for anyone. Leverage your
          existing efficiencies in Altium Designer and manage the lifecycles of your components without having to wait
          for your mechanical designer to finish their 3D models. When both sides of the component creation process
          are complete, easily join this data together into a single unified component shared by everyone.
        </p>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
        <div class="videoWrapper">
        <video id="Distinct-Workflows-and-Lifecycles" class="video-js" controls preload="auto"
          src="{{asset('storage/videos/SolidWorks/Electrical/Distinct-Workflows-and-Lifecycles.mp4')}}" width="100%"
          height="264" poster="{{asset('storage/videos/solidworks_thumbnail.jpg')}}" data-setup='{"fluid": true}'>
          <source src="{{asset('storage/videos/SolidWorks/Electrical/Distinct-Workflows-and-Lifecycles.mp4')}}"
            type='video/mp4'>
          <!-- <source src="MY_VIDEO.webm" type='video/webm'> -->
          <p class="vjs-no-js">
            To view this video please enable JavaScript, and consider upgrading to a web browser that
            <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
          </p>
        </video>
        </div>
        <div class="videoCaption">Video: Distinct-Workflows-and-Lifecycles</div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <h3 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">Features</h3>
    <div class="row">
      <div class="col-lg-6 dark-text">
        <h3 class="main-title">ECAD/MCAD PROJECT COLLABORATION</h3>
        <ul>
          <li>
            Link your mechanical models and electronic data together as a single managed project.
          </li>
          <li>
            Push board design changes to and from Altium Designer and your mechanical designer’s environment.
          </li>
        </ul>
      </div>
      <div class="col-lg-6 dark-text">
        <h3 class="main-title">MECHANICAL ENVIRONMENT ECAD PLUGIN</h3>
        <ul>
          <li>
            Your mechanical designers deserve just as much clarity about your design process as you do about theirs.
          </li>
          <li>
            Install the SolidWorks PCB Connector plugin in SolidWorks® to intelligently connect your mechanical
            designer’s environment with yours.
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section class="section-secondary">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap" style="max-width:400px">
      <h2 class="m-0">HOW TO BUY</h2>
      <button class="btn btn-sm btn-white btn-dialog mt-0" id="quote" data-wow-duration="1s" data-toggle="modal"
        data-target="#contactModal" data-type="quote" data-title="Get a free quote">Get a Quote</button>
    </div>
    <p>
      The SOLIDWORKS PCB Connector is available as an extension to Altium Designer and is distributed through CAD
      MicroSolutions in Canada. Follow the link and complete the form to have a CAD MicroSolutions expert contact
      you to answer your questions and discuss any of your needs.
    </p>
  </div>
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