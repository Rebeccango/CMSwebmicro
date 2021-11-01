@extends('layouts.layout')
@section('title')
SolidWorks PCB
@stop
@section('meta')
<link rel="canonical" href="{{route('solidworks-Electrical-pcb')}}" />
@stop
@section('description')SOLIDWORKS® PCB —powered by Altium®— is a mechatronics/electronics design solution that provides
the best in PCB design
technology with an integrated electro-mechanical collaboration solution.@stop
{{-- @section('keywords')3D, Design Software, CAD, 3D CAD, SOLIDWORKS, 3D Software, Product Design, Engineering Software, 3D Design, Electrical, PCB, Schematic, Connector @stop --}}
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
  style="min-height:450px; background-image:url({{ asset("storage/images/SolidWorks/electrical/solidworks-electrical-pcb-hero.jpg") }})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          <h1>SolidWorks PCB</h1>
          <div class="section-title-divider"></div>
        </div>
        <p class="lead">SOLIDWORKS® PCB —powered by Altium®— is a mechatronics/electronics
          design solution that provides the best in PCB design
          technology with an integrated electro-mechanical collaboration solution.</p>
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
        <h3>SolidWorks PCB</h3>
        <br />
        <p>
          SolidWorks PCB is focused on bringing the best of both worlds together. Do what you do best in SolidWorks
          CAD, and let SolidWorks PCB handle all of your PCB design needs which was engineered specifically for
          SolidWorks® collaboration.
          We’ve combined the best technology in PCB design with an easy-to-use interface and linked it with SolidWorks
          CAD to give you an efficient design experience that gets your PCBs done quickly and easily — just what you
          need when PCBs are only a part of your product design workflow.
        </p>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 fadeInRight">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe src="https://www.youtube.com/embed/kH89EPnsZG4" class="embed-responsive-item" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="videoCaption w-100">Fundamentals of SOLIDWORKS PCB</div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container-fluid">
    <div class="custom-nav-pills">
      <ul class="nav nav-pills" role="tablist">
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
        <div class="tab-pane fade" id="datasheet" role="tabpanel">
          <div class="row" style="margin:0; padding:0">
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
                <iframe src="https://www.youtube.com/embed/3iAaW2qOxCA" class="embed-responsive-item" frameborder="0"
                  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen></iframe>
              </div>
              <div class="videoCaption w-100">PCB Video Case Study - Labun Nuclear - SOLIDWORKS</div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-3">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://www.youtube.com/embed/9nWsYjxDLng" class="embed-responsive-item" frameborder="0"
                  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen></iframe>
              </div>
              <div class="videoCaption w-100">Demonstration of SOLIDWORKS PCB - SOLIDWORKS</div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-3">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://www.youtube.com/embed/ibOtDZBebZk" class="embed-responsive-item" frameborder="0"
                  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen></iframe>
              </div>
              <div class="videoCaption w-100">Electrical - SW PCB Connector Workflow - SOLIDWORKS</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container-fluid">
    <div class="row d-flex">
      <div class="col-12">
        <div class="d-flex align-items-md-start align-items-start flex-column text-lg-left">
          <h3 class="h1 mx-lg-0 mb-3 main-title mt-0">SOLIDWORKS PCB CAPABILITIES</h3>
          <p class="lead">With SolidWorks PCB, you get the best of both worlds – powerful PCB design technology and direct integration with
          SolidWorks CAD. Keeping your electrical and mechanical designs in sync has never been easier with a managed ECO change
          process and distinct workflows that keeps you at your most productive. Some capabilities of SolidWorks PCB include:</p>
          <div id="workflow" class="accordion w-100 accordion--arrows accordion--only-one my-4">
            <div class="card">
              <div class="card-header">
                <h5 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#tab_1" aria-expanded="true"
                    aria-controls="tab_1">
                    Limitless Color Choices
                  </button>
                </h5>
              </div>
              <div id="tab_1" class="collapse show" data-parent="#workflow">
                <div class="card-body">
                  <p>At its core, SOLIDWORKS PCB provides the best in PCB design technology, capable of meeting the demands of today’s
                  increasingly complex product designs. We’ve packed in all of the latest features to keep you at your most efficient from
                  schematic to board layout with over two decades of PCB design technology.</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#tab_2"
                    aria-expanded="false" aria-controls="tab_2">
                    Seamless Integration With SolidWorks CAD
                  </button>
                </h5>
              </div>
              <div id="tab_2" class="collapse" data-parent="#workflow">
                <div class="card-body">
                  <p>SOLIDWORKS PCB is a professional PCB design tool engineered specifically to bridge the gap between electrical and
                  mechanical designs. Keep your ECAD and MCAD designs connected with managed ECO change processes, distinct workflows, and
                  seamless integration with SolidWorks CAD, all while maintaining your preferred workflow.</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#tab_3"
                    aria-expanded="false" aria-controls="tab_3">
                    Proven PCB Design Engine
                  </button>
                </h5>
              </div>
              <div id="tab_3" class="collapse" data-parent="#workflow">
                <div class="card-body">
                  <p>Getting your designs done as quickly and easily as possible is always a top priority. Meeting those critical
                  time-to-market windows requires a PCB design tool capable of keeping up with the demands of your complex designs.
                  SOLIDWORKS PCB is packed with all of the latest design technology, powered by over 25 years of R&D experience.</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#tab_4" aria-expanded="false"
                    aria-controls="tab_4">
                    Streamlined Schematic Editor
                  </button>
                </h5>
              </div>
              <div id="tab_4" class="collapse" data-parent="#workflow">
                <div class="card-body">
                  <p>A streamlined schematic editing environment gives you the tools you need to bring your designs to life. With access to
                  real-time component supply chain information and comprehensive rule checking, your schematic designs get done quickly
                  and easily.</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#tab_5" aria-expanded="false"
                    aria-controls="tab_5">
                    Unified Design Environment
                  </button>
                </h5>
              </div>
              <div id="tab_5" class="collapse" data-parent="#workflow">
                <div class="card-body">
                  <p>Both the schematic and PCB editor are integrated in one unified system in SOLIDWORKS PCB. You’ll barely notice the
                  change as you transition from your schematic to board layout process, allowing you to stay at your most productive in a
                  familiar design environment.</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#tab_6" aria-expanded="false"
                    aria-controls="tab_6">
                   Maximum Design Efficiency
                  </button>
                </h5>
              </div>
              <div id="tab_6" class="collapse" data-parent="#workflow">
                <div class="card-body">
                  <p>Taking your PCB designs to the next level requires a powerful set of features. SOLIDWORKS PCB has what you need to
                  tackle your next design project.</p>
                </div>
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
      <h4 class="h1">Learn More About SolidWorks PCB</h4>
      <div class="section-title-divider"></div>
    </div>
    <button id="contact" data-toggle="modal" data-target="#contactModal" data-type="contact"
      data-title="Contact Request Form" class="btn btn-lg btn-white btn-rounded btn-dialog mx-2">Contact
      Us</button>
  </div>
</section>
@stop