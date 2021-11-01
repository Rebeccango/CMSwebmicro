@extends('layouts.layout')
@section('title')
  Instructor Led Online Custom Training
@stop
@section('meta')
  <link rel="canonical" href="{{route('instructor-led-online-custom-training')}}"/>
@stop
@section('description')@stop
@section('keywords')@stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
style="min-height:450px; background-image:url({{asset('storage/banners/training-banner-solidworks.jpg')}})">
  <div class="trans-heading">
    <div class="container-fluid">
      <div class="content white-content d-flex justify-content-center align-items-center">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
            <p class="title">Instructor Lead Training</p>
            <p>Solidworks Training</p>
          </div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-top: 15px; padding:0;">
						@include('layouts.generic_contact_buttons')
					</div>
        </div>
      </div>
    </div>
  </div>
</section>
<section  class="pb-0" >
  <div class="container-fluid">
    <div class="content">
      <div class="section-title center-block mx-auto">
        <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">SolidWorks Instructor Lead Training</h1>
        <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
      </div>
    </div>
  </div>
</section>
  <section class="pt-0">
    <div class="container-fluid">
      <div class="section-block row align-items-top px-3">
        <div class="col-lg-6 col-sm-12 order-last order-md-first order-sm-last order-xs-last">
          <section class="p-0">
            <div class="container-fluid">
              <div class="section-block" id="browse-catalog">
                <h2 class="main-title">Browse Our SolidWorks Course Catalog</h2>
                <div class="custom-nav-pills">
              		<ul class="nav nav-pills" role="tablist">
                	  <li class="nav-item active">
                      <a class="nav-link" data-toggle="tab" role="tab" href="#3dcad" role="tab"><h3 style="margin:0">SolidWorks 3D CAD</h3></a>
                	  </li>
                	  <li class="nav-item">
                	    <a class="nav-link" data-toggle="tab" role="tab" href="#simulation"><h3 style="margin:0">SIMULATION / FEA / CFD</h3></a>
                	  </li>
                	  <li class="nav-item">
                	    <a class="nav-link" data-toggle="tab" role="tab" href="#pdm"><h3 style="margin:0">PDM</h3></a>
                	  </li>
                    <li class="nav-item">
                	    <a class="nav-link" data-toggle="tab" role="tab" href="#electrical"><h3 style="margin:0">ELECTRICAL</h3></a>
                	  </li>
                    <li class="nav-item">
                	    <a class="nav-link" data-toggle="tab" role="tab" href="#plastics"><h3 style="margin:0">PLASTICS</h3></a>
                	  </li>
                    <li class="nav-item">
                	    <a class="nav-link" data-toggle="tab" role="tab" href="#composer" ><h3 style="margin:0">COMPOSER</h3></a>
                	  </li>
                	</ul>
                	<div class="tab-content">
                    <div class="tab-pane fade" id="3dcad">
                      <table class="table display mt-3  clickable-rows row-border  catalog" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th>COURSE OUTLINE</th>
                            <th class="d-none">DESCRIPTION</th>
                            <th class="d-none">DURATION</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row"><a href="{{asset('storage/pdfs/solidworks/training/102_SolidWorks_Parts_Assemblies_Drawings.pdf')}}" target="_blank">SolidWorks Parts, Assemblies & Drawings</a></th>
                            <td>The course enables students to build and enhance on their current knowledge within SolidWorks mechanical design automation software. This will allow effective parametric modeling of parts, assemblies and advanced drawing creation.</td>
                            <td>5 days</td>
                            <td><button class="btn btn-md btn-primary btn-dialog" id="quote" data-wow-duration="1s" data-toggle="modal" data-target="#contactModal" data-wow-delay="0.2s" data-type="training" data-training="SolidWorks Parts, Assemblies & Drawings"data-title="Get a free quote">Get a Quote</button></td>
                          </tr>
                          <tr>
                            <th scope="row"><a href="{{asset('storage/pdfs/solidworks/training/104_SolidWorks_Advanced_Part_Modeling.pdf')}}" target="_blank">SolidWorks Advanced Part Modeling</a></th>
                            <td>Learn how to use multibody solids, sweeping and lofting features, and the more advanced shaping capabilities of SolidWorks.</td>
                            <td>2 days</td>
                            <td><button class="btn btn-md btn-primary btn-dialog" id="quote" data-wow-duration="1s" data-toggle="modal" data-target="#contactModal" data-wow-delay="0.2s" data-type="training" data-training="SolidWorks Advanced Part Modeling"data-title="Get a free quote">Get a Quote</button></td>
                          </tr>
                          <tr>
                            <th scope="row"><a href="{{asset('storage/pdfs/solidworks/training/105_SolidWorks_Assembly_Modeling.pdf')}}" target="_blank">SolidWorks Assembly Modeling</a></th>
                            <td>Assembly Modeling teaches students how to maximize their use of the assembly modeling capabilities of SolidWorks mechanical design automation software.</td>
                            <td>2 days</td>
                            <td><button class="btn btn-md btn-primary btn-dialog" id="quote" data-wow-duration="1s" data-toggle="modal" data-target="#contactModal" data-wow-delay="0.2s" data-type="training" data-training="SolidWorks Assembly Modeling"data-title="Get a free quote">Get a Quote</button></td>
                          </tr>
                          <tr>
                            <th scope="row"><a href="{{asset('storage/pdfs/solidworks/training/109_SolidWorks_Surface_Modeling.pdf')}}" target="_blank">SolidWorks Surface Modeling</a></th>
                            <td>Learn how to build free form shapes, repair imported geometry, use surface to create complex features in SolidWorks.</td>
                            <td>2 days</td>
                            <td><button class="btn btn-md btn-primary btn-dialog" id="quote" data-wow-duration="1s" data-toggle="modal" data-target="#contactModal" data-wow-delay="0.2s" data-type="training" data-training="SolidWorks Surface Modeling"data-title="Get a free quote">Get a Quote</button></td>
                          </tr>
                          <tr>
                            <th scope="row"><a href="{{asset('storage/pdfs/solidworks/training/106_SolidWorks_Sheet_Metal-1.pdf')}}" target="_blank">SolidWorks Sheet Metal</a></th>
                            <td>Learn how to build standalone sheet metal parts, convert parts to sheet metal, and create parts in the context of an assembly.</td>
                            <td>1.5 days</td>
                            <td><button class="btn btn-md btn-primary btn-dialog" id="quote" data-wow-duration="1s" data-toggle="modal" data-target="#contactModal" data-wow-delay="0.2s" data-type="training" data-training="SolidWorks Sheet Metal"data-title="Get a free quote">Get a Quote</button></td>
                          </tr>
                          <tr>
                            <th scope="row"><a href="{{asset('storage/pdfs/solidworks/training/107_SolidWorks_Weldments-1.pdf')}}" target="_blank">SolidWorks Weldments</a></th>
                            <td>Learn how to use SolidWorks to create welded structures with standard structural members. Weld beads are also covered.</td>
                            <td>1 days</td>
                            <td><button class="btn btn-md btn-primary btn-dialog" id="quote" data-wow-duration="1s" data-toggle="modal" data-target="#contactModal" data-wow-delay="0.2s" data-type="training" data-training="SolidWorks Weldments"data-title="Get a free quote">Get a Quote</button></td>
                          </tr>
                          <tr>
                            <th scope="row"><a href="{{asset('storage/pdfs/solidworks/training/108_SolidWorks_Mold-Design1-1.pdf')}}" target="_blank">SolidWorks Mold Design</a></th>
                            <td>Learn several manual mold creation techniques and how to use the Mold Tools included with SolidWorks standard software.</td>
                            <td>2 days</td>
                            <td><button class="btn btn-md btn-primary btn-dialog" id="quote" data-wow-duration="1s" data-toggle="modal" data-target="#contactModal" data-wow-delay="0.2s" data-type="training" data-training="SolidWorks Mold Design"data-title="Get a free quote">Get a Quote</button></td>
                          </tr>
                          <tr>
                            <th scope="row"><a href="{{asset('storage/pdfs/solidworks/training/112_SolidWorks_Routing_Electrical_Piping_Tubing.pdf')}}" target="_blank">SolidWorks Routing: Electrical, Piping and Tubing</a></th>
                            <td>Learn how to create, edit and manage Piping, Tubing and Electrical routes, from the critical routing components and their design requirements to the sub-assemblies that contain the routes.</td>
                            <td>3 days</td>
                            <td><button class="btn btn-md btn-primary btn-dialog" id="quote" data-wow-duration="1s" data-toggle="modal" data-target="#contactModal" data-wow-delay="0.2s" data-type="training" data-training="SolidWorks Routing: Electrical, Piping and Tubing"data-title="Get a free quote">Get a Quote</button></td>
                          </tr>
                          <tr>
                            <th scope="row"><a href="{{asset('storage/pdfs/solidworks/training/110_SolidWorks-Routing_Electrical-1.pdf')}}" target="_blank">SolidWorks Routing: Electrical</a></th>
                            <td>Learn how to create, edit and manage Electrical routes, from the critical routing components and their design requirements to the sub-assemblies that contain the routes.</td>
                            <td>2 days</td>
                            <td><button class="btn btn-md btn-primary btn-dialog" id="quote" data-wow-duration="1s" data-toggle="modal" data-target="#contactModal" data-wow-delay="0.2s" data-type="training" data-training="SolidWorks Routing: Electrical"data-title="Get a free quote">Get a Quote</button></td>
                          </tr>
                          <tr>
                            <th scope="row"><a href="{{asset('storage/pdfs/solidworks/training/111_SolidWorks_Routing_Piping_Tubing.pdf')}}" target="_blank">SolidWorks Routing: Piping and Tubing</a></th>
                            <td>Learn how to create, edit and manage Pipe and Tube routes, from the critical routing components and their design requirements to the sub-assemblies that contain the routes.</td>
                            <td>2 days</td>
                            <td><button class="btn btn-md btn-primary btn-dialog" id="quote" data-wow-duration="1s" data-toggle="modal" data-target="#contactModal" data-wow-delay="0.2s" data-type="training" data-training="SolidWorks Routing: Piping and Tubing"data-title="Get a free quote">Get a Quote</button></td>
                          </tr>
                          <tr>
                            <th scope="row"><a href="{{asset('storage/pdfs/solidworks/training/114_SolidWorks-API_Fundamentals1.pdf')}}" target="_blank">SolidWorks API</a></th>
                            <td>Learn how to use the SolidWorks API (Application Programming Interface) to automate and customize SolidWorks.</td>
                            <td>3 days</td>
                            <td><button class="btn btn-md btn-primary btn-dialog" id="quote" data-wow-duration="1s" data-toggle="modal" data-target="#contactModal" data-wow-delay="0.2s" data-type="training" data-training="SolidWorks API"data-title="Get a free quote">Get a Quote</button></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="tab-pane fade" id="simulation">
                      <table class="table display mt-3 clickable-rows row-border  catalog" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th>COURSE OUTLINE</th>
                            <th class="d-none">DESCRIPTION</th>
                            <th class="d-none">DURATION</th>
                            <th>VIEW</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row"><a href="{{asset('storage/pdfs/solidworks/training/200_SolidWorks_Simulation_Essentials.pdf')}}" target="_blank">SolidWorks Simulation Essentials</a></th>
                            <td>Learn how to become more productive with SolidWorks Simulation software. The course offers a comprehensive hands-on training on the applications of SolidWorks Simulation.</td>
                            <td>3 days</td>
                            <td><button class="btn btn-md btn-primary btn-dialog" id="quote" data-wow-duration="1s" data-toggle="modal" data-target="#contactModal" data-wow-delay="0.2s" data-type="training" data-training="SolidWorks Simulation Essentials"data-title="Get a free quote">Get a Quote</button></td>
                          </tr>
                          <tr>
                            <th scope="row"><a href="{{asset('storage/pdfs/solidworks/training/203_SolidWorks_Simulation_Professional.pdf')}}" target="_blank">SolidWorks Simulation Professional</a></th>
                            <td>Learn how to become productive quickly with all the modules of SolidWorks Simulation Professional software.</td>
                            <td>2 days</td>
                            <td><button class="btn btn-md btn-primary btn-dialog" id="quote" data-wow-duration="1s" data-toggle="modal" data-target="#contactModal" data-wow-delay="0.2s" data-type="training" data-training="SolidWorks Simulation Professional"data-title="Get a free quote">Get a Quote</button></td>
                          </tr>
                          <tr>
                            <th scope="row"><a href="{{asset('storage/pdfs/solidworks/training/201_SolidWorks_Simulation_Dynamics.pdf')}}" target="_blank">SolidWorks Simulation Dynamics</a></th>
                            <td>Learn how to become productive quickly with the Dynamics modules provided with SolidWorks Simulation Premium.</td>
                            <td>2 days</td>
                            <td><button class="btn btn-md btn-primary btn-dialog" id="quote" data-wow-duration="1s" data-toggle="modal" data-target="#contactModal" data-wow-delay="0.2s" data-type="training" data-training="SolidWorks Simulation Dynamics"data-title="Get a free quote">Get a Quote</button></td>
                          </tr>
                          <tr>
                            <th scope="row"><a href="{{asset('storage/pdfs/solidworks/training/202_SolidWorks_Simulation_Non_Linear.pdf')}}" target="_blank">SolidWorks Simulation Nonlinear</a></th>
                            <td>Features a hands-on experience on the use of the SolidWorks Simulation nonlinear module.</td>
                            <td>2 days</td>
                            <td><button class="btn btn-md btn-primary btn-dialog" id="quote" data-wow-duration="1s" data-toggle="modal" data-target="#contactModal" data-wow-delay="0.2s" data-type="training" data-training="SolidWorks Simulation Nonlinear"data-title="Get a free quote">Get a Quote</button></td>
                          </tr>
                          <tr>
                            <th scope="row"><a href="{{asset('storage/pdfs/solidworks/training/204_SolidWorks_Flow_Simulation.pdf')}}" target="_blank">SolidWorks Flow Simulation</a></th>
                            <td>Provides an in-depth session on the basics of turbulent fluid flow analysis, in addition to covering meshing concerns, modeling concerns, analysis, post-processing, available options and preferences.</td>
                            <td>3 days</td>
                            <td><button class="btn btn-md btn-primary btn-dialog" id="quote" data-wow-duration="1s" data-toggle="modal" data-target="#contactModal" data-wow-delay="0.2s" data-type="training" data-training="SolidWorks Flow Simulation"data-title="Get a free quote">Get a Quote</button></td>
                          </tr>
                          <tr>
                            <th scope="row"><a href="{{asset('storage/pdfs/solidworks/training/205_SolidWorks_Motion.pdf')}}" target="_blank">SolidWorks Motion</a></th>
                            <td>This course will teach you how to use SolidWorks Motion to study the kinematics and dynamic behavior of your SolidWorks assembly models.</td>
                            <td>2 days</td>
                            <td><button class="btn btn-md btn-primary btn-dialog" id="quote" data-wow-duration="1s" data-toggle="modal" data-target="#contactModal" data-wow-delay="0.2s" data-type="training" data-training="SolidWorks Motion"data-title="Get a free quote">Get a Quote</button></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="tab-pane fade" id="pdm">
                      <table class="table display mt-3  clickable-rows row-border  catalog" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th>COURSE OUTLINE</th>
                            <th class="d-none">DESCRIPTION</th>
                            <th class="d-none">DURATION</th>
                            <th>VIEW</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row"><a href="{{asset('storage/pdfs/solidworks/training/302_Using_SolidWorks_PDM.pdf')}}" target="_blank">Using SolidWorks PDM (Contributor &amp; Editor)</a></th>
                            <td>The focus of this course is on the fundamental skills and concepts central to the successful use of SolidWorks PDM. The intended audience for this course is anyone who will edit files with SolidWorks PDM.</td>
                            <td>2 days</td>
                            <td><button class="btn btn-md btn-primary btn-dialog" id="quote" data-wow-duration="1s" data-toggle="modal" data-target="#contactModal" data-wow-delay="0.2s" data-type="training" data-training="Using SolidWorks PDM (Contributor &amp; Editor)"data-title="Get a free quote">Get a Quote</button></td>
                          </tr>
                          <tr>
                            <th scope="row"><a href="{{asset('storage/pdfs/solidworks/training/301_Administering_SolidWorks_Enterprise_PDM')}}" target="_blank">Administering SolidWorks PDM</a></th>
                            <td>The focus of this course is on the fundamental skills and concepts central to the successful use of SolidWorks PDM. The intended audience for this course is anyone who will setup and/or administer SolidWorks PDM.</td>
                            <td>2 days</td>
                            <td><button class="btn btn-md btn-primary btn-dialog" id="quote" data-wow-duration="1s" data-toggle="modal" data-target="#contactModal" data-wow-delay="0.2s" data-type="training" data-training="Administering SolidWorks PDM"data-title="Get a free quote">Get a Quote</button></td>
                          </tr>
                          <tr>
                            <th scope="row"><a href="{{asset('storage/pdfs/solidworks/training/114_SolidWorks-API_Fundamentals1.pdf')}}" target="_blank">SolidWorks PDM API Fundamentals</a></th>
                            <td>This course teaches programmers how to use the SolidWorks PDM API (Application Programming Interface) to automate and customize SolidWorks PDM. The intended audience for this course is any programmer who will develop applications for automating, customizing or enhancing the functionality of SolidWorks PDM.</td>
                            <td>2 days</td>
                            <td><button class="btn btn-md btn-primary btn-dialog" id="quote" data-wow-duration="1s" data-toggle="modal" data-target="#contactModal" data-wow-delay="0.2s" data-type="training" data-training="SolidWorks PDM API Fundamentals"data-title="Get a free quote">Get a Quote</button></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="tab-pane fade" id="electrical">
                      <table class="table display mt-3  clickable-rows row-border catalog" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th>COURSE OUTLINE</th>
                            <th class="d-none">DESCRIPTION</th>
                            <th class="d-none">DURATION</th>
                            <th>VIEW</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row"><a href="{{asset('storage/pdfs/solidworks/training/SolidWorks-Electrical-Schematics-Course-2D.pdf')}}" target="_blank">SolidWorks Electrical - Schematic</a></th>
                            <td>Electrical 2D The goal of this course is to teach you how to use SolidWorks Electrical to optimize your drawings and designs for manufacturability so you can maximize quality, avoid rework and decrease time to market. This course is focused on 2D Design.</td>
                            <td>2.5 days</td>
                            <td><button class="btn btn-md btn-primary btn-dialog" id="quote" data-wow-duration="1s" data-toggle="modal" data-target="#contactModal" data-wow-delay="0.2s" data-type="training" data-training="SolidWorks Electrical - Schematic"data-title="Get a free quote">Get a Quote</button></td>
                          </tr>
                          <tr>
                            <th scope="row"><a href="{{asset('storage/pdfs/solidworks/training/SolidWorks-Electrical-3D-Course-1.pdf')}}" target="_blank">SolidWorks Electrical - 3D</a></th>
                            <td>The goal of this course is to teach you how to use SolidWorks Electrical to optimize your drawings and designs for manufacturability so you can maximize quality, avoid rework and decrease time to market. This course is focused on 3D Design.</td>
                            <td>1 day</td>
                            <td><button class="btn btn-md btn-primary btn-dialog" id="quote" data-wow-duration="1s" data-toggle="modal" data-target="#contactModal" data-wow-delay="0.2s" data-type="training" data-training="SolidWorks Electrical - 3D"data-title="Get a free quote">Get a Quote</button></td>
                          </tr>
                          <tr>
                            <th scope="row"><a href="{{asset('storage/pdfs/solidworks/training/SolidWorks-Electrical-Advanced.pdf')}}" target="_blank">SolidWorks Electrical - Advanced</a></th>
                            <td>The goal of this course is to teach you more advanced topics not covered in the standard SolidWorks Electrical training courses.</td>
                            <td>2 days</td>
                            <td><button class="btn btn-md btn-primary btn-dialog" id="quote" data-wow-duration="1s" data-toggle="modal" data-target="#contactModal" data-wow-delay="0.2s" data-type="training" data-training="SolidWorks Electrical - Advanced"data-title="Get a free quote">Get a Quote</button></td>
                          </tr>
                          <tr>
                            <th scope="row"><a href="{{asset('storage/pdfs/solidworks/training/SOLIDWORKS-PCB-Outline.pdf')}}" target="_blank">SolidWorks PCB</a></th>
                            <td>The SolidWorks PCB course covers the essential tools required for developing a PCB design from logic schematics through to component placement and routing of traces on the board.</td>
                            <td>3 days</td>
                            <td><button class="btn btn-md btn-primary btn-dialog" id="quote" data-wow-duration="1s" data-toggle="modal" data-target="#contactModal" data-wow-delay="0.2s" data-type="training" data-training="SolidWorks PCB"data-title="Get a free quote">Get a Quote</button></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="tab-pane fade" id="plastics">
                      <table class="table display mt-3  clickable-rows row-border  catalog" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th>COURSE OUTLINE</th>
                            <th class="d-none">DESCRIPTION</th>
                            <th class="d-none">DURATION</th>
                            <th>VIEW</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row"><a href="{{asset('storage/pdfs/solidworks/training/206_SolidWorks_Plastics.pdf')}}" target="_blank">SolidWorks Plastics</a></th>
                            <td>The SolidWorks Plastics course teaches you how to use specialized simulation software tools to predict how melted plastic flows during the injection molding process. Predicting how the plastic will flow enables you to predict manufacturing defects such as weld lines, air traps, short shots, and sink marks.</td>
                            <td>1.5 days</td>
                            <td><button class="btn btn-md btn-primary btn-dialog" id="quote" data-wow-duration="1s" data-toggle="modal" data-target="#contactModal" data-wow-delay="0.2s" data-type="training" data-training="SolidWorks Plastics"data-title="Get a free quote">Get a Quote</button></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="tab-pane fade" id="composer">
                      <table class="table display mt-3  clickable-rows row-border  catalog" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th>COURSE OUTLINE</th>
                            <th class="d-none">DESCRIPTION</th>
                            <th class="d-none">DURATION</th>
                            <th>VIEW</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row"><a href="{{asset('storage/pdfs/solidworks/training/500_3DVIA_Composer-1.pdf')}}" target="_blank">SolidWorks Composer Essentials</a></th>
                            <td>SolidWorks Composer Essentials teaches you how to use the SolidWorks Composer software to create 2D and 3D outputs from CAD design data. You will also learn how to create animations and update views when CAD files change.</td>
                            <td>3 days</td>
                            <td><button class="btn btn-md btn-primary btn-dialog" id="quote" data-wow-duration="1s" data-toggle="modal" data-target="#contactModal" data-wow-delay="0.2s" data-type="training" data-training="SolidWorks Composer Essentials"data-title="Get a free quote">Get a Quote</button></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                	</div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="col-lg-6 col-sm-12">
          <iframe src="https://analytics.clickdimensions.com/cadmicrocom-au6my/pages/rdtifr5eeabbvbl84vq8q.html" allowtransparency="true" width="100%" height="700px"  type="text/html"  frameborder="0"></iframe>
        </div>
      </div>
    </div>
  </section>
@stop

@push('after-styles')
  <style>
  .tab-pane{
    overflow-x:scroll !important;
  }
    #browse-catalog td:nth-of-type(2),
    #browse-catalog td:nth-of-type(1){
      display:none;
    }
  </style>
@endpush

@push('after-scripts')
<script>
  $(function(){
    $('#videos .row > div').matchHeight();

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
  })
</script>
@endpush
