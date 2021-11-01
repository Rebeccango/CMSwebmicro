@extends('layouts.layout')
@section('title')
Markforged X Industrial Series - Markforged 3D Printer
@stop
@section('meta')
<link rel="canonical" href="{{route('industrial-series')}}" />
@stop
@section('description')Industrial grade large-format printers deliver exceptional accuracy, reliability and
repeatability. These printers are
the go-to solution for manufacturing tooling. Save time and money printing tools previously machined out of
aluminum.@stop
@section('keywords')3D, X7, Industrial,Design Software, CAD, 3D CAD, Markforged, Printers, authorized,reseller,Canada,
materials, fiber, onyx, X3, X5 @stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
  style="min-height:450px; background-image:url({{asset('storage/images/markforged/printhead-nozzle.jpg')}})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto wow fadeIn" data-wow-duration="0.8s"
          data-wow-delay="0.5s">
          <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">Markforged Industrial Series 3D Printers
          </h1>
          <div class="section-title-divider"></div>
          <h2 class="h4">With Cloud Eiger Software</h2>
        </div>
        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
          <p class="parallax-section__description">Industrial grade large-format printers deliver exceptional accuracy,
            reliability and repeatability. These printers are the go-to solution for manufacturing tooling. Save time
            and money printing tools previously machined out of aluminum.</p>
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
    <div class="row">
      <div class="col-lg-5">
        <h1 class="main-title wow fadeInLeft" data-wow-duration="1s" style="margin-top:0" data-wow-delay="0.2s">
          MARKFORGED <span style="color:#3781ef">INDUSTRIAL SERIES</span></h1>
        <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s">The Markforged Industrial Series are the
          most powerful 3D printers on the market. With an industrial-scale printing of incredibly strong parts and
          first ever precision sensing system, the Markforged Industrial Series are destined to be the must-have 3D
          printers for every manufacturer.</p>
        <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s">Industrial grade large-format printers
          deliver exceptional accuracy, reliability and repeatability. These printers are the go-to solution for
          manufacturing tooling (Jigs, Jaws, Tools, Fixtures). Save time and money printing tools previously machined
          out of aluminum.</p>
        <br />
        <div class="main-title wow fadeInLeft" data-wow-duration="1s" style="margin-top:0" data-wow-delay="0.1s">Large
          Prints, High-Resolution</div>
        <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">The large build volume of the Markforged
          Industrial Series make them ideal for robotics, automotive parts, functional prototypes, and prosthetics. With
          50-micron resolution layer height, your parts will come out of the printer with a beautiful surface finish on
          par with the look and feel of injection molding.</p>
        <br />
        <div class="main-title wow fadeInLeft" data-wow-duration="1s" style="margin-top:0" data-wow-delay="0.2s">
          COMPOSITE 3D PRINTING</div>
        <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">The strength you need for tooling and
          functional parts. Designed for accuracy and built to survive the production floor environment, Markforged’s
          composite 3D printers power the next 10x in design and manufacturing.</p>
        <br />
        <img src="{{ asset('storage/images/markforged/MF-Auth-Value-Reseller-300.png') }}" width="300px" height="auto"
          class="d-block mx-auto pt-5 pb-2" />
      </div>
      <div class="col-lg-7 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
        <img src="{{asset('storage/images/29DJX8ioe0h6bRq5GCCZG3HSSWI8Lpug9lCk95Ud.png')}}" style="width:100%;" alt="">
        {{-- <div class="img-caption text-center">
          Uncompromised Strength, Precision, and Beauty
        </div> --}}
      </div>
    </div>
  </div>
</section>
<section class="section-secondary py-5">
  <div class="container-fluid py-3">
    <div class="section-title center-block mx-auto">
      <div class="text-center h2">INDUSTRIAL SERIES</div>
      <p class="lead text-center mx-auto w-75 d-block">Industrial grade large-format printers deliver exceptional
        accuracy, reliability and repeatability. These printers are the go-to solution for manufacturing tooling (Jigs,
        Jaws, Tools, Fixtures). Save time and money printing tools previously machined out of aluminum.</p>
      <div class="section-title-divider"></div>
    </div>
    <div class="row">
      <div class="col col-lg-4 col-sm-12 col-xs-12 py-4">
        <img class="rounded d-block img-shadow" src="https://static.markforged.com/wf-assets/362-wf-l8podqz7-599.jpg"
          width="100%" height="auto" />
        <div class="h4 text-center w-100 my-2">
          X3
        </div>
        <p class="text-left w-100">The strength and stiffness of carbon fiber meet the versatility of tough nylon.
          Engineering class parts that are 20% stronger and 40% stiffer than ABS.</p>
      </div>
      <div class="col col-lg-4 col-sm-12 col-xs-12 py-4">
        <img class="rounded d-block img-shadow" src="https://static.markforged.com/wf-assets/362-wf-l8podqz7-646.jpg"
          width="100%" height="auto" />
        <div class="h4 text-center w-100 my-2">
          X5
        </div>
        <p class="text-left w-100">For load-bearing applications that require real strength, these parts make the grade.
          Now you can print parts faster and cheaper than machining metal.</p>
      </div>
      <div class="col col-lg-4 col-sm-12 col-xs-12 py-4">
        <img class="rounded d-block img-shadow" src="https://static.markforged.com/wf-assets/362-wf-l8podqz7-647.jpg"
          width="100%" height="auto" />
        <div class="h4 text-center w-100 my-2">
          X7
        </div>
        <p class="text-left w-100">Exceptionally strong, supremely stiff, ultra lightweight, and incredibly versatile -
          X7 parts deliver unparalleled performance without compromise.</p>
      </div>
    </div>
  </div>
</section>
<section class="parallax parallax-overlay"
  style="background-image:url({{asset('storage/images/markforged/Markforged-Mark-X-Inspection.jpg')}}); min-height:400px;">
  <div class="content white-content d-flex justify-content-center align-items-center">
    <div class="container-fluid">
      <div class="row" style="margin-top:80px;">
        <div class="col-lg-6 col-sm-6 col-xs-4"></div>
        <div class="col-lg-6 col-sm-6 col-xs-8" style="margin-top:0">
          <div class="h1" style="margin-left:0; margin-top:0;">In-Process Inspection</div>
          <p>
            The Markforged Industrial Series gives you breakthrough quality and precision in 3D printing. Scan your
            parts mid-print using our cloud-based Eiger software and a laser displacement sensor affixed to the print
            head. Ensure dimensional accuracy at the most critical tolerances at any point in your print.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="pt-5 pb-0">
  <div class="container-fluid py-3">
    <div class="row">
      <div class="section-title center-block mx-auto">
        <div class="text-center h2">THE BENEFITS</div>
        <div class="section-title-divider"></div>
      </div>
      <div class="container-fluid d-flex justify-content-start align-items-start">
        <div class="section-icon-group row mx-auto w-100" style="margin-top:-30px;">
          <div class="icon-block col-lg-4 col-md-4 col-sm-12 col-xs-12p">
            <div class='icon-content'>
              <div class="icon-link">
                <div class="icon img-circle rounded-circle "
                  style="background-image:url('{{ asset('/storage/images/markforged/touchscreen.jpg') }}'); background-size:cover;">
                </div>
                <h3 class="icon-title" style="margin-top:15px;">Easy-To-Use</h3>
              </div>
              <div class="icon-body">
                <p>
                  Cloud-connected software and a 4.3” touchscreen comes standard with every printer, washer and furnace.
                  Regular over-the-air updates mean that your Markforged products keep getting better. Material usage
                  tracking and out-of-material detection help monitor your printers and reduce waste.
              </div>
            </div>
          </div>
          <div class="icon-block col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class='icon-content'>
              <div class="icon-link">
                <div class="icon img-circle rounded-circle "
                  style="background-image:url('{{ asset('/storage/images/mark-materials.png') }}'); background-size:cover;">
                </div>
                <h3 class="icon-title" style="margin-top:15px;">Range of Material</h3>
              </div>
              <div class="icon-body">
                <p>
                  In addition to printing Nylon, the Markforged Industrial series printers can print materials that no
                  other 3D printer can, like Carbon Fiber, Fiberglass, and Kevlar.
                </p>
              </div>
            </div>
          </div>
          <div class="icon-block col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class='icon-content'>
              <div class="icon-link">
                <div class="icon  img-circle rounded-circle "
                  style="background-image:url('{{ asset('/storage/images/strength.gif') }}');  background-size:cover;">
                </div>
                <h3 class="icon-title" style="margin-top:15px;">High-Strength Printing</h3>
              </div>
              <div class="icon-body">
                <p>
                  By reinforcing your parts with composite fiber while 3D printing them, Markforged Industrial Series 3D
                  Printers achieve unparalleled strength, stiffness, and durability in their printed parts.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container-fluid">
    <div class="custom-nav-pills">
      <ul class="nav nav-pills" role="tablist">
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#specSheets" role="tab">Spec Sheets</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#whitepapers" role="tab">Whitepapers</a>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade" id="specSheets" role="tabpanel">
          <div class="d-flex">
            <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a target="_blank" href="{{asset('storage/pdfs/markforged/X3+Specs.pdf')}}" class="pdf-item">
                <figure style="width:200px;">
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/markforged/X3+Specs.png')}}" style="width:100%;" alt="X5 Specs PDF">
                  </div>
                  <figcaption>X3 Specs</figcaption>
                </figure>
              </a>
            </div>
            <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a target="_blank" href="{{asset('storage/pdfs/markforged/X5+Specs.pdf')}}" class="pdf-item">
                <figure style="width:200px;">
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/markforged/X5+Specs.png')}}" style="width:100%;" alt="X5 Specs PDF">
                  </div>
                  <figcaption>X5 Specs</figcaption>
                </figure>
              </a>
            </div>
            <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a target="_blank" href="{{asset('storage/pdfs/markforged/X7+Specs.pdf')}}" class="pdf-item">
                <figure style="width:200px;">
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/markforged/X7+Specs.png')}}" style="width:100%;" alt="X7 Specs PDF">
                  </div>
                  <figcaption>X7 Specs</figcaption>
                </figure>
              </a>
            </div>
          </div>
        </div>
        <div class="tab-pane fade in active show" id="whitepapers" role="tabpanel">
          <div class="d-flex">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a data-toggle="modal" data-target="#wp_modal_1" class="pdf-item">
                <figure>
                  <div class="figimg">
                    <img
                      src="{{asset('storage/pdfs/markforged/whitepapers/Guide+to+3D+Printing+on+the+Production+Line.png')}}"
                      style="width:100%;" alt="Guide to Additive Manufacturing on the Production Line">
                  </div>
                  <figcaption>Guide to Additive Manufacturing on the Production Line</figcaption>
                </figure>
              </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a data-toggle="modal" data-target="#wp_modal_2" class="pdf-item">
                <figure>
                  <div class="figimg">
                    <img src="{{ asset('storage/pdfs/markforged/whitepapers/Efficient+Fiber+White+Paper+Web.png')}}"
                      style="width:100%;" alt="Guide to Leveraging Continuous Fiber for Strong 3D Printing">
                  </div>
                  <figcaption>Guide to Leveraging Continuous Fiber for Strong 3D Printing</figcaption>
                </figure>
              </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a data-toggle="modal" data-target="#wp_modal_3" class="pdf-item">
                <figure>
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/markforged/whitepapers/Tooling_Fixtures_Spotlight.png')}}"
                      style="width:100%;" alt="3D Printed Tooling & Fixtures">
                  </div>
                  <figcaption>3D Printed Tooling & Fixtures</figcaption>
                </figure>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="parallax" style="background-image:url({{asset('/storage/images/Markforged-Mark-X-Software.jpg')}});">
  <div class="content white-content d-flex justify-content-center align-items-center">
    <div class="container-fluid">
      <div class="section-title center-block mx-auto">
        <div class="h2 text-center">Print As-Designed Parts With Known Precision And Tolerance</div>
        <div class="section-title-divider"></div>
      </div>
      <div class="section-block">
        <p class="text-lg-center text-large">
          Define a tolerance specification in Eiger, our cloud-based 3D printing software, and the Markforged Industrial
          Series will scan your part while it’s printing. If an error is detected you will be alerted and can choose to
          cancel the print remotely, saving time and material.
        </p>
      </div>
    </div>
  </div>
</section>
<section style="padding-top:20px;">
  <div class="s40"></div>
  <div class="container-fluid">
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
      <div class="h5" style="margin-left:0; margin-top:0;">
        3D PRINTER SPECIFICATIONS
      </div>
      <h3 class="h1" style="margin-left:0; margin-top:0;">MARKFORGED: INDUSTRIAL SERIES</h3>
      <table class="table table-striped table-inverse ctable" style="margin-top: 25px;">
        <thead class="thead-inverse">
          <tr>
            <th></th>
            <th></th>
            <th>X3</th>
            <th>X5</th>
            <th>X7</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th rowspan="7" style="border: 0 1px 1px 0 solid;">PRINTER PROPERTIES</th>
            <th scope="row">Description</th>
            <td>
              <p>The Markforged Industrial Series3 prints strictly engineering grade plastic parts. It leverages the
                incredible material qualities of Onyx - twice the strength and stiffness as standard printing plastics -
                with an advanced sensor suite to deliver unparalleled reliability. Parts meet tight tolerances with
                beautiful surface finish and are perfect for production line equipment.</p>
            </td>
            <td>
              <p>The Markforged Industrial Series5 leverages fiberglass reinforced thermoplastic to create parts 10x as
                strong as standard printing plastics. Easily upgradable to the X7, the X5 is a laser assisted, durably
                built large format machine designed to reliably produce high strength parts in any environment at an
                affordable price point.</p>
            </td>
            <td>
              <p>The X7 prints industrial grade manufacturing jigs, jaws, tools and fixtures. Designed from the ground
                up to survive the production floor environment and capable of printing parts stronger than machined
                aluminum for a fraction of the cost, the X7 delivers unparalleled surface finish, build size, and
                reliability. The X7 was formerly called the Mark-X.</p>
            </td>
          </tr>
          <tr>
            <th scope="row">Build Volume</th>
            <td>330 mm x 270 mm x 200 mm (13 x 10.6 x 7.9 in)</td>
            <td>330 mm x 270 mm x 200 mm (13 x 10.6 x 7.9 in)</td>
            <td>330 mm x 270 mm x 200 mm (13 x 10.6 x 7.9 in)</td>
          </tr>
          <tr>
            <th scope="row">Weight</th>
            <td>46kg (102lbs)</td>
            <td>48kg (106lbs)</td>
            <td>48kg (106lbs)</td>
          </tr>
          <tr>
            <th scope="row">Machine Footprint</th>
            <td>584mm x 483mm x 914mm (23 x 19 x 36 in)</td>
            <td>584mm x 483mm x 914mm (23 x 19 x 36 in)</td>
            <td>584mm x 483mm x 914mm (23 x 19 x 36 in)</td>
          </tr>
          <tr>
            <th scope="row">Print Bed</th>
            <td>Flat to within 80 um - Kinematic coupling</td>
            <td>Flat to within 80 um - Kinematic coupling</td>
            <td>Flat to within 80 um - Kinematic coupling</td>
          </tr>
          <tr>
            <th scope="row">Power</th>
            <td>100-240VAC, 150W (2A peak)</td>
            <td>100-240VAC, 150W (2A peak)</td>
            <td>100-240VAC, 150W (2A peak)</td>
          </tr>
          <tr>
            <th scope="row">Laser</th>
            <td>Active Print Calibration, Bed Leveling</td>
            <td>Active Print Calibration, Bed Leveling</td>
            <td>In-Process Inspection, Active Print Calibration, Bed Leveling</td>
          </tr>
          <tr>
            <th rowspan="4" style="border: 0 1px 1px 0 solid;">PART PROPERTIES</th>
            <th scope="row">Layer Height</th>
            <td>100um default, 50um min.</td>
            <td>100um default, 50um min.</td>
            <td>100um default, 50um min.</td>
          </tr>
          <tr>
            <th scope="row">Ultimate Tensile Strength</th>
            <td>UTS: 36 MPa (1.2x ABS); Flex Stiffness: 2.9 GPa (1.4x ABS)</td>
            <td>590 MPa (19.0x ABS, 16.4x Onyx)</td>
            <td>700 MPa (22.6x ABS, 19.4x Onyx)</td>
          </tr>
          <tr>
            <th scope="row">Max Flexural Stiffness</th>
            <td></td>
            <td></td>
            <td>22 GPa (10.7x ABS, 7.6x Onyx)</td>
          </tr>
          <tr>
            <th scope="row">Infill</th>
            <td>Closed Cell Infill: Multiple geometries available.</td>
            <td>Closed Cell Infill: Multiple geometries available.</td>
            <td>Closed Cell Infill: Multiple geometries available.</td>
          </tr>
          <tr>
            <th rowspan="2" style="border: 0 1px 1px 0 solid;">SOFTWARE</th>
            <th scope="row">Supplied Software</th>
            <td>Markforged Eiger - Cloud Storage, Local Storage</td>
            <td>Markforged Eiger - Cloud Storage, Local Storage</td>
            <td>Markforged Eiger - Cloud Storage, Local Storage</td>
          </tr>
          <tr>
            <th scope="row">Security</th>
            <td>Two Factor Auth, Org Admin Access, Single Sign On</td>
            <td>Two Factor Auth, Org Admin Access, Single Sign On</td>
            <td>Two Factor Auth, Org Admin Access, Single Sign On</td>
          </tr>
          <tr>
            <th rowspan="2" style="border: 0 1px 1px 0 solid;">MATERIALS</th>
            <th scope="row">Plastics Available</th>
            <td>Onyx</td>
            <td>Onyx</td>
            <td>Onyx, Tough Nylon</td>
          </tr>
          <tr>
            <th scope="row">Fiber Available</th>
            <td>N/A</td>
            <td>Fiberglass</td>
            <td>Carbon Fiber, Fiberglass, Kevlar, High Strength/High Temp Fiberglass</td>
          </tr>
        </tbody>
      </table>
      <section class="section-secondary">
        <p class="lead text-center">
          Have any questions?
        </p>
        <button class="btn btn-lg btn-primary wowfadeInUp btn-dialog mx-auto d-block text-center" id="contact"
          data-wow-duration="1s" data-toggle="modal" data-target="#contactModal" data-wow-delay="0.2s"
          data-type="contact" data-title="Contact an Agent"
          style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInUp;">Contact
          Us</button>
      </section>
    </div>
  </div>
</section>

<!-- Modals Whitepapers -->
<div class="modal fade" tabindex="-1" role="dialog" id="wp_modal_1">
  <div class="modal-dialog" role="document" style="max-width:700px">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Gain Access to the "Guide to Additive Manufacturing on the Production
          Line" PDF</h4>
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
        <h4 class="modal-title">Gain Access to the "Guide to Leveraging Continuous Fiber for Strong 3D
          Printing" PDF</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div data-form-block-id="8bbb9067-b8ac-e911-a987-000d3a3702ca"></div>
        <div id="dTGg4uSqGt3vwQRuKdxQWwXYK1PI4O7FGeah9OUaQaZM"></div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="wp_modal_3">
  <div class="modal-dialog" role="document" style="max-width:700px">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Gain Access to the "3D Printed Tooling & Fixtures" PDF</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div data-form-block-id="ad53aab5-b8ac-e911-a987-000d3a3702ca"></div>
        <div id="dryIUHgHmEa2-rfl5gJCm0_afHQyNTuywGR0yVFjRd7w"></div>
      </div>
    </div>
  </div>
</div>
@stop

@push('after-styles')
<style>
  .cd-bg-video-wrapper video {
    margin-top: -90px;
  }

  .ctable * {
    font-size: 12px;
  }

  .ctable thead th {
    font-size: 1.5rem;
    text-align: center;
    border: 0;
  }

  .ctable th {
    border: 1px solid rgb(85, 89, 92);
  }

  .ctable td {
    border: 1px solid rgb(85, 89, 92);
  }
</style>
@endpush