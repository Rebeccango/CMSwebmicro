@extends('layouts.layout')
@section('title')
SolidWorks Industrial Designer
@stop
@section('meta')
<link rel="canonical" href="{{route('solidworks-otherProducts-industrialDesigner')}}" />
@stop
@section('description')SOLIDWORKS® Industrial Designer removes the constraints of traditional industrial design software
to give you a flexible, intuitive, powerful modeling environment.@stop
{{-- @section('keywords')SolidWorks, Industrial, Designer @stop --}}
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
  style="min-height:450px; background-image:url({{asset('/storage/images/SolidWorks/3dexperience/sw-industrial-designer.jpg')}})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          <h1>3DEXPERIENCE Design Solutions</h1>
          <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
        </div>
        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
          <p class="parallax-section__description">Quickly create and collaborate on 3D conceptual designs and organic
            shapes using cloud-based tools and deliver
            innovative products to market faster.</p>
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
          <h3>SolidWorks Industrial Designer</h3>
          <p>
            SOLIDWORKS® Industrial Designer (SWID) is a concept design tool that allows you to quickly generate multiple
            industrial design concepts in response to a design brief. It offers unique tools for the rapid creation,
            manipulation, and modification of designs using native and imported geometry.
          </p>
          SWID combines subdivision surface modeling and parametric modeling that delivers a flexible and instinctive
          solution. It's broad-based collaborative framework helps accelerate your industrial design and reduce costs.
          <p>
            SWID allows you to capture your ideas digitally, quickly create 3D concept models, get feedback from
            internal and external stakeholders, and easily manage multiple concepts before committing engineering time
            to build a prototype.
          </p>
          <p>
            SWID includes Platform Contributor to easily save your information in a safe, secure environment. It is
            complementary to SOLIDWORKS 3D CAD, allowing you to validate your concepts in SWIC, then transition the
            model to SOLIDWORKS 3D CAD to complete the detailed designs and documentation.
          </p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="videoWrapper">
            <video id="motionAnalysis1" class="video-js" controls preload="auto"
              src="{{asset('storage/videos/SolidWorks/Other Products/First Look Industrial Designer.mp4')}}"
              width="100%" height="264" poster="{{asset('storage/videos/solidworks_thumbnail.jpg')}}"
              data-setup='{"fluid": true}'>
              <source src="{{asset('storage/videos/SolidWorks/Other Products/First Look Industrial Designer.mp4')}}"
                type='video/mp4'>
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
  </div>
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
            <div class="row" style="margin:0; padding:0">
              <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <a href="{{asset('storage/pdfs/solidworks/2018/industrial_designer_2018.pdf')}}" class="pdf-item">
                  <figure>
                    <div class="figimg">
                      <img src="{{asset('storage/pdfs/solidworks/2018/industrial_designer_2018.png')}}"
                        style="width:100%;" alt="SOLIDWORKS Industrial Designer 2018">
                    </div>
                    <figcaption>SolidWorks Industrial Designer 2018</figcaption>
                  </figure>
                </a>
              </div>
            </div>
          </div>
          <div class="tab-pane fade  show active in" id="whatsnew" role="tabpanel">
            <div class="row" style="margin:0; padding:0">
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
      <h2 class="main-title">
        SolidWorks Industrial Designer Capabilities include:</h2>
      <p>SWCD works with Platform Contributor to
        easily save and manage your information in a safe, secure environment. It is complementary to SolidWorks 3D CAD,
        allowing you to validate your concepts in SWCD, then transition the model to SolidWorks 3D CAD to complete the
        detailed designs and documentation. SolidWorks Industrial Designer Capabilities include:</p>
      <div class="responsive-tabs-block row mt-3">
        <div class="">
          <ul class="nav nav-tabs tabs-left responsive-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#intuitive" role="tab">Intuitive Freehand Sketching</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#simplified" role="tab">Simplified Design Evolution</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#real" role="tab">Realistic Rendering</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#additional" role="tab">Additional Capabilities:</a>
            </li>
          </ul>
        </div>
        <div class="col-md-8">
          <div class="tab-content responsive-tabsContent">
            <div class="tab-pane active" id="intuitive" role="tabpanel">
              <h3>Intuitive Freehand Sketching</h3>
              <img src="{{asset('storage/images/SolidWorks/Industrial Designer/Suglasses.jpg')}}"
                alt="Define PMI directly in 3D">
              <p>
                Allows you to capture your design ideas directly in a 3D environment.
              </p>
            </div>
            <div class="tab-pane" id="simplified" role="tabpanel">
              <h3>Simplified Design Evolution</h3>
              <p>
                Quickly moves your concept from sketches to complex 3D geometry, helping accelerate time-to-market.
              </p>
            </div>
            <div class="tab-pane" id="real" role="tabpanel">
              <h3>Realistic Rendering</h3>
              <p>
                Enables you to produce stunning images to help convey exactly how the finished product will look.
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
                  SOCIAL/Collaborative
                </li>
                <li>
                  Cloud/Connected
                </li>
                <li>
                  Concept Sketching
                </li>
                <li>
                  Integrated Freeform and Parametric Surface/Solid Modeling
                </li>
                <li>
                  Direct Editing
                </li>
                <li>
                  Predictive Computing
                </li>
                <li>
                  Rendering
                </li>
              </ul>
            </div>
            <div class="tab-pane" id="comply" role="tabpanel">
              <h3>Comply with industry standards</h3>
              <img src="{{asset('storage/images/SolidWorks/MBD/Comply-with-industry-standards.jpg')}}"
                alt="SolidWorks Inspection">
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
                alt="SolidWorks Inspection">
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
</section>
@stop

@push('after-scripts')
<script>
  $(function() {
    $('#videos .row > div').matchHeight();
  })
</script>
@endpush