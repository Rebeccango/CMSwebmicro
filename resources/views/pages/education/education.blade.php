@extends('layouts.layout_nomenu')
@section('title')
Education | Inspiring Innovation in Future Generations
@stop
@section('meta')
<link rel="canonical" href="{{route('education.index')}}" />
@stop
@section('description')CAD MicroSolutions believes that aligning Industry and Academia through meaningful partnerships
will transform the learning experience and enable innovation in both instructors and students alike. We offer solutions
to Educational institutes across Canada that reinvent learning through the use of innovative technologies and
forward-looking curriculum. @stop
@section('header')
@include('pages.education.education_header')
@endsection
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
  style="min-height:450px; background-image:url({{ asset('storage/images/education/education-hero.webp') }})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto wow fadeIn" data-wow-duration="0.8s"
          data-wow-delay="0.5s">
          <h1>CAD MicroSolutions Education Solutions</h1>
          <div class="section-title-divider"></div>
          <h2 class="h3">Inspiring Innovation in Future Generations</h2>
          <p class="m-auto text-center pt-3" style="max-width: 600px; font-size:16px">CAD MicroSolutions believes that
            aligning Industry and Academia through meaningful partnerships will transform the learning experience and
            enable innovation in both instructors and students alike. We offer solutions to Educational institutes
            across Canada that reinvent learning through the use of innovative technologies and forward-looking
            curriculum.</p>
        </div>
        <div>
          @include('layouts.generic_contact_buttons')
        </div>
      </div>
    </div>
  </div>
</section>
<section class="p-0">
  <div class="d-flex flex-row row flex-grow-1 flex-wrap align-items-center">
    <div class="col-lg-5 pr-0 order-2 order-md-1 flex-grow-1 p-0 overflow-hidden d-flex justify-content-center align-items-center"><img src="{{ asset('images/pages/education/edu_1.jpg') }}"
        width="auto" height="100%">
    </div>
    <div class="col-lg-7 text-right d-flex justify-content-center order-sm-1 order-md-2">
      <div class="p-5">
        <h3 class="display-4">TECHNOLOGY FOR EDUCATION</h3>
        <p class="float-right mt-3" style="max-width:600px;">We provide hardware, software and services that inspire
          creation and collaboration in the classroom or lab,
          and enable dramatic improvements in student achievement. Equipping your lab with the latest powerful
          technology enables student-centered, experiential learning and prepares students for a future in Industry 4.0.
        </p>
      </div>
    </div>
  </div>
</section>
<section class="p-0 bg-primary text-white">
  <div class="d-flex flex-row row align-items-center justify-content-center">
    <div class="col-lg-8 text-left d-flex justify-content-center order-sm-1 order-md-2">
      <div class="p-5">
        <h3 class="display-4 mb-4 text-center">INSPIRING INNOVATION IN FUTURE GENERATIONS</h3>
        <div class="w-full  row d-flex align-content-stretch">
          <div class="col-lg-4 col-sm-12 my-3 flex-grow-1">
            <a href="#"
              class="btn btn-outline-primary border-white text-white justify-content-center p-4 h-100 d-flex align-items-center">3D
              Printing Solutions
              For Education</a>
          </div>
          <div class="col-lg-4 col-sm-12 my-3 flex-grow-1">
            <a href="#"
              class="btn btn-outline-primary border-white text-white  justify-content-center p-4 h-100 d-flex align-items-center">3D
              Scanning Solutions
              For Education</a>
          </div>
          <div class="col-lg-4 col-sm-12 my-3 flex-grow-1">
            <a href="#"
              class="btn btn-outline-primary border-white text-white  justify-content-center p-4 h-100 d-flex align-items-center">CAD/CAM
              Software
              For Education</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="p-0">
  <div class="d-flex flex-wrap flex-row flex-grow flex-grow-1 flex-1">
    <div class="p-5 col-lg-6 p-5 text-left">
      <h3 class="display-4">OUR MISSION IS TO PUT EDUCATION FIRST</h3>
      <p class="mt-3 lead">CAD MicroSolutions believes that aligning Industry and Academia through meaningful
        partnerships will transform the
        learning experience and enable innovation in both students and instructors alike. We offer solutions for
        Educational
        institutes across Canada that reinvent learning through the use of innovative technologies and forward-looking
        curriculum.</p>
    </div>
    <div class="p-5 col-lg-6 section-secondary flex-grow flex-grow-1 flex-1">
      <h4 class="display-4">Learn More About our Solutions for Education</h4>
      <button type="button" class="btn btn-lg btn-primary mx-auto btn-rounded mt-3" data-toggle="modal"
        data-target="#educationGuides">Download Education Guides<i class="ml-3 far fa-caret-square-right"></i></button>
    </div>
  </div>
</section>
<section class="p-0 section--grey">
  <div class="d-flex flex-row row flex-grow-1 flex-wrap align-items-center">
    <div class="col-lg-7 text-left d-flex justify-content-center">
      <div class="p-5 d-flex flex-column">
        <h3 class="display-4">TRAINING & TECHNICAL SUPPORT</h3>
        <div class="d-flex flex-row flex-wrap">
          <p class="float-left mt-3 mb-4" style="max-width:600px;">Our team of experts supporting Education are
            dedicated
            to
            bridging the skills gap and preparing the future generation for success. Our Education Solutions are
            customizable,
            including access to online learning resources, curricula, training material and professional development to
            enable
            learning for students and instructors alike.
          </p>

        </div>
      </div>
    </div>
    <div class="col-lg-5 pr-0 order-2 order-md-1 flex-grow-1 p-0 overflow-hidden d-flex justify-content-center align-items-center"><img src="{{ asset('storage/images/education/education-2.jpg') }}" width="auto" height="100%">
    </div>
  </div>
</section>
<section class="p-0">
  <div class="d-flex flex-row row flex-grow-1 flex-wrap align-items-center">
    <div class="col-lg-5 pr-0 order-2 order-md-1 flex-grow-1 p-0 overflow-hidden d-flex justify-content-center align-items-center"><img src="{{ asset('images/pages/education/edu_2.jpg') }}"
        width="auto" height="100%">
    </div>
    <div class="col-lg-7 text-right d-flex justify-content-center order-1 order-md-2">
      <div class="p-5">
        <h3 class="display-4">ACCOUNT MANAGEMENT & ON-GOING SUPPORT</h3>
        <p class="float-right mt-3" style="max-width:600px;">Our dedicated Education Account Managers work exclusively
          with Canadian educational institutes including K-12, Colleges, Universities, Trade Schools, Research Centers,
          Innovation Labs and more. Your Account Manager is available to help you understand the range of solutions
          available to you and make recommendations based on your specific requirements. In addition to the support you
          receive from CAD MicroSolutions, you have access to our world-leading partners in design, additive
          manufacturing, 3D scanning and metrology.</p>
      </div>
    </div>
  </div>
</section>
<section class="p-0 section--grey">
  <div class="d-flex flex-row row flex-grow-1 flex-wrap align-items-center">
    <div class="col-lg-7 text-left d-flex justify-content-center">
      <div class="p-5">
        <h3 class="display-4">TRUSTED BY CANADIAN INSTITUTIONS</h3>
        <p class="float-left mt-3 mb-4" style="max-width:600px;">CAD MicroSolutions is is uniquely positioned to deliver
          affordable and customizable solutions to Academia across Canada
          that enable student-centered, collaborative learning and prepare the next generation</p>
        <p class="float-left mt-3 mb-4" style="max-width:600px;">workforce for success. Our services include access to
          online learning resources, training material and professional
          development for students and instructors alike.</p>
      </div>
    </div>
    <div class="col-lg-5 pr-0 flex-grow-1 p-0 overflow-hidden d-flex justify-content-center align-items-center"><img src="{{ asset('images/pages/education/edu_3.jpg') }}" width="auto" height="100%">
    </div>
  </div>
</section>

<section class="p-0 section--grey">
  <div class="d-flex flex-row row flex-grow-1 flex-wrap align-items-center">
    <div class="col-lg-5 pr-0 flex-grow-1 p-0 overflow-hidden"><img
        src="{{ asset('images/pages/education/edu_6.jpg') }}" width="auto" height="100%">
    </div>
    <div class="col-lg-7 text-left d-flex justify-content-center">
      <div class="p-5">
        <h3 class="display-4">SELECTING THE RIGHT TECHNOLOGY FOR YOUR SCHOOL</h3>
        <p class="float-left mt-3 mb-4" style="max-width:600px;">CAD MicroSolutions has partnered with some of the
          world’s leaders in additive manufacturing technology and has helped
          educational institutes across the country make the right investment in additive technology. Whether you’re
          implementing
          3D printing technology for the first time, or looking to add a different additive technology to compliment
          your existing
          lab, CAD MicroSolutions can help. Book a complimentary consultation with our team to learn more about our
          Education
          Solutions today.</p>

        <button class="btn btn-lg btn-outline-primary btn-rounded btn-dialog" id="contact" data-toggle="modal"
          data-target="#contactModal" data-type="contact" data-title="Contact Request Form">Contact Us</button>
      </div>
    </div>


  </div>
</section>

<section class="p-0 bg-primary text-white">
  <div class="d-flex flex-row row align-items-center justify-content-start">
    <div class="col-lg-12 text-left d-flex justify-content-start">
      <div class=" container p-5">
        <h3 class="display-4">GET A CUSTOMIZED SOLUTION FOR YOUR EDUCATIONAL INSTITUTE</h3>

        <button class="btn btn-lg btn-outline-primary text-white border-white mt-4 btn-rounded btn-dialog" id="quote"
          data-toggle="modal" data-target="#quoteContactModal" data-type="quote" data-title="Quote Request Form">Get a
          Quote</button>
      </div>
    </div>
  </div>
</section>
@stop

@push('foot')
<div class="modal fade" id="educationGuides" tabindex="-1" role="dialog" aria-labelledby="education-guides"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header flex-column">
        <h5 class="modal-title w-100">Learn More About our Solutions for Education</h5>
        <p>Fill out the form below to gain access to the free education guides!</p>
        <button type="button" style="position: absolute; right: 15px;" class=" close" data-dismiss="modal"
          aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div data-form-block-id="493f44ff-3c06-ea11-a811-000d3a33f42d"></div>
        <div id="dBTkuPyztCMbgYjugaAz3w0XKXtqbzDpHatz5mOvUMYQ"></div>
      </div>
    </div>
  </div>
</div>
@endpush