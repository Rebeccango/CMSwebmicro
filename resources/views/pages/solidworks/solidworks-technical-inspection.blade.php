@extends('layouts.layout')
@section('title')
SolidWorks Technical Inspection
@stop
@section('meta')
<link rel="canonical" href="{{route('solidworks-technical-inspection')}}" />
@stop
@section('description')SOLIDWORKS Inspection is a First Article Inspection and in-process inspection software that
streamlines and automates the creation of ballooned inspection drawings.@stop
{{-- @section('keywords')SolidWorks, Technical, Technical Inspection, Inspection @stop --}}
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
  style="min-height:450px; background-image:url({{ asset("storage/images/SolidWorks/inspection/sw-inspection-hero.jpg") }})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">SOLIDWORKS Inspection</h1>
          <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
        </div>
        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
          <p class="parallax-section__description">Reduce the time needed to create inspection documentation, helping to
            eliminate input errors, improve quality, and
            reduce time to market.</p>
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
        <h2>SolidWorks Inspection</h2>
        <br />
        <p>
          SolidWorks Inspection is a First Article Inspection (FAI) and in-process inspection software that
          streamlines and automates the creation of ballooned inspection drawings and inspection reports (AS9102,
          PPAP, etc.).
          SolidWorks Inspection consists of a stand-alone application and a SolidWorks add-in that enables users to
          leverage their legacy data regardless of whether they have SolidWorks files, PDFs, or TIFFs.
          SolidWorks Inspection is a simple and intuitive application that can reduce the time needed to create
          inspection documentation by up to 90 percent, and helps to virtually eliminate input errors, thus improving
          quality and reducing time-to-market.
          SolidWorks Inspection Professional extends capabilities by giving users multiple ways to enter measured
          values directly into the project to help simplify part inspection. Each characteristic value can be entered
          manually, by using a digital caliper, or by importing coordinate measuring machine (CMM) results.
        </p>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe src="https://www.youtube.com/embed/Nt-8T0zyrvw" class="embed-responsive-item" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="videoCaption w-100">First Look Video - Inspection - SOLIDWORKS</div>
      </div>
    </div>
  </div>
</section>
<section class="section-secondary py-5">
  <div class="container py-5">
    <div class="section-title center-block mx-auto mb-0 text-center mb-5">
      <h3>Which SOLIDWORKS Inspection package is right for you?</h3>
      <div class="section-title-divider"></div>
    </div>
    <div class="row justify-content-center">
      <div class="col col-12 col-md-5 col-lg-4 d-flex flex-fill py-4 px-4">
        <div class="card w-full p-3 d-flex flex-fill shadow-lg">
          <div class="card-body d-flex flex-column">
            <h3 class="card-title">SOLIDWORKS Inspection Standard</h3>
            <p class="card-text flex-fill">
              SOLIDWORKS Inspection Standard is a First Article and in-process inspection solution that streamlines the creation of
              inspection documentation. A standalone application and an embedded SOLIDWORKS add-in, SOLIDWORKS Inspection Standard
              enables you to leverage legacy data regardless of the file type.</p>
            <button class="btn btn-primary rounded-pill btn-dialog" id="contact" data-toggle="modal"
              data-target="#contactModal" data-type="contact">Learn more</button>
          </div>
        </div>
      </div>
      <div class="col col-12 col-md-5 col-lg-4 d-flex flex-fill py-4 px-4">
        <div class="card w-full p-3 d-flex flex-fill shadow-lg">
          <div class="card-body d-flex flex-column">
            <h3 class="card-title">SOLIDWORKS Inspection Professional</h3>
            <p class="card-text flex-fill">SOLIDWORKS Inspection Professional extends SOLIDWORKS Inspection Standard capabilities and lets you manually or
            semi-automatically enter measured values directly into an inspection project. With SOLIDWORKS Inspection Professional,
            you can work directly with 2D/3D CAD data and streamlined workflows.</p>
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
    <div class="custom-nav-pills">
      <ul class="nav nav-pills" role="tablist">
        <li class="nav-item">
          <a class="nav-link active in" data-toggle="tab" href="#matrix" role="tab">Matrix</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#datasheet" role="tab">Data Sheet</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#videos" role="tab">Videos</a>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade show active in" id="matrix" role="tabpanel">
          @include('pages.matrix.solidworks-inspection')
        </div>
        <div class="tab-pane fade" id="datasheet" role="tabpanel">
          <div class="row" style="margin:0; padding:0">
            <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a href="{{asset('storage/pdfs/solidworks/2018/inspection_2018.pdf')}}" class="pdf-item">
                <figure>
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/solidworks/2018/inspection_2018.png')}}" style="width:100%;"
                      alt="SOLIDWORKS Inspection">
                  </div>
                  <figcaption>SolidWorks Inspection</figcaption>
                </figure>
              </a>
            </div>
            <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a href="{{asset('storage/pdfs/solidworks/2018/optimize_your_inspection_process.pdf')}}" class="pdf-item">
                <figure>
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/solidworks/2018/optimize_your_inspection_process.png')}}"
                      style="width:100%;" alt="Optimize your Inspection process">
                  </div>
                  <figcaption>Optimize your Inspection process</figcaption>
                </figure>
              </a>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="videos" role="tabpanel">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-3">
              <div class="videoWrapper">
                <iframe width="100%" height="200px" src="https://www.youtube.com/embed/utou4vO7fp0" frameborder="0"
                  allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>
              <div class="videoCaption">Fundamentals of SOLIDWORKS Inspection - SOLIDWORKS</div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-3">
            <div class="videoWrapper">
              <iframe width="100%" height="200px" src="https://www.youtube.com/embed/YsboiPxsDUI" frameborder="0"
                allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <div class="videoCaption">Inspection for Industrial Equipment</div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-3">
              <div class="videoWrapper">
                <iframe width="100%" height="200px" src="https://www.youtube.com/embed/JJYcBbqqcQQ" frameborder="0"
                  allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>
              <div class="videoCaption">Inspection - SOLIDWORKS</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="d-flex align-items-md-start align-items-start flex-column text-lg-left">
      <h3 class="h1 mx-lg-0 mb-3 main-title mt-0">SOLIDWORKS INSPECTION CAPABILITIES</h3>
      <p class="lead">Listed below, are some of the powerful
        features that SolidWorks Inspection users benefit from. If you would like to know more or have any questions,
        please contact us.</p>
      <div id="workflow" class="accordion w-100 accordion--arrows accordion--only-one my-4">
        <div class="card">
          <div class="card-header">
            <h5 class="mb-0">
              <button class="btn btn-link" data-toggle="collapse" data-target="#tab_1" aria-expanded="true"
                aria-controls="tab_1">
                Inspection Documents made easy
              </button>
            </h5>
          </div>
          <div id="tab_1" class="collapse show" data-parent="#workflow">
            <div class="card-body row justify-content-center">
              <img class="col-sm-10 col-md-6" src="{{asset('storage/images/SolidWorks/First Look.jpg')}}"
                alt="First Look SolidWorks Inspection">
              <p class="col-sm-12 col-md-6">
                Intuitive and easy to use, SolidWorks Inspection enables you to create inspection reports and
                ballooned
                drawings in just minutes, for time savings of up to 90 percent.
              </p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#tab_2" aria-expanded="false"
                aria-controls="tab_2">
                Don’t have SolidWorks CAD? No problem!
              </button>
            </h5>
          </div>
          <div id="tab_2" class="collapse" data-parent="#workflow">
            <div class="card-body row justify-content-center">
              <img class="col-sm-10 col-md-6" src="{{asset('storage/images/SolidWorks/dont-have-solidworks-cad.jpg')}}"
                alt="SolidWorks Inspection">
              <p class="col-sm-12 col-md-6">
                You can create your inspection documents regardless of your existing CAD system, using either the
                standalone SOLIDWORKS Inspection application or the integrated SOLIDWORKS Inspection add-in.
              </p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#tab_3" aria-expanded="false"
                aria-controls="tab_3">
                Optical Character Recognition (OCR)
              </button>
            </h5>
          </div>
          <div id="tab_3" class="collapse" data-parent="#workflow">
            <div class="card-body row justify-content-center">
              <img class="col-sm-10 col-md-6" src="{{asset('storage/images/SolidWorks/dont-have-solidworks-cad.jpg')}}"
                alt="First Look SolidWorks Inspection">
              <p class="col-sm-12 col-md-6">The SolidWorks Electrical Professional package combines the electrical
                schematic design capabilities of
                SolidWorks Electrical with the 3D capabilities of SolidWorks Electrical 3D in one convenient package.
                Single-line and multi-line schematic tools, including an integrated library of thousands of symbols
                and
                parts, enable quick planning of your embedded electrical system. Design teams can work concurrently on
                one or more projects and keep all work current with real-time bi-directional updates. You can
                integrate
                SolidWorks Electrical schematics with the 3D model and then place 3D versions of all electrical parts
                into the model, creating paths and connections with wires/cables/harnesses. All work in 2D and 3D is
                synchronized in real time, and you can create fully integrated BOMs that include both mechanical and
                electrical parts.</p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#tab_4" aria-expanded="false"
                aria-controls="tab_4">
                Handle revisions with ease
              </button>
            </h5>
          </div>
          <div id="tab_4" class="collapse" data-parent="#workflow">
            <div class="card-body row justify-content-center">
              <img class="col-sm-10 col-md-6" src="{{asset('storage/images/SolidWorks/handle-revisions-ease.jpg')}}"
                alt="SolidWorks Inspection">
              <p class="col-sm-12 col-md-6">
                Avoid errors and quickly identify changes using SolidWorks Inspection advanced drawing comparison
                tool.
              </p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#tab_5" aria-expanded="false"
                aria-controls="tab_5">
                Improve Time to Market
              </button>
            </h5>
          </div>
          <div id="tab_5" class="collapse" data-parent="#workflow">
            <div class="card-body row justify-content-center">
              <img class="col-sm-10 col-md-6" src="{{asset('storage/images/SolidWorks/improve-time-to-market.jpg')}}"
                alt="SolidWorks Inspection">
              <p class="col-sm-12 col-md-6"> Powerful, user-customizable report formats allow you to create industry
                standard inspection reports
                (AS9102, PPAP, etc.) and ballooned drawings in just a few clicks, helping to avoid errors and
                inconsistences.</p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#tab_6" aria-expanded="false"
                aria-controls="tab_6">
                Inspection Done Faster
              </button>
            </h5>
          </div>
          <div id="tab_6" class="collapse" data-parent="#workflow">
            <div class="card-body row justify-content-center">
              <img class="col-sm-10 col-md-6" src="{{asset('storage/images/SolidWorks/inspection-done-faster.jpg')}}"
                alt="SolidWorks Inspection">
              <p class="col-sm-12 col-md-6">
                Inspect your parts, directly type in measured values, use a digital caliper, or import results from a
                coordinate measuring machine (CMM).
              </p>
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
      <h4 class="h1">Learn More About SolidWorks Inspection</h4>
      <div class="section-title-divider"></div>
    </div>
    <button id="contact" data-toggle="modal" data-target="#contactModal" data-type="contact"
      data-title="Contact Request Form" class="btn btn-lg btn-white btn-rounded btn-dialog mx-2">Contact
      Us</button>
  </div>
</section>
@stop