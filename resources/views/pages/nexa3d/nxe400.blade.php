@extends('layouts.layout')
@section('title')
NXE400 | Nexa3D | Additive Manufacturing
@stop
@section('meta')
<link rel="canonical" href="{{route('nexa3d.nxe400')}}" />
@stop
@section('description')Additive manufacturing at 6X the speed and 2.5X the volume of all other comparable 3D printers on
the market. Continuously printing up to 19 liters of parts at speed up to 1Z centimeter per minute.@stop
@section('body')
<section class="trans-header-window p-0">
  <section class="cd-hero">
    <ul class="cd-hero-slider" data-loopVideo="false" data-autoPlayDelay="0" data-height="500px">
      <li class="cd-bg-video selected">
        <div class="cd-bg-video-wrapper" data-poster="{{asset('images/pages/nexa3d/joel-filipe-377515-copy.jpg')}}"
          data-video="https://3dkv914arnt7jzinv43mpfh1-wpengine.netdna-ssl.com/wp-content/uploads/2020/04/Nexa3D-Face-Shield_1">
        </div>
      </li>
    </ul>
  </section> <!-- .cd-hero -->
  <div class="trans-heading">
    <div class="container-fluid d-flex justify-content-center align-items-center">
      <div class="white-content d-flex justify-content-center align-items-center">
        <div class="d-flex flex-wrap justify-content-center align-items-center">
          <div class="text-center">
            <h1 class="h1 display-4">NEXA3D NXE400</h1>
            <p class="h5 mb-4" style="max-width:600px">Breaking the speed and size barriers at 6x the speed and 2.5x the
              volume of all other comparable 3D printers on the
              market</p>
          </div>
          <div class="w-100">
            @include('layouts.generic_contact_buttons')
          </div>
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
          <h2 class=" mx-lg-0 mb-3 mx-auto display-4">Introducing the NXE400</h2>
          <p class="lead">The World’s Fastest Industrial 3D Printer</p>
          <p>Take 3D printing from dialup speed to broadband with the NXE400. With a 16L build volume, intelligent
            optimization, and
            Nexa3D’s own patented LSPc technology, the NXE400 3D printer is perfect for any application.</p>
        </div>
        {{-- <a href="https://www.cadmicro.com/resources/139/dyemansion-technology-and-portfolio"
            class="btn btn-lg btn-rounded btn-outline-primary mt-4" title="Read the brochure">Learn More <i
              class="ml-3 fas fa-caret-right"></i></a> --}}
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
        <div class="d-flex justify-content-center align-items-center flex-column ml-0 ml-md-3">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe src="https://www.youtube.com/embed/d7y7YzJjKHE" class="embed-responsive-item" frameborder="0"
              allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="videoCaption w-100">See Nexa3D's NXE400 ultra-fast 3D printer in action!</div>
        </div>
      </div>
    </div>
  </div>
</section>
<hr />
<section>
  <div class="container-fluid">
    <div class="pb-3">
      <h3 class=" mx-lg-0 mb-3 mx-auto display-4 font-weight-bold">See what the World’s Fastest Industrial 3D Printer
        can Do For Your Business</h3>
      <p class="lead">At 6x the speed and 2.5x the volume of all other comparable 3D printers on the market, the NXE400 is the fastest
      industrial-grade stereolithography 3D printer for engineers and manufacturers of all business sizes.</p>
    </div>
    <div class="row d-flex align-items-start">
      <div class="col-lg-6 col-12 d-flex flex-column py-5">
        <img src="{{asset('images/pages/nexa3d/A29A3019-copy-1024x1021.png')}}" class="img-fluid" />

        <a class="btn btn-outline-primary btn-lg rounded-pill mt-5 mx-auto" href="https://www.cadmicro.com/landing/request-a-free-nexa3d-sample">Request a free sample</a>
      </div>
      <div class="col-lg-6 col-12 d-flex flex-column py-5">
        <div class="mx-lg-0 mb-3 mx-auto display-4">NXE 400</div>
        <p>With an unprecedented 16L build volume measuring 10.8 in x 6.3 in x 15.7 in (27.5 cm x 16 cm x 40 cm),
          intelligent
          optimization, and Nexa3D’s revolutionary patented LSPc technology, the NXE 400 is the perfect printer for any
          application.</p>
        <table class="table table-striped">
          <tbody class="row-hover">
            <tr class="row-1 odd">
              <td class="column-1"><strong>Print Tech</strong></td>
              <td class="column-2">Continuous LSPc</td>
            </tr>
            <tr class="row-2 even">
              <td class="column-1"><strong>Light Source</strong></td>
              <td class="column-2">Structured Light Matrix</td>
            </tr>
            <tr class="row-3 odd">
              <td class="column-1"><strong>XY Scanning</strong></td>
              <td class="column-2">75 μm</td>
            </tr>
            <tr class="row-4 even">
              <td class="column-1"><strong>Build Area</strong></td>
              <td class="column-2">280x165x400 mm (11x6.5x15.74 inch)</td>
            </tr>
            <tr class="row-5 odd">
              <td class="column-1"><strong>Z Resolution</strong></td>
              <td class="column-2">50/100/200 microns</td>
            </tr>
            <tr class="row-6 even">
              <td class="column-1"><strong>Z Coordinate</strong></td>
              <td class="column-2">Z-Axis and Vat</td>
            </tr>
            <tr class="row-7 odd">
              <td class="column-1"><strong>UI</strong></td>
              <td class="column-2">Predictive and Prescriptive</td>
            </tr>
            <tr class="row-8 even">
              <td class="column-1"><strong>Interface</strong></td>
              <td class="column-2">USB Cable/USB Drive/Ethernet/WIFI</td>
            </tr>
            <tr class="row-9 odd">
              <td class="column-1"><strong>Input File Format</strong></td>
              <td class="column-2">.stl, .3ws, .3wn, .STEP</td>
            </tr>
            <tr class="row-10 even">
              <td class="column-1"><strong>Materials</strong></td>
              <td class="column-2">xABS-HT-Orange, xGPP-Translucent, xGPP-Gray, xGPP- Blue</td>
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
      <div class="col-lg-6 p-4">
        <h4>2.5x Larger Build Volume</h4>
        <p>The NXE 400 features more than double the build volume compared to currently available technologies, allowing
          for
          much larger parts, higher part throughput, and ultimately lower part cost, all with the higher-resolution
          pixels (75
          µm) and isotropic prints.</p>
      </div>
      <div class="col-lg-6 p-4">
        <h4 class="mb-4">Manufacturing Ready + Modular Design</h4>
        <p>In addition to our highly reliable LSPc technology, the NXE 400 is crafted to be completely modular in design for easily
        interchangeable parts and technology upgrades eliminating hardware obsolescence.</p>
      </div>
      <div class="col-lg-6 p-4">
        <h4 class="mb-4">Next-Gen Software + Predictive Service</h4>
        <p>Nexa3D’s internally developed intelligent software connects our hardware and materials together into a powerful, user
        friendly system while providing a new era of predictive and prescriptive service. It’s as simple as pressing CRTL+P</p>
      </div>
      <div class="col-lg-6 p-4">
        <h4 class="mb-4 d-flex justify-content-between">Intelligent Part Washer <span class="badge badge-primary btn-rounded h6">COMING SOON</span></h4>
        <p>Improve part quality and reduce labor with the Smart Part Washer to get fully functional parts in minutes with injection
        molding quality.</p>
      </div>
      <div class="col-lg-6 p-4">
        <h4 class="mb-4">Maximize Part Quality and Yield</h4>
        <p>The NXE 400 is the next scalable manufacturing solution with additional washing and curing units capable of handling
        even the largest 16L parts on a single tray making the NXE 400 the most advanced printing solution in its class. The
        washing and curing units are also capable of handling both single large prints and a combination of smaller parts with
        multiple trays to create finished parts in a matter of minutes in what would normally take hours with today’s available
        technologies reducing labor costs and post processing times.</p>
      </div>
      <div class="col-lg-6 p-4">
        <h4 class="mb-4">Smart and Connected</h4>
        <p>Our next-generation internally developed software and connected senor system provides intelligent, part-to-part curated
        washing protocols, part traceability through a digital twin, and automatic software updates to continuously improve the
        printing experience.</p>
      </div>
    </div>
  </div>
</section>
<section class="section-secondary">
  <div class="container-fluid">
      <h3 class="h1 mx-lg-0 mb-3 mx-auto main-title">Finally, Manufacturing at Scale</h3>
      <p class="lead">The Intelligent Part Washer & Curing units deliver fast, simple, and repeatable part washing & curing, finally unlocking
      the full potential of additive manufacturing at scale and environmental stewardship.</p>
  </div>
</section>
<section>
  <div class="container-fluid">
    <div class="row d-flex align-items-start">
      <div class="col-lg-6 col-12 d-flex flex-column py-5">
        <img src="{{asset('images/pages/nexa3d/Wash-and-Cure-Both-copy-600x354.png')}}" class="img-fluid p-4" />
      </div>
      <div class="col-lg-6 col-12 d-flex flex-column py-5">
        <div class="mx-lg-0 mb-3 mx-auto display-4">Washing + Curing Station <span class="badge badge-primary h6 align-middle btn-rounded">COMING SOON</span></div>
        <p class="lead">The Nexa3D post-processing units are designed to optimize the washing and curing process of the parts printed on the
        NEXA3D printers.</p>
        <p class="lead">Holding up to 16L of part volume the washing unit will automatically decide on the length of the washing process while
        the curing station will decide on the intensity and light distribution based on part geometry and part distribution on
        the build plate.</p>
          <p class="lead">With combined wash and cure time as fast as 10 minutes these are the ideal units to complete the print process.</p>
      </div>
    </div>
  </div>
</section>
@stop