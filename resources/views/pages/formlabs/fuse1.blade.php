@extends('layouts.layout')
@section('title')
Fuse 1: Benchtop Selective Laser Sintering (SLS) 3D Printer | Formlabs
@stop
@section('meta')
<link rel="canonical" href="{{route('formlabs-fuse1')}}" />
@stop
@section('description')Selective laser sintering (SLS) 3D printing with the Fuse 1, Formlabs' first SLS 3D printer. SLS
uses a laser to precisely fuse nylon powder into lightweight, robust parts.@stop
@section('body')
<section class="parallax-window parallax-section trans-header-window d-flex parallax"
  style="min-height:450px; background-image:url(https://www.cadmicro.com/storage/images/formlabs/fuse1/edit-0541A37F-119E-4EB0-B18A2F1024B65C84.jpeg)">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          <h1>Fuse 1</h1>
          <div class="section-title-divider"></div>
          <h2 class="h3">The Next Generation of Industrial 3D Printing</h2>
        </div>
        <div>
          <p class="parallax-section__description">Bring industrial-quality prototyping and production in-house with
            affordable, professional SLS 3D printing</p>
        </div>
        <div>
          @include('layouts.generic_contact_buttons')
        </div>
      </div>
    </div>
  </div>
</section>
<section class="flex-card py-5">
  <div class="container">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col col-12 col-md-6 col-sm-12 py-5 px-5">
        <h2 class="h1">MEET THE FUSE 1</h2><br>
        <p class="lead">Bring production-ready nylon 3D printing onto your benchtop with an affordable, compact
          selective laser sintering (SLS)
          platform. The Fuse 1 delivers industrial power in a small footprint with effective powder containment and easy
          setup.
          From print setup to powder recovery, our easy-to-use hardware and software are designed to maximize your
          efficiency at
          every step of the process.</p><br>
        <p class="lead">With final parts that combine strength, flexibility, and detail, Fuse 1 prints are ready for
          rigorous functional
          testing, or to ship ready-to-use products to customers.</p>
        <a href="#learnmore" class="btn btn-lg btn-rounded btn-primary mr-3 mt-4">Get a Quote</a>
      </div>
      <div class="col col-md-6 col-sm-12 px-5">
        <img src="https://www.cadmicro.com/storage/images/formlabs/fuse1/07232020_FUSE_050_2.png" class="w-100" />
      </div>
    </div>
  </div>
</section>
<section class="py-0">
  <iframe width="100%" height="900" src="https://fuse-tour.formlabs.com/index.html" frameborder="0" allowfullscreen
    webkitallowfullscreen mozallowfullscreen></iframe>
</section>
<section class="flex-card py-5">
  <div class="container">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col col-12 col-md-12 col-lg-6 col-sm-12 py-5 px-5 order-1 order-md-1">
        <h2 class="h1">WHAT’S INCLUDED IN THE FUSE 1 ECOSYSTEM?</h2><br>
        <p class="lead">Each Fuse 1 selective laser sintering (SLS) 3D printer includes the essential tools required to
          start printing and a
          one-year warranty.</p>
        <p class="">Bring production-ready nylon 3D printing onto your benchtop with an affordable, compact selective
          laser sintering (SLS)
          platform. The Fuse 1 delivers industrial power in a small footprint with effective powder containment and easy
          setup.
          From print setup to powder recovery, our easy-to-use hardware and software are designed to maximize your
          efficiency at
          every step of the process.</p>
        <p class="">With final parts that combine strength, flexibility, and detail, Fuse 1 prints are ready for
          rigorous functional
          testing, or to ship ready-to-use products to customers.</p>
        <div class="h3">Includes:</div>
        <ul class="lead">
          <li>1 Fuse 1 3D Printer</li>
          <li>1 Build Chamber</li>
          <li>1 Optical Cleaning Kit</li>
          <li>One-Year Warranty</li>
          <li>PreForm Software</li>
        </ul>
      </div>
      <div class="col col-md-12 col-sm-12 col-lg-6 px-5 order-0 order-md-0 px-0">
        <img src="https://www.cadmicro.com/storage/images/formlabs/fuse1/07232020_FUSE_071_2.jpg" class="w-100" />
      </div>
    </div>
  </div>
</section>
<section class="flex-card py-5 section-secondary">
  <div class="container">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col col-12 col-md-12 col-lg-6 col-sm-12 py-5 px-5 order-0 order-md-0">
        <h2 class="h1">NYLON 12 POWDER</h2><br>
        <p class="lead">Balancing strength and detail, Nylon 12 Powder is a highly capable material for both functional
          prototyping and end-use
          production of complex assemblies and durable parts with high environmental stability. Our Nylon 12 Powder is
          specifically developed for use on the Fuse 1.</p>
        <p class="">Bring production-ready nylon 3D printing onto your benchtop with an affordable, compact selective
          laser sintering (SLS)
          platform. The Fuse 1 delivers industrial power in a small footprint with effective powder containment and easy
          setup.
          From print setup to powder recovery, our easy-to-use hardware and software are designed to maximize your
          efficiency at
          every step of the process.</p>
        <p class="">With final parts that combine strength, flexibility, and detail, Fuse 1 prints are ready for
          rigorous functional
          testing, or to ship ready-to-use products to customers.</p>
        <div class="h3">Nylon 12 Powder is ideal for:</div>
        <ul class="lead">
          <li>High-performance prototyping</li>
          <li>Small batch manufacturing</li>
          <li>Permanent jigs, fixtures, and tooling</li>
          <li>Biocompatible, sterilizable parts*</li>
        </ul>
        <p class="small">* Material properties may vary based on part design and manufacturing practices. It is the
          manufacturer’s responsibility
          to validate the suitability of the printed parts for the intended use.</p>
      </div>
      <div
        class="col col-md-12 col-sm-12 col-lg-6 px-5 order-1 order-md-1 px-0 d-flex flex-column justify-content-center align-items-center">
        <img src="https://www.cadmicro.com/storage/images/formlabs/fuse1/08062020_Fuse%20prints_302%20copyS.jpg"
          class="w-100" />
        <a href="#learnmore" class="btn btn-lg btn-rounded btn-primary mr-3 mt-4">Request a Sample</a>
      </div>
    </div>
  </div>
</section>
<section class="flex-card py-5">
  <div class="container">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col col-12 col-md-12 col-lg-6 col-sm-12 py-5 px-5 order-0 order-md-1">
        <h2 class="h1">FUSE SIFT</h2><br>
        <p class="lead">The Fuse Sift is a safe, efficient powder recovery system for the Fuse 1 3D printer. This
          easy-to-use, all-in-one
          station combines part extraction, powder recovery, storage, and mixing in a single free-standing device, for
          the most
          functionality in a single device available on the SLS market.</p>

        <ul class="px-3 mt-4">
          <li><strong>Compact, enclosed system:</strong> A negative air pressure system keeps powder inside while enabling open access
            and easy
            cleanup.</li>
          <li><strong>Low waste:</strong> A 30% material refresh rate means you can print with up to 70% recycled powder, indefinitely.
            Fuse Sift’s
            sieve filters out particles to be remixed with new powder and reused in future prints.</li>
          <li><strong>Automatic powder mixing:</strong> Fuse Sift will dispense and mix used and new powder automatically so you can
            reduce waste and
            control your powder supply.</li>
          <li><strong>Nonstop printing:</strong> Reduce downtime by transferring modular build chambers and powder cartridges between the
            Fuse 1 and
            Fuse Sift for a nonstop, cyclical workflow.</li>
          <li><strong>A complete toolkit:</strong> The Fuse Sift includes a set of finishing tools to help you clean excess powder from
            parts with
            ease.</li>
        </ul>

      </div>
      <div
        class="col col-md-12 col-sm-12 col-lg-6 px-5 order-1 order-md-0 px-0 d-flex flex-column justify-content-center align-items-center">
        <img src="https://www.cadmicro.com/storage/images/formlabs/fuse1/07252020_Sift_058.jpg" class="w-100" />
        <a href="#learnmore" class="btn btn-lg btn-rounded btn-primary mr-3 mt-4">Request a Demo</a>
      </div>
    </div>
  </div>
</section>
<section class="section--grey" id="learnmore">
  <div class="container mt-5">
    <div class="d-flex justify-content-center align-items-center flex-column w-100">
      <div class="section-title center-block mx-auto">
        <h2>Learn More about the Formlabs 3D Printers</h2>
        <div class="section-title-divider"></div>
      </div>
      <div data-form-block-id="5659197b-c0ac-e911-a987-000d3a3702ca"></div>
      <div id="dljMh8Kqx3-6_K-b_oESUR86Mb1xvCaI7z0QrqjqdUFY"></div>
    </div>
  </div>
</section>
@stop