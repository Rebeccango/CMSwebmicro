@extends('layouts.layout')
@section('title')
Visual Components
@stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
style="min-height:450px; background-image:url({{asset('storage/images/SolidWorks/optisworks-hero.jpg')}});">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">3DCreate: Visual Components</h1>
          <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
        </div>
        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
          <p class="parallax-section__description">Plant Layout And Process Simulation Suite</p>
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
        <h3 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">Visual Components</h3>
        <br />
        <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" style="font-size: 16px;">
          Visual Components is an affordable plant layout and process simulation suite of software that leverages native
          SolidWorks data. Drag-and-drop equipment designed in SolidWorks
          as easily as you cut and paste text within a document.
        </p>
        <img width="300" style="margin:0 auto"
          src="https://www.visualcomponents.com/wp-content/uploads/2016/11/Essentials-Project-ready-deliverables-2.png" />
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
        <div class="videoWrapper">
          <iframe width="100%" height="315" src="https://www.youtube.com/embed/SejlJV1pkKg" frameborder="0"
            allowfullscreen></iframe>
        </div>
        <div class="videoCaption" style="margin-top:-10px">Video: First Look Visual Components</div>
      </div>
    </div>

  </div>
</section>
<section>
  <div class="container-fluid">
    <h3 class="mb-4">What is 3DCreate?</h3>
    <p>3DCreate delivers discrete event and robotic simulation on the one platform for complete simulation and
      visualization of
      modern manufacturing systems. Now everyone can access 3D simulation models using layered products and reusable
      components that simply snap together to form new layouts. Bringing 3D CAD data to life as a simulation component
      supports an organization and its trading partners on many levels.</p>
    <p>The lifelike simulation behavior is a tool for
      engineers to analyze system performance in fine detail, and it's a tool for customers to reduce their risk in
      proposal
      selection. By wrapping complex simulation behavior within a reusable and user-friendly visual component package,
      3DCreate provides a means for system integrators and salespeople to configure equipment into valid layouts quickly
      and
      easily. A visual component will support all the simulation and visualization needs from product development,
      marketing,
      and sales through to training and final product documentation. </p>
    <p>3DCreate makes it possible for any user to quickly
      generate working modules or production systems within a short period of time. You can compare different layouts,
      equipment selections, and throughput possibilities in real time with staff, suppliers, and customers. Having the
      machines move and parts flow adds the required dimension a wide audience needs to understand a manufacturing
      process.</p>
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
          <a href="{{asset('storage/pdfs/partner/visualcomponents.pdf')}}" class="pdf-item">
            <figure>
              <div class="figimg">
                <img src="{{asset('storage/pdfs/partner/visualcomponents.png')}}" style="width:100%;"
                  alt="SolidWorks PDM Professional">
              </div>
              <figcaption>Visual Components Data Sheet</figcaption>
            </figure>
          </a>
        </div>
        <div class="tab-pane fade  show active in" id="whatsnew" role="tabpanel">
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
    <h2 class="main-title wow fadeInLeft mt-0" data-wow-duration="1s" data-wow-delay="0.2s">Visual
      Components capabilities</h2>
    <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">An affordable plant layout and
      process-simulation suite that leverages native SolidWorks data, 3D Discrete Event, and Robot Simulation in one
      platform. Visual Components enables manufacturers to achieve significant productivity improvements. Listed below,
      are some of the powerful features that Visual Component users benefit from. If you would like to know more or have
      any questions, please use the box below.</p>
    <div class="responsive-tabs-block row" style="margin-top:10px">
      <div class="">
        <ul class="nav nav-tabs tabs-left responsive-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active in" data-toggle="tab" href="#3dcreate" role="tab">3D Create</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#3drealize" role="tab">3D Realize</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#3dstimulate" role="tab">3D Simulate</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#3dautomate" role="tab">3D Automate</a>
          </li>
        </ul>
      </div>
      <div class="col-md-8">
        <div class="tab-content responsive-tabsContent">
          <div class="tab-pane active" id="3dcreate" role="tabpanel">
            <h3>3D Create</h3>
            <p>
              3DCreate is the premium package of the Visual Components’ software family. It offers all functions you
              need to create new simulation components from existing 3D CAD data and
              simulate complete factory layouts.
            </p>
          </div>
          <div class="tab-pane" id="3drealize" role="tabpanel">
            <h3>3D Realize</h3>
            <p>
              3DRealize makes it possible for any user to quickly generate working simulation layouts from ready made
              equipment libraries. Different layouts, equipment selections and
              possibilities can be easily tested to find the most suitable solution to your customer’s wishes.
            </p>
          </div>
          <div class="tab-pane" id="3dstimulate" role="tabpanel">
            <h3>3D Simulate</h3>
            <p>
              3DSimulate is a multi-purpose simulation and visualization tool with extensive built-in tools for
              statistical analysis of production systems and machinery.
              It offers layout designers an integrated tool with in-built reports and interface for communicating with
              external systems.
            </p>
          </div>
          <div class="tab-pane" id="3dautomate" role="tabpanel">
            <h3>3D Automate</h3>
            <p>
              3DAutomate was created to fully support the complex demands of the automotive industry. The patented
              technology behind 3DAutomate is refined to the last bit and it is truly
              unique in the world of simulation engines. Yet, this is not what we want you to think about. As a
              3DAutomate user, all you notice is how easy to understand and visually appealing
              your layout plans become ­— easy and fast.
            </p>
            <ul>
              <li>
                Large-model support
              </li>
              <li>
                An in-built PLC validation framework
              </li>
              <li>
                Offline programming tools
              </li>
              <li>
                Versatile visualization options such as Point Cloud and LOD
              </li>
              <li>
                Smart path generation for robotic processes
              </li>
              <li>
                Statistical analysis and reporting tools
              </li>
              <li>
                COM and Python APIs for application developers
              </li>
              <li>
                Icon based sequence editor
              </li>
              <li>
                Ready-made components
              </li>
              <li>
                3D PDF
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@stop
@push('after-scripts')
<script>
  $(function(){
    $('#videos .row > div').matchHeight();
  })
</script>
@endpush