@extends('layouts.layout')
@section('title')
SolidWorks Conceptual Designer
@stop
@section('meta')
<link rel="canonical" href="{{route('solidworks-otherProducts-conceptualDesigner')}}" />
@stop
@section('description')SOLIDWORKS® Conceptual Designer (SWCD) is a concept design tool for the rapid creation,
manipulation, and modification of designs for mechanical components.@stop
@section('keywords')SolidWorks Conceptual Designer, Conceptual Designer, SWCD, SolidWorks SWCD, 3DExperience @stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
  style="min-height:450px; background-image:url({{ asset('/storage/images/banners/ConceptualDesigner.jpg') }});">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">Conceptual Designer</h1>
          <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
        </div>
        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
          <p class="parallax-section__description">SOLIDWORKS® Conceptual Designer (SWCD) is a concept design tool for
            the rapid creation, manipulation, and modification
            of designs for mechanical components.</p>
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
        <h3>SolidWorks Conceptual Designer</h3>
        <p>
          SolidWorks® Conceptual Designer (SWCD) is the concept design tool for the rapid creation, manipulation, and
          modification of designs for mechanical components. Its single modeling environment makes concept design
          flexible and instinctive in a broad-based collaborative framework that helps accelerate design and reduce
          costs.
          You can capture ideas digitally, quickly create 2D and 3D concept models, get feedback from internal and
          external stakeholders, and easily manage multiple concepts before committing engineering time for further
          development.
        </p>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="videoWrapper">
          <video id="motionAnalysis1" class="video-js" controls preload="auto"
            src="{{asset('storage/videos/SolidWorks/Other Products/First look.mp4')}}" width="100%" height="264"
            poster="{{asset('storage/videos/solidworks_thumbnail.jpg')}}" data-setup='{"fluid": true}'>
            <source src="{{asset('storage/videos/SolidWorks/Other Products/First look.mp4')}}" type='video/mp4'>
            <!-- <source src="MY_VIDEO.webm" type='video/webm'> -->
            <p class="vjs-no-js">
              To view this video please enable JavaScript, and consider upgrading to a web browser that
              <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
            </p>
          </video>
        </div>
        <div class="videoCaption">Video: First Look SolidWorks Conceptual Designer</div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container-fluid">
    <div class="custom-nav-pills">
      <ul class="nav nav-pills" role="tablist">
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#matrix" role="tab">Matrix</a>
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
        <div class="tab-pane fade" id="matrix" role="tabpanel">
          @include('pages.matrix.solidworks-matrix')
        </div>
        <div class="tab-pane fade" id="datasheet" role="tabpanel">
          <div class="row m-0 p-0">
            <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a href="{{asset('storage/pdfs/solidworks/2018/conceptual_designer_2018.pdf')}}" class="pdf-item">
                <figure>
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/solidworks/2018/conceptual_designer_2018.png')}}"
                      style="width:100%;" alt="SOLIDWORKS Conceptual Designer 2018">
                  </div>
                  <figcaption>SolidWorks Conceptual Designer 2018</figcaption>
                </figure>
              </a>
            </div>
          </div>
        </div>
        <div class="tab-pane fade  show active in" id="whatsnew" role="tabpanel">
          <div class="row m-0 p-0">
            <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a href="{{asset('storage/pdfs/solidworks/2020/Top 10 Design to Manufacture.pdf')}}" class="pdf-item">
                <figure>
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/solidworks/2020/Top 10 Design to Manufacture.png')}}"
                      style="width:100%;" alt="SOLIDWORKS Design to Manufacturing Top 10 in 2020">
                  </div>
                  <figcaption>SOLIDWORKS Design to Manufacturing Top 10 in 2020</figcaption>
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
    <h2 class="main-title mt-0">
      SolidWorks conceptual design capabilities</h2>
    <p>SWCD works with Platform Contributor to
      easily save and manage your information in a safe, secure environment. It is complementary to SolidWorks 3D CAD,
      allowing you to validate your concepts in SWCD, then transition the model to SolidWorks 3D CAD to complete the
      detailed designs and documentation.
      SolidWorks Conceptual Designer Capabilities include:</p>
    <div class="responsive-tabs-block row mt-3">
      <div>
        <ul class="nav nav-tabs tabs-left responsive-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#sketch" role="tab">Sketch Motion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#deformable" role="tab">Deformable 3D Geometry</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#mechanize" role="tab">Mechanism Synthesis</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#additional" role="tab">Additional Capabilities:</a>
          </li>
        </ul>
      </div>
      <div class="col-md-8">
        <div class="tab-content responsive-tabsContent">
          <div class="tab-pane active" id="sketch" role="tabpanel">
            <h3>Define PMI directly in 3D</h3>
            <img src="{{asset('storage/images/SolidWorks/Conceptual Designer/new_sketch_motion.jpg')}}"
              alt="Define PMI directly in 3D">
            <p>
              Evaluate your concepts for fit and function with early stage concept validation using trace paths, area
              sweeps, and alerts to help ensure you always move forward with the best design.
            </p>
          </div>
          <div class="tab-pane" id="deformable" role="tabpanel">
            <h3>Deformable 3D Geometry</h3>
            <img src="{{asset('storage/images/SolidWorks/Conceptual Designer/new_deformable.png')}}"
              alt="Clean and Structured 3D Presentation">
            <p>
              Get instant performance verification with realistic 3D components that behave as they would in the real
              world.
            </p>
          </div>
          <div class="tab-pane" id="mechanize" role="tabpanel">
            <h3>Mechanism Synthesis</h3>
            <p>
              Define a partially dimensioned layout of your mechanism and how it will be positioned at discrete steps,
              and SolidWorks Conceptual Design will calculate the undefined dimensions.
            </p>
          </div>
          <div class="tab-pane" id="additional" role="tabpanel">
            <h3>Additional Capabilities:</h3>
            <ul>
              <li>
                Single Modeling Environment
              </li>
              <li>
                Concept Management
              </li>
              <li>
                Social/Collaborative
              </li>
              <li>
                Cloud/Connected
              </li>
              <li>
                Mechanism Design
              </li>
              <li>
                Synthesis + 2D to 3D Motion
              </li>
              <li>
                Direct Editing
              </li>
              <li>
                Predictive Computing
              </li>
            </ul>
          </div>
          <div class="tab-pane" id="comply" role="tabpanel">
            <h3>Comply with industry standards</h3>
            <img src="{{asset('storage/images/SolidWorks/MBD/Comply-with-industry-standards.jpg')}}"
              alt="SolidWorks Conceptual Designer">
            <p>
              SolidWorks MBD helps comply with the predominant industry standards, such as ASME Y14.41,
              Military-Standard-31000A, ISO 16792, ISO 10303-242, ISO 14739, and so on. This compliance gives you the
              competitive advantages to win more contracts and deliver projects to strict requirements, on time and on
              budget.
              Customers looking to meet United States Government standards will be encouraged by the assessment of
              Rich Eckenrode, Co-Chairman of the Military-Standard-31000 manufacturing sub-committee. Mr. Eckenrode
              defined the MBD requirements for the government procurement officers and has stated: "SolidWorks MBD’s
              compliance to Military-Standard-31000 Appendix B is close to 100% …”.
            </p>
          </div>
          <div class="tab-pane" id="need" role="tabpanel">
            <h3>Share and Archive intelligent and intuitive 3D data</h3>
            <img src="{{asset('storage/images/SolidWorks/MBD/Need-Printouts-or-2D-drawings-No-problem.jpg')}}"
              alt="SolidWorks Conceptual Designer">
            <p>
              SolidWorks MBD helps you share and archive intuitive 3D data, including the models, PMI, views, and Meta
              properties, so that you and your suppliers don’t have to waste time in re-modeling based on traditional
              2D Drawings. With the 3D data, you can upgrade your legacy product configurations to new models much
              faster and design tooling and fixtures much more easily.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@stop

@push('after-scripts')
<script>
  $(function() {
    $('#videos .row > div').matchHeight();
  })
</script>
@endpush