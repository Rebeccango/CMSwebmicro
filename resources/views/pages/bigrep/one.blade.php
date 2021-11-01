@extends('layouts.layout')
@section('title')
  BigRep ONE - Large Scale Industrial 3D Printing
@stop
@section('meta')<link rel="canonical" href="{{route('bigrep-one')}}"/>@stop
@section('description')Large scale 3D Printer, fast and precise additive manufacturing with the new BigRep ONE. High performance engineering to print all your objects and parts.@stop
@section('keywords')3D, 3D CAD, BigRep, 3D Printers, One, Large, Scale, Industrial @stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
style="min-height:450px; background-image:url({{asset('/storage/images/bigrep/Banner_3dprinters-2-web.jpg')}})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto wow fadeIn" data-wow-duration="0.8s"
          data-wow-delay="0.5s">
          <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">BigRep ONE 3D Printer</h1>
          <div class="section-title-divider"></div>
          <h2 class="h3">The Most Advanced Large Scale 3D Printing Experience</h2>
        </div>
        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
          <p class="parallax-section__description">BIGREP 3D Printers - Large scale manufacturing and rapid prototyping
            from BigRep GmbH. Discover our 3D printers the BigRep ONE, BigRep Studio.</p>
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
      <h1 class="main-title wow fadeInLeft" data-wow-duration="1s" style="margin-left:15px;" data-wow-delay="0.2s">DISCOVER BigRep ONE <strong>3D PRINTER</strong></h1>
      <div class="section-block row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 order-last order-md-first" style="margin-bottom:15px;">
          <div class="videoWrapper">
            <iframe width="100%" height="480" src="https://www.youtube.com/embed/RBctIWmBEN8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
          <div class="videoCaption">BigRep ONE: The Most Advanced Large Scale 3D Printing Experience</div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <h2 class="">UNCOMPROMISING GERMAN ENGINEERING</h3>
          <p class="wow fadeIn lead" data-wow-duration="1s" data-wow-delay="0.2s">The driving force behind the BigRep ONE hasn’t changed: make large-scale 3D printing affordable and available to more users. To achieve the best possible conditions for printing large objects a lot of new features are being introduced.</p>
          <p class="wow fadeIn h6" data-wow-duration="1s" data-wow-delay="0.2s">The <strong>BigRep ONE v3</strong> was created to make 3D printing for large-scale objects as easy as possible. Every detail has received our full expertise and experience — for better quality, higher speed, and increased safety.</p>
        </div>
      </div>
    </div>
  </div>
  <section>
    <div class="container-fluid">
      <div class="section-title center-block mx-auto">
        <div class="h2 text-center">FEATURES</div>
        <div class="section-title-divider"></div>
      </div>
      <div class="row p-3">
        <div class="col-lg-6">
          <p>
            To achieve the best possible conditions for printing large objects, a lot of new features have been introduced to the latest version of the BigRep ONE large-scale 3D printer. The modular print heads have been completely redesigned, in combination with a larger flexible spool holder, this provides the ideal 3D printer for manufacturing large-scale objects. The open format allows the user to have the best view for monitoring the print process. Our optional New Power Extruder with 0.6, 1 and 2 mm nozzles can print 60% quicker making the BigRep ONE one of the fastest large-scale 3D printers on the market. The 0.6 mm nozzle brings you the most detailed and precise BigRep ONE prints to date.
          </p>
        </div>
        <div class="col-lg-6">
          <img class="d-block mx-auto w-100" style="max-width:467px" src="{{asset('storage/images/bigrep/BigRep-Design-Award-2016.jpg')}}" width="467" height="300" alt="bigrep-design-award-2016" title="bigrep-design-award-2016">
        </div>
      </div>
      <div class="row mt-4 px-3 text-center text-md-left">
        <div class="col-lg-4 col-sm-12 col-xs-12 py-4 col-12">
          <img class="rounded d-block img-shadow w-100 mx-auto" style="max-width:380px" src="{{asset('storage/images/bigrep/BigRep-FFF-3d-Printer-Open-Frame-min.jpg')}}" width="100%" height="auto" />
          <div class="h5 w-100 mt-4">Open and Safe</div>
          <p class="lead">THE FRAME CONSTRUCTION</p>
          <p class="w-100">The open format ensures that the user has the best possible view for monitoring the quality and progress of the object at all times. All moving parts have been enclosed for user safety and to reduce contamination. Integrated sensors ensure safety, precision, and user friendliness.</p>
        </div>
        <div class="col-lg-4 col-sm-12 col-xs-12 py-4 col-12">
          <img  class="rounded d-block img-shadow w-100 mx-auto" style="max-width:380px" src="{{asset('storage/images/bigrep/The-New-ONE-Independant-Print-Heads-min.jpg')}}" width="100%" height="auto" />
          <div class="h5 w-100 mt-4">Modular and Independent</div>
          <p class="lead">THE PRINT HEADS</p>
          <p class="w-100">The modular print heads operate independently, allowing for unbeatable flexibility when printing in two colors or with water soluble support material (PVA). They can be easily adjusted and replaced without the need for tools. During the printing process, the active print head moves downward slightly to avoid making contact with the object. The print heads were developed by BigRep’s in-house team and optimized for large-scale printing projects.</p>
        </div>
        <div class="col-lg-4 col-sm-12 col-xs-12 py-4 col-12">
          <img  class="rounded d-block img-shadow w-100 mx-auto" style="max-width:380px" src="{{asset('storage/images/bigrep/print-bed-bigrep-one.jpg')}}" width="100%" height="auto" />
          <div class="h5 w-100 mt-4">Semi-automatic print bed levelling</div>
          <p class="lead">THE PRINT BED</p>
          <p class="w-100">The heated print bed provides optimal adhesion in the printing process right from the onset. Thanks to the integrated automatic inductive sensor, the print bed can be leveled quickly and effortlessly, reducing prep time considerably.</p>
        </div>
        <div class="col-lg-4 col-sm-12 col-xs-12 py-4 col-12">
          <img class="rounded d-block img-shadow w-100 mx-auto" style="max-width:380px" src="{{asset('storage/images/bigrep/BigRep-One-Perfect-for-molding-and-rapid-prototyping-3d-printer-min.jpg')}}" width="100%" height="auto" />
          <div class="h5 w-100 mt-4">Big, Bigger, the Biggest</div>
          <p class="lead">THE BUILD VOLUME</p>
          <p class="w-100">The new BigRep ONE v3 features a build volume of X 1005 mm x Y 1005 mm x Z 1005 mm. With a capacity of over one cubic meter, the new BigRep ONE v3 provides the largest FFF build volume currently available on the international market.</p>
        </div>
        <div class="col-lg-4 col-sm-12 col-xs-12 py-4 col-12">
          <img  class="rounded d-block img-shadow w-100 mx-auto" style="max-width:380px" src="{{asset('storage/images/bigrep/BigRep-ONE-The-Big-Spool-Holder-min.jpg')}}" width="100%" height="auto" />
          <div class="h5 w-100 mt-4">Spacious and Flexible</div>
          <p class="lead">THE SPOOL HOLDER</p>
          <p class="w-100">The spool holder was designed to fit all standard spool sizes. It can hold several spools up to 8 kg. A run-out detection system notifies the user when the spool is about to end.</p>
        </div>
        <div class="col-lg-4 col-sm-12 col-xs-12 py-4 col-12">
          <img  class="rounded d-block img-shadow w-100 mx-auto" style="max-width:380px" src="{{asset('storage/images/bigrep/ui_print-1.jpg')}}" width="100%" height="auto" />
          <div class="h5 w-100 mt-4">Easy and Intuitive</div>
          <p class="lead">THE GRAPHICAL USER INTERFACE</p>
          <p class="w-100">New intuitive user interface on touch panel PC, enabling lots of new features as remote load and check print progress via webcam, resume print after power failure and many more.</p>
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
                      <img src="{{asset('storage/pdfs/whitepapers/Bionic-Propeller_eBook.png')}}" style="width:100%;" alt="Case Study: Bionic Propeller eBook">
                    </div>
                    <figcaption>Case Study: Bionic Propeller eBook</figcaption>
                  </figure>
                </a>
              </div>
              <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a data-toggle="modal" data-target="#wp_modal_2" class="pdf-item">
                  <figure style="width:200px;">
                    <div class="figimg">
                      <img src="{{asset('storage/pdfs/whitepapers/Paravan_eBook.png')}}" style="width:100%;" alt="Case Study: Vehicle Customization - Paravan Automotive Production">
                    </div>
                    <figcaption>Case Study: Vehicle Customization - Paravan Automotive Production</figcaption>
                  </figure>
                </a>
              </div>
              <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <a data-toggle="modal" data-target="#wp_modal_3" class="pdf-item">
                  <figure style="width:200px;">
                    <div class="figimg">
                      <img src="{{asset('storage/pdfs/whitepapers/Teignbridge_eBook.png')}}" style="width:100%;" alt="Case Study: Teignbridge Propeller Process">
                    </div>
                    <figcaption>Case Study: Teignbridge Propeller Process</figcaption>
                  </figure>
                </a>
              </div>
              <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a data-toggle="modal" data-target="#wp_modal_4" class="pdf-item">
                  <figure style="width:200px;">
                    <div class="figimg">
                      <img src="{{asset('storage/pdfs/whitepapers/The-Vila_eBook.png')}}" style="width:100%;" alt="Case Study: The Vila eBook">
                    </div>
                    <figcaption>Case Study: The Vila eBook</figcaption>
                  </figure>
                </a>
              </div>
            </div>
          </div>
          <div class="tab-pane fade in active show" id="brochures" role="tabpanel">
            <div class="d-flex flex-wrap" >
              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <a target="_blank" href="{{asset('storage/pdfs/bigrep/Brochure_ONE.pdf')}}" class="pdf-item">
                  <figure  >
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/bigrep/Brochure_ONE.png')}}" style="width:100%;" alt="Brochure: BigRep ONE 3D Printer">
                  </div>
                  <figcaption>Brochure: BigRep ONE 3D Printer</figcaption>
                  </figure>
                </a>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <a target="_blank" href="{{asset('storage/pdfs/bigrep/Brochure_STUDIO.pdf')}}" class="pdf-item">
                  <figure  >
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/bigrep/Brochure_STUDIO.png')}}" style="width:100%;" alt="Brochure: BigRep STUDIO 3D Printer">
                  </div>
                  <figcaption>Brochure: BigRep STUDIO 3D Printer</figcaption>
                  </figure>
                </a>
              </div>
              {{-- <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <a target="_blank" href="{{asset('storage/pdfs/bigrep/BigRep EDGE - Factsheet.pdf')}}" class="pdf-item">
                  <figure >
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
            <tbody><tr>
            <td width="488px">Build volume</td>
            <td width="488px">x 1005 y 1005 z 1005 (mm)</td>
            </tr>
            <tr>
            <td width="488px">Layer height</td>
            <td width="488px">0,4 - 0,8mm (standard extruder)
            <br>0,15 - 1,4mm (power extruder)</td>
            </tr>
            <tr>
            <td width="488px">Extruder</td>
            <td width="488px">Two modular extrusion heads</td>
            </tr>
            <tr>
            <td width="488px">Printing technology</td>
            <td width="488px">FFF- Fused-Filament-Fabrication (FDM)</td>
            </tr>
            <tr>
            <td width="488px">Certified materials</td>
            <td width="488px">BigRep PLA, BigRep PRO HT, BigRep PRO HS, BigRep PETG<br>Other filaments on request.</td>
            </tr>
            <tr>
            <td width="488px">Support materials</td>
            <td width="488px">BigRep PVA
            </td>
            </tr>
            <tr>
            <td width="488px">Heating strategy</td>
            <td width="488px">60–80°C</td>
            </tr>
            <tr>
            <td width="488px">Printer weight</td>
            <td width="488px"> Approx. 460kg</td>
            </tr>
            <tr>
            <td width="488px">Size</td>
            <td width="488px">x 1850 y 2250 z 1725 (mm)</td>
            </tr>
            <tr>
            <td width="488px">Power</td>
            <td width="488px">208V-240V, 16A, 50/60Hz</td>
            </tr>
            <tr>
            <td width="488px">Safety Certifications</td>
            <td width="488px">CE approved</td>
            </tr>
            <tr>
            <td width="488px">GUI</td>
            <td width="488px">Onboard with touch panel PC</td>
            </tr>
            </tbody></table>
        </div>
        <div class="col-4 col-sm-12 col-md-6 col-lg-4 wow fadeInRight">
          <div class="p-4 img-shadow" style="background:white">
            <div class="h5 w-100">Require more Speed & Precision?</div>
            <a href="{{ asset('storage/images/bigrep/studio-hero.jpg') }}" class="mp-popup-image mp-single"><img src="{{ asset('storage/images/bigrep/studio-hero.jpg') }}" class="w-100 pb-3" style="max-width:350px"/></a>
            <a href="{{ route('bigrep-studio') }}">Discover the BigRep STUDIO <i class="fas fa-angle-double-right"></i></a>
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
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body" style="padding:5px; padding-right:0; overflow:hidden">
        <div pageID="hjkqszg4eeibmoahg3ekaq"></div>
      </div>
    </div>
  </div>
</div>
@stop
