@extends('layouts.layout')
@section('title')
SOLIDWORKS Electrical Solutions
@stop
@section('meta')
<link rel="canonical" href="{{route('solidworks-Electrical-electrical')}}" />
@stop
@section('description')SOLIDWORKS Electrical 3D Solutions enables you to easily integrate your electrical schematic
design from SOLIDWORKS Electrical to your 3D model of the machine or other product.@stop
@section('keywords')3D, Design Software, CAD, 3D CAD, SOLIDWORKS, 3D Software, Product Design, Engineering Software, 3D
Design, Electrical, PCB, Schematic @stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
  style="min-height:450px; background-image:url({{ asset("storage/images/SolidWorks/electrical/solidworks-electrical-hero.jpg") }})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          <h1>SolidWorks Electrical Solutions</h1>
          <div class="section-title-divider"></div>
        </div>
        <p class="lead">SolidWorks Electrical Solutions simplify electrical product design with specific tools for
          engineers and intuitive
          interfaces for faster embedded electrical system design</p>
        <div>
          @include('layouts.generic_contact_buttons')
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div>
    <div class="container-fluid">
      <div class="section-block row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <h2>SolidWorks Electrical Solutions</h2>
          <br />
          <p>
            SolidWorks Electrical solutions are integral parts of the SolidWorks design and simulation portfolio that
            help Design Engineers reduce the risk inherent in innovation and get their products to market faster with
            less physical prototyping to decrease costs.<br />
            With a consistent, powerful, intuitive set of electrical design capabilities, all fully integrated with the
            SolidWorks solution portfolio, designers can establish an integrated design early in the design process and
            avoid costly design rework.
          </p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe src="https://www.youtube.com/embed/5SXQMwOCCUk" class="embed-responsive-item" frameborder="0"
              allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="videoCaption w-100">What's New in SOLIDWORKS 2021 - Electrical</div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-secondary">
  <div class="container">
    <div class="d-flex row align-items-stretch justify-content-center">
      <div class="col-12 col-sm-6 col-md-4 col-lg-4 px-2 my-4 d-flex">
        <div class="card bg-transparent border-0">
          <img class="card-img-top" width="78" height="78"
            src="https://www.cadmicro.com/storage/icons/SW_ICON_SW_PCB_128x128.svg" alt="SOLIDWORKS PCB"
            typeof="foaf:Image">
          <div class="card-body d-flex flex-column align-items-stretch">
            <h2 class="card-title">SOLIDWORKS PCB</h2>
            <p class="card-text" style="flex:1">SOLIDWORKS® PCB — powered by Altium®— is a mechatronics/electronics
              design solution that provides the best in PCB design
              technology with an integrated electro-mechanical collaboration solution.</p>
            <a href="{{route('solidworks-Electrical-pcb')}}" target="_blank"
              class="btn btn-primary rounded-pill mx-auto">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-4 px-2 my-4 d-flex">
        <div class="card bg-transparent border-0">
          <img class="card-img-top" width="78" height="78"
            src="https://www.cadmicro.com/storage/icons/SW_ICON_ElectricalSchematics_128x128.svg" alt="SOLIDWORKS PCB"
            typeof="foaf:Image">
          <div class="card-body d-flex flex-column align-items-stretch">
            <h2 class="card-title">SOLIDWORKS Electrical Schematic</h2>
            <p class="card-text" style="flex:1">SOLIDWORKS® Electrical Schematics packages provide standalone,
              easy-to-use, electrical design tools that enable you to
              efficiently define electrical interconnections for complex electrical systems.</p>
            <button id="contact" data-toggle="modal" data-target="#contactModal" data-type="contact"
              data-title="Contact Request Form" class="btn btn-primary rounded-pill mx-auto">Contact
              Us</button>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-4 px-2 my-4 d-flex">
        <div class="card bg-transparent border-0">
          <img class="card-img-top" width="78" height="78"
            src="https://www.cadmicro.com/storage/icons/SW_ICON_Electrical3D_128x128.svg" alt="SOLIDWORKS PCB"
            typeof="foaf:Image">
          <div class="card-body d-flex flex-column align-items-stretch">
            <h2 class="card-title">SOLIDWORKS Electrical 3D</h2>
            <p class="card-text align-self-stretch" style="flex:1">SOLIDWORKS® Electrical 3D enables you to easily
              integrate your electrical schematic designs into your SOLIDWORKS 3D
              product model.</p>
            <button id="contact" data-toggle="modal" data-target="#contactModal" data-type="contact"
              data-title="Contact Request Form" class="btn btn-primary rounded-pill mx-auto">Contact
              Us</button>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-4 px-2 my-4 d-flex">
        <div class="card bg-transparent border-0">
          <img class="card-img-top" width="78" height="78"
            src="https://www.cadmicro.com/storage/icons/SW_ICON_ElectricalPro_128x128.svg" alt="SOLIDWORKS PCB"
            typeof="foaf:Image">
          <div class="card-body d-flex flex-column align-items-stretch">
            <h2 class="card-title">SOLIDWORKS Electrical Professional</h2>
            <p class="card-text" style="flex:1">SOLIDWORKS® Electrical Professional combines the electrical schematic
              design capabilities of SOLIDWORKS Electrical
              Schematics with the 3D capabilities of SOLIDWORKS Electrical 3D in one package.</p>
            <button id="contact" data-toggle="modal" data-target="#contactModal" data-type="contact"
              data-title="Contact Request Form" class="btn btn-primary rounded-pill mx-auto">Contact
              Us</button>
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
          <a class="nav-link" data-toggle="tab" href="#matrix" role="tab">Matrix</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#datasheet" role="tab">Data Sheet</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active in" data-toggle="tab" href="#whatsnew" role="tab">What's New</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#videos" role="tab">Video Archive</a>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade" id="matrix" role="tabpanel">
          @include('pages.matrix.solidworks-electrical')
        </div>
        <div class="tab-pane fade" id="datasheet" role="tabpanel">
          <div class="row" style="margin:0; padding:0">
            <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a href="{{asset('storage/pdfs/solidworks/2020/Data Sheet - PCB.pdf')}}" class="pdf-item">
                <figure>
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/solidworks/2020/Data Sheet - PCB.png')}}" style="width:100%;"
                      alt="SOLIDWORKS PCB 2020">
                  </div>
                  <figcaption>SolidWorks PCB 2020</figcaption>
                </figure>
              </a>
            </div>
            <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a href="{{asset('storage/pdfs/solidworks/2020/Data Sheet - Electrical.pdf')}}" class="pdf-item">
                <figure>
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/solidworks/2020/Data Sheet - Electrical.png')}}" style="width:100%;"
                      alt="SOLIDWORKS ECAD Data Sheet">
                  </div>
                  <figcaption>SolidWorks ECAD Data Sheet</figcaption>
                </figure>
              </a>
            </div>
          </div>
        </div>
        <div class="tab-pane fade  show active in" id="whatsnew" role="tabpanel">
          <div class="row" style="margin:0; padding:0">
            <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a href="{{asset('storage/pdfs/solidworks/2020/Top 10 ECAD.pdf')}}" class="pdf-item">
                <figure>
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/solidworks/2020/Top 10 ECAD.png')}}" style="width:100%;"
                      alt="SOLIDWORKS ECAD Top 10 in 2020">
                  </div>
                  <figcaption>SOLIDWORKS ECAD Top 10 in 2020</figcaption>
                </figure>
              </a>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="videos" role="tabpanel">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-3">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://www.youtube.com/embed/kH89EPnsZG4" class="embed-responsive-item" frameborder="0"
                  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen></iframe>
              </div>
              <div class="videoCaption w-100">Fundamentals of SOLIDWORKS PCB</div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-3">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://www.youtube.com/embed/uGSnmiJPgy0" class="embed-responsive-item" frameborder="0"
                  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen></iframe>
              </div>
              <div class="videoCaption w-100">Electrical for Industrial Equipment</div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-3">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://www.youtube.com/embed/wVAPJmuADXo" class="embed-responsive-item" frameborder="0"
                  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen></iframe>
              </div>
              <div class="videoCaption w-100">The Fundamentals of SOLIDWORKS Electrical - SOLIDWORKS</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section style="padding-top:0">
  <div class="container-fluid">
    <h2 class="main-titleLeft" style="margin-top:0;">
      SolidWorks Electrical Solutions capabilities</h2>
    <p class="wow fadeInUp">Listed below, are some of the powerful
      features that SolidWorks Electrical Solutions users benefit from. With the addition of standard part libraries,
      utilities that will search for design errors, fasteners and tools that will automatically estimate your
      manufacturing costs, the capabilities are endless. If you would like to know more or have any questions, please
      use the box below.</p>

    <div class="responsive-tabs-block row" style="margin-top:10px">
      <div class="">
        <!-- required for floating -->
        <ul class="nav nav-tabs tabs-left responsive-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#pcb" role="tab">SolidWorks PCB</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#schematicStandard" role="tab">SolidWorks Electrical Schematic
              Standard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#schematicProfessional" role="tab">SolidWorks Electrical
              Schematic Professional</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#electricalProfessional" role="tab">SolidWorks Electrical Professional</a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#electrical3D" role="tab">SolidWorks Electrical 3D</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#circuit" role="tab">CircuitWorks</a>
          </li>
        </ul>
      </div>
      <div class="col-md-8">
        <!-- Tab panes -->

        <div class="tab-content responsive-tabsContent">
          <div class="tab-pane active" id="pcb" role="tabpanel">
            <h3>SolidWorks PCB</h3>
            <div class="videoWrapper">
              <video id="pcbVideo" class="video-js  vjs-16-9" controls preload="auto"
                src="{{asset('storage/videos/SolidWorks/Electrical/SW-PCB-Electrical.mp4')}}"
                data-setup='{"fluid": true}' poster="{{asset('storage/videos/solidworks_thumbnail.jpg')}}">
                <source src="{{asset('storage/videos/SolidWorks/Electrical/SW-PCB-Electrical.mp4')}}" type='video/mp4'>
                <!-- <source src="MY_VIDEO.webm" type='video/webm'> -->
                <p class="vjs-no-js">
                  To view this video please enable JavaScript, and consider upgrading to a web browser that
                  <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                </p>
              </video>
            </div>
            <div class="videoCaption">Video: SolidWorks PCB Preview</div>
            <p>
              SolidWorks PCB is focused on bringing the best of both worlds together. Do what you do best in
              SolidWorks CAD, and let SolidWorks PCB handle all of your PCB design needs which was engineered
              specifically for SolidWorks® collaboration.
              We’ve combined the best technology in PCB design with an easy-to-use interface and linked it with
              SolidWorks CAD to give you an efficient design experience that gets your PCBs done quickly and easily —
              just what you need when PCBs are only a part of your product design workflow.
            </p>
          </div>
          <div class="tab-pane" id="schematicStandard" role="tabpanel">
            <h3>SolidWorks Electrical Schematic Standard</h3>
            <div class="videoWrapper">
              <video id="schematicStandardVideo" class="video-js  vjs-16-9" controls preload="auto"
                src="{{asset('storage/videos/SolidWorks/Electrical/SW-Electrical-3D-Electrical-1.mp4')}}"
                data-setup='{"fluid": true}' poster="{{asset('storage/videos/solidworks_thumbnail.jpg')}}">
                <source src="{{asset('storage/videos/SolidWorks/Electrical/SW-Electrical-3D-Electrical-1.mp4')}}"
                  type='video/mp4'>
                <!-- <source src="MY_VIDEO.webm" type='video/webm'> -->
                <p class="vjs-no-js">
                  To view this video please enable JavaScript, and consider upgrading to a web browser that
                  <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                </p>
              </video>
            </div>
            <div class="videoCaption">Video: SolidWorks Electrical Schematic Standard Preview</div>
            <p>
              SolidWorks Electrical schematic design capabilities simplify development of embedded electrical systems
              for machines and other applications, with single-line and multi-line schematic tools for planning your
              electrical systems. An integrated library database provides thousands of symbols and more than 500,000
              manufactured parts for use in your design, and you can speed up development by copying and reusing
              common circuit segments within a project or to other projects. Teams can work concurrently to reduce
              development time, and automated management tools streamline design of complex PLC connections. You can
              easily generate drawings, wire lists, “From-To” lists, and other documentation for manufacturing.
              Use your SolidWorks Electrical schematics in SolidWorks Electrical 3D, with bi-directional linking that
              captures design changes in both the schematic and the 3D model in real time.
            </p>
          </div>
          <div class="tab-pane" id="schematicProfessional" role="tabpanel">
            <h3>SolidWorks Electrical Schematic Professional</h3>
            <div class="videoWrapper">
              <video id="schematicProfessionalVideo" class="video-js  vjs-16-9" controls preload="auto"
                src="{{asset('storage/videos/SolidWorks/Electrical/SW-Electrical-Professional-Electrical.mp4')}}"
                data-setup='{"fluid": true}' poster="{{asset('storage/videos/solidworks_thumbnail.jpg')}}">
                <source
                  src="{{asset('storage/videos/SolidWorks/Electrical/SW-Electrical-Professional-Electrical.mp4')}}"
                  type='video/mp4'>
                <!-- <source src="MY_VIDEO.webm" type='video/webm'> -->
                <p class="vjs-no-js">
                  To view this video please enable JavaScript, and consider upgrading to a web browser that
                  <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                </p>
              </video>
            </div>
            <div class="videoCaption">Video: SolidWorks Electrical Schematic Professional Preview</div>
            <p>
              The SolidWorks Electrical Professional package combines the electrical schematic design capabilities of
              SolidWorks Electrical with the 3D capabilities of SolidWorks Electrical 3D in one convenient package.
              Single-line and multi-line schematic tools, including an integrated library of thousands of symbols and
              parts, enable quick planning of your embedded electrical system. Design teams can work concurrently on
              one or more projects and keep all work current with real-time bi-directional updates. You can integrate
              SolidWorks Electrical schematics with the 3D model and then place 3D versions of all electrical parts
              into the model, creating paths and connections with wires/cables/harnesses. All work in 2D and 3D is
              synchronized in real time, and you can create fully integrated BOMs that include both mechanical and
              electrical parts.
            </p>
          </div>
          <div class="tab-pane" id="electrical3D" role="tabpanel">
            <h3>SolidWorks Electrical 3D</h3>
            <div class="videoWrapper">
              <video id="electrical3DVideo" class="video-js  vjs-16-9" controls preload="auto"
                src="{{asset('storage/videos/SolidWorks/Electrical/SW-Electrical-3D-Electrical-1.mp4')}}"
                data-setup='{"fluid": true}'>
                <source src="{{asset('storage/videos/SolidWorks/Electrical/SW-Electrical-3D-Electrical-1.mp4')}}"
                  type='video/mp4'>
                <!-- <source src="MY_VIDEO.webm" type='video/webm'> -->
                <p class="vjs-no-js">
                  To view this video please enable JavaScript, and consider upgrading to a web browser that
                  <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                </p>
              </video>
            </div>
            <div class="videoCaption">Video: SolidWorks Electrical 3D Preview</div>
            <p>
              SolidWorks Electrical 3D enables you to easily integrate your electrical schematic design from
              SolidWorks Electrical to your 3D model of the machine or
              other product. (SolidWorks Electrical 3D requires SolidWorks CAD software.) Designers can place 3D
              versions of all electrical parts into their model,
              and run wires/cables/harnesses in 3D to connect all electrical equipment. This enables you to plan
              specific locations and paths, and accurately determine
              wires/cables/harness lengths before equipment is built to ensure consistent manufacturing and to reduce
              scrap and costs. Your 2D schematics and 3D models
              are synchronized bi-directionally in real time, so any changes are automatically updated.
          </div>
          <div class="tab-pane" id="circuit" role="tabpanel">
            <h3>CircuitWorks</h3>
            <p>
              Share data between electrical CAD (ECAD) and mechanical CAD (MCAD) designers using the CircuitWorks™
              tool in SolidWorks 3D CAD software. Circuitworks™ enables users to share, compare, update, and track
              electrical design data so users can more quickly resolve electrical-mechanical integration problems.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@stop