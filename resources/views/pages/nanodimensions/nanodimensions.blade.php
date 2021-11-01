@extends('layouts.layout')
@section('title')
Markforged 3D Printers
@stop
@section('meta')
<link rel="canonical" href="{{route('markforged')}}" />
@stop
@section('description')CAD MicroSolutions is one of Canada's top authorized resellers of Markforged 3D Printers!
Markforged 3D printers – the only printers that embed continuous carbon fiber into printed nylon for composites with the
strength of metal.@stop
@section('keywords')3D, Mark X, Mark Two, Onyx One, Onyx Pro, Design Software, CAD, 3D CAD, Markforged, Printers,
authorized,reseller,Canada, materials, fiber @stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
  style="min-height:550px; background-image:url({{asset('/storage/banners/markforged_bg_extended.jpg')}})">
  <div class="trans-heading">
    <div class="container-fluid">
      <div class="content white-content d-flex justify-content-center align-items-center">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-duration="1s"
            data-wow-delay="0.2s">
            <p class="title">Markforged 3D Printers</p>
            <p class="tlt" data-in-effect="rollIn" style="color:#3781ef">NOW IN CANADA</p>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-top: 15px; padding:0;">
            @include('layouts.generic_contact_buttons')
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="solidworks-products" style="padding-top:0">
  <div class="container-fluid">
    <!-- <div class="row">
      <div class="section-title center-block mx-auto">
        <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">SOLIDWORKS PREMIUM</h1>
        <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
      </div>
    </div> -->

  </div>

  <div class="section-secondary">
    <div class="container-fluid">
      <h1 class="main-title wow fadeInLeft" data-wow-duration="1s" style="margin-left:15px;" data-wow-delay="0.2s">
        Markforged 3D Printers</h1>
      <div class="section-block row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeIn mb-4" data-wow-duration="1s" data-wow-delay="0.2s">
          <div class="videoWrapper">
            <video id="motionAnalysis1" class="video-js vjs-16-9" controls preload="auto"
              src="{{asset('/storage/videos/markforged/Meet-the-Mark-One-the-worlds-first-Carbon-Fiber-3D-printer-1.mp4')}}"
              width="100%" height="264" poster="{{asset('/storage/images/markforged/markforged-logo-white.png')}}"
              data-setup='{"fluid": true}'>
              <source
                src="{{asset('/storage/videos/markforged/Meet-the-Mark-One-the-worlds-first-Carbon-Fiber-3D-printer-1.mp4')}}"
                type='video/mp4'>
              <!-- <source src="MY_VIDEO.webm" type='video/webm'> -->
              <p class="vjs-no-js">
                To view this video please enable JavaScript, and consider upgrading to a web browser that
                <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
              </p>
            </video>
          </div>
          <div class="videoCaption">Video: Markforged Overview Video with Customer Success</div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <p class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
            Markforged started with a vision: Empower engineers to create strong-as-metal, finished parts using the
            right materials for the job – and remove the multiple barriers between design and a final product. We are
            overturning not only the 3D printing industry but also many traditional manufacturing methods giving our
            customers unprecedented cost, time and efficiency savings.<br /><br />
            Markforged products transcend the realm of 3D printing prototypes and trinkets. Using unique continuous
            fiber reinforcement to create metal-strength parts at a low cost, we break down the barriers between idea
            and reality for every designer, engineer and manufacturer.
          </p>
        </div>

      </div>
    </div>
  </div>
  <div class="s40"></div>
  <div class="container-fluid">
    <div class="col-lg-8 col-md-8 col-xs-12 col-sm-12">
      <h2 class="main-title wow fadeInLeft" data-wow-duration="1s" style="margin-left:0;" data-wow-delay="0.2s">
        OVERVIEW: Markforged 3D Printers</h2>
      <div class="swiper-container swiper-default" style="background:black; min-height:500px;">
        <div class="parallax-bg"
          style="background-image:url({{asset('/storage/images/markforged/markforged-logo-white.png')}}); width:200%; opacity:0.08; bottom:0"
          data-swiper-parallax="-40%"></div>
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="col-lg-6">
              <img src="{{asset('/storage/images/markforged/MarkX-full-image.jpg')}}" alt="THE MARK X"
                style="max-height: 535px; max-width:100%" data-swiper-parallax="2300">
            </div>
            <div class="col-lg-6">
              <div class="title" data-swiper-parallax="-100">THE MARK X</div>
              <div class="subtitle" data-swiper-parallax="-200">Uncompromised Strength, Precision, and Beauty</div>
              <div class="text" data-swiper-parallax="-300">
                <p>The Mark X is the most powerful 3D printer on the market. With industrial-scale printing of
                  incredibly strong parts and first ever precision sensing systems, the Mark X is destined to be the
                  must-have printer for every manufacturer. This printer combines the benefits of Markforged’s unique
                  fiber reinforcement for parts as strong as metal with advanced “build as designed” sensors and the
                  beautiful surface finish of Onyx. The Mark X will empower you to take any design concept and make it a
                  reality.</p>
              </div>
            </div>

          </div>

          <div class="swiper-slide">
            <div class="col-lg-6">
              <img src="{{asset('/storage/images/markforged/Mark-two.jpg')}}" alt="THE MARK TWO"
                style="max-height: 535px; max-width:100%" data-swiper-parallax="2300">
            </div>
            <div class="col-lg-6">
              <div class="title" data-swiper-parallax="-100">THE MARK TWO</div>
              <div class="subtitle" data-swiper-parallax="-200">Industry leading strength in a desktop platform</div>
              <div class="text" data-swiper-parallax="-300">
                <p>The Mark Two combines Markforged’s innovative materials with workhorse reliability all on your
                  desktop. It is the only affordable printer in the industry that enables you to go from CAD to strong,
                  stiff reinforced parts in hours. Remove the barriers between design and putting your parts to use with
                  time and cost savings at the convenience of your desktop.</p>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="col-lg-6">
              <img src="{{asset('/storage/images/markforged/Eiger.png')}}" alt="Eiger Software"
                style="max-height: 535px; max-width:100%" data-swiper-parallax="2300">
            </div>
            <div class="col-lg-6">
              <div class="title" data-swiper-parallax="-100">Eiger/Software</div>
              <div class="subtitle" data-swiper-parallax="-200">Organize, Reinforce and Optimize Prints From Anywhere
              </div>
              <div class="text" data-swiper-parallax="-300">
                <p>High-strength 3D composite printing requires innovative smart software. Easily control the strength
                  and quality of your prints with Eiger, our intelligent, online platform. Whether you have one printer
                  or many, organize, collaborate, and invent in one integrated system.</p>
              </div>
            </div>
          </div>

        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination-white"></div>
        <!-- Add Navigation -->
        <div class="swiper-button-prev swiper-button-white"></div>
        <div class="swiper-button-next swiper-button-white"></div>
      </div>
    </div>

    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12 ">
      <h3 class="main-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">VIDEOS</h3>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-6 col-sm-6 mb-3">
          <div class="videoWrapper">
            <video id="motionAnalysisVideo" class="video-js vjs-16-9" controls preload="auto"
              src="{{asset('/storage/videos/markforged/Rest-Devices-Success-Story.mp4')}}" width="100%" height="264"
              poster="{{asset('/storage/videos/markforged/Rest-Devices-Success-Story.png')}}"
              data-setup='{"fluid": true}'>
              <source src="{{asset('/storage/videos/markforged/Rest-Devices-Success-Story.mp4')}}" type='video/mp4'>
              <!-- <source src="MY_VIDEO.webm" type='video/webm'> -->
              <p class="vjs-no-js">
                To view this video please enable JavaScript, and consider upgrading to a web browser that
                <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
              </p>
            </video>
          </div>
          <div class="videoCaption">Video: Rest Devices Success Story</div>
        </div>
        <div class="col-lg-12 col-md-12 col-xs-6 col-sm-6 mb-3">
          <div class="videoWrapper">
            <video id="motionAnalysisVideo" class="video-js vjs-16-9" controls preload="auto"
              src="{{asset('/storage/videos/markforged/Markforged-Mark-X-3D-Printing-Time-Lapse-Video.mp4')}}"
              width="100%" height="264"
              poster="{{asset('/storage/videos/markforged/Markforged-Mark-X-3D-Printing-Time-Lapse-Video.png')}}"
              data-setup='{"fluid": true}'>
              <source src="{{asset('/storage/videos/markforged/Markforged-Mark-X-3D-Printing-Time-Lapse-Video.mp4')}}"
                type='video/mp4'>
              <!-- <source src="MY_VIDEO.webm" type='video/webm'> -->
              <p class="vjs-no-js">
                To view this video please enable JavaScript, and consider upgrading to a web browser that
                <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
              </p>
            </video>
          </div>
          <div class="videoCaption">Video: Mark One Launch Video</div>
        </div>
        <div class="col-lg-12 col-md-12 col-xs-6 col-sm-6 mb-3">
          <div class="videoWrapper">
            <video id="motionAnalysisVideo" class="video-js vjs-16-9" controls preload="auto"
              src="{{asset('/storage/videos/markforged/Markforged-Customer-Success-Story-Dixon-Valve-Coupling.mp4')}}"
              width="100%" height="264"
              poster="{{asset('/storage/videos/markforged/Markforged-Customer-Success-Story-Dixon-Valve-Coupling.png')}}"
              data-setup='{"fluid": true}'>
              <source
                src="{{asset('/storage/videos/markforged/Markforged-Customer-Success-Story-Dixon-Valve-Coupling.mp4')}}"
                type='video/mp4'>
              <!-- <source src="MY_VIDEO.webm" type='video/webm'> -->
              <p class="vjs-no-js">
                To view this video please enable JavaScript, and consider upgrading to a web browser that
                <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
              </p>
            </video>
          </div>
          <div class="videoCaption">Video: Customer Success Story</div>
        </div>
      </div>
    </div>
  </div>
</section>
@stop

@push('after-scripts')
<!-- Initialize Swiper -->
<script>
  $(function(){
  var swiper = new Swiper('.swiper-container', {
    pagination: {
     el: '.swiper-pagination',
   },
    paginationClickable: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
      parallax: true,
      speed: 600,
  });
});
</script>
@endpush