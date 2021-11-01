@extends('layouts.layout')
@section('title')
Markforged 3D Printers
@stop
@section('meta')
<link rel="canonical" href="{{route('markforged')}}" />
@stop
@section('description')Markforged 3D printers, software, and materials are transforming manufacturing and changing the
face of the 3D printing
industry.@stop
@section('keywords')3D, Mark X, Mark Two, Onyx One, Onyx Pro, Design Software, CAD, 3D CAD, Markforged, Printers,
authorized,reseller,Canada, materials, fiber @stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
  style="min-height:450px; background-image:url({{asset('/storage/banners/markforged_bg_extended.jpg')}})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto wow fadeIn" data-wow-duration="0.8s"
          data-wow-delay="0.5s">
          <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">Markforged 3D Printers and Software
          </h1>
          <div class="section-title-divider"></div>
          {{-- <h2 class="h4">COMPLETE 3D METAL PRINTING SOLUTION</h2> --}}
        </div>
        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
          <p class="parallax-section__description">Markforged 3D printers, software, and materials are transforming
            manufacturing and changing the face of the 3D printing industry.</p>
        </div>
        <div>
          @include('layouts.generic_contact_buttons')
        </div>
      </div>
    </div>
  </div>
</section>
<section style="padding-top:0">
  <div class="section-secondary">
    <div class="container-fluid">
      <h1 class="main-title wow fadeInLeft" data-wow-duration="1s" style="margin-left:15px;" data-wow-delay="0.2s">
        Markforged 3D Printers</h1>
      <div class="section-block row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s"
          style="margin-bottom:15px;">
          <div class="videoWrapper"><iframe src="https://www.youtube.com/embed/IOCVEgEdEHg?ecver=2" width="641"
              height="100%" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
          <div class="videoCaption">Video: Why Markforged?</div>
          <img src="{{ asset('storage/images/markforged/MF-Auth-Value-Reseller-300.png') }}" width="300px" height="auto"
            class="d-block mx-auto pt-5 pb-2" />
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <p class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">Markforged started with a vision: Empower
            engineers to create strong-as-metal, finished parts using the right materials for the job – and remove the
            multiple barriers between design and a final product. Traditional processes like machining or casting
            produced high-quality, high-performance parts but had multi-week lead times and very high costs. Additive
            manufacturing was fast and cost-effective, but part quality and strength were poor.</p>
          <p class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">In 2014, Markforged released the Mark One,
            the world’s first continuous composite 3D printer – the first 3D printer able to deliver both the part
            quality and performance of traditional manufacturing processes as well as the speed and low-cost of additive
            manufacturing.</p>
          <p class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">Markforged is liberating designers and
            engineers around the world from the long lead times and high costs of traditional manufacturing. Instead of
            waiting weeks and paying thousands of dollars for a part, with Markforged you can 3D print incredibly
            high-performance parts on-premise and in under 24 hours. Print carbon fiber for parts that are as strong as
            aluminum and dramatically lighter. For heat tolerance, print with 17-4 Stainless Steel. For anything else,
            print with Titanium, Aluminum, Kevlar, or one of our 11 other materials to fit any functional
            application.<br /><br /> Welcome to the future of manufacturing.</p>
        </div>
      </div>
    </div>
  </div>
  <section class="pb-0">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-sm-12 text-center">
          <div class="h1 mb-0">23x</div>
          <div class="h6">STRONGER</div>
          <p class="mx-auto w-75">Markforged printed parts are up to 23x stronger than standard 3d printed parts</p>
        </div>
        <div class="col-lg-4 col-sm-12 text-center">
          <div class="h1 mb-0">50x</div>
          <div class="h6">FASTER</div>
          <p class="mx-auto w-75">3D printing with Markforged is up to 50x faster than traditional manufacturing methods
          </p>
        </div>
        <div class="col-lg-4 col-sm-12 text-center">
          <div class="h1 mb-0">20x</div>
          <div class="h6">LOWER COST</div>
          <p class="mx-auto w-75">Compared to machining or casting, Markforged is up to 20x lower cost</p>
        </div>
      </div>
    </div>
  </section>
  <div class="container-fluid  d-flex justify-content-left align-content-left pt-5">
    <div class="col-lg-8 col-md-8 col-xs-12 col-sm-12">
      <h2 class="main-title wow fadeInLeft" data-wow-duration="1s" style="margin-left:0;" data-wow-delay="0.2s">
        OVERVIEW: Markforged 3D Printers</h2>
      <div class="swiper-container swiper-default" style="background:black; min-height:500px; width:100%;">
        <div class="parallax-bg"
          style="background-image:url({{asset('/storage/images/markforged/markforged-logo-white.png')}}); width:200%; opacity:0.08; bottom:0"
          data-swiper-parallax="-40%"></div>
        <div class="swiper-wrapper">
          <div class="swiper-slide d-flex">
            <div class="col-lg-6">
              <img src="{{asset('/storage/images/markforged/MarkX-full-image.jpg')}}" alt="THE MARK X"
                style="max-height: 535px; max-width:100%" data-swiper-parallax="-100">
            </div>
            <div class="col-lg-6">
              <div class="title" data-swiper-parallax="-100">INDUSTRIAL SERIES</div>
              <div class="subtitle" data-swiper-parallax="-200">Uncompromised Strength, Precision, and Beauty</div>
              <div class="text" data-swiper-parallax="-300">
                <p>Industrial grade large-format printers deliver exceptional accuracy, reliability and repeatability.
                  These printers are the go-to solution for manufacturing tooling (Jigs, Jaws, Tools, Fixtures),
                  allowing you to save time and money by 3D printing tools previously machined out of aluminum. With
                  industrial-scale printing of incredibly strong parts and first ever precision sensing systems,
                  Markforged’s Industrial Series composite 3D printers are destined to be the must-have printer for
                  every manufacturer.</p>
                <a href="{{ route("industrial-series") }}" class="btn btn-sm btn-primary btn-rounded px-3">LEARN
                  MORE</a>
              </div>
            </div>
          </div>
          <div class="swiper-slide d-flex">
            <div class="col-lg-6">
              <img src="{{asset('/storage/images/markforged/Mark-two.jpg')}}" alt="THE MARK TWO"
                style="max-height: 535px; max-width:100%" data-swiper-parallax="-100">
            </div>
            <div class="col-lg-6">
              <div class="title" data-swiper-parallax="-100">DESKTOP SERIES</div>
              <div class="subtitle" data-swiper-parallax="-200">Industry leading strength in a desktop platform</div>
              <div class="text" data-swiper-parallax="-300">
                <p>The DNA of the Industrial Series in a package that fits on your desktop. This line of Desktop 3D
                  printers won enterprise printer of the year in 2017. These printers combine Markforged’s innovative
                  materials with workhorse reliability all on your desktop. Remove the barriers between design and
                  putting your parts to use with time and cost savings at the convenience of your desktop. Go from CAD
                  to strong, stiff parts in just hours.</p>
                <a href="{{ route("desktop-series") }}" class="btn btn-sm btn-primary btn-rounded px-3">LEARN MORE</a>
              </div>
            </div>
          </div>
          <div class="swiper-slide d-flex">
            <div class="col-lg-6">
              <img src="{{asset('/storage/images/markforged/metal-x.jpg')}}" alt="Metal X"
                style="max-height: 535px; max-width:100%" data-swiper-parallax="-100">
            </div>
            <div class="col-lg-6">
              <div class="title" data-swiper-parallax="-100">Metal X</div>
              <div class="subtitle" data-swiper-parallax="-200">Complete 3D Metal Printing Solution</div>
              <div class="text" data-swiper-parallax="-300">
                <p>The Metal X 3D Print system is everything you need to go form design to fully functional metal parts
                  - an end-to-end manufacturing solution. The Metal X is upto 10x less expensive than alternative metal
                  additive manufacturing technologies - and up to 100x less than traditional fabrication technologies
                  like machining or casting. Metal X enables you to print with a wide range of materials like Stainless
                  Steel, Tool Steel, Inconel, Titanium and much more.</p>
                <a href="{{ route('metal-series') }}" title="Markforged Metal Series">Learn More</a>
              </div>
            </div>
          </div>
          <div class="swiper-slide d-flex">
            <div class="col-lg-6">
              <img src="{{asset('/storage/images/markforged/Eiger.png')}}" alt="Eiger Software"
                style="max-height: 535px; max-width:100%" data-swiper-parallax="-100">
            </div>
            <div class="col-lg-6">
              <div class="title" data-swiper-parallax="-100">Eiger Software</div>
              <div class="subtitle" data-swiper-parallax="-200">Organize, Reinforce and Optimize Prints from Anywhere
              </div>
              <div class="text" data-swiper-parallax="-300">
                <p>High strength 3D printing requires innovative, smart software. With automatic version control,
                  real-time fleet management and cloud-based collaboration, Eiger is the world’s most advanced 3D
                  printing software. Designed from the ground up to make manufacturing simpler, Eiger enables you to
                  print plastic, metal and composite parts straight from your browser.</p>
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
      <section>
        <div class="container-fluid">
          <div class="custom-nav-pills">
            <ul class="nav nav-pills" role="tablist">
              <li class="nav-item">
                <a class="nav-link active in" data-toggle="tab" href="#datasheet" role="tab">Data Sheet</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#whitepapers" role="tab">White Papers</a>
              </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane fade in active show" id="datasheet" role="tabpanel">
                <div class="d-flex flex-wrap">
                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <a target="_blank"
                      href="{{asset('storage/pdfs/markforged/Markforged+Composites+Datasheet-2017.pdf')}}"
                      class="pdf-item">
                      <figure>
                        <div class="figimg">
                          <img src="{{asset('storage/pdfs/markforged/Markforged+Composites+Datasheet-2017.png')}}"
                            style="width:100%;" alt="Markforged Composites Datasheet 2017">
                        </div>
                        <figcaption>Markforged Composites Datasheet 2017</figcaption>
                      </figure>
                    </a>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <a target="_blank"
                      href="{{asset('storage/pdfs/markforged/Metal+Material+Datasheet+17-4+Stainless+Steel.pdf')}}"
                      class="pdf-item">
                      <figure>
                        <div class="figimg">
                          <img
                            src="{{asset('storage/pdfs/markforged/Metal+Material+Datasheet+17-4+Stainless+Steel.png')}}"
                            style="width:100%;" alt="Markforged Metal Datasheet 2017">
                        </div>
                        <figcaption>Markforged Metal Datasheet 2017</figcaption>
                      </figure>
                    </a>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="whitepapers" role="tabpanel">
                <div class="d-flex" style="display:inline">
                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <a data-toggle="modal" data-target="#wp_modal_1" class="pdf-item">
                      <figure>
                        <div class="figimg">
                          <img src="{{asset('storage/pdfs/markforged/whitepapers/3D+Printing+Buyers+Guide.png')}}"
                            style="width:100%;" alt="3D Printing Buyers Guide">
                        </div>
                        <figcaption>3D Printing Buyers Guide</figcaption>
                      </figure>
                    </a>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <a data-toggle="modal" data-target="#wp_modal_2" class="pdf-item">
                      <figure>
                        <div class="figimg">
                          <img
                            src="{{asset('storage/pdfs/markforged/whitepapers/Economics+of+3d+Printing+White+Paper+Web.png')}}"
                            style="width:100%;" alt="The Economics of 3D Printing">
                        </div>
                        <figcaption>The Economics of 3D Printing</figcaption>
                      </figure>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

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
            <iframe width="100%" height="264" src="https://www.youtube.com/embed/f76rt2a1PYw" frameborder="0"
              allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
          <div class="videoCaption">Video: The Mark X Industrial 3D Printer</div>
        </div>
        <div class="col-lg-12 col-md-12 col-xs-6 col-sm-6 pb-4 mb-3">
          <div class="videoWrapper">
            <iframe width="100%" height="auto" src="https://www.youtube.com/embed/-rkam8Al0KI" frameborder="0"
              allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
          <div class="videoCaption">Video: Markforged Industrial Composite Series TimeLapse</div>
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
<script>
  $(function(){
      $('#videos .row > div').matchHeight();

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

<!-- Modals Whitepapers -->
<div class="modal fade" tabindex="-1" role="dialog" id="wp_modal_1">
  <div class="modal-dialog" role="document" style="max-width:700px">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Gain Access to the 3D Printing Buyers Guide</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div data-form-block-id="65c1d825-b3ac-e911-a987-000d3a3702ca"></div>
        <div id="dblPFWxs8egTGCps9KXoxUvn4nIpNtVuAxnbOZ4lii20"></div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="wp_modal_2">
  <div class="modal-dialog" role="document" style="max-width:700px">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Gain Access to "The Economics of 3D Printing"</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div data-form-block-id="0095dd94-b4ac-e911-a987-000d3a3702ca"></div>
        <div id="dZbaHtrxDmsfvUVMLvOJA7Zncv8nxK9udI-SM0ZR2cNU"></div>
      </div>
    </div>
  </div>
</div>
@endpush