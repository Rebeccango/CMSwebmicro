@extends('layouts.layout')
@section('title')
OptisWorks
@stop
@section('meta')
<link rel="canonical" href="{{route('optisWork')}}" />
@stop
@section('description')OptisWorks delivers light solutions from optical design,
to photometric optimization, through to product visualization all within one software, making it a truly
corporate-wide solution. @stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
style="min-height:450px; background-image:url({{asset('storage/images/SolidWorks/optisworks-hero.jpg')}})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">OptisWorks</h1>
          <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
        </div>
        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
          <p class="parallax-section__description">OptisWorks is the only software editor of its kind–offering a
            complete solution for light optimization on
            SolidWorks.</p>
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
        <h3 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">OptisWorks</h3>
        <br />
        <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" style="font-size: 16px;">
          OptisWorks is the only software editor of its kind–offering a complete solution for light optimization on
          SolidWorks. OptisWorks delivers light solutions from optical design,
          to photometric optimization, through to product visualization all within one software, making it a truly
          corporate-wide solution.
        </p>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
        <div class="videoWrapper">
          <video class="video-js vjs-16-9" controls preload="auto"
            src="{{asset('storage/videos/partner/optisworks.mp4')}}" data-setup='{"fluid": true}'>
            <p class="vjs-no-js">
              To view this video please enable JavaScript, and consider upgrading to a web browser that
              <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
            </p>
          </video>
        </div>
        <div class="videoCaption">Video: First Look OptisWorks</div>
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
          <a href="{{asset('storage/pdfs/partner/optiswork.pdf')}}" class="pdf-item">
            <figure>
              <div class="figimg">
                <img src="{{asset('storage/pdfs/partner/optiswork.png')}}" style="width:100%;"
                  alt="OptisWorks Data Sheet">
              </div>
              <figcaption>OptisWorks Data Sheet</figcaption>
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
    <h2 class="main-title wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" style="margin-top:0;">OptisWorks
      capabilities</h2>
    <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">OptisWorks enables manufacturers to achieve
      significant productivity improvements. Listed below, are some of the powerful features that OptisWorks users
      benefit from. If you would like to know more or have any questions, please use the box below.</p>
    <div class="responsive-tabs-block row" style="margin-top:10px">
      <div class="">
        <h3>OptisWorks Oveview</h3>
        <ul class="nav nav-tabs tabs-left responsive-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#simulation" role="tab">Simulation in SolidWorks</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#science" role="tab">The Science of Light at your Fingertips</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#output" role="tab">Output is guaranteed true to Life</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#choose" role="tab">Choose From Extensive measured Libraries</a>
          </li>
        </ul>
      </div>
      <div class="col-md-8">
        <div class="tab-content responsive-tabsContent">
          <div class="tab-pane active" id="simulation" role="tabpanel">
            <h3>Simulation in SolidWorks</h3>
            <p>OptisWorks edits a range of software for the scientific simulation of light and human vision within a
              Virtual Reality Environment. Its solutions allow designers, ergonomists, and engineers to simulate and
              optimize lighting performance, colors, optical effects, product lit appearance as well as the visibility
              and legibility of information on Human Machine Interfaces, in a fully-immersive CAD environment.
              OptisWorks is the only software editor of its kind to offer such a complete solution from optical design,
              to photometric optimization through to product visualisation all within one software.</p>
          </div>
          <div class="tab-pane" id="science" role="tabpanel">
            <h3>The Science of Light at your Fingertips</h3>
            <p>OPTIS offers you a user-friendly, highly-intuitive simulation and visualization tool harnessing the
              optics, light, and human vision knowledge and experience that its team has gained over decades of
              research.</p>
          </div>
          <div class="tab-pane" id="output" role="tabpanel">
            <h3>Output is guaranteed true to Life</h3>
            <p>When the data you input is physically measured, SPEOS simulations are guaranteed to be the exact
              reproduction of real-life because the basis for SPEOS simulations are sources, materials, and surfaces
              which have been accurately measured and characterised, either by the manufacturer or by OPTIS latest
              in-house optical measurement devices, the OMS2 and OMS4. Simulation results, being based on physics, are
              used for real-life decision making in the product development departments of the world’s leading car,
              aircraft, electronics and lighting manufacturers. Thanks to OPTIS, you can validate your choice of colors,
              materials, lighting sources because you know that SPEOS results predict the REALITY of your product.</p>
          </div>
          <div class="tab-pane" id="choose" role="tabpanel">
            <h3>Choose From Extensive measured Libraries</h3>
            <p>OPTIS simulation software comes with an extensive set of regularly updated and downloadable optical and
              photometric components libraries. The libraries provide measured data on materials, light sources, and
              surfaces to achieve unparalleled simulation realism as well as standards libraries to verify design
              compliance.</p>
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