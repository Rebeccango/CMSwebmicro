@extends('layouts.layout')
@section('title') ATOS Q | GOM @stop
@section('meta')
<link rel="canonical" href="{{route('3d-scanning.hardware.atos-q')}}" />
@stop
@section('description')GOM’s ATOS Q introduces a new level of reliability and versatility in 3D scanning, making it a perfect fit for complex
measurement and inspection tasks. Leveraging the ATOS technology based on precise optoelectronics, robust sensor design
and powerful software, the ATOS Q was specifically designed for industry use.
@stop
@section('body')
<section class="trans-header-window p-0">
  <section class="cd-hero">
    <ul class="cd-hero-slider" data-loopVideo="false" data-autoPlayDelay="0" data-height="800px">
      <li class="cd-bg-video selected">
      <div class="cd-bg-video-wrapper" data-poster="{{asset('images/pages/gom/atosq/gom_atos-q_header.png')}}"
        data-video="{!!asset('images/pages/gom/atosq/gom_atos-q_header')!!}">
      </div>
      </li>
    </ul>
  </section> <!-- .cd-hero -->
  <div class="trans-heading">
    <div class="container-fluid d-flex justify-content-center align-items-center">
      <div class="white-content d-flex justify-content-center align-items-center">
        <div class="d-flex flex-wrap justify-content-center align-items-center">
          <div class="text-center" >
            <h1 class="h1 display-4">ATOS Q</h1>
            <h2 class="h5">Quality starts with a Q. An ATOS Q.</h2>
          </div>
          <div class="w-100" style="margin-top:50%">
            @include('layouts.generic_contact_buttons')
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="p-0">
  <div class="d-flex flex-wrap w-100 h-100 container px-0">
    <div class="d-flex col-12 col-md-12 col-lg-6 col-sm-12 py-5 px-4 flex-column align-items-start justify-content-center mb-sm-5 mb-md-0" style="z-index: 1">
      <div class="d-flex flex-column justify-content-start">
        <h3 class="h1 main-title">Introducing the ATOS Q</h3><br>
        <h4 class="lead">GOM’s ATOS Q introduces a new level of reliability and versatility in 3D scanning, making it a perfect fit for complex
        measurement and inspection tasks. Leveraging the ATOS technology based on precise optoelectronics, robust sensor design
        and powerful software, the ATOS Q was specifically designed for industry use. Whether performing quality assurance for
        parts that were additively manufactured, plastic or injection molded, casted, punched, formed or otherwise, the ATOS Q
        rises to the challenge.</h4>
      </div>
     <a href="https://www.cadmicro.com/resources/149/gom-atos-q-brochure"
      class="btn btn-rounded btn-outline-primary mt-4 order-1 order-lg-0" target="_blank" title="CLEANING">View Brochure <i
        class="ml-3 fas fa-caret-right"></i></a>
    </div>
    <div class="d-flex col-12 col-md-12 col-lg-6 col-sm-12 justify-content-center align-items-center flex-column">
      <img src="{{ asset("images/pages/gom/atosq/atos-q-man.jpg") }}" height="100%" width="auto">
    </div>
  </div>
</section>
<section class="section-secondary py-5 px-4">
  <div class="section-title center-block mx-auto mb-0">
    <h2 class="display-4">Reliable – a real ATOS sensor</h2>
    <div class="section-title-divider"></div>
    <div class="container text-left">
    <p class="lead mb-0 mt-4">The success of ATOS sensors in optical 3D measuring systems is due to precise optoelectronics, robust sensor design and
    powerful software. Specifically designed for industry use, the robust, dustproof and splashproof sensor in the ATOS Q
    makes it suitable for even the shop floor. Its Blue Light Equalizer enables high speed fringe projection to deliver
    outstanding performance with a high degree of detail and accuracy.</p>
    </div>
  </div>
</section>
<section class="py-0">
  <div class=" border-bottom border-top">
    <div class="container row p-0 mx-auto">
    <div class="col-lg-4 col-sm-12 col-md-12 col-xs-12 text-center px-5 py-5 border-right">
      <div class="d-flex align-items-center align-items-lg-start justify-content-center flex-column h-100">
        <div class="w-100 position-relative text-center text-md-left" style="z-index:1">
          <h3 class="lead">ATOS design</h3>
          <p class="mt-4">ATOS Q is specifically developed for industry use and delivers fully traceable measurement results—even under harsh
          conditions. The optical and electronic systems of the robust, optical 3D sensor are dustproof and splashproof, making
          all ATOS Q sensors ideally suited for the move from the measuring room to the shop floor. Users will appreciate the ATOS
          Q sensor because of its simple and convenient operation.</p>
        </div>
      </div>
    </div>
    <hr class="col-lg-12 d-flex d-lg-none" />
    <div class="col-lg-4 col-sm-12 col-md-12 col-xs-12 text-center px-5 py-5 border-right">
      <div class="d-flex align-items-center justify-content-center flex-column h-100">
        <div class="w-100 position-relative text-center text-md-left" style="z-index:1">
          <h3 class="lead">ATOS technology</h3>
          <p class="mt-4">ATOS Q captures quality information quickly and with a high degree of detail, providing a reliable basis to easily
          interpret this information. Its Triple Scan Principle offers advantages for measuring reflective surfaces and objects
          with indentations. The Blue Light Equalizer increases the brightness of the light source and transfers uniform,
          speckle-free light to the projection unit.</p>
        </div>
      </div>
    </div>
    <hr class="col-lg-12 d-flex d-lg-none" />
    <div class="col-lg-4 col-sm-12 col-md-12 col-xs-12 text-center px-5 py-5">
      <div class="d-flex align-items-center justify-content-center flex-column h-100">
        <div class="w-100 position-relative text-center text-md-left" style="z-index:1">
          <h3 class="lead">ATOS performance</h3>
          <p class="mt-4">Thanks to the Blue Light Equalizer and fast data processing, ATOS Q impresses with an outstanding performance. The Blue
          Light Equalizer enables high-speed fringe projection and is so powerful that even on uncooperative surfaces short
          measuring times can be achieved. Industrial ports with fiber optic cables and robust plug-in connections allow for high
          data throughput.</p>
        </div>
      </div>
    </div>
    </div>
  </div>
</section>


<section class="section-secondary py-5 px-4">
  <div class="section-title center-block mx-auto mb-0">
    <h2 class="display-4">Versatile – ATOS Q rises to the challenge</h2>
    <div class="section-title-divider"></div>
    <div class="container text-left">
      <p class="lead mb-0 mt-4">With the ability to solve complex measurement and inspection tasks manually, semi-automatically or fully automated, the
      ATOS Q sensor is extremely versatile. Compact and weighing in at only 4kg, the ATOS Q is light enough to be mobile in
      production, or used on a tripod in the measuring room. Combined with the GOM ROT 350 rotation table or a Motorization
      Kit, it can be used semi-automatically or entirely automatically in the ATOS ScanBox 4105 for maximum efficiency.</p>
    </div>
  </div>
</section>
<section class="py-0">
  <div class=" border-bottom border-top">
    <div class="container row p-0 mx-auto">
      <div class="col-lg-4 col-sm-12 col-md-12 col-xs-12 text-center p-0 border-right">
        <div class="d-flex align-items-center align-items-lg-start justify-content-center flex-column">
          <img src="{{ asset("images/pages/gom/atosq/gom_atos-q-stationary.jpg") }}" class="img-fluid d-none d-md-block"/>
          <div class="w-100 position-relative text-center text-md-left p-5" style="z-index:1">
            <h3 class="lead">Manual</h3>
            <p class="mt-4">With a weight of only 4 kg and its compact design, ATOS Q is light and can be easily moved. It can be used on a tripod
            in the measuring room but also mobile in production.</p>
          </div>
        </div>
      </div>
      <hr class="col-lg-12 d-flex d-lg-none" />
     <div class="col-lg-4 col-sm-12 col-md-12 col-xs-12 text-center border-right p-0">
        <div class="d-flex align-items-center align-items-lg-start justify-content-center flex-column">
          <img src="{{ asset("images/pages/gom/atosq/gom_atos-q-semi-automated.jpg") }}" class="img-fluid d-none d-md-block" />
          <div class="w-100 position-relative text-center text-md-left p-5" style="z-index:1">
            <h3 class="lead">Semiautomated</h3>
            <p class="mt-4">Combined with a tripod or alternatively a desk stand and the GOM ROT 350 rotation table or a Motorization Kit, ATOS Q
            can be used in semiautomated operation.</p>
          </div>
        </div>
      </div>
      <hr class="col-lg-12 d-flex d-lg-none" />
     <div class="col-lg-4 col-sm-12 col-md-12 col-xs-12 text-center p-0">
        <div class="d-flex align-items-center align-items-lg-start justify-content-center flex-column">
          <img src="{{ asset("images/pages/gom/atosq/gom_atos-q-automated.jpg") }}" class="img-fluid d-none d-md-block" />
          <div class="w-100 position-relative text-center text-md-left p-5" style="z-index:1">
            <h3 class="lead">Automated</h3>
            <p class="mt-4">ATOS Q reaches its maximum efficiency in the ATOS ScanBox 4105. The system enables serial quality control with high
            throughput and high process reliability.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="px-4 px-sm-3 border-bottom">
  <div class="container-fluid">
  <div class="embed-responsive embed-responsive-16by9">
    <iframe src="https://www.youtube.com/embed/SmbuFMFTlMY" class="embed-responsive-item" frameborder="0"
      allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
  <div class="videoCaption w-100">New GOM ATOS Q - the Powerful 3D Measuring System for Complex Inspection</div>
  </div>
</section>
<section>
  <div class="container-fluid">
    <div class="section-title center-block mx-auto">
      <h4 class="display-4">One series, two versions</h4>
      <div class="section-title-divider"></div>
      <div class="container text-left">
        <p class="lead mb-0 mt-4">ATOS Q is available in the 12M and 8M versions. The sensors capture up to 2 × 12 million or 2 × 8 million coordinate
        points during scanning. The precision, the resolution and the measuring area size can be freely defined.</p>
      </div>
    </div>
    <table class="table table-striped">
      <thead>
        <tr class=" tr-0">
          <th class="td-0" scope="col" id="col56996-0"></th>
          <th class="td-1" scope="col" id="col56996-1">ATOS&nbsp;Q 8M</th>
          <th class="td-last td-2" scope="col" id="col56996-2">ATOS&nbsp;Q 12M</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="td-0 font-weight-bold">Light source</td>
          <td class="td-1">LED</td>
          <td class="td-last td-2">LED</td>
        </tr>
        <tr>
          <td class="td-0 font-weight-bold">Points per scan</td>
          <td class="td-1" >8 million</td>
          <td class="td-last td-2">12 million</td>
        </tr>
        <tr>
          <td class="td-0 font-weight-bold">Measuring area [mm²] </td>
          <td class="td-1">100 × 70 – 500 × 370 </td>
          <td class="td-last td-2">100 × 70 – 500 × 370</td>
        </tr>
        <tr >
          <td class="td-0 font-weight-bold">Point distance [mm]</td>
          <td class="td-1">0.04 – 0.15</td>
          <td class="td-last td-2">0.03 – 0.12</td>
        </tr>
        <tr >
          <td class="td-0 font-weight-bold">Working distance [mm]</td>
          <td class="td-1">490</td>
          <td class="td-last td-2" >490</td>
        </tr>
        <tr >
          <td class="td-0 font-weight-bold" >Weight</td>
          <td class="td-1" >approx. 4 kg</td>
          <td class="td-last td-2" >approx. 4 kg</td>
        </tr>
        <tr >
          <td class="td-0 font-weight-bold" >Dimensions</td>
          <td class="td-1" >approx. 340 mm x 240 mm x 83 mm</td>
          <td class="td-last td-2" >approx. 340 mm x 240 mm x 83 mm</td>
        </tr>
        <tr >
          <td class="td-0 font-weight-bold" >Cable length</td>
          <td class="td-1" >10 m fiber optic cable</td>
          <td class="td-last td-2" >10 m fiber optic cable</td>
        </tr>
        <tr >
          <td class="td-0 font-weight-bold" >Operating system</td>
          <td class="td-1" >Windows 10</td>
          <td class="td-last td-2" >Windows 10</td>
        </tr>
        <tr >
          <td class="td-0 font-weight-bold" >Measuring volumes</td>
          <td class="td-1" >100, 170, 270, 350, 500</td>
          <td class="td-last td-2" >100, 170, 270, 350, 500</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>
@stop