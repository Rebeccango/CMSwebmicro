@extends('layouts.layout')
@section('title')
BigRep STUDIO G2 - Large Scale with Speed & Precision Industrial 3D Printing
@stop
@section('meta')
<link rel="canonical" href="{{route('bigrep-studio')}}" />@stop
@section('description')Large scale 3D Printer, fast and precise additive manufacturing with the new BigRep ONE. High
performance engineering to print all your objects and parts.@stop
@section('keywords')3D, 3D CAD, BigRep, 3D Printers, Studio, Large, Scale, Industrial, Speed, Fast, Precision @stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
style="min-height:450px; background-image:url({{asset('/storage/images/bigrep/Banner_3dprinters-2-web.jpg')}})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto wow fadeIn" data-wow-duration="0.8s"
          data-wow-delay="0.5s">
          <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">BIGREP STUDIO G2 3D PRINTER</h1>
          <div class="section-title-divider"></div>
          <h2 class="h3">Large Scale 3D Printing with Speed & Precision</h2>
        </div>
        <div class="wow fadeIn">
          <p class="parallax-section__description">Reliable 3D printing in large format for engineering-grade materials.
          </p>
        </div>
        <div>
          @include('layouts.generic_contact_buttons')
        </div>
      </div>
    </div>
  </div>
</section>
<section class="py-0">
  <div class="section-secondary">
    <div class="container-fluid">
      <div class="section-block row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 order-last order-md-first" style="margin-bottom:15px;">
          <div class="videoWrapper">
            <iframe width="100%" height="480" src="https://www.youtube.com/embed/jYUgNyIVGCA" frameborder="0"
              allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
          <div class="videoCaption">BigRep STUDIO G2 - A Large-Format Solution for Industrial Applications</div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <h1 class="main-title ml-0 mt-0">CREATE DURABLE, LARGE PARTS EFFICIENTLY & AFFORDABLY</h1>
          <p class="">Introducing the new and improved BigRep STUDIO 3D printer, made for abrasive and engineering-grade
            materials in a size suitable for any work
            environment. The G2’s rapid-heating print bed and temperature-controlled filament chamber enable the printer
            to produce incredible, high-quality parts in engineering-grade materials. It’s sleek, space-conscious size
            makes it suitable for all workspaces, from design labs to production floors.</p>
        </div>
      </div>
    </div>
  </div>
  <section>
    <div class="container-fluid">
      <div class="row p-3 d-flex align-items-center justify-content-center">
        <div class="col-lg-6 mb-5 mt-mb-0">
          <p class="lead text-left text-md-right">BigRep 3D printers are German-engineered for durable, around the clock
            performance. Made from
            the highest quality materials these workhorse machines are built to be reliable, long-term partners for
            innovation.</p>
        </div>
        <div class="col-lg-6">
          <img class="d-block mx-auto w-100" style="max-width:500px"
            src="{{asset('storage/images/bigrep/studio-g2/BigRep-STUDIO-G2.jpg')}}" width="600" height="auto">
        </div>
      </div>
    </div>
  </section>
  <section class="section-secondary">
    <div class="section-title center-block mx-auto text-center px-3">
      <div class="h2">BENEFITS & FEATURES</div>
      <div class="section-title-divider"></div>
    </div>
    <div class="container-fluid">
      <div class="row mt-4 px-3 text-center text-md-left">
        <div class="col-lg-4  col-md-6 col-sm-12 col-xs-12 py-4 col-12">
          <img class="rounded d-block img-shadow w-100 mx-auto" style="max-width:380px; background:white"
            src="{{asset('storage/images/bigrep/studio-g2/STUDIO_BF_01.png')}}" width="100%" height="auto" />
          <div class="h5 w-100 mt-4">ENGINEERING-GRADE MATERIALS</div>
          <p class="lead">The Best-In-Class Print Heads</p>
          <p class="w-100">With the inclusion of ruby nozzles, the STUDIO G2 is made for printing with abrasive,
            engineering-grade materials at maximum speed and high resolutions. The specially designed extruder achieves
            high-level detail with layer heights as low as 0.1mm on parts up to a meter long, enabling more options to
            perfect a part’s mechanical properties.</p>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 py-4 col-12">
          <img class="rounded d-block img-shadow w-100 mx-auto" style="max-width:380px; background:white"
            src="{{asset('storage/images/bigrep/studio-g2/STUDIO_BF_02.png')}}" width="100%" height="auto" />
          <div class="h5 w-100 mt-4">FULLY ENCLOSED ENVIRONMENT</div>
          <p class="lead">The Insulated Build Envelope</p>
          <p class="w-100">The STUDIO G2’s enclosed, temperature- controlled build envelope is the perfect environment
            for engineering-grade materials, providing users the ability to visually monitor the printing process with
            safe and easy access to the print bed. Environmental features like auto-pause upon opening ensure a smooth
            and safe printing process.</p>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 py-4 col-12">
          <img class="rounded d-block img-shadow w-100 mx-auto" style="max-width:380px; background:white"
            src="{{asset('storage/images/bigrep/studio-g2/STUDIO_BF_03.png')}}" width="100%" height="auto" />
          <div class="h5 w-100 mt-4">INDEPENDENT TEMPERATURE CONTROLS</div>
          <p class="lead">The Heated Filament Chamber</p>
          <p class="w-100">The heated filament chamber integrated into the STUDIO G2 ensures that engineering-grade
            materials remain dry in a consistently controlled environment for best-in-class quality. Going beyond
            industry standards, the filament chamber features independent temperature control.</p>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 py-4 col-12">
          <img class="rounded d-block img-shadow w-100 mx-auto" style="max-width:380px; background:white"
            src="{{asset('storage/images/bigrep/studio-g2/STUDIO_BF_04.png')}}" width="100%" height="auto" />
          <div class="h5 w-100 mt-4">EASY AND INTUITIVE</div>
          <p class="lead">The New Slicer</p>
          <p class="w-100">The easy to use BigRep "BLADE” slicing software allows for greater control of printing
            parameters while providing presets for all BigRep-compatible materials, making a rapid, hassle-free start to
            printing possible. The new estimation engine gives accurate printing time and material use predictions for
            unmatched productivity. BLADE is one of the fastest and most precise slicers on the market.</p>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 py-4 col-12">
          <img class="rounded d-block img-shadow w-100 mx-auto" style="max-width:380px; background:white"
            src="{{asset('storage/images/bigrep/studio-g2/STUDIO_BF_05.png')}}" width="100%" height="auto" />
          <div class="h5 w-100 mt-4">OPTIMAL PRINTING TEMPERATURES</div>
          <p class="lead">The Fast-Heating Print Bed</p>
          <p class="w-100">Preparation time is significantly reduced for all print projects by the fast-heating print
            bed. The new inductive sensor enables semi-automatic levelling to ensure optimal calibration and maximum
            control. With higher heat dimensions reaching 100°C, adhesion to the print bed is improved for a variety of
            high-quality materials.</p>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 py-4 col-12">
          <img class="rounded d-block img-shadow w-100 mx-auto" style="max-width:380px; background:white"
            src="{{asset('storage/images/bigrep/studio-g2/STUDIO_BF_06.png')}}" width="100%" height="auto" />
          <div class="h5 w-100 mt-4">BIG ENOUGH FOR ANY IDEA</div>
          <p class="lead">The Massive Build Volume</p>
          <p class="w-100">Enable room for innovation with the STUDIO G2’s astounding 500 mm x 1000 mm x 500 mm build
            volume. With unparalleled size in a sleek package, features combine to create a premium environment for
            printing large-format engineering-grade parts fast at high resolution.</p>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container-fluid">
      <div class="custom-nav-pills">
        <ul class="nav nav-pills" role="tablist">
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#caseStudies" role="tab">Case Studies</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#brochures" role="tab">Brochures</a>
          </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane fade" id="caseStudies" role="tabpanel">
            <div class="d-flex flex-wrap">
              <div class="col-4 col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <a class="pdf-item" target="_blank"
                  href="https://www.cadmicro.com/resources/9/ford-upscales-their-in-house-tooling-with-bigrep-3d-printers">
                  <figure style="width:200px;">
                    <div class="figimg">
                      <img
                        src="https://www.cadmicro.com/storage/resources/December2019/olt1KnOYzd2FVwkEjyun.jpg"
                        style="width:100%;"
                        alt="Case Study: Ford Upscales Their In-House Tooling with BigRep 3D Printers">
                    </div>
                    <figcaption>Ford Upscales Their In-House Tooling with BigRep 3D Printers</figcaption>
                  </figure>
                </a>
              </div>
              <div class="col-4 col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <a class="pdf-item" target="_blank"
                  href="https://www.cadmicro.com/resources/15/cheaper-and-faster-1-1-prototyping-with-bigrep">
                  <figure style="width:200px;">
                    <div class="figimg">
                      <img src="https://www.cadmicro.com/storage/resources/December2019/xqUS5ctB0ygSLF2SEW8Z.JPG"
                        style="width:100%;"
                        alt="Case Study: Cheaper & Faster 1:1 Prototyping with BigRep">
                    </div>
                    <figcaption>Cheaper & Faster 1:1 Prototyping with BigRep</figcaption>
                  </figure>
                </a>
              </div>
              <div class="col-4 col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <a class="pdf-item" target="_blank"
                  href="https://www.cadmicro.com/resources/18/bigrep-3d-printed-a-sensor-with-conductive-materials">
                  <figure style="width:200px;">
                    <div class="figimg">
                      <img src="https://www.cadmicro.com/storage/resources/December2019/IjlNSU4sMpuBmu5vGkqf.JPG"
                        style="width:100%;"
                        alt="Case Study: BigRep 3D Printed a Sensor with Conductive Materials">
                    </div>
                    <figcaption>BigRep 3D Printed a Sensor with Conductive Materials</figcaption>
                  </figure>
                </a>
              </div>
              <div class="col-4 col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <a class="pdf-item" target="_blank"
                  href="https://www.cadmicro.com/resources/25/deutsche-bahn-goes-additive-with-bigrep">
                  <figure style="width:200px;">
                    <div class="figimg">
                      <img src="https://www.cadmicro.com/storage/resources/December2019/9pkxVd4giRFNP3pXyihY.JPG"
                        style="width:100%;"
                        alt="Case Study: Deutsche Bahn Goes Additive with BigRep">
                    </div>
                    <figcaption>Deutsche Bahn Goes Additive with BigRep</figcaption>
                  </figure>
                </a>
              </div>
            </div>
          </div>
          <div class="tab-pane fade in active show" id="brochures" role="tabpanel">
            <div class="d-flex flex-wrap">
              <div class="col-4 col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <a target="_blank"
                  href="https://www.cadmicro.com/resources/33/bigrep-one-fact-sheet"
                  class="pdf-item">
                  <figure>
                    <div class="figimg">
                      <img src="https://www.cadmicro.com/storage/resources/January2020/HsUNzthcdZPnmqwwiRmo.JPG"
                        style="width:100%;"
                        alt="Brochure: BigRep ONE 3D Printer">
                    </div>
                    <figcaption>BigRep ONE 3D Printer</figcaption>
                  </figure>
                </a>
              </div>
              <div class="col-4 col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <a target="_blank"
                  href="https://www.cadmicro.com/resources/41/bigrep-studio-g2-fact-sheet"
                  class="pdf-item">
                  <figure>
                    <div class="figimg">
                      <img src="https://www.cadmicro.com/storage/resources/January2020/62v8AkkluyS5PeyS49Rr.JPG"
                        style="width:100%;"
                        alt="Brochure: BigRep STUDIO 3D Printer">
                    </div>
                    <figcaption>BigRep STUDIO 3D Printer</figcaption>
                  </figure>
                </a>
              </div>
              {{-- <div class="col-4 col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <a target="_blank" href="https://www.cadmicro.com/resources/28/bigrep-edge-fact-sheet" class="pdf-item">
                  <figure>
                    <div class="figimg">
                      <img src="https://www.cadmicro.com/storage/resources/December2019/YX31y31qdlE3Kel0clSl.JPG"
                        style="width:100%;"
                        alt="Brochure: BigRep EDGE 3D Printer">
                    </div>
                    <figcaption>BigRep EDGE 3D Printer</figcaption>
                  </figure>
                </a>
              </div> --}}
              <div class="col-4 col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <a target="_blank" href="https://www.cadmicro.com/resources/35/bigrep-pro-fact-sheet" class="pdf-item">
                  <figure>
                    <div class="figimg">
                      <img src="https://www.cadmicro.com/storage/resources/January2020/BPqJUfKWBvvipb3pQKn1.JPG"
                        style="width:100%;"
                        alt="Brochure: BigRep PRO 3D Printer">
                    </div>
                    <figcaption>BigRep PRO 3D Printer</figcaption>
                  </figure>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-secondary pt-5">
    <div class="container-fluid">
      <div class="section-title center-block mx-auto text-center px-3">
        <div class="h2">TECHNICAL SPECIFICATIONS</div>
        <p class="lead">With BigRep ONE you have a perfect starting point for the factory of the future.</p>
        <div class="section-title-divider"></div>
      </div>
      <div class="row px-3">
        <div class="col-12 col-sm-12 col-md-6 col-lg-8">
          <table class="table table-striped table-sm">
            <tbody>
              <tr>
                <td width="488px">Build volume</td>
                <td width="488px">x500 y1000 z500 (mm)</td>
              </tr>
              <tr>
                <td width="488px">Layer height resolution</td>
                <td width="488px">0.1 – 0.5 (mm)</td>
              </tr>
              <tr>
                <td width="488px">Acceleration</td>
                <td width="488px">Up to 600 mm/s²</td>
              </tr>
              <tr>
                <td width="488px">Extruder</td>
                <td width="488px">Dual extruder<br>(each equipped with 0.6mm nozzle)</td>
              </tr>
              <tr>
                <td width="488px">Printing technology</td>
                <td width="488px">Fused-Filament-Fabrication (FFF)</td>
              </tr>
              <tr>
                <td width="488px">Certified materials</td>
                <td width="488px">PLA, PETG, Pro HT, TPU, PA6/66<br>
                  More engineered materials in development
                </td>
              </tr>
              <tr>
                <td width="488px">Print bed temperature</td>
                <td width="488px">Max. 100 °C</td>
              </tr>
              <tr>
                <td width="488px">Printer weight</td>
                <td width="488px">Approx. 500 kg</td>
              </tr>
              <tr>
                <td width="488px">Size</td>
                <td width="488px">x 1715 y 1170 z 1765 (mm)</td>
              </tr>
              <tr>
                <td width="488px">Power</td>
                <td width="488px">208 V – 240 V, 16 A, 50/60 Hz</td>
              </tr>
              <tr>
                <td width="488px">Safety Certifications</td>
                <td width="488px">CE approved<br/>All major certifications in progress</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-4 wow fadeInRight">
          <div class="p-4 img-shadow" style="background:white">
            <div class="h5 w-100">Need larger parts?</div>
            <a href="{{ asset('storage/images/bigrep/bigrep-one.jpg') }}" class="mp-popup-image mp-single"><img
                src="{{ asset('storage/images/bigrep/bigrep-one.jpg') }}" class="w-100 pb-3"
                style="max-width:350px" /></a>
            <a href="{{ route('bigrep-one') }}">Discover the BigRep ONE <i class="fas fa-angle-double-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
</section>
<!-- Modals Whitepapers -->
<div class="modal fade" tabindex="-1" role="dialog" id="wp_modal_1">
  <div class="modal-dialog" role="document" style="max-width:700px">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Case Study: Bionic Propeller eBook</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body" style="padding:5px; padding-right:0; overflow:hidden">
        <div pageID="2yo27jgyeeibkoahg3fscq"></div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="wp_modal_2">
  <div class="modal-dialog" role="document" style="max-width:700px">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Case Study: Vehicle Customization - Paravan Automotive Production</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body" style="padding:5px; padding-right:0; overflow:hidden">
        <div pageID="vwwcnzg2eeibkoahg3fscq"></div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="wp_modal_3">
  <div class="modal-dialog" role="document" style="max-width:700px">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Case Study: Teignbridge Propeller Process</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body" style="padding:5px; padding-right:0; overflow:hidden">
        <div pageID="0rfk8dg3eeibiahg3flkq"></div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="wp_modal_4">
  <div class="modal-dialog" role="document" style="max-width:700px">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Case Study: The Vila eBook</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body" style="padding:5px; padding-right:0; overflow:hidden">
        <div pageID="hjkqszg4eeibmoahg3ekaq"></div>
      </div>
    </div>
  </div>
</div>
@stop