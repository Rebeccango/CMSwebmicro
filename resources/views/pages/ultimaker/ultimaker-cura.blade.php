@extends('layouts.layout')
@section('title')
Ultimaker Cura: Advanced 3D printing software, made accessible
@stop
@section('meta')
<link rel="canonical" href="{{route('ultimaker-cura')}}" />
@stop
@section('description')Ultimaker Cura is free, easy-to-use 3D printing software trusted by over 2 million users
worldwide. Fine-tune your 3D model with over 300 powerful settings for the best printing results.@stop
@section('keywords')Ultimaker Cura, 3D printing software, Ultimaker Cura software, 3D slicing software, 3D printing
workflow @stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
  style="min-height:450px; background-image:url({{asset('/storage/images/ultimaker/hero/hero-10.jpg')}})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto wow fadeIn" data-wow-duration="0.8s"
          data-wow-delay="0.5s">
          <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">Ultimaker Cura software & App</h1>
          <div class="section-title-divider"></div>
          <h2 class="h3">Advanced 3D printing software, made accessible</h2>
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
      <div
        class="d-flex align-items-center col-md-6 col-sm-12 mt-0 mt-sm-3 order-md-2 order-sm-1 order-xs-1  wow fadeIn">
        <img width="100%" height="auto" class="m-auto"
          src="{{asset('storage/images/ultimaker/ultimaker-cura/Ultimaker-Cura-software.png')}}" />
      </div>
      <div class="col-md-6 col-sm-12 order-md-1 order-sm-2 order-xs-2 wow fadeInRight">
        <h2 class="h1 mb-3">Ultimaker Cura software</h2>
        <p>Ultimaker Cura prepares your model for 3D printing. Optimized, expert-tested profiles for 3D printers and
          materials mean you can start printing reliably in no time. And with industry-standard software integration,
          you can streamline your workflow for maximum efficiency.</p>
        <a class="btn btn-md btn-primary mt-4" target="_blank"
          href="https://ultimaker.com/en/products/ultimaker-cura-software">DOWNLOAD THE CURA SOFTWARE</a>
      </div>
    </div>
  </div>
</section>
<section class="section--grey">
  <div class="container-fluid">
    <div class="row justify-content-center align-items-center">
      <div class="col-md-6 col-sm-12 order-md-1 order-sm-2 order-xs-2 wow fadeIn">
        <h3 class="h2 my-3">Seamless SolidWorks CAD integration</h3>
        <p class="lead h4 mb-4">Add the SolidWorks plugin to export models to Ultimaker Cura with one click.</p>
        <p>The plugin has the ability to read SolidWorks-specific formats, such as .sldprt and .asm. By using this
          plugin, time consuming steps such as exporting, file conversion, and re-importing between different software
          packages can be sidestepped.</p>
      </div>
      <div
        class="d-flex align-items-center col-md-6 col-sm-12 mt-0 mt-sm-3 order-md-2 order-sm-1 order-xs-1 wow fadeIn">
        <a href="{{asset('storage/images/ultimaker/ultimaker-cura/PreferencesListOfPlugins.png')}}"
          class="mp-popup-image mp-single"><img width="100%" height="auto" class="m-auto img-shadow"
            src="{{asset('storage/images/ultimaker/ultimaker-cura/PreferencesListOfPlugins.png')}}" /></a>
      </div>
    </div>
  </div>
</section>
<section class="py-5 my-5" style="overflow:visible">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-sm-12">
        <small class="h4">Ultimaker Cura Software</small>
        <h2 class="h2">The world’s most advanced 3D printer software</h2>
        <p>Ultimaker Cura creates a seamless integration between your 3D printer, software and materials to achieve
          perfect prints every time.</p>
        <div class="py-3">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Cross-platform, open source software, available completely free of charge</li>
            <li class="list-group-item">Print right away using recommended mode, or use custom mode to configure over
              300 settings, for maximum control</li>
            <li class="list-group-item">Expert-configured and road-tested profiles make hardware and material
              configuration simple and fast, and achieves reliable, professional results</li>
            <li class="list-group-item">Out-of-the-box support for STL, OBJ, X3D, and 3MF file formats</li>
            <li class="list-group-item">Expand the core functionality of the software with plugins</li>
            <li class="list-group-item">Combine with Cura Connect to manage one or more network-enabled Ultimaker
              printers from a single interface</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6 d-none d-md-none d-lg-block">
        <a href="https://www.youtube.com/watch?v=RX2_e7RqUH0" class="mp-popup-video mp-single video-play d-block"><img
            class="w-100" src="{{asset('storage/images/ultimaker/ultimaker-cura/Cura-Slicing-Software.jpg')}}"></a>
        <div class="videoCaption">Video: This video walks you through the basics of preparing your model with Ultimaker
          Cura.</div>
      </div>
    </div>
  </div>
</section>
<section class="section--grey">
  <div class="container-fluid">
    <h3 class="h2 mb-3 text-center">3 steps to printing a 3D model</h3>
    <p class="text-muted mb-3 text-center">Every model you design for print must be translated by Ultimaker Cura into
      instructions your 3D printer will understand. It does this by slicing your model into thin layers and saving the
      file ready for printing. Here’s the process in a bit more detail.</p>
    <div class="section-icon-group row mt-4">
      <div class="icon-block col-sm-12 col-md-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class='icon-content'>
          <div class="icon-link">
            <img class="w-100" src="{{asset('storage/images/ultimaker/ultimaker-cura/Step_1.png')}}">
          </div>
          <div class="icon-body mt-3">
            <div class="h4">Design</div>
            <p class="text-left">The first thing you’ll need is a 3D model. Ultimaker Cura works with STL, OBJ, X3D or
              3MF file formats out-of-the-box.</p>
          </div>
        </div>
      </div>
      <div class="icon-block col-sm-12 col-md-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
        <div class='icon-content'>
          <div class="icon-link">
            <img class="w-100" src="{{asset('storage/images/ultimaker/ultimaker-cura/Step_2.png')}}">
          </div>
          <div class="icon-body mt-3">
            <div class="h4">Prepare</div>
            <p class="text-left">Within moments, Ultimaker Cura slices your model ready for print. You can preview it,
              scale it and adjust settings as you’d like.</p>
          </div>
        </div>
      </div>
      <div class="icon-block col-sm-12 col-md-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
        <div class='icon-content'>
          <div class="icon-link">
            <img class="w-100" src="{{asset('storage/images/ultimaker/ultimaker-cura/Step_3.png')}}">
          </div>
          <div class="icon-body mt-3">
            <div class="h4">Print</div>
            <p class="text-left">Send print jobs remotely using a network-enabled Ultimaker 3D printer, or save files to
              a USB stick or SD card.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section >
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
        <small class="h1">Cura Connect</small>
        <h3>A more efficient way to 3D print</h3>
        <p>Cura Connect lets you manage your entire 3D printing workflow with ease. Start print jobs on multiple
          network-enabled Ultimaker 3D printers, monitor progress, and keep track of maintenance operations, all from a
          single interface.</p>
        <div class="py-3">
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>Maximize uptime.</strong> Print jobs start automatically, monitor print
              progress, and your 3D printer’s maintenance schedule</li>
            <li class="list-group-item"><strong>Streamline your workflow.</strong> Create groups of 3D printers, queue
              print jobs, and pick them up when they’re ready</li>
            <li class="list-group-item"><strong>Scale up your operations.</strong> Cura Connect works for one or several
              3D printers, so it’s flexible to your changing needs</li>
            <li class="list-group-item"><strong>Set up with ease.</strong> No server or user licenses needed – get
              started with a network-enabled Ultimaker printer and free Ultimaker Cura software</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-3 p-0 mx-auto">
        <a href="https://www.youtube.com/watch?v=7ti07eQ2tz0"
          class="mp-popup-video mp-single video-play d-block mx-auto"><img class="w-100 img-shadow"
            src="{{asset('storage/images/ultimaker/ultimaker-cura/Cura-Connect-3D-printer-management.jpg')}}"></a>
      </div>
    </div>
  </div>
</section>
<section class="py-5 section--grey" style="overflow:visible">
  <div class="container-fluid">
    <h2 class="h2 mb-4">Get the Ultimaker app</h2>
    <div class="row p-4 img-shadow d-flex" style="background:white">
      <div class="col-lg-6 col-sm-12">
        <h3>Stay connected, stay productive</h3>
        <p>Control and monitor your network-enabled Ultimaker 3D printers with the Ultimaker app, plus receive live
          notifications on your print’s progress wherever you are.</p>
        <div class="pb-3">
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><i class="fas fa-check mr-3"></i>Connect to and control printers on your Wi-Fi
              network</li>
            <li class="list-group-item"><i class="fas fa-check mr-3"></i>Manage the print queue as you do in Cura
              Connect</li>
            <li class="list-group-item"><i class="fas fa-check mr-3"></i>Leave the printer to do its job – check in on
              your print with the app</li>
            <li class="list-group-item"><i class="fas fa-check mr-3"></i>Live notifications on print progress, even
              outside your local network</li>
            <li class="list-group-item"><i class="fas fa-check mr-3"></i>Available for iOS and Android smartphones and
              tablets</li>
          </ul>
        </div>
        <p>Download the app for free on the App Store or Google play.</p>
        <a href="https://itunes.apple.com/us/app/ultimaker-app/id1370886813?l=nl&ls=1&mt=8" target="_blank"
          class="d-inline-block"><img src="{{asset('storage/images/download-apple.png')}}" width="150px"></a>
        <a href="https://play.google.com/store/apps/details?id=com.ultimaker.curaconnect" target="_blank"
          class="d-inline-block"><img src="{{asset('storage/images/download-google.png')}}" width="150px"></a>
      </div>
      <div class="col-lg-6 d-none d-md-none d-lg-block">
        <img class="w-100 wow fadeInRight"
          src="{{asset('storage/images/ultimaker/ultimaker-cura/Ultimaker-3D-printing-app.png')}}">
      </div>
    </div>
  </div>
</section>

<section>
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
          <a class="nav-link" data-toggle="tab" href="#manuals" role="tab">Manuals</a>
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
        <div class="tab-pane fade" id="manuals" role="tabpanel">
          <div class="row" style="margin:0; padding:0">
            <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a href="{{asset('storage/pdfs/ultimaker/180104-Ultimaker-CuraConnect-Manuals-EN-v1.1.pdf')}}"
                class="pdf-item">
                <figure>
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/ultimaker/180104-Ultimaker-CuraConnect-Manuals-EN-v1.1.png')}}"
                      style="width:100%;" alt="Ultimaker Cura Connect Manual">
                  </div>
                  <figcaption>Ultimaker Cura Connect Manual</figcaption>
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
</section>
@endsection