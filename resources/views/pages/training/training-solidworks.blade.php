@extends('layouts.layout')
@section('title')
SolidWorks Training
@stop
@section('body')

<section class="parallax-window parallax-section trans-header-window parallax d-flex"
  style="min-height:450px; background-image:url({{asset('storage/banners/training-banner-solidworks.jpg')}})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto wow fadeIn" data-wow-duration="0.8s"
          data-wow-delay="0.5s">
          <h1 class="wow fadeIn" data-wow-delay="0.5s">SolidWorks TRAINING</h1>
          <div class="section-title-divider"></div>
          <h2 class="h3">Instructor-Led Online And Custom Training</h2>
        </div>
        {{-- <div class="wow fadeIn"  >
          <p class="parallax-section__description">BIGREP 3D Printers - Large scale manufacturing and rapid prototyping
            from BigRep GmbH. Discover our 3D printers the BigRep ONE, BigRep Studio.</p>
        </div> --}}
        <div>
          @include('layouts.generic_contact_buttons')
        </div>
      </div>
    </div>
  </div>
</section>
<section id="testimonialss" class="d-flex justify-content-center align-items-center flex-column section-secondary">
  <div class="">
    <div class="container-fluid">
      <div class="section-title center-block mx-auto">
        <h3>Our satisified customers</h3>
        <div class="section-title-divider "></div>
      </div>
      <div class="section-block">
        <div class="swiper-container swiper-container-horizontal pb-5" style="max-width:800px;">
          <div class="swiper-wrapper d-flex align-items-center">
            @php $testimonials = \App\Testimonials::where('status','=','ACTIVE')->whereNotIn('id', [20, 19,18,17, 13, 12])->orderBy('created_at','desc')->limit(12)->get();
            @endphp
            @foreach($testimonials as $t)
            <div class="swiper-slide px-5">
              <blockquote class="blockquote">
                <p class="mb-0 text-md-left ml-4 h6"><i class="fa fa-quote-left" aria-hidden="true"></i>{!!
                  \Illuminate\Support\Str::limit($t->testimonial, 400, $end=' ...') !!} <i class="fa fa-quote-right"
                    aria-hidden="true"></i></p>
                <div class="blockquote-footer ml-4">
                  <span class="name">
                    @if(isset($t->firstname) && !empty($t->firstname)){!!$t->firstname!!}@endif
                    @if(isset($t->lastname) && !empty($t->lastname)){!!$t->lastname!!}@endif
                  </span>
                  @if(isset($t->position) && !empty($t->position)){!!$t->position!!}@endif
                  @if(isset($t->company) && !empty($t->company)) from <cite
                    title="{!!$t->company!!}">{!!$t->company!!}</cite>@endif
                </div>
              </blockquote>
            </div>
            @endforeach
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination swiper-pagination"></div>
        </div>
      </div>
    </div>
  </div>
  <a class="btn btn-white btn-rounded" href="{{route('testimonials')}}">View All Testimonials</a>
</section>
<section>
  <div class="container-fluid">
    <div class="content">
      <div class="section-block">
        <h5 class="text-lg-center mx-auto pb-5">
          Improve your productivity and knowledge of SolidWorks products with <strong>instructor-led certified training,
            delivered online</strong>, at one of <strong><em>our training facilities</em></strong>, or
          <strong><em>on-site at your company's premises</em></strong>.
        </h5>
        <h2 class="main-title">Browse Our SolidWorks Course Catalog</h2>
        <div class="custom-nav-pills">
          <ul class="nav nav-pills" role="tablist">
            <li class="nav-item active">
              <a class="nav-link" data-toggle="tab" role="tab" href="#3dcad" role="tab">
                <h3 class="m-0 h6">SolidWorks 3D CAD</h3>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" role="tab" href="#simulation">
                <h3 class="m-0 h6">SIMULATION / FEA / CFD</h3>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" role="tab" href="#pdm">
                <h3 class="m-0 h6">PDM</h3>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" role="tab" href="#electrical">
                <h3 class="m-0 h6">ELECTRICAL</h3>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" role="tab" href="#composer">
                <h3 class="m-0 h6">COMPOSER</h3>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" role="tab" href="#cam">
                <h3 class="m-0 h6">CAM</h3>
              </a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade in show" id="3dcad">
              <table class="table display mt-3  clickable-rows row-border  catalog" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th width="30%">COURSE OUTLINE</th>
                    <th>DESCRIPTION</th>
                    <th>DURATION</th>
                    <th style="min-width: 120px;">VIEW</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><a
                        href="{{asset("storage/pdfs/training/SolidWorks 3D CAD/SolidWorks Parts Assemblies and Drawings.pdf")}}"
                        target="_blank">SolidWorks Parts, Assemblies & Drawings</a></th>
                    <td>The course enables students to build and enhance on their current knowledge within SolidWorks
                      mechanical design automation software. This will allow effective parametric modeling of parts,
                      assemblies and advanced drawing creation.</td>
                    <td>5 days</td>
                    <td><button class="btn btn-md btn-primary btn-dialog" data-toggle="modal"
                        data-target="#trainingForm" data-type="training">Get a
                        Quote</button></td>
                  </tr>
                  <tr>
                    <th scope="row"><a
                        href="{{asset('storage/pdfs/training/SolidWorks 3D CAD/SolidWorks Advanced Part Modeling.pdf')}}"
                        target="_blank">SolidWorks Advanced Part Modeling</a></th>
                    <td>Learn how to use multibody solids, sweeping and lofting features, and the more advanced shaping
                      capabilities of SolidWorks.</td>
                    <td>3 days</td>
                    <td><button class="btn btn-md btn-primary btn-dialog" data-toggle="modal"
                        data-target="#trainingForm" data-type="training">Get a
                        Quote</button></td>
                  </tr>
                  <tr>
                    <th scope="row"><a
                        href="{{asset('storage/pdfs/training/SolidWorks 3D CAD/SolidWorks Assembly Modeling.pdf')}}"
                        target="_blank">SolidWorks Assembly Modeling</a></th>
                    <td>Assembly Modeling teaches students how to maximize their use of the assembly modeling
                      capabilities of SolidWorks mechanical design automation software.</td>
                    <td>2 days</td>
                    <td><button class="btn btn-md btn-primary btn-dialog" data-toggle="modal"
                        data-target="#trainingForm" data-type="training">Get a Quote</button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"><a
                        href="{{asset('storage/pdfs/training/SolidWorks 3D CAD/SolidWorks Surface Modeling.pdf')}}"
                        target="_blank">SolidWorks Surface Modeling</a></th>
                    <td>Learn how to build free form shapes, repair imported geometry, use surface to create complex
                      features in SolidWorks.</td>
                    <td>2 days</td>
                    <td><button class="btn btn-md btn-primary btn-dialog" data-toggle="modal"
                        data-target="#trainingForm" data-type="training">Get a Quote</button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"><a
                        href="{{asset('storage/pdfs/training/SolidWorks 3D CAD/SolidWorks Sheet Metal.pdf')}}"
                        target="_blank">SolidWorks Sheet Metal</a></th>
                    <td>Learn how to build standalone sheet metal parts, convert parts to sheet metal, and create parts
                      in the context of an assembly.</td>
                    <td>2 days</td>
                    <td><button class="btn btn-md btn-primary btn-dialog" data-toggle="modal"
                        data-target="#trainingForm" data-type="training">Get a Quote</button></td>
                  </tr>
                  <tr>
                    <th scope="row"><a
                        href="{{asset('storage/pdfs/training/SolidWorks 3D CAD/SolidWorks Weldments.pdf')}}"
                        target="_blank">SolidWorks Weldments</a></th>
                    <td>Learn how to use SolidWorks to create welded structures with standard structural members. Weld
                      beads are also covered.</td>
                    <td>1 days</td>
                    <td><button class="btn btn-md btn-primary btn-dialog" data-toggle="modal"
                        data-target="#trainingForm" data-type="training">Get a Quote</button></td>
                  </tr>
                  <tr>
                    <th scope="row"><a
                        href="{{asset('storage/pdfs/training/SolidWorks 3D CAD/Mold Design Using SolidWorks.pdf')}}"
                        target="_blank">SolidWorks Mold Design</a></th>
                    <td>Learn several manual mold creation techniques and how to use the Mold Tools included with
                      SolidWorks standard software.</td>
                    <td>2 days</td>
                    <td><button class="btn btn-md btn-primary btn-dialog" data-toggle="modal"
                        data-target="#trainingForm" data-type="training">Get a Quote</button></td>
                  </tr>
                  <tr>
                    <th scope="row"><a
                        href="{{asset('storage/pdfs/training/SolidWorks 3D CAD/SolidWorks API Fundamentals.pdf')}}"
                        target="_blank">SolidWorks API</a></th>
                    <td>Learn how to use the SolidWorks API (Application Programming Interface) to automate and
                      customize SolidWorks.</td>
                    <td>3 days</td>
                    <td><button class="btn btn-md btn-primary btn-dialog" data-toggle="modal"
                        data-target="#trainingForm" data-type="training">Get a Quote</button></td>
                  </tr>
                  <tr>
                    <th scope="row"><a
                        href="{{asset('storage/pdfs/training/SolidWorks 3D CAD/SolidWorks Advanced Drawings.pdf')}}"
                        target="_blank">SolidWorks Advanced Drawings</a></th>
                    <td>This course will provide an in-depth coverage of making advanced drawings of SolidWorks parts
                      and assemblies.</td>
                    <td>3 days</td>
                    <td><button class="btn btn-md btn-primary btn-dialog" data-toggle="modal"
                        data-target="#trainingForm" data-type="training">Get a Quote</button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"><a
                        href="{{asset('storage/pdfs/training/SolidWorks 3D CAD/SolidWorks Visualize.pdf')}}"
                        target="_blank">SolidWorks Visualize</a></th>
                    <td>This course will provide an in-depth coverage of creating photorealistic renderings. With the
                      use of case studies, you will learn the necessary commands and workflows needed to set-up, manage,
                      and complete a rendering.</td>
                    <td>2 days</td>
                    <td><button class="btn btn-md btn-primary btn-dialog" data-toggle="modal"
                        data-target="#trainingForm" data-type="training">Get a Quote</button></td>
                  </tr>
                  <tr>
                    <th scope="row"><a href="{{asset('storage/pdfs/training/SolidWorks 3D CAD/SolidWorks MBD.pdf')}}"
                        target="_blank">SolidWorks MBD</a></th>
                    <td>This course will provide detailed techniques to present product and manufacturing information in
                      a 3D PDF file. This includes DimXpert and annotation views combined with capturing and publishing
                      of 3D views.</td>
                    <td>1 day</td>
                    <td><button class="btn btn-md btn-primary btn-dialog" data-toggle="modal"
                        data-target="#trainingForm" data-type="training">Get a Quote</button></td>
                  </tr>
                  <tr>
                    <th scope="row"><a
                        href="{{asset('storage/pdfs/training/SolidWorks 3D CAD/SolidWorks Inspection.pdf')}}"
                        target="_blank">SolidWorks Inspection</a></th>
                    <td>Learn the basics of working with SolidWorks Inspection to automate the process of working with
                      inspection documents. In
                      this course, you will work with both the add-in and standalone versions of the product.</td>
                    <td>1 day</td>
                    <td><button class="btn btn-md btn-primary btn-dialog" data-toggle="modal"
                        data-target="#trainingForm" data-type="training">Get a Quote</button></td>
                  </tr>
                  <tr>
                    <th scope="row"><a
                        href="{{asset('storage/pdfs/training/SolidWorks 3D CAD/SolidWorks File Management.pdf')}}"
                        target="_blank">SolidWorks File Management</a></th>
                    <td>SOLIDWORKS File Management teaches you how to manage files within SOLIDWORKS. This course should
                      be taken before any of
                      the SOLIDWORKS PDM courses, and is also ideal for any SOLIDWORKS user not using SOLIDWORKS PDM. It
                      includes explanations
                      of the SOLIDWORKS file structure, file references, file associativity, and how to manage a
                      multi-user environment.</td>
                    <td>1 day</td>
                    <td><button class="btn btn-md btn-primary btn-dialog" data-toggle="modal"
                        data-target="#trainingForm" data-type="training">Get a Quote</button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"><a
                        href="{{asset('storage/pdfs/training/SolidWorks 3D CAD/SolidWorks Routing Electrical.pdf')}}"
                        target="_blank">SolidWorks Routing: Electrical</a></th>
                    <td>Routing - Electrical explains how to create, edit and manage Electrical routes, from the
                      critical routing components and their
                      design requirements to the sub-assemblies that contain the routes.</td>
                    <td>2 days</td>
                    <td><button class="btn btn-md btn-primary btn-dialog" data-toggle="modal"
                        data-target="#trainingForm" data-type="training">Get a
                        Quote</button></td>
                  </tr>
                  <tr>
                    <th scope="row"><a
                        href="{{asset('storage/pdfs/training/SolidWorks 3D CAD/SolidWorks Routing Piping and Tubing.pdf')}}"
                        target="_blank">SolidWorks Routing: Piping and Tubing</a></th>
                    <td>olidWorks Routing - Piping and Tubing explains how to create, edit and manage Piping and Tubing
                      routes, from the
                      critical routing components and their design requirements to the subassemblies that contain the
                      routes.</td>
                    <td>2 days</td>
                    <td><button class="btn btn-md btn-primary btn-dialog" data-toggle="modal"
                        data-target="#trainingForm" data-type="training">Get a
                        Quote</button></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="tab-pane fade" id="simulation">
              <table class="table display mt-3 clickable-rows row-border  catalog" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th width="30%">COURSE OUTLINE</th>
                    <th>DESCRIPTION</th>
                    <th>DURATION</th>
                    <th style="min-width: 120px;">VIEW</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><a
                        href="{{asset('storage/pdfs/training/SolidWorks Simulation/SolidWorks Simulation Essentials.pdf')}}"
                        target="_blank">SolidWorks Simulation Essentials</a></th>
                    <td>Learn how to become more productive with SolidWorks Simulation software. The course offers a
                      comprehensive hands-on training on the applications of SolidWorks Simulation.</td>
                    <td>3 days</td>
                    <td><button class="btn btn-md btn-primary btn-dialog" data-toggle="modal"
                        data-target="#trainingForm" data-type="training">Get a
                        Quote</button></td>
                  </tr>
                  <tr>
                    <th scope="row"><a
                        href="{{asset('storage/pdfs/training/SolidWorks Simulation/SolidWorks Simulation Professional - Training Outline.pdf')}}"
                        target="_blank">SolidWorks Simulation Professional</a></th>
                    <td>Learn how to become productive quickly with all the modules of SolidWorks Simulation
                      Professional software.</td>
                    <td>2 days</td>
                    <td><button class="btn btn-md btn-primary btn-dialog" data-toggle="modal"
                        data-target="#trainingForm" data-type="training">Get a
                        Quote</button></td>
                  </tr>
                  <tr>
                    <th scope="row"><a
                        href="{{asset('storage/pdfs/training/SolidWorks Simulation/SolidWorks Simulation - Dynamics.pdf')}}"
                        target="_blank">SolidWorks Simulation Dynamics</a></th>
                    <td>Learn how to become productive quickly with the Dynamics modules provided with SolidWorks
                      Simulation Premium.</td>
                    <td>2 days</td>
                    <td><button class="btn btn-md btn-primary btn-dialog" data-toggle="modal"
                        data-target="#trainingForm" data-type="training">Get a
                        Quote</button></td>
                  </tr>
                  <tr>
                    <th scope="row"><a
                        href="{{asset('storage/pdfs/training/SolidWorks Simulation/SolidWorks Simulation - Nonlinear.pdf')}}"
                        target="_blank">SolidWorks Simulation Nonlinear</a></th>
                    <td>Features a hands-on experience on the use of the SolidWorks Simulation nonlinear module.</td>
                    <td>2 days</td>
                    <td><button class="btn btn-md btn-primary btn-dialog" data-toggle="modal"
                        data-target="#trainingForm" data-type="training">Get a
                        Quote</button></td>
                  </tr>
                  <tr>
                    <th scope="row"><a
                        href="{{asset('storage/pdfs/training/SolidWorks Simulation/SolidWorks Flow Simulation.pdf')}}"
                        target="_blank">SolidWorks Flow Simulation</a></th>
                    <td>Provides an in-depth session on the basics of turbulent fluid flow analysis, in addition to
                      covering meshing concerns, modeling concerns, analysis, post-processing, available options and
                      preferences.</td>
                    <td>2 days</td>
                    <td><button class="btn btn-md btn-primary btn-dialog" data-toggle="modal"
                        data-target="#trainingForm" data-type="training">Get a Quote</button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"><a
                        href="{{asset('storage/pdfs/training/SolidWorks Simulation/SolidWorks Motion.pdf')}}"
                        target="_blank">SolidWorks Motion</a></th>
                    <td>This course will teach you how to use SolidWorks Motion to study the kinematics and dynamic
                      behavior of your SolidWorks assembly models.</td>
                    <td>2 days</td>
                    <td><button class="btn btn-md btn-primary btn-dialog" data-toggle="modal"
                        data-target="#trainingForm" data-type="training">Get a Quote</button></td>
                  </tr>
                  <tr>
                    <th scope="row"><a
                        href="{{asset('storage/pdfs/training/SolidWorks Simulation/SolidWorks Plastics.pdf')}}"
                        target="_blank">SolidWorks Plastics</a></th>
                    <td>The SOLIDWORKS Plastics course teaches you how to use specialized simulation software tools to
                      predict how melted
                      plastic flows during the injection molding process. The SOLIDWORKS Plastics course covers all the
                      features and functions
                      of both SOLIDWORKS Plastics Professional (for part designers) and SOLIDWORKS Plastics Premium (for
                      mold designers).</td>
                    <td>3 days</td>
                    <td><button class="btn btn-md btn-primary btn-dialog" data-toggle="modal"
                        data-target="#trainingForm" data-type="training">Get a Quote</button></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="tab-pane fade" id="pdm">
              <table class="table display mt-3  clickable-rows row-border  catalog" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th width="30%">COURSE OUTLINE</th>
                    <th>DESCRIPTION</th>
                    <th>DURATION</th>
                    <th style="min-width: 120px;">VIEW</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><a href="{{asset('storage/pdfs/training/SolidWorks PDM/Using SolidWorks PDM.pdf')}}"
                        target="_blank">Using SolidWorks PDM (Contributor &amp; Editor)</a></th>
                    <td>The focus of this course is on the fundamental skills and concepts central to the successful use
                      of SolidWorks PDM. The intended audience for this course is anyone who will edit files with
                      SolidWorks PDM.</td>
                    <td>1 days</td>
                    <td><button class="btn btn-md btn-primary btn-dialog" data-toggle="modal"
                        data-target="#trainingForm" data-type="training">Get a Quote</button></td>
                  </tr>
                  <tr>
                    <th scope="row"><a
                        href="{{asset('storage/pdfs/training/SolidWorks PDM/Administering SolidWorks PDM Standard.pdf')}}"
                        target="_blank">Administering SolidWorks PDM Standard</a></th>
                    <td>The focus of this course is on the fundamental skills and concepts central to the successful use
                      of SOLIDWORKS PDM. The intended audience for this course is anyone who will setup and/or
                      administer SOLIDWORKS PDM.</td>
                    <td>2 days</td>
                    <td><button class="btn btn-md btn-primary btn-dialog" data-toggle="modal"
                        data-target="#trainingForm" data-type="training">Get a
                        Quote</button></td>
                  </tr>
                  <tr>
                    <th scope="row"><a
                        href="{{asset('storage/pdfs/training/SolidWorks PDM/Administering SolidWorks PDM Professional.pdf')}}"
                        target="_blank">Administering SolidWorks PDM Professional</a></th>
                    <td>The focus of this course is on the fundamental skills and concepts central to the successful use
                      of SOLIDWORKS
                      PDM. The intended audience for this course is anyone who will setup and/or administer SOLIDWORKS
                      PDM.</td>
                    <td>2 days</td>
                    <td><button class="btn btn-md btn-primary btn-dialog" data-toggle="modal"
                        data-target="#trainingForm" data-type="training">Get a
                        Quote</button></td>
                  </tr>
                  <tr>
                    <th scope="row"><a
                        href="{{asset('storage/pdfs/training/SolidWorks PDM/API Fundamentals of SolidWorks PDM.pdf')}}"
                        target="_blank">SolidWorks PDM API Fundamentals</a></th>
                    <td>This course teaches programmers how to use the SolidWorks PDM API (Application Programming
                      Interface) to automate and customize SolidWorks PDM. The intended audience for this course is any
                      programmer who will develop applications for automating, customizing or enhancing the
                      functionality of SolidWorks PDM.</td>
                    <td>2 days</td>
                    <td><button class="btn btn-md btn-primary btn-dialog" data-toggle="modal"
                        data-target="#trainingForm" data-type="training">Get a
                        Quote</button></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="tab-pane fade" id="electrical">
              <table class="table display mt-3  clickable-rows row-border catalog" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th width="30%">COURSE OUTLINE</th>
                    <th>DESCRIPTION</th>
                    <th>DURATION</th>
                    <th style="min-width: 120px;">VIEW</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><a
                        href="{{asset('storage/pdfs/training/SolidWorks Electrical/SolidWorks Electrical - Schematic.pdf')}}"
                        target="_blank">SolidWorks Electrical - Schematic</a></th>
                    <td>Electrical 2D The goal of this course is to teach you how to use SolidWorks Electrical to
                      optimize your drawings and designs for manufacturability so you can maximize quality, avoid rework
                      and decrease time to market. This course is focused on 2D Design.</td>
                    <td>3 days</td>
                    <td><button class="btn btn-md btn-primary btn-dialog" data-toggle="modal"
                        data-target="#trainingForm" data-type="training">Get a
                        Quote</button></td>
                  </tr>
                  <tr>
                    <th scope="row"><a
                        href="{{asset('storage/pdfs/training/SolidWorks Electrical/SolidWorks Electrical - 3D.pdf')}}"
                        target="_blank">SolidWorks Electrical - 3D</a></th>
                    <td>The goal of this course is to teach you how to use SolidWorks Electrical to optimize your
                      drawings and designs for manufacturability so you can maximize quality, avoid rework and decrease
                      time to market. This course is focused on 3D Design.</td>
                    <td>1 day</td>
                    <td><button class="btn btn-md btn-primary btn-dialog" data-toggle="modal"
                        data-target="#trainingForm" data-type="training">Get a Quote</button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"><a
                        href="{{asset('storage/pdfs/training/SolidWorks Electrical/SolidWorks Electrical - Advanced.pdf')}}"
                        target="_blank">SolidWorks Electrical - Advanced</a></th>
                    <td>The goal of this course is to teach you more advanced topics not covered in the standard
                      SolidWorks Electrical training courses.</td>
                    <td>2 days</td>
                    <td><button class="btn btn-md btn-primary btn-dialog" data-toggle="modal"
                        data-target="#trainingForm" data-type="training">Get a
                        Quote</button></td>
                  </tr>
                  <tr>
                    <th scope="row"><a
                        href="{{asset('storage/pdfs/training/SolidWorks Electrical/SolidWorks PCB Essentials.pdf')}}"
                        target="_blank">SolidWorks PCB</a></th>
                    <td>The SolidWorks PCB course covers the essential tools required for developing a PCB design from
                      logic schematics through to component placement and routing of traces on the board.</td>
                    <td>3 days</td>
                    <td><button class="btn btn-md btn-primary btn-dialog" data-toggle="modal"
                        data-target="#trainingForm" data-type="training">Get a Quote</button></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="tab-pane fade" id="composer">
              <table class="table display mt-3  clickable-rows row-border  catalog" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th width="30%">COURSE OUTLINE</th>
                    <th>DESCRIPTION</th>
                    <th>DURATION</th>
                    <th style="min-width: 120px;">VIEW</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><a
                        href="{{asset('storage/pdfs/training/SolidWorks Composer/Using SolidWorks Composer.pdf')}}"
                        target="_blank">SolidWorks Composer Essentials</a></th>
                    <td>SolidWorks Composer Essentials teaches you how to use the SolidWorks Composer software to create
                      2D and 3D outputs from CAD design data. You will also learn how to create animations and update
                      views when CAD files change.</td>
                    <td>3 days</td>
                    <td><button class="btn btn-md btn-primary btn-dialog" data-toggle="modal"
                        data-target="#trainingForm" data-type="training">Get a
                        Quote</button></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="tab-pane fade" id="cam">
              <table class="table display mt-3  clickable-rows row-border  catalog" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th width="30%">COURSE OUTLINE</th>
                    <th>DESCRIPTION</th>
                    <th>DURATION</th>
                    <th style="min-width: 120px;">VIEW</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><a
                        href="{{asset('storage/pdfs/training/SolidWorks CAM/SolidWorks CAM Standard.pdf')}}"
                        target="_blank">SolidWorks CAM Standard</a></th>
                    <td>This course introduces fundamentals and best practices in SOLIDWORKS CAM. The goal is to build
                      on the current knowledge of designers or engineers in generating, modifying and post process 2.5
                      axis milling toolpaths used for machining parts.</td>
                    <td>2.5 days</td>
                    <td><button class="btn btn-md btn-primary btn-dialog" data-toggle="modal"
                        data-target="#trainingForm" data-type="training">Get a Quote</button></td>
                  </tr>
                  <tr>
                    <th scope="row"><a
                        href="{{asset('storage/pdfs/training/SolidWorks CAM/SolidWorks CAM Professional.pdf')}}"
                        target="_blank">SolidWorks CAM Professional</a></th>
                    <td>This course teaches how to use the SOLIDWORKS CAM Professional software to machine parts
                      utilizing advanced
                      functionality such as: CAM or SOLIDWORKS configurations, VoluMill, mill machining in the context
                      of an assembly, and 3 +
                      2 machining. The course also teaches how to generate, modify and post process 2 axis turning
                      toolpaths used for the
                      machining of SOLIDWORKS part files.</td>
                    <td>2 days</td>
                    <td><button class="btn btn-md btn-primary btn-dialog" data-toggle="modal"
                        data-target="#trainingForm" data-type="training">Get a Quote</button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@stop
@include('scripts.dataTables')
@push('after-scripts')
<script>
  $(function(){
  Cookies.remove("contactCaptureForm");
  Cookies.remove("trainingOpt");
  $('.btn-md.btn-dialog').click(function(){
    Cookies.remove("trainingOpt");
    Cookies.remove("contactCaptureForm");
    var btn = $(this);
    Cookies.set("trainingOpt", btn.data('training'), { path: '/' });
  })
  $('#contactModal').on('hide.bs.modal', function(){
    Cookies.remove("trainingOpt");
    Cookies.remove("contactCaptureForm");
    Cookies.remove("contactCaptureForm");
  })

  $('.custom-nav-pills .nav-link').click(function(){
      var tab = $(this).attr('href');
      $('.custom-nav-pills .tab-pane').removeClass('active');
      $('.custom-nav-pills .tab-pane[id="'+tab.replace('#', '')+'"]').addClass('active in');
  });

  var active = $('.custom-nav-pills .nav-link.active').attr('href');
  if(active !== undefined){
    active = active.replace('#', '')
    $('.custom-nav-pills .tab-pane').removeClass('active');
    $('.custom-nav-pills .tab-pane[id="'+active+'"]').addClass('active in');
  }else{
    $('.custom-nav-pills .nav-link').first().click();
  }

  $('.section-left-icon-group .icon-block').matchHeight();

  var table =  $('.catalog').DataTable( {
      responsive: true,
      bPaginate: false,
        "pagingType": "full_numbers",
      "bLengthChange": false,
      "bFilter": true,
      "bInfo": false,
      "bSort": false,
       dom: 'Bfrtip',
       buttons: [
         {
          extend: 'pdf',
          text: 'EXPORT PDF',
        },
        "print"
      ],
      "columnDefs": [
          {
            "targets": [3],
            "searchable": false,
            "sortable":false
          },
          {
            "targets": [1],
            "sortable":false
          },
          {
            "targets": [0],
             "width": "30%"
          }
      ],
  });
})
</script>
@endpush

@push('after-scripts')
<script>
  $(function () {
    var swiper = new Swiper('#testimonialss .swiper-container', {
      pagination: {
        el: '.swiper-pagination',
      },
      paginationClickable: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      speed: 600,
      direction: 'horizontal',
      slidesPerView: '1',
      centeredSlides: true,
      spaceBetween: 0,
      mousewheelControl: true,
      autoplay: 2500,
      keyboardControl: true,
      autoplayDisableOnInteraction: false
    });
  })
</script>
@endpush

@push('foot')
<div class="modal fade" id="trainingForm" tabindex="-1" role="dialog" aria-labelledby="trainingForm" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Get Professional Training</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div data-form-block-id="efff1c47-69ad-e911-a987-000d3a3702ca"></div>
        <div id="dk7jKGkgPvF_6lcaFb16Z6XkhjPdfPz4kUDZk5TYrEH8"></div>
      </div>
    </div>
  </div>
</div>
@endpush