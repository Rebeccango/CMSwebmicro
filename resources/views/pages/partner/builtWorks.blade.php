@extends('layouts.layout')
@section('title')
BuiltWorks and The Steel Detailer
@stop
@section('meta')
<link rel="canonical" href="{{route('builtWorks')}}" />
@stop
@section('description')BuiltWorks is an add-in application for real-time steel design within the native SOLIDWORKS
environment, providing tools for 3D solid parametric modeling, analysis and design, connection detailing, and automated
generation of both drawings and bills of materials. @stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
  style="min-height:450px; background-image:url({{asset('storage/images/SolidWorks/builtworks-hero.jpg')}})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto wow fadeIn" data-wow-duration="0.8s"
          data-wow-delay="0.5s">
          <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">BuiltWorks and The Steel Detailer</h1>
          <div class="section-title-divider"></div>
          <h2>SolidACE</h2>
        </div>
        <div class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
          <p class="parallax-section__description">BuiltWorks is an add-in application for real-time steel design within
            the native SOLIDWORKS environment, providing tools
            for 3D solid parametric modeling, analysis and design, connection detailing, and automated generation of
            both drawings
            and bills of materials.</p>
        </div>
        <div>
          @include('layouts.generic_contact_buttons')
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div>
    <div class="container-fluid">
      <div class="section-block row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <h3 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">What is BuiltWorks?</h3>
          <br />
          <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
            BuiltWorks is an add-in application for real-time steel design within the native SOLIDWORKS® environment,
            providing
            tools for 3D solid parametric modeling, analysis and design, connection detailing, and automated generation
            of both
            drawings and bills of materials. BuiltWorks was developed to meet the architectural, engineering,
            construction (AEC) and
            plant, process and power industries' requirements for high-performance flexible modeling tools that include
            extended
            integration capabilities.</p>
          <h5 class="mb-4 mt-4">Features</h5>
          <ul>
            <li class="mb-3">Axis-based grid system. Floor elevation system. Section and material database. Advanced
              database of standard steel
              sections by international standards. Material database for structural steel linked to sections.</li>
            <li class="mb-3">Advanced possibilities to create and place BuiltWorks structural members both in part and
              assembly alone in a
              group, in array by nodes, and by selected sketch segments. Member editing individually and by group –
              siting,
              rotating, mirroring, offsetting.</li>
            <li class="mb-3">Special features connection detailing. Member aligning, cutting by intersection or
              user-defined shape-reflecting
              priorities. Fast placing of connection plates. Standard and user-defined connections database. Solution
              for
              connection copying within the model and from other models.</li>
            <li class="mb-3">Export/import of SOLIDWORKS® model to/from third-party structural analysis and design
              software like STAAD.Pro.
              Import of design results with parametric model update reflecting results of the analysis and design by
              building code
              requirements. Export/import of SDNF.</li>
            <li class="mb-3">Generation of standard drawings: general arrangement, detailed fabrication and workshop
              drawings of steel
              assemblies. Generation of axis grid representation object. Automatic dimensioning between grid axis, and
              between
              general grid lines.</li>
          </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
          <div class="videoWrapper">
            <video id="motionAnalysis1" class="video-js" controls preload="auto"
              src="{{asset('storage/videos/partner/BuiltWorks.mp4')}}" width="100%" height="264"
              poster="{{asset('storage/videos/partner/BuiltWorks.jpg')}}" data-setup='{"fluid": true}'>
              <source src="{{asset('storage/videos/partner/BuiltWorks.mp4')}}" type='video/mp4'>
              <p class="vjs-no-js">
                To view this video please enable JavaScript, and consider upgrading to a web browser that
                <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
              </p>
            </video>
          </div>
          <div class="videoCaption">Video: First Look BuiltWorks and The Steel Detailer</div>
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
            <a href="{{asset('storage/pdfs/partner/BuiltWorks.pdf')}}" class="pdf-item">
              <figure>
                <div class="figimg">
                  <img src="{{asset('storage/pdfs/partner/BuiltWorks.PNG')}}" style="width:100%;"
                    alt="BuiltWorks and The Steel Detailer Data Sheet">
                </div>
                <figcaption>BuiltWorks and The Steel Detailer Data Sheet</figcaption>
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
            <a href="{{asset('storage/pdfs/partner/BuiltWorks_brochure_2011-Analysis&Translators-WebNew.pdf')}}"
              class="pdf-item">
              <figure style="width:200px;">
                <div class="figimg">
                  <img src="{{asset('storage/pdfs/partner/BuiltWorks_brochure_2011-Analysis&Translators-WebNew.png')}}"
                    style="width:100%;" alt="What's New in BuiltWorks Analysis & Translators">
                </div>
                <figcaption>What's New in BuiltWorks Analysis & Translators</figcaption>
              </figure>
            </a>
            <a href="{{asset('storage/pdfs/partner/BuiltWorks_brochure_2011-Modelling&Detailing-WebNew.pdf')}}"
              class="pdf-item">
              <figure style="width:200px;">
                <div class="figimg">
                  <img src="{{asset('storage/pdfs/partner/BuiltWorks_brochure_2011-Modelling&Detailing-WebNew.png')}}"
                    style="width:100%;" alt="What's New in BuiltWorks Modelling & Detailing">
                </div>
                <figcaption>What's New in BuiltWorks Modelling & Detailing</figcaption>
              </figure>
            </a>
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
  <section style="padding-top:0">
    <div class="container-fluid">
      <h2 class="main-title wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" style="margin-top:0;">
        SolidWorks BuiltWorks capabilities</h2>
      <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">Listed below, are some of the powerful
        features that BuiltWorks Professional users benefit from. With the addition of standard part libraries,
        utilities that will search for design errors, fasteners and tools that will automatically estimate your
        manufacturing costs, the capabilities are endless. If you would like to know more or have any questions, please
        use the box below.</p>

      <div class="responsive-tabs-block row" style="margin-top:10px">
        <div class="">
          <!-- required for floating -->
          <ul class="nav nav-tabs tabs-left responsive-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#solidace" role="tab">SolidAce BuiltWorks</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#quadro" role="tab">Quadro Design</a>
            </li>
          </ul>
        </div>
        <div class="col-md-8">
          <div class="tab-content responsive-tabsContent">
            <div class="tab-pane active" id="solidace" role="tabpanel">
              <h3>SolidAce BuiltWorks</h3>
              <p>
                BuiltWorks is an add-in application for real-time steel design within the SolidWorks® environment.
                BuiltWorks (created by certified SolidWorks’ partner SolidACE) provides tools for 3D solid parametric
                modeling, analysis and design, connection detailing, and automated generation of both drawings and bills
                of materials.
              </p>
              <p>
                BuiltWorks was developed to meet the architectural, engineering, construction (AEC) and plant, process
                and power industries’ requirements for high-performance flexible modeling tools that include extended
                integration capabilities.
              </p>
              <p>
                BuiltWorks maintains an intelligent and true solid model-based architecture. This enables the user to
                create simulated 3D real-world structures containing all the information required for the design,
                manufacturing and construction of steelwork structures and assemblies.
              </p>
            </div>
            <div class="tab-pane" id="quadro" role="tabpanel">
              <h3>Quadro Design</h3>
              <p>
                The Steel Detailer, by Quadro Design, is a specialized add-on to solidworks focusing on steelwork
                applications for the Mining, Industrial and Commercial Industries
              </p>
              <p>
                The Steel Detailer provides parametric libraries for bolted connections and pre-designed steelwork, and
                it automates some of the manual processes in SolidWorks–such as allowing you to insert a model from its
                library that attaches to lines and parametrically updates both the model and associated drawing.
              </p>
              <p>
                The Steel Detailer is a SolidWorks Certified GOLD Product.
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
  $(function(){
    $('#videos .row > div').matchHeight();
  })
</script>
@endpush