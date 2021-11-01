@extends('layouts.layout')
@section('title')
SolidWorks MBD - Model Based Definition
@stop
@section('meta')
<link rel="canonical" href="{{route('solidworks-technical-modelBasedDefinition')}}" />
@stop
@section('description')Define, organize, and publish 3D annotations, including 3D model data in industry-standard file
formats.@stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
  style="min-height:450px; background-image:url({{asset('/storage/banners/solidworks_bg.jpg')}})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          <h1>SOLIDWORKS MBD</h1>
          <div class="section-title-divider"></div>
        </div>
        <div>
          <p class="parallax-section__description">Define, organize, and publish 3D annotations, including 3D model data
            in industry-standard file formats.</p>
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
        <h2>SolidWorks MBD</h2>
        <p>
          SOLIDWORKS MBD is an integrated drawingless manufacturing solution for SOLIDWORKS. It helps companies
          define, organize, and publish 3D Product Manufacturing Information (PMI) including 3D model data in industry
          standard file formats, such as eDrawings® 3D PDF and STP242. Unlike traditional 2D drawings, SOLIDWORKS MBD
          guides the manufacturing process directly in 3D, which helps streamline production, cut cycle time, reduce
          errors, and support industry standards such as Military-Standard-31000A, ASME Y14.41, ISO 16792, and DIN ISO
          16792.
        </p>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe src="https://www.youtube.com/embed/1yyZaPmDIS4" class="embed-responsive-item" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="videoCaption w-100">What's New in SOLIDWORKS 2021 - Model Based Definition</div>
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
          <a class="nav-link" data-toggle="tab" href="#videos" role="tab">Videos</a>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade" id="datasheet" role="tabpanel">
          <div class="row" style="margin:0; padding:0">
            <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a href="{{asset('storage/pdfs/solidworks/2018/mbd_2018_data_sheet.pdf')}}" class="pdf-item">
                <figure>
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/solidworks/2018/mbd_2018_data_sheet.png')}}" style="width:100%;"
                      alt="SOLIDWORKS MBD Data Sheet">
                  </div>
                  <figcaption>SolidWorks MBD Data Sheet</figcaption>
                </figure>
              </a>
            </div>
            <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a href="{{asset('storage/pdfs/solidworks/2018/design_to_manufacturing_2018.pdf')}}" class="pdf-item">
                <figure>
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/solidworks/2018/design_to_manufacturing_2018.png')}}"
                      style="width:100%;" alt="SOLIDWORKS MBD">
                  </div>
                  <figcaption>SolidWorks MBD</figcaption>
                </figure>
              </a>
            </div>
          </div>
        </div>
        <div class="tab-pane fade  show active in" id="whatsnew" role="tabpanel">
          <div class="row" style="margin:0; padding:0">
            <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a href="{{asset('storage/pdfs/solidworks/2020/Top 10 Design to Manufacture.pdf')}}" class="pdf-item">
                <figure>
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/solidworks/2020/Top 10 Design to Manufacture.png')}}"
                      style="width:100%;" alt="SOLIDWORKS Design to Manufacturing Top 10 in 2020">
                  </div>
                  <figcaption>SOLIDWORKS Design to Manufacturing Top 10 in 2020</figcaption>
                </figure>
              </a>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="videos" role="tabpanel">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-3">
              <div class="videoWrapper">
                <iframe width="100%" height="200px" src="https://www.youtube.com/embed/1yyZaPmDIS4" frameborder="0"
                  allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>
              <div class="videoCaption">What's New in SOLIDWORKS 2021 - Model Based Definition</div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-3">
              <div class="videoWrapper">
                <iframe width="100%" height="200px" src="https://www.youtube.com/embed/S3N88IqPIaE" frameborder="0"
                  allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>
              <div class="videoCaption">SOLIDWORKS MBD How-To video tutorials part 1</div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-3">
              <div class="videoWrapper">
                <iframe width="100%" height="200px" src="https://www.youtube.com/embed/mE_YK85Ot1E" frameborder="0"
                  allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>
              <div class="videoCaption">Fundamentals of SOLIDWORKS MBD</div>
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
      <h3 class="h1 mx-lg-0 mb-3 main-title mt-0">SOLIDWORKS MBD CAPABILITIES</h3>
      <p class="lead">Listed below, are some of the powerful features that SolidWorks MBD users benefit from. If you
        would like to know more
        or have any questions, please contact us.</p>
      <div id="workflow" class="accordion w-100 accordion--arrows accordion--only-one my-4">
        <div class="card">
          <div class="card-header">
            <h5 class="mb-0">
              <button class="btn btn-link" data-toggle="collapse" data-target="#tab_1" aria-expanded="true"
                aria-controls="tab_1">
                Define PMI directly in 3D
              </button>
            </h5>
          </div>
          <div id="tab_1" class="collapse show" data-parent="#workflow">
            <div class="card-body row justify-content-center">
              <img class="col-sm-10 col-md-6" src="{{asset('storage/images/SolidWorks/MBD/Define.jpg')}}"
                alt="Define PMI directly in 3D">
              <p class="col-sm-12 col-md-6">SolidWorks MBD defines PMI directly in 3D and avoiding the expensive,
                time-consuming, and risky 2D
                drawing detour, which can save up to one-third of the total engineering dollars. 3D PMI also helps speed
                up communication, cut quoting time, and reduce errors thanks to its 3D data interrogation,
                interactivity, and rich Meta properties.</p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#tab_2" aria-expanded="false"
                aria-controls="tab_2">
               Clean and Structured 3D Presentation
              </button>
            </h5>
          </div>
          <div id="tab_2" class="collapse" data-parent="#workflow">
            <div class="card-body row justify-content-center">
              <img class="col-sm-10 col-md-6" src="{{asset('storage/images/SolidWorks/MBD/Clean.jpg')}}" alt="Clean and Structured 3D Presentation">
              <p class="col-sm-12 col-md-6">Beyond 3D PMI Definition, SOLIDWORKS MBD helps organize the rich data into clean and structured 3D presentations with
              different views and display settings. It can even intelligently show and hide 3D annotations while you rotate the model
              to give you extra clarity while respecting all the critical-to-function annotations. Messy display? Tedious navigation?
              Missing annotations? Problems solved!</p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#tab_3" aria-expanded="false"
                aria-controls="tab_3">
                Customize 3D PDF Templates
              </button>
            </h5>
          </div>
          <div id="tab_3" class="collapse" data-parent="#workflow">
            <div class="card-body row justify-content-center">
              <img class="col-sm-10 col-md-6" src="{{asset('storage/images/SolidWorks/MBD/Customize.jpg')}}" alt="First Look SolidWorks Inspection">
              <p class="col-sm-12 col-md-6">Serve multiple deliverables and departments by customizing the 3D Output Templates. You can build the layout, insert
              company or group logo, position the 3D View port and thumbnails, edit the text descriptions, embed Meta property links,
              and add tables. SolidWorks MBD covers them all. Once they are set up, these templates will serve as internal and
              external process guidelines for all departments, such as Manufacturing, Operations, QA, and Procurement on multiple
              deliverables, such as engineering drawings, Request for Quote (RFQ), inspection report, and work instructions. In
              addition, SOLIDWORKS MBD delivers a comprehensive set of predefined templates to use out of the box.</p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#tab_4" aria-expanded="false"
                aria-controls="tab_4">
               Comply with industry standards
              </button>
            </h5>
          </div>
          <div id="tab_4" class="collapse" data-parent="#workflow">
            <div class="card-body row justify-content-center">
              <img class="col-sm-10 col-md-6" src="{{asset('storage/images/SolidWorks/MBD/Easy.jpg')}}" alt="SolidWorks Inspection">
              <p class="col-sm-12 col-md-6">
                SolidWorks MBD helps comply with the predominant industry standards, such as ASME Y14.41, Military-Standard-31000A, ISO
                16792, ISO 10303-242, ISO 14739, and so on. This compliance gives you the competitive advantages to win more contracts
                and deliver projects to strict requirements, on time and on budget. Customers looking to meet United States Government
                standards will be encouraged by the assessment of Rich Eckenrode, Co-Chairman of the Military-Standard-31000
                manufacturing sub-committee.
              </p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#tab_5" aria-expanded="false"
                aria-controls="tab_5">
               Share and Archive intelligent and intuitive 3D data
              </button>
            </h5>
          </div>
          <div id="tab_5" class="collapse" data-parent="#workflow">
            <div class="card-body row justify-content-center">
              <p class="col-sm-12 col-md-12">SolidWorks MBD helps you share and archive intuitive 3D data, including the models, PMI, views, and Meta properties, so
              that you and your suppliers don’t have to waste time in re-modeling based on traditional 2D Drawings. With the 3D data,
              you can upgrade your legacy product configurations to new models much faster and design tooling and fixtures much more
              easily.</p>
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
      <h4 class="h1">Learn More About SolidWorks MBD</h4>
      <div class="section-title-divider"></div>
    </div>
    <button id="contact" data-toggle="modal" data-target="#contactModal" data-type="contact"
      data-title="Contact Request Form" class="btn btn-lg btn-white btn-rounded btn-dialog mx-2">Contact
      Us</button>
  </div>
</section>
@stop