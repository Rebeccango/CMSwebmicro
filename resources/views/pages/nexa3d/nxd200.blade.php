@extends('layouts.layout')
@section('title')
NXD 200 | Nexa3D | Additive Manufacturing
@stop
@section('meta')
<link rel="canonical" href="{{route('nexa3d.nxd200')}}" />
@stop
@section('description')Additive manufacturing at 6X the speed and 2.5X the volume of all other comparable 3D printers on
the market. Continuously printing up to 19 liters of parts at speed up to 1Z centimeter per minute.@stop
@section('body')
<section class="parallax-window parallax-section trans-header-window d-flex parallax"
  style="min-height:450px; background-image:url(https://www.cadmicro.com/storage/pages/nexa3d/KeyModel-Ultra-2.jpg)">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          <h1>NXD 200 – a new level of productivity</h1>
          <div class="section-title-divider "></div>
        </div>
        <div class="wow fadeInLeft">
          <p class="parallax-section__description">With the highest productivity, precision, and performance, the NXD200
            is the perfect 3D printing solution for any dental
            application. Experience up to 20X productivity gains and the lowest cost of ownership in its class on the
            market.</p>
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
    <div class="row d-flex align-items-center">
      <div class="col-lg-6 col-sm-12 col-md-12 col-xs-12 pb-4 pb-lg-0">
        <div class="d-flex align-items-md-start align-items-center flex-column text-lg-left text-center">
          <h2 class=" mx-lg-0 mb-3 mx-auto display-4">Introducing the NXD 200</h2>
          <p class="lead">A new level of productivity</p>
          <button id="quote" data-toggle="modal" data-target="#quoteContactModal" data-type="quote"
            data-title="Quote Request Form" class="btn btn-lg btn-primary btn-rounded btn-dialog">Request A Quote</button>
        </div>
        {{-- <a href="https://www.cadmicro.com/resources/139/dyemansion-technology-and-portfolio"
            class="btn btn-lg btn-rounded btn-outline-primary mt-4" title="Read the brochure">Learn More <i
              class="ml-3 fas fa-caret-right"></i></a> --}}
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
        <div class="d-flex justify-content-center align-items-center flex-column ml-0 ml-md-3">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe src="https://www.youtube.com/embed/MQZfj0qpPds" class="embed-responsive-item" frameborder="0"
              allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="videoCaption w-100">Nexa3D NXD 200 - Produce thousands of dental models per day!</div>
        </div>
      </div>
    </div>
  </div>
</section>
<hr />
<section>
  <div class="container-fluid">
    <div class="pb-3">
      <h3 class=" mx-lg-0 mb-3 mx-auto display-4 font-weight-bold">Nexa3D NXD 200 High Speed Dental 3D Printing System
      </h3>
      <p class="lead">The Nexa3D NXD 200 3D printer and additive manufacturing workflow delivers the best in print size,
        print volume, speed,
        and workflow at the lowest cost of ownership, making it ideal for series production and same day on-demand
        dental parts.</p>
    </div>
    <div class="row d-flex align-items-start">
      <div class="col-lg-6 col-12 d-flex flex-column py-5">
        <a href="https://www.cadmicro.com/storage/pages/nexa3d/TrinityWheelerPhotography-6221_R2-shadow-951x1024.png"
          class="mp-popup-image mp-single">
          <img src="https://www.cadmicro.com/storage/pages/nexa3d/TrinityWheelerPhotography-6221_R2-shadow-951x1024.png"
            class="img-fluid" />
        </a>

        <figure class="figure">
          <a href="https://www.cadmicro.com/storage/pages/nexa3d/KeyTray.jpg" class="mp-popup-image mp-single">
            <img src="https://www.cadmicro.com/storage/pages/nexa3d/KeyTray.jpg" class="figure-img img-fluid rounded-lg"
              alt="A generic square placeholder image with rounded corners in a figure.">
          </a>
          <figcaption class="figure-caption">Printing with Biocompatible KeyTray Material</figcaption>
        </figure>

        {{-- <a class="btn btn-outline-primary btn-lg rounded-pill mt-5 mx-auto" href="https://www.cadmicro.com/landing/request-a-free-nexa3d-sample">Request a free sample</a> --}}
      </div>
      <div class="col-lg-6 col-12 d-flex flex-column py-5">
        <div class="mx-lg-0 mb-3 mx-auto display-4">NXD 200</div>
        <p class="lead">With an unprecedented 8.5L build volume measuring 10.8 in x 6.1 in x 7.8 in, intelligent
          optimization, and Nexa3D’s
          revolutionary patented LSPc technology, the NXD200 is the perfect printer for any dental application.</p>
        <h5 class="my-4">Specifications</h5>
        <table class="table table-striped">
          <tbody class="row-hover">
            <tr class="row-1 odd">
              <td class="column-1"><strong>Build Volume (xyz)</strong></td>
              <td class="column-2">275 x 155 x 200mm (10.8 x 6.1 x 7.8 inch)</td>
            </tr>
            <tr class="row-2 even">
              <td class="column-1"><strong>Max Resolution</strong></td>
              <td class="column-2">4k Resolution</td>
            </tr>
            <tr class="row-3 odd">
              <td class="column-1"><strong>Pixel Pitch</strong></td>
              <td class="column-2">76 μm (0.00030 in)</td>
            </tr>
            <tr class="row-4 even">
              <td class="column-1"><strong>Build Materials</strong></td>
              <td class="column-2">UV Curable Plastics: KeyModel Ultra, KeySplint Soft, KeyGuide, KeyTray</td>
            </tr>
            <tr class="row-5 odd">
              <td class="column-1"><strong>Material Packaging</strong></td>
              <td class="column-2">5kg jerry can</td>
            </tr>
            <tr class="row-6 even">
              <td class="column-1"><strong>Air Temperature</strong></td>
              <td class="column-2">20-25 °C</td>
            </tr>
            <tr class="row-7 odd">
              <td class="column-1"><strong>Humidity</strong></td>
              <td class="column-2">RH below 70%</td>
            </tr>
            <tr class="row-8 even">
              <td class="column-1"><strong>Electical</strong></td>
              <td class="column-2">100-120 VAC, 50/60 Hz, Single Phase, 8A (NEMA 15-5R)</td>
            </tr>
            <tr class="row-9 odd">
              <td class="column-1"><strong>Materialise MagicsPrint for Nexa3D Software</strong></td>
              <td class="column-2">Full-featured toolset including auto orientation and nesting, auto support
                generation, mesh repair wizard, and part editing</td>
            </tr>
            <tr class="row-10 even">
              <td class="column-1"><strong>NexaX v1 Software</strong></td>
              <td class="column-2">Easy build processing and Remote Printer Management: submission and queues, job
                statistics</td>
            </tr>
            <tr class="row-10 even">
              <td class="column-1"><strong>Supported Data Formats</strong></td>
              <td class="column-2">.stl, .3mf</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
<hr />
<section>
  <div class="container-fluid">
    <div class="pb-3">
      <h3 class="h1 mx-lg-0 mb-3 mx-auto main-title">Key Features</h3>
    </div>
    <div class="row">
      <div class="col-12 col-md-4 p-4">
        <h4 class="mb-4">Large Build Volume</h4>
        <p>The NXD 200 features more than double the build volume compared to currently available technologies, allowing
          much
          larger parts, higher throughput, and lower print cost, all with higher-resolution pixels (75 µm) and isotropic
          prints.</p>
      </div>
      <div class="col-12 col-md-4 p-4">
        <h4 class="mb-4">Lab Ready + Modular Design</h4>
        <p>The NXD 200 is crafted to be completely modular in design for easy interchangeable parts and technology
          upgrades,
          eliminating hardware obsolescence.</p>
      </div>
      <div class="col-12 col-md-4 p-4">
        <h4 class="mb-4">Smart Software + Predictive Service</h4>
        <p>Nexa3D’s internally developed intelligent software connects hardware and materials together into a powerful,
          user
          friendly system while providing a new era of predictive and prescriptive service.</p>
      </div>
    </div>
  </div>
</section>

<section class="parallax-window parallax-section trans-header-window d-flex parallax"
  style="min-height:500px; background-image:url(https://www.cadmicro.com/storage/pages/nexa3d/KeySplint-Soft2.jpg)">

</section>
@stop