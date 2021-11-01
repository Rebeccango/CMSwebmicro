@extends('layouts.layout')
@section('title')
ExactFlat
@stop
@section('meta')
<link rel="canonical" href="{{route('exactFlat')}}" />
@stop
@section('description')Faster, simpler digital patterning. 3D to 2D model flattening and patternmaking.@stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
  style="min-height:450px; background-image:url({{asset('storage/images/SolidWorks/exactflat-hero.jpg')}})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">ExactFlat</h1>
          <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
        </div>
        <div class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
          <p class="parallax-section__description">Faster, simpler digital patterning. 3D to 2D model flattening and
            patternmaking.</p>
        </div>
        <div>
          @include('layouts.generic_contact_buttons')
        </div>
      </div>
    </div>
  </div>
</section>
<section id="solidworks-products">
  <div class="container-fluid">
    <div class="section-block row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h3>ExactFlat</h3>
        <br />
        <p>
          Powerful, Integrated Features That Set a New Productivity Benchmark
          ExactFlat Design Studio powerfully extends the capabilities of SolidWorks making it a relevant and powerful
          choice for companies manufacturing sewn products.
          With ExactFlat Design Studio, manufacturers can now:
        </p>
        <ul>
          <li class="mb-3">
            Design and Model in SolidWorks
          </li>
          <li class="mb-3">
            Accurately Flatten 3D Surface into 2D Patterns
          </li>
          <li class="mb-3">
            Develop and engineer patterns with seam allowances, notches, grain lines, drills, appliques etc.
          </li>
          <li class="mb-3">
            Define and associate manufacturing sequences to pattern geometry
          </li>
          <li class="mb-3">
            Define and associate costs with materials, pattern geometry, and manufacturing sequences
          </li>
          <li class="mb-3">
            Optimize material utilization through marker making and nesting
          </li>
          <li class="mb-3">
            Output to cutter, PDM, ERP
          </li>
        </ul>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <img src="{{asset('storage/images/partner/ExactFlat.png')}}" alt="ExactFlat First Look">
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
          <a href="{{asset('storage/pdfs/partner/ExactFlat.pdf')}}" class="pdf-item">
            <figure>
              <div class="figimg">
                <img src="{{asset('storage/pdfs/partner/ExactFlat.PNG')}}" style="width:100%;"
                  alt="ExactFlat Data Sheet">
              </div>
              <figcaption>ExactFlat Data Sheet</figcaption>
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
    <h2 class="main-title wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" style="margin-top:0;">ExactFlat
      capabilities</h2>
    <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">By consolidating the essential product
      development steps of design, 3D to 2D surface flattening, pattern engineering, nesting, costing, and documentation
      onto a single platform, ExactFlat enables manufacturers to achieve significant productivity improvements. Listed
      below, are some of the powerful features that ExactFlat users benefit from. If you would like to know more or have
      any questions, please use the box below.</p>

    <div class="responsive-tabs-block row" style="margin-top:10px">
      <div class="">
        <!-- required for floating -->
        <ul class="nav nav-tabs tabs-left responsive-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#overview" role="tab">Overview</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#application" role="tab">Applications Across Industries</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#adv" role="tab">Advanced 2D To 3D Flatenning Algorithms</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#powerful" role="tab">Powerful Patterning Tools</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#integrated" role="tab">Integrated High Yield Nesting</a>
          </li>
        </ul>
      </div>
      <div class="col-md-8">
        <div class="tab-content responsive-tabsContent">
          <div class="tab-pane active" id="overview" role="tabpanel">
            <h3>Overview</h3>
            <p>
              ExactFlat is software that makes it faster and less complicated to design, develop, prototype, cost and
              manufacture any products that incorporate composites, industrial fabrics or technical textiles. Integrated
              with leading 3D CAD packages, it does this by:
            </p>
            <ul>
              <li>
                Replacing manual processes with digital processes using Exactflat’s proprietary algorithms.
              </li>
              <li>
                Consolidating separate and distinct workflows into one environment on one platform.
              </li>
              <li>
                Parametrically linking related tasks so that design changes in one area are automatically reflected in
                related areas.
              </li>
            </ul>
          </div>
          <div class="tab-pane" id="application" role="tabpanel">
            <h3>Advanced 2D To 3D Flatenning Algorithms</h3>
            <ul style="margin-top:20px">
              <li>
                Automotive &amp; transportation seating and interiors:
                Seating, steering wheel &amp; shift knob covers, armrests, headliners, carpeting, trunk liners,
                insulation
              </li>
              <li>
                <strong>Marine:</strong>
                Seating, canvas bimini tops, covers, boat hulls, sails
              </li>
              <li>
                <strong>Apparel:</strong>
                Pants, shirts, hats, shoes, gloves, uniforms, technical, compression clothing
              </li>
              <li>
                <strong>Industrial equipment &amp; technical products:</strong>
                Industrial wraps and covers, industrial linings, military equipment
              </li>
              <li>
                <strong>Composite products:</strong>
                Boat hulls, automotive parts, turbine blades etc.
              </li>
              <li>
                <strong>Inflatables:</strong>
                Hot air and weather balloons, industrial balloons, inflatable buildings, inflatable bladders, inflatable
                marketing products
              </li>
              <li>
                <strong>Other:</strong>
                Luggage, handbags &amp; accessories, tents, awnings, medical soft goods, film, protective films, graphic
                wraps, sports equipment, commercial sun shades, signs and banners, displays, body armor, tactical gear,
                helmets, consumer product and appliance covers, architectural structures, roofing, and more…
              </li>
            </ul>
          </div>
          <div class="tab-pane" id="adv" role="tabpanel">
            <h3>ExactFlat is helping leading, innovative manufacturers across a broad spectrum of industries get more
              done in less time, including:</h3>
            <p>ExactFlat’s algorithms utilize a proprietary FEA solver refined over 10 years and are made for
              anisotropic materials formed into complex, non-developable surface geometry.</p>
          </div>
          <div class="tab-pane" id="powerful" role="tabpanel">
            <h3>Powerful Patterning Tools</h3>
            <p>Visual, intuitive pattern engineering available inside SolidWorks. This video gives an overview of how
              automated pattern editing tools can offer simplified processes and accelerated cycle times.</p>
          </div>
          <div class="tab-pane" id="integrated" role="tabpanel">
            <h3>Integrated High Yield Nesting</h3>
            <p>ExactFlat helps designers and engineers get more done, in less time, with lower effort. We have taken
              advanced industry leading compaction algorithms and embedded them within the SolidWorks CAD environment.
              We are proud to offer the first marker making and nesting features that are fully parametrically linked to
              pattern editing tools, and 3D or 2D CAD models.</p>
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