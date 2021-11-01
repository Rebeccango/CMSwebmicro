@extends('layouts.layout')
@section('title')
Simerics CFD for SOLIDWORKS
@stop
@section('meta')
<link rel="canonical" href="{{route('simerics')}}" />
@stop
@section('description')SOLIDWORKS 3D CAD software enables you to increase productivity and product development, reduce
manufacturing costs, improve product quality and reliability.@stop
@section('keywords')3D, Design Software, CAD, 3D CAD, SOLIDWORKS, 3D Software, Product Design, Engineering Software, 3D
Design, Design Analysis,Translate, Electrical, PDM, Project Management, Connector, Conceptual Designer, Flow Simulation,
Simulation, Sustainability, Inspection, Model Based Defintion, Professional, Standard, Premium @stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
  style="min-height:350px; background:#2f2f2f;">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto wow fadeIn" data-wow-duration="0.8s"
          data-wow-delay="0.5s">
          <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">Simerics CFD for SOLIDWORKS</h1>
          <div class="section-title-divider"></div>
          <h2 class="h3">Technology by Design</h2>
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
    <div class="content">
      <div class="section-title center-block mx-auto" style="margin-bottom:30px;">
        <h2 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">Computational Fluid Dynamics for SOLIDWORKS
        </h2>
        <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
      </div>
      <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s"
        style="max-width: 750px; text-align: center; margin: 0 auto;">
        Simerics CFD for SOLIDWORKS is a multi-purpose Computational Fluid Dynamics (CFD) and multi-physics simulation
        tool that provides fast and accurate solutions for predicting the real-world performance of a variety of
        products. Through the use of modern-day, innovative architecture and algorithms, Simerics is able to simulate
        complex fluid systems with unparalleled speed and accuracy.
      </p>
      <div class="s20"></div>
    </div>
  </div>
</section>
<section class='section-secondary'>
  <div class="container-fluid">
    <div class="content">
      <div class="row">
        <div class="col-lg-6">
          <img width="100%" style="max-width:600px;"
            src="{{ asset('storage/images/simerics/web_gerotor_ani-1m.gif') }}" />
        </div>
        <div class="col-lg-6">
          <span class="h3">Fast and Accurate Real-World Results </span>
          <p>Simerics utilizes the fundamental laws of conservation of mass, heat, species, and momentum to provide
            accurate and physically meaningful simulations for the purpose of product validation, design optimization,
            problem diagnosis and research. The results have excellent correlation with physical test data for a wide
            range of systems.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="section-title center-block mx-auto" style="margin-bottom:30px;">
    <h2 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">Capabilities of Simerics</h2>
    <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
  </div>
  <div class="container-fluid">

    <div class="section-icon-group row" style="margin-top:-30px;">
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class='icon-content'>
          <div class="icon"
            style="background-image:url('{{ asset('storage/images/simerics/waterjet_streamline_final.gif')}}'); background-size: 250px; width: auto;"
            alt="SolidWorks 3D CAD">
          </div>
          <h3 class="icon-title">Comprehensive physics</h3>
          <div class="icon-body">
            <p>Flow, Turbulence, Conjugate Heat Transfer, Radiation, Aeration, Cavitation, Multi-component Mixing, Free
              Surface, Particles, 1-DOF dynamics.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class='icon-content'>
          <div class="icon"
            style="background-image:url('{{ asset('storage/images/simerics/web_centrifugal_ani-3m.gif')}}'); background-size: 250px; width: auto;"
            alt="SolidWorks 3D CAD">
          </div>
          <h3 class="icon-title">Accurate predictions</h3>
          <div class="icon-body">
            <p>Excellent correlation with test data for a wide range of applications.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class='icon-content'>
          <div class="icon"
            style="background-image:url('{{ asset('storage/images/simerics/bent_axis_cavitation_final.gif')}}'); background-size: 250px; width: auto;"
            alt="SolidWorks 3D CAD">
          </div>
          <h3 class="icon-title">Fast model creation, even faster simulation speed</h3>
          <div class="icon-body">
            <p>Less than an hour from CAD to Simulation, and less than 15 minutes for steady-state results.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class='icon-content'>
          <div class="icon"
            style="background-image:url('{{ asset('storage/images/simerics/web_tip_gap_mesh_final.gif')}}'); background-size: 250px; width: auto;"
            alt="SolidWorks 3D CAD">
          </div>
          <h3 class="icon-title">Able to model complex details down to the micro scale</h3>
          <div class="icon-body">
            <p>Accurately model detailed features with no simplification of the geometry required.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class='section-secondary'>
  <div class="container-fluid">
    <div class="main-title wow fadeInLeft h2" data-wow-duration="1s" data-wow-delay="0.2s" style="margin-top:0;">Key
      Benefits</div>
    <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">Simerics provides state-of-the-art numerical
      capabilities and ease-of-use at a cost equal to or lower than codes with less capability.</p>

    <table class="table table-striped table-responsive" style="margin-top:15px;">
      <tbody style="vertical-align:top">
        <tr>
          <td style="width:20%; padding:10px;">
            <p>
              Fast and automatic meshing. Meshes can be adjusted manually if desired.
            </p>
          </td>
        </tr>
        <tr>
          <td style="padding:10px;">
            <p>
              Fast run-time, fast convergence, and rapid simulation results.
            </p>
          </td>
        </tr>
        <tr>
          <td style="padding:10px;">
            <p>
              Ease-of-Use provides a solution that both Design Engineers and Analysts can leverage.
            </p>
          </td>
        </tr>
        <tr>
          <td style="padding:10px;">
            <p>
              Lower cost of ownership. Choice of perpetual and subscription based licensing.
            </p>
          </td>
        </tr>
        <tr>
          <td style="padding:10px;">
            <p>Application specific templates that provide for significantly shorter set-up times.</p>
          </td>
        </tr>
        <tr>
          <td style="padding:10px;">
            <p>Much less time required to prepare the model for analysis.</p>
          </td>
        </tr>
        <tr>
          <td style="padding:10px;">
            <p>Ability to very quickly extract the fluid volume.</p>
          </td>
        </tr>
        <tr>
          <td style="padding:10px;">
            <p>Automatic sealing “leaks” in the geometry prior to running analyses.</p>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<section>
  <div class="container-fluid">
    <div class="main-title wow fadeInLeft h2" data-wow-duration="1s" data-wow-delay="0.2s" style="margin-top:0;">
      Applications for Simerics</div>
    <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">Listed below are just a few various
      applications where Simerics has been used. If you would like to know more or have any questions, please contact
      us.</p>
    <div class="responsive-tabs-block row" style="margin-top:10px">
      <div class="">
        <!-- required for floating -->
        <ul class="nav nav-tabs tabs-left responsive-tabs" role="tablist">

          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#externalFlow" role="tab">External Flow</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#heatTransfer" role="tab">Heat Transfer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#pumps" role="tab">Pumps</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#valves" role="tab">Valves</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#compressors" role="tab">Compressors</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#turbines" role="tab">Turbines</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#motors" role="tab">Motors</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#particles" role="tab">Particles</a>
          </li>
          {{-- <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#combinedSystems" role="tab">Combined systems</a>
            </li> --}}
          {{-- <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#internalFlow" role="tab">Internal Flow</a>
            </li> --}}
        </ul>
      </div>
      <div class="col-md-8">
        <div class="tab-content responsive-tabsContent">
          <div class="tab-pane" id="externalFlow" role="tabpanel">
            <h3>Internal &amp; External Flow</h3>
            <div class="row">
              <div class="col-lg-12">
                <p>
                  Simerics® MP is a collection of core 3-D CFD capabilities and physical modules that enables accurate
                  virtual testing for multi-purpose (MP) applications involving fluids, heat transfer and
                  fluid-structure interaction.
                </p>
              </div>
              <div class="col-lg-12">
                <img src="{{ asset('storage/images/simerics/img44.jpg')}}" width="100%" height="auto" />
              </div>
            </div>
          </div>
          <div class="tab-pane" id="heatTransfer" role="tabpanel">
            <h3>Heat Transfer</h3>
            <div class="row">
              <div class="col-lg-12">
                <p>Conjugate Heat Transfer: Simerics MP can predict conjugate heat transfer (CHT) through different
                  fluids and solids materials in contact.</p>
              </div>
              <div class="col-lg-12">
                <img src="{{ asset('storage/images/simerics/img42.jpg')}}" width="100%" height="auto" />
              </div>
            </div>
          </div>
          <div class="tab-pane" id="particles" role="tabpanel">
            <h3>Particles</h3>
            <div class="row">
              <div class="col-lg-6">
                <img src="{{ asset('storage/images/simerics/Cyclone.jpg')}}" width="100%" height="auto" />
              </div>
              <div class="col-lg-6">
                <p>The Simerics Particle Module enables the simulation of particles. It tracks individual particles
                  using a Lagrangian Reference Frame.</p>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="pumps" role="tabpanel">
            <h3>Pumps</h3>
            <p>
              This is a partial listing of examples for applications of Simerics with Pumps. To get a fully
              comprehensive list of applications and more information, please contact us.
            </p>
            <div class="panel-group" id="pumps-collapse" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="pump-head-1" style="border-bottom:1px solid #ccc">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#pumps-collapse" href="#pumps-1"
                      aria-expanded="false" aria-controls="pumps-1">
                      <div class="h5" style="margin: 0 0 0 15px;">Orbital Gerotor Motor</div>
                    </a>
                  </h4>
                </div>
                <div id="pumps-1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="pump-head-1">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-lg-12">
                        <p>Simerics-PD predicts flowrate, output power, output torque, efficiency, motor speed, loads,
                          leakage flow, cavitation and aeration, and pressure ripple for orbital gerotor motors.</p>
                      </div>
                      <div class="col-lg-12">
                        <img src="{{ asset('storage/images/simerics/orbital_web_particle_final.gif')}}" width="100%"
                          height="auto" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="panel-heading" role="tab" id="pump-head-2" style="border-bottom:1px solid #ccc">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#pumps-collapse" href="#pumps-2"
                      aria-expanded="false" aria-controls="pumps-2">
                      <div class="h5" style="margin: 0 0 0 15px;">Centrifugal Pump Design</div>
                    </a>
                  </h4>
                </div>
                <div id="pumps-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="pump-head-2">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-lg-12">
                        <p>PumpLinx predicts the head rise, pump power, pump efficiency, Net Positive Suction Head
                          (NPSH), cavitation damage, parasitic losses, pump aeration, bubble formation, pressure
                          ripples, pump leakage, axial loads and side loads in centrifugal pumps. </p>
                      </div>
                      <div class="col-lg-12">
                        <img src="{{ asset('storage/images/simerics/web_centrifugal_ani-1m.gif')}}" width="100%"
                          height="auto" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="panel-heading" role="tab" id="pump-head-3" style="border-bottom:1px solid #ccc">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#pumps-collapse" href="#pumps-3"
                      aria-expanded="false" aria-controls="pumps-3">
                      <div class="h5" style="margin: 0 0 0 15px;">Gear Pumps</div>
                    </a>
                  </h4>
                </div>
                <div id="pumps-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="pump-head-3">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-lg-12">
                        <p>PumpLinx is used to predict the flow rate, power, efficiency, cavitation damage, parasitic
                          losses, aeration, bubble formation, pressure ripples, leakage, axial loads and side loads in
                          external gear pumps and motors.</p>
                      </div>
                      <div class="col-lg-12">
                        <img src="{{ asset('storage/images/simerics/web_gear_ani1m.gif')}}" width="100%"
                          height="auto" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="panel-heading" role="tab" id="pump-head-4" style="border-bottom:1px solid #ccc">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#pumps-collapse" href="#pumps-4"
                      aria-expanded="false" aria-controls="pumps-4">
                      <div class="h5" style="margin: 0 0 0 15px;">Gerotor Pump</div>
                    </a>
                  </h4>
                </div>
                <div id="pumps-4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="pump-head-4">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-lg-12">
                        <p>PumpLinx is used to predict the flow rate, power, efficiency, cavitation damage, parasitic
                          losses, aeration, bubble formation, pressure ripples, leakage, axial loads and side loads in
                          external gear pumps and motors.</p>
                      </div>
                      <div class="col-lg-12">
                        <img src="{{ asset('storage/images/simerics/web_gerotor_ani-2m.gif')}}" width="100%"
                          height="auto" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="panel-heading" role="tab" id="pump-head-5" style="border-bottom:1px solid #ccc">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#pumps-collapse" href="#pumps-5"
                      aria-expanded="false" aria-controls="pumps-5">
                      <div class="h5" style="margin: 0 0 0 15px;">Vane Pump</div>
                    </a>
                  </h4>
                </div>
                <div id="pumps-5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="pump-head-5">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-lg-12">
                        <p>PumpLinx is used to predict the flow rate, power, efficiency, cavitation damage, parasitic
                          losses, aeration, bubble formation, pressure ripples, leakage, axial loads and side loads in
                          external gear pumps and motors.</p>
                      </div>
                      <div class="col-lg-12">
                        <img src="{{ asset('storage/images/simerics/web_vane_ani3m.gif')}}" width="100%"
                          height="auto" />
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="tab-pane" id="valves" role="tabpanel">
            <h3>Valves</h3>
            <p>
              This is a partial listing of examples for applications of Simerics with Valves. To get a fully
              comprehensive list of applications and more information, please contact us.
            </p>
            <div class="panel-group" id="valves-collapse" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="valves-head-1" style="border-bottom:1px solid #ccc">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#valves-collapse" href="#valves-1"
                      aria-expanded="false" aria-controls="valves-1">
                      <div class="h5" style="margin: 0 0 0 15px;">Check Valve (Ball)</div>
                    </a>
                  </h4>
                </div>
                <div id="valves-1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="valves-head-1">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-lg-12">
                        <p>Simerics-MP+ is used to predict the cracking pressure, flow-rates, valve dynamics, valve loss
                          coefficient, valve loads and cavitation damage in valves. Speed enables full transient
                          simulations.</p>
                      </div>
                      <div class="col-lg-12">
                        <img src="https://www.simerics.com/wp-content/uploads/2013/12/web_dynamic_valve_pic1.jpg"
                          width="100%" height="auto" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="panel-heading" role="tab" id="valves-head-2" style="border-bottom:1px solid #ccc">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#valves-collapse" href="#valves-2"
                      aria-expanded="false" aria-controls="valves-2">
                      <div class="h5" style="margin: 0 0 0 15px;">Gear Pump with a Pressure Relief Valve</div>
                    </a>
                  </h4>
                </div>
                <div id="valves-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="valves-head-2">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-lg-12">
                        <iframe style="margin-top:20px; min-height:350px" width="100%" height="auto"
                          src="https://www.youtube.com/embed/TbrCo0JvaPU" frameborder="0" allowfullscreen></iframe>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="compressors" role="tabpanel">
            <h3>Compressors</h3>
            <p>
              This is a partial listing of examples for applications of Simerics with Compressors. To get a fully
              comprehensive list of applications and more information, please contact us.
            </p>
            <div class="panel-group" id="compressors-collapse" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="compressors-head-1" style="border-bottom:1px solid #ccc">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#compressors-collapse" href="#compressors-1"
                      aria-expanded="false" aria-controls="compressors-1">
                      <div class="h5" style="margin: 0 0 0 15px;">Scroll Compressors</div>
                    </a>
                  </h4>
                </div>
                <div id="compressors-1" class="panel-collapse collapse" role="tabpanel"
                  aria-labelledby="compressors-head-1">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-lg-12">
                        <p>Simerics-MP+ can predict the performance of Scroll Compressors and has been validated by
                          comparison with experimental data. The advantage of using Simerics-MP+ for Scroll Compressors
                          is the accuracy of the solution, the ease and ability to create a mesh optimized for the
                          compressor geometry, the ability to account for tight clearances, and the speed of the
                          simulation which has been reported to be 10-30 times faster that the competition.</p>
                      </div>
                      <div class="col-lg-12">
                        <img src="https://www.simerics.com/wp-content/uploads/2015/07/web_tip_gap_mesh_final.gif"
                          width="100%" height="auto" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="panel-heading" role="tab" id="compressors-head-2" style="border-bottom:1px solid #ccc">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#compressors-collapse" href="#compressors-2"
                      aria-expanded="false" aria-controls="compressors-2">
                      <div class="h5" style="margin: 0 0 0 15px;">Twin Screw Compressors</div>
                    </a>
                  </h4>
                </div>
                <div id="compressors-2" class="panel-collapse collapse" role="tabpanel"
                  aria-labelledby="compressors-head-2">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-lg-12">
                        <p>Simerics-MP+ is now being used in conjunction with the grid generation software SCORG© from
                          the City University of London (Kovacevic A.et. al., 2007, Screw compressors – Three
                          dimensional computational fluid dynamics and solid fluid interaction, ISBN 3-540-36302-5, ,
                          2007) to model the performance of Twin Screw Compressors.</p>
                      </div>
                      <div class="col-lg-12">
                        <img src="https://www.simerics.com/wp-content/uploads/2014/04/web_twin_screw_pic2.jpg"
                          width="100%" height="auto" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="panel-heading" role="tab" id="compressors-head-3" style="border-bottom:1px solid #ccc">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#compressors-collapse" href="#compressors-3"
                      aria-expanded="false" aria-controls="compressors-3">
                      <div class="h5" style="margin: 0 0 0 15px;">Axial-Centrifugal Compressors</div>
                    </a>
                  </h4>
                </div>
                <div id="compressors-3" class="panel-collapse collapse" role="tabpanel"
                  aria-labelledby="compressors-head-3">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-lg-12">
                        <p>Simerics-MP+ can be used to predict the performance of Compressors as well as Pumps and has
                          been validated by comparison with experimental data. The advantage of using Simerics-MP+ for
                          Compressors is the ease and ability of the general mesher to create a mesh, even for a complex
                          geometry, and the speed of the simulation which has been reported to be 10-30 times faster
                          that the competition.</p>
                      </div>
                      <div class="col-lg-12">
                        <img
                          src="https://www.simerics.com/wp-content/uploads/2013/12/web_centrifugal_compressor_pic1.jpg"
                          width="100%" height="auto" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="turbines" role="tabpanel">
            <h3>Turbines</h3>
            <p>
              This is a partial listing of examples for applications of Simerics with Turbines. To get a fully
              comprehensive list of applications and more information, please contact us.
            </p>
            <div class="panel-group" id="turbines-collapse" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="turbines-head-1" style="border-bottom:1px solid #ccc">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#turbines-collapse" href="#turbines-1"
                      aria-expanded="false" aria-controls="turbines-1">
                      <div class="h5" style="margin: 0 0 0 15px;">Water Turbine</div>
                    </a>
                  </h4>
                </div>
                <div id="turbines-1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="turbines-head-1">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-lg-12">
                        <p>Simerics-MP+ can be used to predict the performance of water turbines, propellers and
                          waterjets, including the effects of aeration and cavitation.</p>
                      </div>
                      <div class="col-lg-12">
                        <img src="https://www.simerics.com/wp-content/uploads/2015/07/web_water_turbine_ani-1-2m.gif"
                          width="100%" height="auto" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="motors" role="tabpanel">
            <h3>Motors</h3>
            <p>
              This is a partial listing of examples for applications of Simerics with Motors. To get a fully
              comprehensive list of applications and more information, please contact us.
            </p>
            <div class="panel-group" id="motors-collapse" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="motors-head-1" style="border-bottom:1px solid #ccc">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#motors-collapse" href="#motors-1"
                      aria-expanded="false" aria-controls="motors-1">
                      <div class="h5" style="margin: 0 0 0 15px;">Water Turbine</div>
                    </a>
                  </h4>
                </div>
                <div id="motors-1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="motors-head-1">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-lg-12">
                        <p>Simerics-MP+ can be used to predict the performance of water turbines, propellers and
                          waterjets, including the effects of aeration and cavitation.</p>
                      </div>
                      <div class="col-lg-12">
                        <img src="https://www.simerics.com/wp-content/uploads/2015/07/web_water_turbine_ani-1-2m.gif"
                          width="100%" height="auto" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="panel-heading" role="tab" id="motors-head-2" style="border-bottom:1px solid #ccc">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#motors-collapse" href="#motors-2"
                      aria-expanded="false" aria-controls="motors-2">
                      <div class="h5" style="margin: 0 0 0 15px;">Bent Axis Piston Pump</div>
                    </a>
                  </h4>
                </div>
                <div id="motors-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="motors-head-2">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-lg-12">
                        <p>Simerics-MP+ is used to predict the head rise, flow rate, pump/motor power, pump/motor
                          efficiency, cavitation damage, parasitic losses, pump/motor aeration, bubble formation,
                          pressure ripples, pump/motor leakage, axial loads and side loads in bent axis piston pumps and
                          motors.</p>
                      </div>
                      <div class="col-lg-12">
                        <img src="https://www.simerics.com/wp-content/uploads/2013/11/bent_axis_particle_final.gif"
                          width="100%" height="auto" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="combinedSystems" role="tabpanel">
            <h3>Combined Systems</h3>
            <p>
              This is a partial listing of examples for applications of Simerics with Combined Systems. To get a fully
              comprehensive list of applications and more information, please contact us.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section-secondary">
  <div class="section-title center-block mx-auto" style="margin-bottom:30px;">
    <h2 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">Want to learn more or get a quote?</h2>
    <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
  </div>
  <div class="container-fluid">
    <div class="row" style="max-width:700px; margin: 0 auto;">
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center" style="padding:7px;">
        <button class="btn btn-sm btn-white wow fadeInUp btn-dialog" id="contact" data-wow-duration="1s"
          data-toggle="modal" data-target="#contactModal" data-wow-delay="0.2s" data-type="contact"
          data-title="Contact an Agent" style="margin-top:-8px">Contact Us</button>
      </div>
      <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 text-center" style="padding:7px;">
        <span>OR</span>
      </div>
      <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 text-center" style="padding:7px;">
        <span><strong><i class="fa fa-phone" aria-hidden="true"></i> CALL: 416-407-7384</strong> for more
          information</span>
      </div>
    </div>
  </div>
</section>
@stop

@push('after-styles')
<style>
  .icon-block .btn-white {
    position: absolute;
    bottom: 30px;
    margin: 0 auto;
    left: 50%;
    margin-left: -85px !important;
  }

  .icon-block {
    padding-bottom: 60px !important;
  }

  .icon-content {
    max-width: 280px !important;
  }
</style>
@endpush

@push('after-scripts')
<script>
  $(function(){
  $('.icon-block .icon-body p').matchHeight();
})
</script>
@endpush