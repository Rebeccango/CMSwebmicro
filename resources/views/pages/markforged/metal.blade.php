@extends('layouts.layout')
@section('title')
Metal X - Markforged 3D Printer
@stop
@section('meta')
<link rel="canonical" href="{{route('metal-series')}}" />
@stop
@section('description')Everything you need to go from design to fully functional metal parts — the Metal X 3D print
system is an end-to-end
manufacturing solution @stop
@section('keywords')3D, Metal X, Design Software, CAD, 3D CAD, Markforged, Printers, authorized,reseller,Canada,
materials, fiber @stop
@push('after-styles')
<style>
  #adam {
    background: #1b1c20 !important;
    z-index: 2;
  }
</style>
@endpush

@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
  style="min-height:450px; background-image:url({{asset('storage/images/markforged/MarkforgedMetalXPrinter.jpg')}})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto wow fadeIn" data-wow-duration="0.8s"
          data-wow-delay="0.5s">
          <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">Markforged Metal X 3D Printer
          </h1>
          <div class="section-title-divider"></div>
          <h2 class="h4">COMPLETE 3D METAL PRINTING SOLUTION</h2>
        </div>
        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
          <p class="parallax-section__description">Everything you need to go from design to fully functional metal parts
            — the Metal X 3D print system is an end-to-end manufacturing solution</p>
        </div>
        <div>
          @include('layouts.generic_contact_buttons')
        </div>
      </div>
    </div>
  </div>
</section>
<section style="padding-bottom:0">
  <div class="container-fluid">
    <div class="row px-3">
      <div class="row">
        <div class="col-lg-7">
          <h1 class="wow fadeInLeft h1" data-wow-duration="1s" style="margin-top:0" data-wow-delay="0.2s">The Metal X
          </h1>
          <p>Everything you need to go from design to fully functional metal parts in under 24 hours – the Metal X 3D
            print system is an end-to-end manufacturing solution. From the company that revolutionized 3D printing with
            composite carbon fiber, comes a breakthrough in metal 3D printing.</p>
          <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">Based on their 4th generation composite
            3D printing technology, Markforged’s Metal X is a brand new kind of 3D printer. By printing metal powder
            bound in a plastic matrix, we’ve eliminated the safety risks associated with traditional metal 3D printing
            while enabling new features like closed-cell infill for reduced part weight and cost. Leave 20th-century
            manufacturing in the dust and create anything from industrial replacement parts to injection molds to
            working prototypes.</p>
          <table class="table table-striped">
            <tr>
              <td>
                Build Volume
              </td>
              <td>
                250 mm x 220 mm x 200 mm
              </td>
            </tr>
            <tr>
              <td>
                Layer Height
              </td>
              <td>
                50 μm
              </td>
            </tr>
            <tr>
              <td>
                Technology
              </td>
              <td>
                <a href="#adam">ADAM</a>
              </td>
            </tr>
          </table>
        </div>
        <div class="col-lg-5 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
          <div class="videoWrapper">
            <iframe width="100%" height="264" src="https://www.youtube.com/embed/InYfu5hoV7c" frameborder="0"
              allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
          <div class="videoCaption">Video: Introducing The Metal X - A Breakthrough in Metal
            3D Printing</div>

          <img src="{{ asset('storage/images/markforged/MF-Auth-Value-Reseller-300.png') }}" width="300px" height="auto"
            class="d-block mx-auto pt-5 pb-2" />
        </div>
      </div>
      <div class="row" style="margin-top:50px ;">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <h3 class="main-title wow fadeInLeft h1" data-wow-duration="1s" style="margin-top:0" data-wow-delay="0.2s">
            Affordable Metal 3D Printing</h3>
          <p>
            The Metal X is up to 10x less expensive than alternative metal additive manufacturing technologies — and up
            to a 100x less than traditional fabrication technologies like machining or casting.
          </p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <h3 class="main-title wow fadeInLeft h1" data-wow-duration="1s" style="margin-top:0" data-wow-delay="0.2s">
            Manufacturing Made Easy</h3>
          <p>
            Our cloud-based printer management software, built-in touchscreen interface and automatic material tracking
            make the Metal X system the simplest way to manufacture metal parts.
          </p>
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
          <a class="nav-link  active in" data-toggle="tab" href="#caseStudies" role="tab">Case Studies</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#specSheets" role="tab">Spec Sheets</a>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade in show active" id="caseStudies" role="tabpanel">
          <div class="row" style="margin:0; padding:0">
            <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a data-toggle="modal" data-target="#wp_modal_1" class="pdf-item">
                <figure style="width:200px;">
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/markforged/SBD+Case+Study.png')}}" style="width:100%;"
                      alt="CASE STUDY: STANLEY INFRASTRUCTURE">
                  </div>
                  <figcaption>CASE STUDY: STANLEY INFRASTRUCTURE</figcaption>
                </figure>
              </a>
            </div>
            <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a data-toggle="modal" data-target="#wp_modal_2" class="pdf-item">
                <figure style="width:200px;">
                  <div class="figimg">
                    <img
                      src="{{asset('storage/pdfs/markforged/whitepapers/Metal+Composite+Complementary+Technologies.png')}}"
                      style="width:100%;" alt="Overcoming Manufacturing Challenges with Composite & Metal 3D Printing">
                  </div>
                  <figcaption>Overcoming Manufacturing Challenges with Composite & Metal 3D Printing</figcaption>
                </figure>
              </a>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="specSheets" role="tabpanel">
          <div class="row" style="margin:0; padding:0">
            <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a target="_blank" href="{{asset('storage/pdfs/markforged/Metal+X+Specs.pdf')}}" class="pdf-item">
                <figure style="width:200px;">
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/markforged/Metal+X+Specs.png')}}" style="width:100%;"
                      alt="Metal X Specs">
                  </div>
                  <figcaption>Metal X Specs</figcaption>
                </figure>
              </a>
            </div>
            <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a target="_blank" href="{{asset('storage/pdfs/markforged/Sinter-1+Specs.pdf')}}" class="pdf-item">
                <figure style="width:200px;">
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/markforged/Sinter-1+Specs.png')}}" style="width:100%;"
                      alt="Sinter 1 Specs PDF">
                  </div>
                  <figcaption>Sinter 1 Specs</figcaption>
                </figure>
              </a>
            </div>
            <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a target="_blank" href="{{asset('storage/pdfs/markforged/Sinter-2+Specs.pdf')}}" class="pdf-item">
                <figure style="width:200px;">
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/markforged/Sinter-2+Specs.png')}}" style="width:100%;"
                      alt="Sinter 2 Specs PDF">
                  </div>
                  <figcaption>Sinter 2 Specs</figcaption>
                </figure>
              </a>
            </div>
            <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a target="_blank" href="{{asset('storage/pdfs/markforged/Wash-1+Specs.pdf')}}" class="pdf-item">
                <figure style="width:200px;">
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/markforged/Wash-1+Specs.png')}}" style="width:100%;"
                      alt="Wash 1 Specs PDF">
                  </div>
                  <figcaption>Wash 1 Specs</figcaption>
                </figure>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="adam">
  <div class="container-fluid">
    <div class="row">
      <div class="section-title center-block mx-auto col-lg-12">
        <div class="wow fadeIn h2" data-wow-duration="1s" data-wow-delay="0.5s" style="color:white; text-align:center;">
          Say Hello To ADAM</div>
        <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
        <div class="text-center h3" style='color:white; font-weight:400'>ATOMIC DIFFUSION ADDITIVE MANUFACTURING
        </div>
      </div>
      <p class="mt-1" style='color:white; font-size:16px; font-weight:300'>
        Speed time from design to strong metal parts with this accessible and compact process. ADAM prints your part
        using a bound metal powder rod that transforms into a dense metal part in one easy step. Bulk sintering
        provides crystal growth through all axes giving your parts excellent mechanical properties in all
        directions.
      </p>
    </div>
  </div>
  <section class="my-5" style="background:black">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-12" style="color:#fff">
          <div
            style="height:200px; background-image:url(https://static.markforged.com/wf-assets/wf-l8podqz7-438.png); background-position:center; background-size:cover; background-repeat:no-repeat;">
          </div>
          <div class="w-100 h5">DESIGN</div>
          <p>CAD your part, upload the STL, and select from a wide range of metals. The Eiger software does the rest
            making printing the right part easy.</p>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12" style="color:#fff">
          <div
            style="height:200px; background-image:url(https://static.markforged.com/wf-assets/wf-l8podqz7-623.jpg); background-position:center; background-size:contain; background-repeat:no-repeat;">
          </div>
          <div class="w-100 h5">PRINT</div>
          <p>Metal powder bound in plastic is printed a layer at a time into the shape of your part. Parts are
            scaled up to compensate for shrinkage during the sintering process.</p>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12" style="color:#fff">
          <div
            style="height:200px; background-image:url(https://static.markforged.com/wf-assets/wf-l8podqz7-439.png); background-position:center; background-size:contain; background-repeat:no-repeat;">
          </div>
          <div class="w-100 h5">SINTER</div>
          <p>Printed parts go through a washing stage to remove some of the binder. They are then sintered in a
            furnace and the metal powder fuses into solid metal.</p>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12" style="color:#fff">
          <div
            style="height:200px; background-image:url(https://static.markforged.com/wf-assets/wf-l8podqz7-624.jpg); background-position:center; background-size:contain; background-repeat:no-repeat;">
          </div>
          <div class="w-100 h5">PART</div>
          <p>Pure metal and up to 99.7% dense, the final parts are ready for use. They can be processed and treated
            just like any other metal parts.</p>
        </div>
      </div>
    </div>
  </section>
  <div class="container-fluid">
    <div class="row">

      <img class="mx-auto" style="max-width: 100%; height:300px; margin:20px 0;"
        src="/storage/wp-content/uploads/2017/01/image6.jpg" />
      <p style='color:white; font-size:16px; font-weight:300'>
        ADAM also enables the creation of unique geometries such as closed-cell honeycomb infill. Parts can be
        printed like the structure of bones – a closed cell inner core encased in a solid outer shell. This geometry
        is not possible using traditional subtractive manufacturing processes or DMLS.
      </p>
      <div class="row">
        <div class="col-lg-6">
          <img style="width: 100%; margin:20px 0;" src="/storage/wp-content/uploads/2017/01/image7.jpg" />
        </div>
        <div class="col-lg-6" style="margin-top:40px;">
          <div style='color:white; font-size:16px; font-weight:500 h2'>Large Prints, High-Resolution</div>
          <p style='color:white; font-size:16px; font-weight:300'>
            The build volume of the Metal X gives automotive, industrial, aerospace and other industries a new way
            to rapidly create key components, custom pieces and spare parts. With 50 micron resolution layer height,
            your parts will come out of the printer with precision details that further resolve after the sintering
            process.
          </p>
          <ul style='color:white; font-size:16px; font-weight:300'>
            <li>
              <strong>WIDTH:</strong> 250 mm
            </li>
            <li>
              <strong>DEPTH:</strong> 220 mm
            </li>
            <li>
              <strong>HEIGHT:</strong> 200 mm
            </li>
            <li>
              Build Volume 50 micron Layer Height
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section-secondary" style="background:#1E1E1E !important">
  <div class="container-fluid">
    <div class="row">
      <div class="section-title center-block mx-auto">
        <h2 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s" style=" font-weight:400; color:white">
          POSTPROCESSING EQUIPMENT</h2>
        <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
      </div>
      <div class="section-block w-100">
        <div class="card text-center" id="metal-postprocessing" style="z-index:1">
          <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs no-gutters">
              <li class="nav-item col">
                <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1"
                  aria-selected="true"><img class="d-none d-md-block"
                    src="https://static.markforged.com/wf-assets/724-wf-l8podqz7-99.png" />
                  <div class="h5">
                    SINTER-1
                  </div><small>Medium Sized Furnace</small>
                </a>
              </li>
              <li class="nav-item col">
                <a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2"
                  aria-selected="false"><img class="d-none d-md-block"
                    src="https://static.markforged.com/wf-assets/512-wf-l8podqz7-100.png" />
                  <div class="h5">
                    SINTER-2
                  </div><small>Large Furnace</small>
                </a>
              </li>
              <li class="nav-item col">
                <a class="nav-link" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3"
                  aria-selected="false"><img class="d-none d-md-block"
                    src="https://static.markforged.com/wf-assets/512-wf-l8podqz7-101.png"
                    style="height: 200px; width: auto;" />
                  <div class="h5">
                    WASH-1
                  </div><small>Automatic Washing Station</small>
                </a>
              </li>
            </ul>
          </div>
          <div class="tab-content">
            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
              <div class="row px-3 text-left">
                <div class="col-lg-6 col-md-6  d-none d-md-block align-self-center">
                  <img src="https://static.markforged.com/wf-assets/724-wf-l8podqz7-99.png" width="100%"
                    height="auto" />
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 px-3">
                  <div class="h6">
                    FURNACE
                  </div>
                  <div class="h1">
                    SINTER-1
                  </div>
                  <p class="lead">
                    The Markforged Sinter-1 is a high performing, high value furnace - it’s affordable, sizable, and
                    reliable. Featuring 4760 cubic cm of working volume, The Sinter-1 effortlessly converts brown
                    (washed) parts into their near fully dense final metallic form. Built on 30 years of Metal
                    Injection Molding (MIM) technology, it is ideal for sintering medium sized parts and small batch
                    production.
                  </p>
                </div>
              </div>
              <div class="row px-3 text-left">
                <div class="col-lg-6 col-md-6  d-none d-md-block"></div>
                <div class="col-lg-6 col-md-6  col-sm-12 px-3">
                  <table class="table table-inverse table-striped">
                    <tr>
                      <td>
                        Furnace Dimensions
                      </td>
                      <td>
                        1067 mm x 483 mm x 406 mm
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Furnace Volume
                      </td>
                      <td>
                        4760 cubic cm
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Peak Temperature
                      </td>
                      <td>
                        1300° C
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2">
              <div class="row px-3 text-left">
                <div class="col-lg-6 col-md-6  d-none d-md-block align-self-center">
                  <img src="https://static.markforged.com/wf-assets/512-wf-l8podqz7-100.png" width="100%"
                    height="auto" />
                </div>
                <div class="col-lg-6 col-md-6  col-sm-12 px-3">
                  <div class="h6">
                    FURNACE
                  </div>
                  <div class="h1">
                    SINTER-2
                  </div>
                  <p class="lead">With a huge active hot-zone (22,283 cubic cm), the Sinter-2 fits the full build
                    volume of the Metal X. It’s the perfect solution for larger parts or batch production. This
                    workhorse furnace sinters the full range of commercial grade metals from their brown (washed)
                    state into fully dense metal parts.</p>
                </div>
              </div>
              <div class="row px-3 text-left">
                <div class="col-lg-6 col-md-6  d-none d-md-block"></div>
                <div class="col-lg-6 col-md-6  col-sm-12 px-3">
                  <table class="table table-inverse table-striped">
                    <tr>
                      <td>
                        Furnace Dimensions
                      </td>
                      <td>
                        1778 mm x 1016 mm x 1270 mm
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Furnace Volume
                      </td>
                      <td>
                        22,283 cubic cm
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Peak Temperature
                      </td>
                      <td>
                        1300° C
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3">
              <div class="row px-3 text-left">
                <div class="col-lg-3 col-md-6  d-none d-md-block align-self-center">
                  <img src="https://static.markforged.com/wf-assets/512-wf-l8podqz7-101.png" width="auto"
                    class="mx-auto" height="400px" />
                </div>
                <div class="col-lg-9 col-md-6  col-sm-12 px-3">
                  <div class="h6">
                    WASHING STATION
                  </div>
                  <div class="h1">
                    WASH-1
                  </div>
                  <p class="lead">
                    The Wash-1 immerses the green part in a specialized fluid which removes the primary binding
                    material, leaving the part semi-porous so the remaining binder can easily burn off during
                    sintering. This debinding step purifies the final metal part and helps keep your sintering
                    furnace clean.
                  </p>
                </div>
              </div>
              <div class="row text-left">
                <div class="col-lg-3 col-md-6  d-none d-md-block"></div>
                <div class="col-lg-9 col-md-6  col-sm-12 px-3">
                  <table class="table table-inverse table-striped">
                    <tr>
                      <td>
                        External Dimensions
                      </td>
                      <td>
                        609 mm x 685 mm x 1067 mm
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Washing Volume
                      </td>
                      <td>
                        18,356 cubic cm
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section-secondary" style="background:#1E1E1E !important">
  <div class="container-fluid">
    <div class="row px-3">
      <div class="section-title center-block mx-auto">
        <h2 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s" style=" font-weight:400; color:white">
          Print As-Designed Parts With Known Precision And Tolerance</h2>
        <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
      </div>
      <div class="section-block">
        <p class="text-lg-center text-large" style="font-size:16px; font-weight:300; color:white">
          Define a tolerance specification in Eiger, our cloud-based 3D printing software, and the Metal X will scan
          your part while it’s printing. If an error is detected you will be alerted and can choose to cancel the
          print remotely, saving time and material.
        </p>
        <table class="table table-striped" cellspacing="10"
          style="border-collapse: inherit; width:100%; font-size:16px; font-weight:300; margin-top:40px;">
          <tbody>
            <tr style="border: none;">
              <td style="border: none; width: 40%; color: #ffffff;">BUILD VOLUME</td>
              <td style="border: none; width: 60%; color: #ffffff;">250 mm x 220 mm x 200 mm</td>
            </tr>
            <tr style="border: none;">
              <td style="border: none; color: #ffffff;">FOOTPRINT</td>
              <td style="border: none; color: #ffffff;">575 mm x 467 mm x 1120 mm</td>
            </tr>
            <tr style="border: none;">
              <td style="border: none; color: #ffffff;">MATERIALS</td>
              <td style="border: none; color: #ffffff;">17-4 Stainless Steel<br>
                316L SS<br>
                6061 Aluminum<br>
                7075 Aluminum<br>
                A-2 Tool Steel<br>
                D-2 Tool Steel<br>
                IN Alloy (Inconel) 625<br>
                Titanium Ti-6Al-4V</td>
            </tr>
            <tr style="border: none;">
              <td style="border: none; color: #ffffff;">INSPECTION PARAMETERS</td>
              <td style="border: none; color: #ffffff;">50 micron beam diameter<br>
                1 micron Z resolution</td>
            </tr>
            <tr style="border: none; color: #ffffff;">
              <td style="border: none; color: #ffffff;">Z LAYER RESOLUTION</td>
              <td style="border: none; color: #ffffff;">50 micron</td>
            </tr>
            <tr style="border: none; color: #ffffff;">
              <td style="border: none;">SOFTWARE FEATURES</td>
              <td style="border: none;">Single Sign-On<br>
                Two-Factor Authentication<br>
                Organization Admin Portal<br>
                Early Access to New Features</td>
            </tr>
            <tr style="border: none; color: #ffffff;">
              <td style="border: none;">SOFTWARE DELIVERY</td>
              <td style="border: none;">SaaS deployment and storage<br>
                Local Storage<br>
                Fully On-premise (Contact for more info)</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
@endsection

@push('after-scripts')
<!-- Modals Whitepapers -->
<div class="modal fade" tabindex="-1" role="dialog" id="wp_modal_1">
  <div class="modal-dialog" role="document" style="max-width:700px">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">CASE STUDY: STANLEY INFRASTRUCTURE</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body" style="padding:5px; padding-right:0; overflow:hidden">

        <div pageID="ml4jcjdeeeibiahg3flkq"></div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="wp_modal_2">
  <div class="modal-dialog" role="document" style="max-width:700px">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Overcoming Manufacturing Challenges with Composite & Metal 3D
          Printing</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body" style="padding:5px; padding-right:0; overflow:hidden">
        <div pageID="xyr2ntgteeibkoahg3fscq"></div>
      </div>
    </div>
  </div>
</div>
@endpush