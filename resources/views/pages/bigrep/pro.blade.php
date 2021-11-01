@extends('layouts.layout')
@section('title')
BigRep PRO - An industrial machine for professional prints
@stop
@section('meta')
<link rel="canonical" href="{{route('bigrep-pro')}}" />@stop
@section('description')Discover the new large-scale industrial 3D Printer by BigRep, the BigRep PRO. It's bringing
additive manufacturing to a new stage.@stop
@section('keywords')3D, 3D CAD, BigRep, 3D Printers, Pro, Large, Scale, Industrial, additive, manufacturing @stop
@section('body')
<section data-z-index="0" class="parallax-window parallax-section trans-header-window parallax d-flex"
  style="background-image:url({{ asset('storage/images/bigrep/br-pro-header-1.jpg') }}); min-height:450px;">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid mx-auto d-flex flex-column">
    <div class="content white-content d-flex justify-content-center align-items-center flex-wrap">
      <div class="section-title parallax-section__title center-block mx-auto wow fadeIn" data-wow-duration="0.8s"
        data-wow-delay="0.5s">
        <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">BigRep PRO</h1>
        <div class="section-title-divider"></div>
        <h2 class="h3">An industrial machine for professional prints</h2>
      </div>
      <div>
        @include('layouts.generic_contact_buttons')
      </div>
    </div>
  </div>
</section>
<section class="section-secondary">
  <div class="container-fluid">
    <div
      class="section-title center-block mx-auto text-center d-flex justify-content-center align-items-center flex-column mb-0">
      <h2 class="h2 text-center">BigRep Pro Demo</h2>
      <p>Experience the most advanced Large Scale 3D Printing with the free virtual demo of the New BigRep RPO.</p>
      {{-- <div class="section-title-divider"></div> --}}
      <a href="{{ route('bigrep-pro-demo') }}" class="btn btn-primary btn-md px-3 btn-rounded">GET THE DEMO</a>
    </div>
  </div>
</section>
<section>
  <div class="container-fluid">
    <div class="section-title center-block mx-auto">
      <div class="h2 text-center">LARGE-SCALE & GERMAN ENGINEERED</div>
      <div class="section-title-divider"></div>
    </div>
    <div class="section-block row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 order-last order-md-first" style="margin-bottom:15px;">
        <div class="videoWrapper">
          <iframe width="100%" height="480" src="https://www.youtube.com/embed/X6-7vwKMyWk" frameborder="0"
            allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div class="videoCaption">BigRep PRO - An Industrial Machine for Professional Prints</div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h3>THE BIGREP PRO</h3>
        <p>German-engineered for speed and precision, the BigRep PRO is a large-scale machine for industrial solutions.
          Whether for functional prototypes, composite tooling or end-use parts, the BigRep PRO is a solution that
          delivers. Equipped with a state-of-the-art Bosch CNC system, new Metering Extruder Technology (MXT), an
          enclosed build
          chamber and temperature-controlled filament chambers, the BigRep PRO is a 3D printer that responds to market
          demands.</p>
        <div class="card card-body mt-2">
          <h4>FIRST BIGREP PRO INSTALLED AT BOYCE TECHNOLOGIES, INC.</h4>
          <p>This marks the first official installation of the PRO, powered by the new BigRep Metering Extruder
            Technology (MXT®)
            and state-of-the-art Bosch Rexroth CNC control system...</p>
          <a href="https://bigrep.com/posts/first-bigrep-pro-boyce-technologies/"
            class="btn btn-primary btn-md px-3 btn-rounded" target="_blank">READ
            MORE</a>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container-fluid">
    <div class="section-title center-block mx-auto">
      <div class="h2 text-center">BENEFITS & FEATURES</div>
      <div class="section-title-divider"></div>
    </div>
    <table class="table">
      <tr>
        <td>
          <h3>THE BUILD PLATFORM</h3>
          <strong>Large-Scale Prints</strong><br>
          True to its name, BigRep makes machines for big prints, and the PRO is no exception. With a build
          envelope of one cubic meter, the machine is made for 3D printing of large-scale industrial objects, enabling
          countless
          application possibilities.
        </td>
        <td><img src="{{ asset('storage/images/bigrep/br-pro-1-build-platform.png') }}" /></td>
      </tr>
      <tr>
        <td>
          <h3>THE ENCLOSED FRAME</h3>
          <strong>Shielded Printing</strong><br>
          An insulated enclosed metal frame ensures optimum even temperature control and the glass doors offer an
          optimal view on
          the print. Further improving safety is the PRO’s compatibility with standard ventilation systems, for fume and
          emissions
          control, making it a best practice example for 3D printing in industrial environments.
        </td>
        <td><img src="{{ asset('storage/images/bigrep/br-pro-2-enclosed-frame.png') }}" /></td>
      </tr>
      <tr>
        <td>
          <h3>THE INSULATED FILAMENT CABINET</h3>
          <strong>Industrial Material Compatibility</strong><br>
          The PRO provides an optimal environment for printing with industrial-grade materials, due to a humidity
          controlled spool
          chamber. Air circulation fans within ensure air flow for uniform temperature throughout the filament cabinet,
          and the
          cabinet stores up to four filament spools.
        </td>
        <td><img src="{{ asset('storage/images/bigrep/br-pro-3-filament-cabinet.png') }}" /></td>
      </tr>
      <tr>
        <td>
          <h3>THE MXT®</h3>
          <strong>Speed & Precision</strong><br>
          BigRep is introducing a metering extruder technology (MXT®) with exceptional speed and precision, which is one
          of the
          defining features of the PRO. This state-of-the-art extruder allows for ultimate control on the materials
          deposition,
          allowing users to achieve the highest quality for every application.
        </td>
        <td><img src="{{ asset('storage/images/bigrep/br-pro-4-small.jpg') }}" /></td>
      </tr>
      <tr>
        <td>
          <h3>THE PRINT BED</h3>
          <strong>Semi-Automatic Leveling</strong><br>
          The heated print bed mounted with polyimide foil provides optimal adhesion in the printing process. An
          integrated
          inductive sensor allows for semi-automatic leveling of the print bed.
        </td>
        <td><img src="{{ asset('storage/images/bigrep/br-pro-5-print-bed.png') }}" /></td>
      </tr>
      <tr>
        <td>
          <h3>THE CNC SYSTEM</h3>
          <strong>Bosch Rexroth Technology</strong><br>
          A new state-of-the-art Bosch CNC motion- control system makes the PRO the ideal machine for controlling the
          entire
          printing process, from start to finish. Widely used in the automotive industry, the Bosch system ensures
          maximum
          responsiveness, accuracy and closed-loop control in BigRep’s industrial-grade machine, as well as superior
          connectivity.
        </td>
        <td><img src="{{ asset('storage/images/bigrep/br-pro-6-cnc-system.png') }}" /></td>
      </tr>
    </table>
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
                    <img src="{{asset('storage/pdfs/whitepapers/Bionic-Propeller_eBook.png')}}" style="width:100%;"
                      alt="Case Study: Bionic Propeller eBook">
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
                <figure>
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
                <figure>
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/bigrep/Brochure_STUDIO.png')}}" style="width:100%;"
                      alt="Brochure: BigRep STUDIO 3D Printer">
                  </div>
                  <figcaption>Brochure: BigRep STUDIO 3D Printer</figcaption>
                </figure>
              </a>
            </div>
            {{-- <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a target="_blank" href="{{asset('storage/pdfs/bigrep/BigRep EDGE - Factsheet.pdf')}}" class="pdf-item">
                <figure>
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/bigrep/BigRep EDGE - Factsheet.png')}}" style="width:100%;"
                      alt="Brochure: BigRep EDGE 3D Printer">
                  </div>
                  <figcaption>Brochure: BigRep EDGE 3D Printer</figcaption>
                </figure>
              </a>
            </div> --}}
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a target="_blank" href="{{asset('storage/pdfs/bigrep/Bigrep PRO - Factsheet.pdf')}}" class="pdf-item">
                <figure>
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
      <p class="lead">The BigRep PRO has been expertly engineered to equip companies with advanced technology to print
        large objects with
        industrial-grade materials.</p>
      <div class="section-title-divider"></div>
    </div>
    <div class="row px-3">
      <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        <table class="table table-striped table-sm">
          <tbody>
            <tr>
              <td width="488px">Build volume</td>
              <td width="488px">x 1005 y 1005 z 1005 (mm)</td>
            </tr>
            <tr>
              <td width="488px">Layer height resolution</td>
              <td width="488px">0.1 mm - 0.8 mm*</td>
            </tr>
            <tr>
              <td width="488px">Max. Extruder Throughput with 1 mm nozzle</td>
              <td width="488px">500 cm³/h</td>
            </tr>
            <tr>
              <td width="488px">Extruder</td>
              <td width="488px">Two MXT extruders<br>MXT with 1 mm nozzle</td>
            </tr>
            <tr>
              <td width="488px">Printing technology</td>
              <td width="488px">FFF – Fused-Filament-Fabrication (Material Extrusion)</td>
            </tr>
            <tr>
              <td width="488px">Certified BigRep materials</td>
              <td width="488px">ASA, PA6/66<br>More engineering materials in development</td>
            </tr>
            <tr>
              <td width="488px">Support materials</td>
              <td width="488px">Soluble Plastics</td>
            </tr>
            <tr>
              <td width="488px">Print bed temperature</td>
              <td width="488px">Max. 99 °C</td>
            </tr>
            <tr>
              <td width="488px">Printer weight</td>
              <td width="488px">Approx. 1550 kg</td>
            </tr>
            <tr>
              <td width="488px">Size</td>
              <td width="488px">x 1950 y 2430 z 1790 (mm) - (Without towerlight)</td>
            </tr>
            <tr>
              <td width="488px">Power</td>
              <td width="488px">3 X AC 400 V, 50/60 Hz, 5100 W</td>
            </tr>
            <tr>
              <td width="488px">Safety Certifications</td>
              <td width="488px">CE approved</td>
            </tr>
          </tbody>
        </table>
      </div>
      {{-- <div class="col-4 col-sm-12 col-md-6 col-lg-4">
        <div class="p-4 img-shadow" style="background:white">
          <div class="h5 w-100">THE CUTTING-EDGE OF 3D PRINTING</div>
          <a href="{{ asset('storage/images/bigrep/br-edge-front-1.png') }}" class="mp-popup-image mp-single"><img
              src="{{ asset('storage/images/bigrep/br-edge-front-1.png') }}" class="w-100 pb-3"
              style="max-width:350px" /></a>
          <a href="{{ route('bigrep-edge') }}">Discover the BigRep EDGE <i class="fas fa-angle-double-right"></i></a>
        </div>
      </div> --}}
    </div>
  </div>
</section>
{{-- <section>
  <div class="container">
    <div class="section-title center-block mx-auto text-center px-3">
      <div class="h2">INTERESTED IN THE BIGREP PRO?</div>
      <p class="lead">Fill out the form below to be contacted by one of our qualified customer representatives.</p>
      <div class="section-title-divider"></div>
    </div>
    <div pageID="llxo55zeeempgaanojceow" style="margin: 0 auto;
    max-width: 500px;"></div>
  </div>
</section> --}}
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
@endpush