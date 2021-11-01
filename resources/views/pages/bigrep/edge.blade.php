@extends('layouts.layout')
@section('title')
BigRep EDGE the largest 3D Printer for the industry
@stop
@section('meta')
<link rel="canonical" href="{{route('bigrep-edge')}}" />@stop
@section('description')Discover the new large-scale 3D printer by BigRep GmbH. German Engineering for industrial 3D
printing and high-end
material. @stop
@section('keywords')3D, 3D CAD, BigRep, 3D Printers, One, Large, Scale, Industrial @stop
@section('body')
<section data-z-index="0"
   class="parallax-window parallax-section trans-header-window parallax d-flex"
   style="background-image:url({{ asset('storage/images/bigrep/BR_RGB_BigR_Edge-header.jpg') }});">
   <div class="parallax-section__shadow"></div>
   <div class="container-fluid mx-auto d-flex flex-column">
      <div class="content white-content d-flex justify-content-center align-items-center flex-wrap">
         <div class="section-title parallax-section__title center-block mx-auto wow fadeIn text-center"
            data-wow-duration="0.8s" data-wow-delay="0.5s">
            <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">BigRep EDGE</h1>
            <div class="section-title-divider"></div>
            <h2 class="h3">An industrial machine for professional prints</h2>
            <em class="h1 text-primary">COMING SOON!</em>
         </div>
         <div>
            @include('layouts.generic_contact_buttons')
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
                  <iframe src="https://www.youtube.com/embed/XKl4tJIUr2o" width="100%" height="360" frameborder="0"
                     allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                     allowfullscreen></iframe>
               </div>
               <div class="videoCaption">BigRep EDGE - METERING EXTRUDER TECHNOLOGY (MXT)</div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
               <h3>INDUSTRY LEADER FOR HIGH-END MATERIALS</h3>
               <p>The BigRep EDGE is an industrial machine for the additive manufacturing of large-scale objects in
                  demanding working environments. Using high-end thermoplastic materials for end-use products, functional prototypes and
                  composite tooling, the EDGE sets a new standard in additive printing. Including a state-of-the-art Bosch Rexroth® motion
                  control system, new Metering Extrusion Technology (MXT), a heated chamber, and an optimum design, the BigRep EDGE
                  ensures big results and transformative value for businesses across industries.</p>
            </div>
         </div>
      </div>
   </div>
</section>
<section>
   <div class="container-fluid">
      <div class="section-title center-block mx-auto">
         <div class="h2 text-center">FEATURES</div>
         <div class="section-title-divider"></div>
      </div>
      <div class="row p-3">
         <div class="col-lg-6">
            <p>BigRep has developed a metering extruder with exceptional speed and precision, which is one of the
               defining features of
               the EDGE. The state-of-the-art extruder allows for ultimate control on large-scale industrial prints,
               allowing users to
               achieve the highest quality for every application.</p>
            <p>With unmatched dynamic response for start, stop and corners, BigRep’s Metering Extruder ensures precision
               and high print
               quality every time. Built for speed, the lightweight extruder is agile and reliable under pressure to
               deliver fast,
               detailed results.</p>
            <p>BigRep’s device accelerates print times with high material throughput. The extruder maximizes output, as
               an agile
               component German-engineered to print in high volume around the clock.</p>
         </div>
         <div class="col-lg-6">
            <img class="d-block mx-auto w-100" style="max-width:467px"
               src="{{asset('storage/images/bigrep/br-edge-front-1.png')}}" width="100%">
         </div>
      </div>
      <div class="row mt-4 px-3 text-center text-md-left">
         <div class="col-lg-4 col-sm-12 col-xs-12 py-4 col-12">
            <img class="rounded d-block img-shadow w-100 mx-auto" style="max-width:200px"
               src="{{asset('storage/images/bigrep/br-edge-1-MXT_small.jpg')}}" width="100%" height="auto" />
            <h3 class="h5 w-100 mt-4">THE MXT</h3>
            <p class="lead">Speed & Precision</p>
            <p class="w-100">BigRep’s second-generation Metering Extruder Technology (MXT) delivers exceptional speed
               and precision for industrial
               projects, forming one of the defining features of the EDGE. A higher travel speed makes the premium model
               machine ideal
               for high-speed print completion.</p>
         </div>
         <div class="col-lg-4 col-sm-12 col-xs-12 py-4 col-12">
            <img class="rounded d-block img-shadow w-100 mx-auto" style="max-width:200px"
               src="{{asset('storage/images/bigrep/br-edge-2-Chamber_small.jpg')}}" width="100%" height="auto" />
            <h3 class="h5 w-100 mt-4">THE BUILD CHAMBER</h3>
            <p class="lead">Controlled Environment</p>
            <p class="w-100">A heated build chamber provides a controlled, high-temperature environment for
               engineering-grade materials of up to
               200°C in the chamber and 220 °C on the print bed. The EDGE’s ventilation system, compatible with standard
               factory
               environments, ensures an even chamber temperature and user safety from fumes.</p>
         </div>
         <div class="col-lg-4 col-sm-12 col-xs-12 py-4 col-12">
            <img class="rounded d-block img-shadow w-100 mx-auto" style="max-width:200px"
               src="{{asset('storage/images/bigrep/br-edge-3-Printbed_small-1.jpg')}}" width="100%" height="auto" />
            <h3 class="h5 w-100 mt-4">THE BUILD VOLUME</h3>
            <p class="lead">Enormous Print Bed</p>
            <p class="w-100">The largest of its kind with a controlled heated environment, BigRep’s EDGE offers enormous
               volume for maximum
               flexibility and large-scale industrial print capacity. The EDGE has a build size (1500 x 800 x 600 mm)
               and an advanced
               pull-out print bed ensures large, heavy prints are easy to remove.</p>
         </div>
         <div class="col-lg-4 col-sm-12 col-xs-12 py-4 col-12">
            <img class="rounded d-block img-shadow w-100 mx-auto" style="max-width:200px"
               src="{{asset('storage/images/bigrep/br-edge-4-interface_HMI.jpg')}}" width="100%" height="auto" />
            <h3 class="h5 w-100 mt-4">THE GRAPHICAL USER INTERFACE</h3>
            <p class="lead">Accessible & Intuitive</p>
            <p class="w-100">The EDGE places an emphasis on a premium user experience, with fully automated doors
               opening upwards, access to the
               print bed from all sides. An easy-to-use graphical user interface with an extra-large screen enables
               ultimate control
               over all print settings.</p>
         </div>
      </div>
   </div>
</section>
<section class="pt-0">
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
                  <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
                     <a data-toggle="modal" data-target="#wp_modal_1" class="pdf-item">
                        <figure style="width:200px;">
                           <div class="figimg">
                              <img src="{{asset('storage/pdfs/whitepapers/Bionic-Propeller_eBook.png')}}"
                                 style="width:100%;" alt="Case Study: Bionic Propeller eBook">
                           </div>
                           <figcaption>Case Study: Bionic Propeller eBook</figcaption>
                        </figure>
                     </a>
                  </div>
                  <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
                     <a data-toggle="modal" data-target="#wp_modal_2" class="pdf-item">
                        <figure style="width:200px;">
                           <div class="figimg">
                              <img src="{{asset('storage/pdfs/whitepapers/Paravan_eBook.png')}}" style="width:100%;"
                                 alt="Case Study: Vehicle Customization - Paravan Automotive Production">
                           </div>
                           <figcaption>Case Study: Vehicle Customization - Paravan Automotive Production</figcaption>
                        </figure>
                     </a>
                  </div>
                  <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
                     <a data-toggle="modal" data-target="#wp_modal_3" class="pdf-item">
                        <figure style="width:200px;">
                           <div class="figimg">
                              <img src="{{asset('storage/pdfs/whitepapers/Teignbridge_eBook.png')}}" style="width:100%;"
                                 alt="Case Study: Teignbridge Propeller Process">
                           </div>
                           <figcaption>Case Study: Teignbridge Propeller Process</figcaption>
                        </figure>
                     </a>
                  </div>
                  <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
                     <a data-toggle="modal" data-target="#wp_modal_4" class="pdf-item">
                        <figure style="width:200px;">
                           <div class="figimg">
                              <img src="{{asset('storage/pdfs/whitepapers/The-Vila_eBook.png')}}" style="width:100%;"
                                 alt="Case Study: The Vila eBook">
                           </div>
                           <figcaption>Case Study: The Vila eBook</figcaption>
                        </figure>
                     </a>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade in active show" id="brochures" role="tabpanel">
               <div class="d-flex flex-wrap">
                  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                     <a target="_blank" href="{{asset('storage/pdfs/bigrep/Brochure_ONE.pdf')}}" class="pdf-item">
                        <figure >
                           <div class="figimg">
                              <img src="{{asset('storage/pdfs/bigrep/Brochure_ONE.png')}}" style="width:100%;"
                                 alt="Brochure: BigRep ONE 3D Printer">
                           </div>
                           <figcaption>Brochure: BigRep ONE 3D Printer</figcaption>
                        </figure>
                     </a>
                  </div>
                  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                     <a target="_blank" href="{{asset('storage/pdfs/bigrep/Brochure_STUDIO.pdf')}}" class="pdf-item">
                        <figure >
                           <div class="figimg">
                              <img src="{{asset('storage/pdfs/bigrep/Brochure_STUDIO.png')}}" style="width:100%;"
                                 alt="Brochure: BigRep STUDIO 3D Printer">
                           </div>
                           <figcaption>Brochure: BigRep STUDIO 3D Printer</figcaption>
                        </figure>
                     </a>
                  </div>
                  {{-- <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                     <a target="_blank" href="{{asset('storage/pdfs/bigrep/BigRep EDGE - Factsheet.pdf')}}"
                        class="pdf-item">
                        <figure >
                           <div class="figimg">
                              <img src="{{asset('storage/pdfs/bigrep/BigRep EDGE - Factsheet.png')}}"
                                 style="width:100%;" alt="Brochure: BigRep EDGE 3D Printer">
                           </div>
                           <figcaption>Brochure: BigRep EDGE 3D Printer</figcaption>
                        </figure>
                     </a>
                  </div> --}}
                  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                     <a target="_blank" href="{{asset('storage/pdfs/bigrep/Bigrep PRO - Factsheet.pdf')}}"
                        class="pdf-item">
                        <figure >
                           <div class="figimg">
                              <img src="{{asset('storage/pdfs/bigrep/Bigrep PRO - Factsheet.png')}}" style="width:100%;"
                                 alt="Brochure: BigRep PRO 3D Printer">
                           </div>
                           <figcaption>Brochure: BigRep PRO 3D Printer</figcaption>
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
         <div class="col-8 col-sm-12 col-md-6 col-lg-8">
            <table class="table table-striped table-sm">
               <tbody>
                  <tr>
                     <td width="488px">Build volume</td>
                     <td width="488px">x 1500 y 800 z 600 (mm)</td>
                  </tr>
                  <tr>
                     <td width="488px">Layer height resolution</td>
                     <td width="488px">0.1 mm - 1.6 mm*</td>
                  </tr>
                  <tr>
                     <td width="488px">Max. Extruder Throughput with 1 mm nozzle</td>
                     <td width="488px">Up to 10 m/s²</td>
                  </tr>
                  <tr>
                     <td width="488px">Extruder</td>
                     <td width="488px">Two MXT extruders</td>
                  </tr>
                  <tr>
                     <td width="488px">Printing technology</td>
                     <td width="488px">FFF – Fused-Filament-Fabrication (Material Extrusion)</td>
                  </tr>
                  <tr>
                     <td width="488px">Certified BigRep materials</td>
                     <td width="488px"><strong>Engineering Plastics, High-Performance Plastics</strong><br /> More
                        engineering materials in development</td>
                  </tr>
                  <tr>
                     <td width="488px">Support materials</td>
                     <td width="488px">Soluble Plastics</td>
                  </tr>
                  <tr>
                     <td width="488px">Print bed temperature</td>
                     <td width="488px">Max. 220 °C</td>
                  </tr>
                  <tr>
                     <td width="488px">Chamber temperature</td>
                     <td width="488px">Max. 200 °C</td>
                  </tr>
                  <tr>
                     <td width="488px">Printer weight</td>
                     <td width="488px">Approx. 3500 kg</td>
                  </tr>
                  <tr>
                     <td width="488px">Size</td>
                     <td width="488px">x 3100 y 1600 z 2220 (mm)</td>
                  </tr>
                  <tr>
                     <td width="488px">Power</td>
                     <td width="488px">240 V – 360 V, 3 x 32 A, 50/60 Hz</td>
                  </tr>
                  <tr>
                     <td width="488px">Safety Certifications</td>
                     <td width="488px">CE machinery/ UL/ FCC/ Korean Certification</td>
                  </tr>
               </tbody>
            </table>
         </div>
         <div class="col-4 col-sm-12 col-md-6 col-lg-4 wow fadeInRight">
            <div class="p-4 img-shadow" style="background:white">
               <div class="h5 w-100">Discover the new large-scale industrial 3D Printer by BigRep, the BigRep PRO.</div>
               <a href="{{ asset('storage/images/bigrep/Bigrep_view_01.png') }}" class="mp-popup-image mp-single"><img
                     src="{{ asset('storage/images/bigrep/Bigrep_view_01.png') }}" class="w-100 pb-3"
                     style="max-width:350px" /></a>
               <a href="{{ route('bigrep-pro') }}">Discover the BigRep PRO <i class="fas fa-angle-double-right"></i></a>
            </div>
         </div>
      </div>
   </div>
</section>

<section>
   <div class="container">
      <div class="section-title center-block mx-auto text-center px-3">
         <div class="h2">INTERESTED IN THE BIGREP EDGE?</div>
         <p class="lead">Fill out the form below to be contacted by one of our qualified customer representatives.</p>
         <div class="section-title-divider"></div>
      </div>
      <div data-form-block-id="77b9e55c-6ead-e911-a987-000d3a3702ca"></div>
      <div id="dm82_N-1c9CU-OPgigtUHCU7As4iLVJRF6GMCalyaNbk"></div>
   </div>
</section>

@stop

@push('after-scripts')
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
            <h4 class="modal-title" id="myModalLabel">Case Study: Vehicle Customization - Paravan Automotive Production
            </h4>
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
@endpush