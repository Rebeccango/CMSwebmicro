@extends('layouts.layout')
@section('title')
SolidWorks Composer
@stop
@section('meta')
<link rel="canonical" href="{{route('solidworks-technical-composer')}}" />
@stop
@section('description')Easily repurpose existing 3D models to rapidly create and update high-quality graphical assets
that are fully associated
with your 3D design.@stop
{{-- @section('keywords')SolidWorks, Technical, Technical Composer, Composer @stop --}}
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
  style="min-height:450px; background-image:url({{ asset("storage/images/SolidWorks/composer/sw-composer-hero.jpg") }})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          <h1 class="">SolidWorks Composer</h1>
          <div class="section-title-divider "></div>
        </div>
        <div class="">
          <p class="parallax-section__description">Easily repurpose existing 3D models to rapidly create and update
            high-quality graphical assets that are fully associated
            with your 3D design.</p>
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
        <h2 class="mb-3">SolidWorks Composer</h2>
        <p class="lead">SOLIDWORKS Composer software enables you to easily create 2D and 3D graphical content in a quick
          and timely
          manner.
          SOLIDWORKS Composer lets you work directly from 3D CAD data to create high-quality models, photorealistic
          images, and
          interactive animations. Shorten your production times, minimize overhead, and surpass the competition with
          SOLIDWORKS
          Composer.</p>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe src="https://www.youtube.com/embed/Q4NBej3Yv_M" class="embed-responsive-item" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="videoCaption w-100">Fundamentals of SW Composer - SOLIDWORKS</div>
      </div>
    </div>
  </div>
</section>

<section class="section-secondary py-5">
  <div class="container py-5">
    <div class="section-title center-block mx-auto mb-0 text-center mb-5">
      <h3>Which SOLIDWORKS Composer package is right for you?</h3>
      <div class="section-title-divider"></div>
    </div>
    <div class="row justify-content-center">
      <div class="col col-12 col-md-5 col-lg-4 d-flex flex-fill py-4 px-4">
        <div class="card w-full p-3 d-flex flex-fill shadow-lg">
          <div class="card-body d-flex flex-column">
            <h3 class="card-title">SOLIDWORKS Composer</h3>
            <p class="card-text flex-fill">SOLIDWORKS® Composer allows you to quickly create 2D and 3D graphical content
              to clearly explain and present your
              product or process. The tools let you work directly from 3D CAD data to create high-quality illustrations,
              photorealistic images, and interactive animations, and to import design data.
            </p>
            <button class="btn btn-primary rounded-pill btn-dialog" id="contact" data-toggle="modal"
              data-target="#contactModal" data-type="contact">Learn more</button>
          </div>
        </div>
      </div>
      <div class="col col-12 col-md-5 col-lg-4 d-flex flex-fill py-4 px-4">
        <div class="card w-full p-3 d-flex flex-fill shadow-lg">
          <div class="card-body d-flex flex-column">
            <h3 class="card-title">SOLIDWORKS Composer Player Professional</h3>
            <p class="card-text flex-fill">
              Interact with 3D content using SOLIDWORKS Composer Player Professional. It includes all the features of
              the SOLIDWORKS
              Composer Player, but also enables you to interrogate a model, adjust the viewing angle, and
              rotate/pan/zoom in real
              time. You can also use custom APIs to customize the Player.
            </p>
            <button class="btn btn-primary rounded-pill btn-dialog" id="contact" data-toggle="modal"
              data-target="#contactModal" data-type="contact">Learn more</button>
          </div>
        </div>
      </div>
      <div class="col col-12 col-md-5 col-lg-4 d-flex flex-fill py-4 px-4">
        <div class="card w-full p-3 d-flex flex-fill shadow-lg">
          <div class="card-body d-flex flex-column">
            <h3 class="card-title">
              SOLIDWORKS Composer Sync
            </h3>
            <p class="card-text flex-fill">
              SOLIDWORKS Composer Sync creates a batch conversion process from 3D CAD and other 3D formats into
              SOLIDWORKS Composer
              format. Changes in product data or manufacturing information can be automatically updated to SOLIDWORKS
              Composer
              deliverables. You can save batch job settings to XML for future use.
            </p>
            <button class="btn btn-primary rounded-pill btn-dialog" id="contact" data-toggle="modal"
              data-target="#contactModal" data-type="contact">Learn more</button>
          </div>
        </div>
      </div>
      <div class="col col-12 col-md-5 col-lg-4 d-flex flex-fill py-4 px-4">
        <div class="card w-full p-3 d-flex flex-fill shadow-lg">
          <div class="card-body d-flex flex-column">
            <h3 class="card-title">
              SOLIDWORKS Composer Enterprise Sync
            </h3>
            <p class="card-text flex-fill">
              SOLIDWORKS Composer Enterprise Sync is the enterprise version of SOLIDWORKS Composer Sync with additional
              features to
              update information for maintaining accurate product technical communication. Changes in product or
              manufacturing
              information can also be updated for SOLIDWORKS Composer deliverables.
            </p>
            <button class="btn btn-primary rounded-pill btn-dialog" id="contact" data-toggle="modal"
              data-target="#contactModal" data-type="contact">Learn more</button>
          </div>
        </div>
      </div>
      <div class="col col-12 col-md-5 col-lg-4 d-flex flex-fill py-4 px-4">
        <div class="card w-full p-3 d-flex flex-fill shadow-lg">
          <div class="card-body d-flex flex-column">
            <h3 class="card-title">
              SOLIDWORKS Composer Check
            </h3>
            <p class="card-text flex-fill">
              With SOLIDWORKS Composer Check, you can identify costly design errors by examining clearances and planning
              production
              paths before the products hit the shop floor, giving you instant validation for assembly procedures after
              a design
              change.
            </p>
            <button class="btn btn-primary rounded-pill btn-dialog" id="contact" data-toggle="modal"
              data-target="#contactModal" data-type="contact">Learn more</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container-fluid">
    <div class="custom-nav-pills shadow-sm">
      <ul class="nav nav-pills" role="tablist">
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#matrix" role="tab">Matrix</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active in" data-toggle="tab" href="#datasheet" role="tab">Data Sheet</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#videos" role="tab">Videos</a>
        </li>

      </ul>
      <div class="tab-content">
        <div class="tab-pane fade" id="matrix" role="tabpanel">
          @include('pages.matrix.solidworks-composer')
        </div>
        <div class="tab-pane fade show active in" id="datasheet" role="tabpanel">
          <div class="row" style="margin:0; padding:0">
            <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a href="{{asset('storage/pdfs/solidworks/2018/composer_2018.pdf')}}" class="pdf-item">
                <figure>
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/solidworks/2018/composer_2018.png')}}" style="width:100%;"
                      alt="SOLIDWORKS Composer">
                  </div>
                  <figcaption>SolidWorks Composer</figcaption>
                </figure>
              </a>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="videos" role="tabpanel">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-3">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://www.youtube.com/embed/uOb0ZiZaDeA" class="embed-responsive-item" frameborder="0"
                  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen></iframe>
              </div>
              <div class="videoCaption w-100">SOLIDWORKS Composer Quick Start Guide #1: Importing & Navigating CAD
                Assemblies</div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-3">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://www.youtube.com/embed/vKimSxR78Hw" class="embed-responsive-item" frameborder="0"
                  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen></iframe>
              </div>
              <div class="videoCaption w-100">What's New in SOLIDWORKS 2021 - Composer</div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-3">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://www.youtube.com/embed/XyGXHzs1Ivw" class="embed-responsive-item" frameborder="0"
                  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen></iframe>
              </div>
              <div class="videoCaption w-100">SOLIDWORKS Composer Quick Start Guide</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section-secondary py-5">
  <div class="container py-5">
    <div class="section-title center-block mx-auto mb-0 text-center mb-5">
      <h3>SOLIDWORKS Composer Demos</h3>
      <div class="section-title-divider"></div>
    </div>
    <div class="row justify-content-center">
      <div class="col col-12 col-md-5 col-lg-4 d-flex flex-fill py-4 px-4">
        <div class="card w-full p-3 d-flex flex-fill shadow-lg">
          <img class="card-img-top"
            src="https://www.cadmicro.com/storage/demo/composer/Full-Grill-Assembly-View/Full_Grill_Assembly_files/a0fe3ad3b0959601_image_0.jpg"
            alt="Full Grill Assembly Demo">
          <div class="card-body d-flex flex-column">
            <h3 class="card-title">Full Grill Assembly Demo</h3>
            {{-- <p class="card-text flex-fill">SOLIDWORKS® Composer allows you to quickly create 2D and 3D graphical content
              to clearly explain and present your
              product or process. The tools let you work directly from 3D CAD data to create high-quality illustrations,
              photorealistic images, and interactive animations, and to import design data.
            </p> --}}
            <a data-toggle="modal" data-target="#composer-demo-1" class="btn btn-primary rounded-pill btn-dialog text-white">View
              Demo</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="d-flex align-items-md-start align-items-start flex-column text-lg-left">
      <h3 class="h1 mx-lg-0 mb-3 main-title mt-0">SOLIDWORKS COMPOSER CAPABILITIES</h3>
      <p class="lead">Listed below, are some of the powerful
        features that SolidWorks Composer users benefit from. If you would like to know more or have any questions,
        please contact us.</p>
      <div id="workflow" class="accordion w-100 accordion--arrows accordion--only-one my-4">
        <div class="card">
          <div class="card-header">
            <h5 class="mb-0">
              <button class="btn btn-link" data-toggle="collapse" data-target="#tab_1" aria-expanded="true"
                aria-controls="tab_1">
                Technical Illustration
              </button>
            </h5>
          </div>
          <div id="tab_1" class="collapse show" data-parent="#workflow">
            <div class="card-body row justify-content-center">
              <div class="col-sm-12 col-md-6">
                <p>
                  SOLIDWORKS® Composer™ Technical Communication software simplifies the experience for your users by
                  giving you the tools
                  for faster, easier creation of graphical content that clearly and accurately presents your product—how
                  it works, how to
                  assemble it, how to use it, and how to service it.
                </p>
                <p>
                  Simplify creation of 2D graphical content directly from your CAD data for producing high quality
                  technical illustrations
                  that automatically update with design changes.
                </p>

              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#tab_2" aria-expanded="false"
                aria-controls="tab_2">
                2D and 3D Content Publishing
              </button>
            </h5>
          </div>
          <div id="tab_2" class="collapse" data-parent="#workflow">
            <div class="card-body row justify-content-center">
              <div class="col-sm-12 col-md-6">
                <p>
                  You work from your 3D CAD data, automatically keeping content up-to-date with the latest design
                  changes—and without
                  waiting for a physical prototype. The intuitive SOLIDWORKS Composer software enables even
                  non-technical users to develop
                  stunning 2D and 3D content quickly and more cost effectively.
                </p>
                <ul class="product-list">
                  <li>Deliver best-in-class printed documentation using high-resolution shaded renderings with a
                    three-dimensional appearance</li>
                  <li>Create interactive 3D animation so consumers can understand your product from the first look,
                    rotate
                    it, or move around it for a lifelike view</li>
                  <li>Show anyone how your product works, what it can do, or how to do it using universal interactive
                    animations to remove the barriers of technical drawings</li>
                  <li>Help your customers and partners understand and retain information more effectively with high
                    quality, interactive 3D communication</li>
                  <li>Quickly publish HTML pages, PDFs, Videos (including fly-through and walk-through), interactive
                    storyboards, and interactive web pages</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#tab_3" aria-expanded="false"
                aria-controls="tab_3">
                Concurrent Product Communication Development
              </button>
            </h5>
          </div>
          <div id="tab_3" class="collapse" data-parent="#workflow">
            <div class="card-body row justify-content-center">
              <div class="col-sm-12 col-md-6">
                <p>
                  SOLIDWORKS® Composer™ Technical Communication software frees technical and marketing organizations
                  from
                  inefficient work flows by enabling them to: start creating product communications sooner, update them
                  as
                  the design evolves, and have them finished simultaneously with the product ship date. All too often,
                  product documentation starts at the end of the development process, because technical publishers need
                  to
                  wait for a final CAD screen shot for the actual product for digital photography.
                </p>
                <ul class="product-list">
                  <li>Create 2D and 3D graphical content during design using 3D CAD data </li>
                  <li>Update graphical content automatically as the design changes so documentation is accurate and
                    ready
                    on time </li>
                  <li>Maximize your 3D CAD investment by accessing your 3D model to create product communication from
                    multiple departments in your company </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-secondary">
  <div class="container d-flex justify-content-center align-items-center flex-column py-5">
    <div class="section-title mb-2">
      <h4 class="h1">Learn More About SolidWorks Composer</h4>
      <div class="section-title-divider"></div>
    </div>
    <button id="contact" data-toggle="modal" data-target="#contactModal" data-type="contact"
      data-title="Contact Request Form" class="btn btn-lg btn-white btn-rounded btn-dialog mx-2">Contact
      Us</button>
  </div>
</section>
@stop

@push('after-scripts')
<!-- Modals Whitepapers -->
<div class="modal fade align-items-center justify-content-center" tabindex="-1" role="dialog" id="composer-demo-1"
  style="z-index: 9999999999999">
  <div class="modal-dialog shadow-lg" role="document" style="max-width:1000px">
    <div class="modal-content">
      <div class="modal-header d-flex flex-wrap">
        <div class="modal-title h3 w-100">Demo: Full Grill Assembly View</div><br />
        <a target="_blank" class="d-flex align-items-center"
          href="https://www.cadmicro.com/storage/demo/composer/Full-Grill-Assembly-View/Full_Grill_Assembly_View%201.svg"
          alt="Fullscreen"><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#000"
            width="32" height="32">
            <path d="M7 14H5v5h5v-2H7v-3zm-2-4h2V7h3V5H5v5zm12 7h-3v2h5v-5h-2v3zM14 5v2h3v3h2V5h-5z" />
          </svg>Fullscreen</a>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
          style="position: absolute; top: 15px; right: 15px;"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body p-0">
        <iframe
          src="https://www.cadmicro.com/storage/demo/composer/Full-Grill-Assembly-View/Full_Grill_Assembly_View%201.svg"
          class="w-100" style="min-height: 800px" />
      </div>
    </div>
  </div>
</div>

@endpush