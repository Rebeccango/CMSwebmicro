@extends('layouts.layout')
@section('title')
Ultimaker S5 | Powerful, reliable, versatile 3D printing
@stop
@section('meta')
<link rel="canonical" href="{{route('ultimaker-s5')}}" />
@stop
@section('description')The Ultimaker S5 combines dual extrusion, advanced connectivity, and an open filament system
with a large build volume for an office-friendly 3D printer, offering unrivaled quality and reliability at scale.@stop
@section('keywords')Ultimaker S5, Ultimaker, 3D Printers, CAD, Design, high-quality 3D printers, Software, Plastics,
PLA, ABS @stop
@push('after-styles')
<style>
  .icon-block:hover {
    z-index: 2;
  }
</style>
@endpush
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
  style="min-height:450px; background-image:url({{asset('/storage/images/ultimaker/hero/Ultimaker-S5-Pro-Bundle-Studio_41.jpg')}})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto wow fadeIn" data-wow-duration="0.8s"
          data-wow-delay="0.5s">
          <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">Ultimaker S5</h1>
          <div class="section-title-divider"></div>
          <h2 class="h3">Powerful, reliable, versatile 3D printing</h2>
        </div>
        {{-- <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
          <p class="parallax-section__description"></p>
        </div> --}}
        <div>
          @include('layouts.generic_contact_buttons')
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container-fluid">
    <div class="row justify-content-center align-items-center">
      <div class="d-flex align-items-center col-md-6 col-sm-12 mt-0 mt-sm-3 order-md-1 order-sm-2 order-xs-2">
        <img width="100%" height="auto" class="m-auto" style="margin-top:-50px; max-width:400px"
          src="{{asset('storage/images/ultimaker/ultimaker-s5/Ultimaker-S5-3D-printer.png')}}" />
      </div>
      <div class="col-md-6 col-sm-12 order-md-2 order-sm-1 order-xs-1">
        <h2 class="h1 mb-3">Ultimaker S5</h2>
        <p class="lead h4">Discover the easy-to-use desktop 3D printer with a large build volume that delivers
          accurate, industrial-grade parts, time and again. With simple setup, high uptime, and reliable dual
          extrusion, Ultimaker S5 is the complete professional 3D printing solution.</p>
        <div class="card img-shadow mt-4 rounded-0">
          <div class="card-body d-flex align-items-start justify-content-center w-100">
            <div class="embed-responsive embed-responsive-1by1 img-thumbnail  rounded-0 mr-3">
              <div class="embed-responsive-item" style="width:100%; height:100%;
                  background-image:url(https://img.youtube.com/vi/KI5pvThvu9I/mqdefault.jpg); background-position:center;
                  background-repeat:no-repeat; background-size:cover">
              </div>
            </div>
            <a href="https://www.youtube.com/watch?v=KI5pvThvu9I" class="mp-popup-video mp-single"
              style="text-decoration: none">
              <div class="card-title h5">Explore Ultimaker S5 features</div>
              <div class="card-subtitle mb-2 text-muted small">Take an in-depth look at the new and enhanced features
                which make the Ultimaker S5 the office-friendly 3D printer that delivers industrial-class results.</div>
              <div class="card-link"><i class="fas fa-arrow-circle-right mr-1"></i> WATCH VIDEO NOW</div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container-fluid">
    <div class="row justify-content-center align-items-center">
      <div class="col-md-6 col-sm-12">
        <h2 class="h1 mb-3">Improve the Capabilities of S5</h2>
        <h3 class="mb-3 lead">Upgrade to the Ultimaker S5 Pro Bundle</h3>
        <p class="">Ultimaker’s unique production solution gives busy engineers and designers the freedom to focus
          all day on doing their best work. By enhancing the award-winning Ultimaker S5 with its custom-engineered
          Material Station and Air Manager, now you can transform your office 3D printing workflow with automated
          material handling, optimized air filtration, and filament humidity control. Together, the Ultimaker S5 Pro
          Bundle boosts productivity, flexibility, and confidence to unlock demanding applications with an extended
          range of materials.</p>
        <div class="card img-shadow mt-4 rounded-0">
          <div class="card-body d-flex align-items-start justify-content-center w-100">
            <div class="embed-responsive embed-responsive-1by1 img-thumbnail mr-3 rounded-0">
              <div class="embed-responsive-item"
                style="width:100%; height:100%;
                background-image:url(https://img.youtube.com/vi/QeiJPYGxTxc/mqdefault.jpg); background-position:center; background-repeat:no-repeat; background-size:cover">
              </div>
            </div>
            <a href="https://www.youtube.com/watch?v=QeiJPYGxTxc" class="mp-popup-video mp-single"
              style="text-decoration: none">
              <div class="card-title h5">Introducing the Ultimaker S5 Pro Bundle</div>
              <div class="card-subtitle mb-2 text-muted small">Air filtration, material humidity control, automated
                spool switching – for up to 24/7 3D printing productivity. The Ultimaker S5 Pro Bundle brings industrial
                production power to your desktop.</div>
              <div class="card-link"><i class="fas fa-arrow-circle-right mr-1"></i> WATCH VIDEO NOW</div>
            </a>
          </div>
        </div>
      </div>
      <div class="d-flex align-items-center col-md-6 col-sm-12 mt-0 mt-sm-3">
        <img width="100%" height="auto" class="m-auto" style="margin-top:-50px; max-width:400px"
          src="{{asset('storage/images/ultimaker/ultimaker-s5/Ultimaker-S5-Pro-Bundle-Studio_41.jpg')}}" />
      </div>
    </div>
  </div>
</section>
<section>
  <div class="section-title center-block mx-auto text-center">
    <div class="h2" style="font-weight: 400;">Ultimaker S5 Pro Bundle</div>
    <div class="h5 text-center">Features</div>
    <div data-wow-duration="0.8s" data-wow-delay="0.5s" class="section-title-divider wow fadeIn"></div>
  </div>
  <div class="container-fluid">
    <div class="section-icon-group row mt-4">
      <div class="icon-block col-sm-12 col-md-4 px-3">
        <div class=''>
          <div class="icon-link text-center">
            <img src="{{asset('storage/images/ultimaker/ultimaker-s5/Ultimaker-S5-3D-printer-front.jpg')}}"
              class="w-100" style="max-width:400px;">
          </div>
          <div class="icon-body mt-3">
            <h4 class="h4 mb-3 text-center">Ultimaker S5</h4>
            <p>Best-in-Class desktop printer specs meet the ease-of-use that comes with a
              complete 3D printing solution trusted by hundreds of thousands of professionals worldwide.</p>
          </div>
        </div>
      </div>
      <div class="icon-block col-sm-12 col-md-4 px-3">
        <div class=''>
          <div class="icon-link text-center">
            <img src="{{asset('storage/images/ultimaker/ultimaker-s5/Ultimaker-S5-Air-Manager-Studio_13.jpg')}}"
              class="w-100" style="max-width:400px;">
          </div>
          <div class="icon-body mt-3">
            <h4 class="h4 mb-3 text-center">Air Manager</h4>
            <p>The Air Manager seamlessly integrates with the Ultimaker S5. Fully enclosing the build chamber to create
              an inside-out airflow, it filters up to 95% of all ultrafine particles (UFPs). The result? A safer work
              environment and peace of mind when printing with an extended range of materials</p>
          </div>
        </div>
      </div>
      <div class="icon-block col-sm-12 col-md-4 px-3">
        <div class=''>
          <div class="icon-link text-center">
            <img src="{{asset('storage/images/ultimaker/ultimaker-s5/Ultimaker-S5-Material-Station-Studio_62.jpg')}}"
              class="w-100" style="max-width:400px;">
          </div>
          <div class="icon-body mt-3">
            <h4 class="h4 mb-3 text-center">Material Station</h4>
            <p>Push the Ultimaker S5 to a new level of productivity and consistency with the Material Station. This
              one-of-a-kind upgrade boosts and simplifies the 3D printing workflow, while delivering a more efficient,
              utterly reliable solution for material handling and storage.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section--grey">
  <div class="container-fluid">
    <h3 class="h2 mb-3">Trusted by Professionals</h3>
    <div class="section-icon-group row mt-4">
      <div class="icon-block col p-3">
        <div class=''>
          <div class="icon-link">
            <div class="icon"
              style="background-size:contain; width:250px; height:250px; background-image:url('{{asset('storage/images/ultimaker/ultimaker-s5/logo_0000_add-lab-decathlon-grey.png')}}');">
            </div>
          </div>
          <div class="icon-body mt-3">
            <blockquote>"The larger build volume of the Ultimaker S5 now enables us to 3D print prototypes for even
              more product types"</blockquote>
          </div>
        </div>
      </div>
      <div class="icon-block col p-3">
        <div class=''>
          <div class="icon-link">
            <div class="icon"
              style="background-size:contain; width:250px; height:250px; background-image:url('{{asset('storage/images/ultimaker/ultimaker-s5/logo_0000_volkswagen-grey.png')}}');">
            </div>
          </div>
          <div class="icon-body mt-3">
            <blockquote>"The enhanced feeder on the Ultimaker S5 allows us to print reliably with an even wider range
              of industrial-grade materials"</blockquote>
          </div>
        </div>
      </div>
      <div class="icon-block col p-3">
        <div class=''>
          <div class="icon-link">
            <div class="icon"
              style="background-size:contain; width:250px; height:250px; background-image:url('{{asset('storage/images/ultimaker/ultimaker-s5/logo_0002_zeiss-grey.png')}}');">
            </div>
          </div>
          <div class="icon-body mt-3">
            <blockquote>"In Ultimaker we have found a partner in precise 3D printing, with the materials we need"
            </blockquote>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container-fluid">
    <div class="row justify-content-center align-items-center">
      <div
        class="d-flex align-items-center col-md-6 col-sm-12 mt-0 mt-sm-3 order-md-1 order-sm-2 order-xs-2 wow fadeIn">
        <img width="100%" class="m-auto" height="auto" style="max-width:400px"
          src="{{asset('storage/images/ultimaker/ultimaker-s5/pva-complex.png')}}" />
      </div>
      <div class="col-md-6 col-sm-12 order-md-2 order-sm-1 order-xs-1 wow fadeInRight">
        <h2 class="h2 mb-3">Complex prints made easy</h2>
        <p class="lead h4">Create intricate geometries and technical models by combining your build material with
          water-soluble PVA support material, then remove supports by simply resting the print in
          water.<br /><br />Ultimaker
          3D printers are the most reliable dual extrusion machines on the market.</p>
      </div>
    </div>
  </div>
</section>
<section class="section--grey">
  <div class="container-fluid">
    <h3 class="h2 mb-3">Printed on the Ultimaker S5</h3>
    <p class="small">Optimized for: Nylon, PLA, Tough PLA, ABS, CPE family, PVA, PC, TPU 95A, PP, and Breakaway</p>
    <div class="section-icon-group row mt-4">
      <div class="icon-block col-sm-12 col-md-4 p-3">
        <div class=''>
          <div class="icon-link">
            <img src="{{asset('storage/images/ultimaker/ultimaker-s5/Ultimaker-S5-print-manifold.png')}}">
          </div>
          <div class="icon-body mt-3">
            <div class="h4 mb-3 text-center">Think big, print bigger</div>
            <p>With its bigger build volume, the Ultimaker S5 is designed for a reliable 3D printing experience at
              scale. For large, technical prints, Tough PLA material offers toughness similar to ABS with the
              simplicity of PLA.</p>
          </div>
        </div>
      </div>
      <div class="icon-block col-sm-12 col-md-4 p-3">
        <div class=''>
          <div class="icon-link">
            <img src="{{asset('storage/images/ultimaker/ultimaker-s5/Ultimaker-S5-print-tool.png')}}">
          </div>
          <div class="icon-body mt-3">
            <div class="h4 mb-3 text-center">Optimized materials</div>
            <p>Ultimaker materials are extensively tested to give the best results on the Ultimaker S5. And Ultimaker
              Cura software comes with preconfigured profiles, so you don’t need to spend time on complex slicing
              settings.</p>
          </div>
        </div>
      </div>
      <div class="icon-block col-sm-12 col-md-4 p-3">
        <div class=''>
          <div class="icon-link">
            <img src="{{asset('storage/images/ultimaker/ultimaker-s5/Ultimaker-S5-print-brace.png')}}">
          </div>
          <div class="icon-body mt-3">
            <div class="h4 mb-3 text-center">Limitless possibilities</div>
            <p>3D print everything from quick prototypes to complex, technical parts with Ultimaker’s range of build
              and support materials. And with an open filament system, you can also choose a custom material solution.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="pb-0">
  <div class="container-fluid">
    <h3 class="h2 main-title wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" style="margin-top:0;">
      Ultimaker S5 Key features</h3>
    <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">Listed below, are some of the powerful features
      that SolidWorks Premium users benefit from. With the addition of standard part libraries, utilities that will
      search for design errors, fasteners and tools that will automatically estimate your manufacturing costs, the
      capabilities are endless. If you would like to know more or have any questions, please use the box below.</p>
    <div class="responsive-tabs-block row" style="margin-top:10px">
      <div class="">
        <!-- required for floating -->
        <ul class="nav nav-tabs tabs-left responsive-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#reliability" role="tab">Enhanced reliability</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#volume" role="tab">Bigger build volume</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#setup" role="tab">Fast setup, high uptime</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#control" role="tab">Easy touch control</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#connect" role="tab">Designed to connect</a>
          </li>
        </ul>
      </div>
      <div class="col-md-8">
        <div class="tab-content responsive-tabsContent">
          <div class="tab-pane active" id="reliability" role="tabpanel">
            <div class="d-flex justify-content-center align-items-center">
              <div>
                <h3>Enhanced Reliability</h3>
                <p>Active bed leveling ensures a perfect first layer, a closed front controls airflow, and a filament
                  flow sensor will pause your print and notify you if you run out of material. Trust the S5 to do its
                  job while you do yours.</p>
              </div>
              <div>
                <img class="w-100" style="max-width:400px;"
                  src="{{asset('storage/images/ultimaker/ultimaker-s5/Ultimaker-S5-3D-printer-front.jpg')}}" />
              </div>
            </div>
          </div>
          <div class="tab-pane" id="volume" role="tabpanel">
            <div class="d-flex justify-content-center align-items-center">
              <div>
                <h3>Bigger build volume</h3>
                <p>A build volume of 330 x 240 x 300 mm (13 x 9.4 x 11.8 inches) gives even more freedom to realize your
                  designs or print multiple parts in one go, so you can meet demand with maximum efficiency, while
                  fitting comfortably on your desk.</p>
              </div>
              <div>
                <img class="w-100" style="max-width:400px;"
                  src="{{asset('storage/images/ultimaker/ultimaker-s5/Ultimaker-S5-3D-printer-bed.jpg')}}" />
              </div>
            </div>
          </div>
          <div class="tab-pane" id="setup" role="tabpanel">
            <div class="d-flex justify-content-center align-items-center">
              <div>
                <h3>Fast setup, high uptime</h3>
                <p>With Ultimaker’s unique print core design, swap nozzles in seconds to switch between build and
                  support materials, or choose from 0.8, 0.4, or 0.25 mm print cores for fast or detailed prints.</p>
              </div>
              <div>
                <img class="w-100" style="max-width:400px;"
                  src="{{asset('storage/images/ultimaker/ultimaker-s5/Ultimaker-S5-3D-printer-print-head.jpg')}}" />
              </div>
            </div>
          </div>
          <div class="tab-pane" id="control" role="tabpanel">
            <div class="d-flex justify-content-center align-items-center">
              <div>
                <h3>Easy touch Control</h3>
                <p>A 4.7-inch (11.9 cm) touch display makes operating the 3D printer effortless, displaying visual
                  guides to explain configuration changes and maintenance, plus a visual preview of your print.</p>
              </div>
              <div>
                <img class="w-100" style="max-width:400px;"
                  src="{{asset('storage/images/ultimaker/ultimaker-s5/Ultimaker-S5-3D-printer-touchscreen.jpg')}}" />
              </div>
            </div>
          </div>
          <div class="tab-pane" id="connect" role="tabpanel">
            <div class="d-flex justify-content-center align-items-center">
              <div>
                <h3>Designed to connect</h3>
                <p>The Ultimaker S5 auto-detects material and print core configuration, while over-the-air firmware
                  upgrades make adding the latest features simple. Print over Wi-Fi, Ethernet, or from a USB stick, and
                  monitor progress via the built-in camera.</p>
              </div>
              <div>
                <img class="w-100" style="max-width:400px;"
                  src="{{asset('storage/images/ultimaker/ultimaker-s5/Ultimaker-S5-3D-printer-back.jpg')}}" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    @component('components.ResourceTabs.tabs')
    @slot('datasheet')
    @component('components.ResourceTabs.resources', ['resources' => [56,54,51,50,49,48,184]]) @endcomponent
    @endslot
    @slot('cases')
    @component('components.ResourceTabs.resources', ['resources' => [89,88,87,55]]) @endcomponent
    <div class="p-3">
      <a href="{{asset('storage/pdfs/ultimaker/Volkswagen.pdf')}}" class="pdf-item">
        <figure>
          <div class="figimg">
            <img src="{{asset('storage/pdfs/ultimaker/Volkswagen.png')}}" style="width:100%;"
              alt="Ultimaker Volkswagen Case study">
          </div>
          <figcaption>Case Study: Volkswagen</figcaption>
        </figure>
      </a>
    </div>
    <div class="p-3">
      <a href="{{asset('storage/pdfs/ultimaker/ABB Robotics.pdf')}}" class="pdf-item">
        <figure>
          <div class="figimg">
            <img src="{{asset('storage/pdfs/ultimaker/ABB Robotics.png')}}" style="width:100%;"
              alt="Ultimaker ABB Robotics Case Study">
          </div>
          <figcaption>Case Study: ABB Robotics</figcaption>
        </figure>
      </a>
    </div>
    <div class="p-3">
      <a href="{{asset('storage/pdfs/ultimaker/JeffDESIGN.pdf')}}" class="pdf-item">
        <figure>
          <div class="figimg">
            <img src="{{asset('storage/pdfs/ultimaker/JeffDESIGN.png')}}" style="width:100%;"
              alt="Ultimaker Jeff Design Case Study">
          </div>
          <figcaption>Case Study: Jeff Design</figcaption>
        </figure>
      </a>
    </div>
    @endslot
    @slot('customTabs')
    <li class="nav-item">
      <a class="nav-link active in" data-toggle="tab" href="#product-family" role="tab">Product Family</a>
    </li>
    @endslot
    @slot('customPanes')
    <div class="tab-pane fade show active in" id="product-family" role="tabpanel">
      @include('pages.matrix.ultimaker-matrix')
    </div>
    @endslot
    @endcomponent
  </div>
</section>
{{-- <section>
  <div class="container-fluid">
    <div class="custom-nav-pills">
      <ul class="nav nav-pills" role="tablist">
        <li class="nav-item">
          <a class="nav-link active in" data-toggle="tab" href="#product-family" role="tab">Product Family</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#data-sheet" role="tab">Data Sheets</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#case-studies" role="tab">Case Studies</a>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade show active in" id="product-family" role="tabpanel">
          @include('pages.matrix.ultimaker-matrix')
        </div>
        <div class="tab-pane fade" id="data-sheet" role="tabpanel">
          <div class="row" style="margin:0; padding:0">
            <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a href="{{asset('storage/pdfs/ultimaker/Ultimaker_S5 Product Data Sheet_2pg-web.pdf')}}"
                class="pdf-item">
                <figure>
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/ultimaker/Ultimaker_S5 Product Data Sheet_2pg-web.png')}}"
                      style="width:100%;" alt="Ultimaker S5 Datasheet">
                  </div>
                  <figcaption>Ultimaker S5 Datasheet</figcaption>
                </figure>
              </a>
            </div>
            <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a href="{{asset('storage/pdfs/ultimaker/Ultimaker-Material_Datasheet_04242018_WEB.pdf')}}"
                class="pdf-item">
                <figure>
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/ultimaker/Ultimaker-Material_Datasheet_04242018_WEB.png')}}"
                      style="width:100%;" alt="Ultimaker Material Datasheet">
                  </div>
                  <figcaption>Ultimaker Material Datasheet</figcaption>
                </figure>
              </a>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="case-studies" role="tabpanel">
          <div class="row" style="margin:0; padding:0">
            <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a href="{{asset('storage/pdfs/ultimaker/Volkswagen.pdf')}}" class="pdf-item">
                <figure>
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/ultimaker/Volkswagen.png')}}" style="width:100%;"
                      alt="Ultimaker Volkswagen Case study">
                  </div>
                  <figcaption>Case Study: Volkswagen</figcaption>
                </figure>
              </a>
            </div>
            <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a href="{{asset('storage/pdfs/ultimaker/ABB Robotics.pdf')}}" class="pdf-item">
                <figure>
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/ultimaker/ABB Robotics.png')}}" style="width:100%;"
                      alt="Ultimaker ABB Robotics Case Study">
                  </div>
                  <figcaption>Case Study: ABB Robotics</figcaption>
                </figure>
              </a>
            </div>
            <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a href="{{asset('storage/pdfs/ultimaker/JeffDESIGN.pdf')}}" class="pdf-item">
                <figure>
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/ultimaker/JeffDESIGN.png')}}" style="width:100%;"
                      alt="Ultimaker Jeff Design Case Study">
                  </div>
                  <figcaption>Case Study: Jeff Design</figcaption>
                </figure>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> --}}
@endsection