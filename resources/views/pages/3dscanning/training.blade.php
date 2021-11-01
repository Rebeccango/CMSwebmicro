@extends('layouts.layout')
@section('title') 3D Metrology &amp; 3D Scanning Training
@stop
@section('meta')
<link rel="canonical" href="{{route('3d-scanning.training')}}" />
@stop
@section('description')CAD MicroSolutions provides 3D Metrology and 3D Scanning services for reverse engineering, 3d
scanning and inspection using the most advanced 3D Metrology hardware available. @stop
@section('keywords')GOM, reverse engineering, 3d scanning, inspection, 3D Metrology, 3D Scanner, Industrial,
Manufacturing, Analysis, Technology @stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax"
  style="background-image:url({{ asset('storage/images/gom/OBJ_GRAF-0000016586-XX-001-VIEW.jpg') }}); min-height:450px;">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid mt-5">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto  ">
          <h1 class=" ">GOM 3D METROLOGY / 3D SCANNING TRAINING
          </h1>
          <div class="section-title-divider"></div>
          {{-- <h2 class="h3">Improving product quality and accelerating product development and manufacturing processes</h2> --}}
        </div>
        <div class=" ">
          <p class="parallax-section__description">Certified instructor-led training courses follow a global
            standardized approach, providing participants with the skills and knowledge to successfully operate GOM 3D
            metrology and 3D scanning solutions. Training is offered in class at one of
            our training facilities or on-site at your company’s premises.</p>
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
    <div class="section-title parallax-section__title center-block mx-auto">
      <h4 class="text-center">3D Metrology Training Courses</h4>
      <div class="section-title-divider"></div>
    </div>
    <div class="responsive-tabs-block row" style="margin-top:10px">
      <ul class="nav nav-tabs tabs-left responsive-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active h5 mb-0" data-toggle="tab" href="#motion" role="tab">ATOS Professional System Basic
            Training <div class="badge badge-primary">3 days</div></a>
        </li>
        <li class="nav-item">
          <a class="nav-link h5 mb-0" data-toggle="tab" href="#linearStress" role="tab">Inspection Basic Training – 3D
            Metrology <div class="badge badge-primary">2 days</div></a>
        </li>
        <li class="nav-item">
          <a class="nav-link h5 mb-0" data-toggle="tab" href="#tolerance" role="tab">Advanced GOM Training Courses <div
              class="badge badge-primary">2 days</div></a>
        </li>
      </ul>
      <div class="col-md-8">
        <div class="tab-content responsive-tabsContent">
          <div class="tab-pane active" id="motion" role="tabpanel">
            <strong>Duration:</strong> 3 days <br />
            <strong>Certificate:</strong> ATOS Professional System Basic Training<br />
            <strong>System:</strong><br />
            <ul>
              <li>ATOS sensor
              <li>ATOS Professional software
            </ul>
            <strong>Prerequisites:</strong><br />
            <ul>
              <li>Basic knowledge of coordinate measuring technology
              <li>Basic computer skills
            </ul>

            <p>During this three-day course, participants will learn the fundamental strategies for working with an ATOS
              sensor and
              ATOS Professional software, and includes a module on acquisition and a module on inspection.<br /><br />
              The acquisition module educates participants on how to digitize a measuring object with an ATOS sensor
              based on
              different measuring strategies, by carrying out practical exercises with the ATOS system and creating a 3D
              model of an
              exemplary measuring object.<br /><br />
              The inspection module teaches participants the basics required for evaluating digitized measuring objects.
              Using their
              3D model created during the first module, participants will perform inspection tasks of varying complexity
              and analyze
              the results, including distances, diameters and angles.</p>

            <div class="row">
              <div class="col-lg-6">
                <strong>Course content:</strong><br />
                <ul>
                  <li>ATOS – introduction to the sensor and software
                  <li>Digitization of measuring objects
                  <li>Simple inspection and parametric inspection
                  <li>Inspection planning on nominal data – working with project templates
                  <li>Creation of reports
                  <li>Sensor handling and measurement strategies
                  <li>Set up and calibration of hardware
                  <li>Changing the measuring volume of the ATOS sensor
                  <li>Preparing measuring objects with reference points
                  <li>Measuring without reference points
                  <li>Processing of measured data
                  <li>Alignment methods
                  <li>Working with tables and diagrams
                  <li>Measuring with an automated rotation table
                  <li>Creation of trend analyses
                  <li>Creation of user-defined inspections
                  <li>Exchange of data
                </ul>
              </div>
              <div class="col-lg-6">
                <a href="https://www.cadmicro.com/storage/pages/gom/MicrosoftTeams-image-(21)[9079].jpg"
                  class="mp-popup-image mp-single">
                  <figure class="figure">
                    <img class="figure-img img-fluid"
                      src="https://www.cadmicro.com/storage/pages/gom/MicrosoftTeams-image-(21)[9079].jpg" />
                    <figcaption class="figure-caption" style="line-height: 15px;">CAD MicroSolutions training Natus Medical engineering on their new GOM ATOS 3D scanner .. enabling Natus to expand their
                    Quality Control and Reverse Engineering requirements with Industry Leading GOM technology.</figcaption>
                  </figure>
                </a>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="linearStress" role="tabpanel">
            <em>*This is a separately bookable portion of the complete ATOS Professional System Basic Training (3 day
              course)</em><br /><br />

            <strong>Duration:</strong> 2 days <br />
            <strong>Certificate:</strong> Inspection Basic Training – 3D Metrology<br />
            <strong>System:</strong><br />
            <ul>
              <li>ATOS Professional or GOM Inspect Professional software<br />
            </ul>
            <strong>Prerequisites:</strong><br />
            <ul>
              <li>Basic knowledge of coordinate measuring technology
              <li>Basic computer skills
            </ul>
            <p>During this two-day course, participants will learn how to inspect 3D measuring data that was digitized
              with an ATOS system on GOM software. The evaluation can either be performed in GOM Inspect Professional
              software or in
              ATOS Professional software.<br /><br />
              Participants perform inspection tasks of varying complexity and analyze the results, including distances,
              diameters and angles.</p>
            <strong>Course Content:</strong>
            <ul>
              <li>Introduction to the software
              <li>Simple inspection and parametric inspection
              <li>Inspection planning – working with project templates
              <li>Creation of reports
              <li>Alignment methods
              <li>Working with tables and diagrams
              <li>Measuring with an automated rotation table
              <li>Creation of user-defined inspections
              <li>Exchange of data
            </ul>
          </div>
          <div class="tab-pane" id="tolerance" role="tabpanel">
            <p>
              Advanced training courses with GOM provide in-depth learning on specific topics and applications.
              Participants can gain a deeper understanding of the GOM software and learn advanced functions for their
              applications.
              Prerequisites for advanced courses include the basic knowledge acquired in the basic training courses.
            </p>
            <strong>Provided by GOM experts, advanced training courses include:</strong><br><br>
            <a target="_blank"
              href="https://www.gom.com/services/gom-training/advanced-training/detail/automation-vmr.html"><strong>Automation
                VMR Training Course</strong> (2 days)</a><br><br>
            <a target="_blank"
              href="https://www.gom.com/services/gom-training/advanced-training/detail/gdt-with-gom-to-gps.html"><strong>GD&T
                – With GOM to GPS</strong> (2 days)</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="px-4 px-sm-3 border-bottom" id="inquire">
  <div class="section-title parallax-section__title center-block mx-auto  ">
    <h4 class="text-center">Inquire on GOM Advanced Training Courses</h4>
    <div class="section-title-divider"></div>
    <p class="text-center mt-5 h4">To inquire about GOM Advanced Training Courses, please fill out the form below:</p>
  </div>
  <div class="d-flex justify-content-center">
    <div data-form-block-id="d070a852-67ad-e911-a987-000d3a3702ca"></div>
    <div id="d2xiVsiHus34gKdztUfZzeIF9kyrxTouwd5RylOZ5294"></div>
  </div>
</section>
@stop