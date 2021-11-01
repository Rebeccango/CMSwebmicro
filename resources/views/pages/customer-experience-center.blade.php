@extends('layouts.layout')
@section('title')
CEC - The Customer Exerience Centre
@stop
@section('meta')
<link rel="canonical" href="{{route('customer-experience-center')}}" />
@stop
@section('description')The CAD MicroSolutions Customer Experience Centre (CEC) opened it’s doors in June 2018 to showcase the technology driving the new industrial revolution - Industry 4.0. As innovation enablers with over 30 years of experience providing 3D technology and training for the entire product development lifecycle, CAD MicroSolutions is uniquely positioned to help companies innovate, design and succeed in this new industrial era. As CAD MicroSolutions continues to expand in the areas of additive manufacturing, virtual reality and augmented reality, the new facility gives us the opportunity to demonstrate the potential these innovative technologies possess. @stop

@section('keywords')CEC, Customer Experience Centre, CAD, 3D Printers, Immersive Display,Augmented Reality, HP, Visionary Render, HTC Vive, META 2, technology, showroom, industry 4.0, 3D, training, product development, lifecycle, innovate, design, succeed, industrial era @stop
@push('after-styles')
<link rel='stylesheet' href='{{asset('js/unitegallery-master/dist/themes/default/ug-theme-default.css')}}' type='text/css' />
<link rel='stylesheet' href='{{asset('js/unitegallery-master/dist/css/unite-gallery.css')}}' type='text/css' />
@endpush
@section('body')
<section data-z-index="0" class="parallax-window parallax-section trans-header-window parallax d-flex align-items-center justify-content-center"
style="min-height:450px; background-image:url({{asset('/storage/images/banners/cms_ces_banner.jpg')}})">
  <div class="container-fluid">
    <div class="white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          <h1 >Customer Experience Centre</h1>
          <div class="section-title-divider"></div>
          <h2 class="h3">The CAD MicroSolutions Customer Experience Centre (CEC)</h2>
        </div>
        {{-- <div   data-wow-delay="0.2s">
          <p class="parallax-section__description"></p>
        </div> --}}
        <div>
          @include('layouts.generic_contact_buttons')
        </div>
      </div>
    </div>
  </div>
</section>
<section class="py-0 pb-0">
  <div class="container-fluid">
    <div class="section-block row">
      <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 order-last order-md-first">
        <div id="gallery2" style="display:none; width:100%">
          <img alt="CEC Image 0" src="{{asset('storage/images/cec/cec_image_9.jpg')}}" data-image="{{asset('storage/images/cec/cec_image_9.jpg')}}">
          <img alt="CEC Image AR 1" src="{{asset('storage/images/cec/cec_image_ar_1.jpg')}}" data-image="{{asset('storage/images/cec/cec_image_ar_1.jpg')}}">
          <img alt="CEC Image 1" src="{{asset('storage/images/cec/cec_image_2.jpg')}}" data-image="{{asset('storage/images/cec/cec_image_2.jpg')}}">
          <img alt="CEC Image 2" src="{{asset('storage/images/cec/cec_image_1.jpg')}}" data-image="{{asset('storage/images/cec/cec_image_1.jpg')}}">
          <img alt="CEC Image AR 2" src="{{asset('storage/images/cec/cec_image_ar_2.jpg')}}" data-image="{{asset('storage/images/cec/cec_image_ar_2.jpg')}}">
          <img alt="CEC Image AR 3" src="{{asset('storage/images/cec/cec_image_ar_3.jpg')}}" data-image="{{asset('storage/images/cec/cec_image_ar_3.jpg')}}">
          <img alt="CEC Image 3" src="{{asset('storage/images/cec/cec_image_3.jpg')}}" data-image="{{asset('storage/images/cec/cec_image_3.jpg')}}">
          <img alt="CEC Image 4" src="{{asset('storage/images/cec/cec_image_11.jpg')}}" data-image="{{asset('storage/images/cec/cec_image_11.jpg')}}">
          <img alt="CEC Image 5" src="{{asset('storage/images/cec/cec_image_5.jpg')}}" data-image="{{asset('storage/images/cec/cec_image_5.jpg')}}">
          <img alt="CEC Image AR 4" src="{{asset('storage/images/cec/cec_image_ar_4.jpg')}}" data-image="{{asset('storage/images/cec/cec_image_ar_4.jpg')}}">
          <img alt="CEC Image AR 5" src="{{asset('storage/images/cec/cec_image_ar_5.jpg')}}" data-image="{{asset('storage/images/cec/cec_image_ar_5.jpg')}}">
          <img alt="CEC Image 6" src="{{asset('storage/images/cec/cec_image_6.jpg')}}" data-image="{{asset('storage/images/cec/cec_image_6.jpg')}}">
          <img alt="CEC Image 7" src="{{asset('storage/images/cec/cec_image_7.jpg')}}" data-image="{{asset('storage/images/cec/cec_image_7.jpg')}}">
          <img alt="CEC Image 8" src="{{asset('storage/images/cec/cec_image_10.jpg')}}" data-image="{{asset('storage/images/cec/cec_image_10.jpg')}}">
          <img alt="CEC Image 9" src="{{asset('storage/images/cec/1.jpg')}}" data-image="{{asset('storage/images/cec/1.jpg')}}">
          <img alt="CEC Image 10" src="{{asset('storage/images/cec/2.jpg')}}" data-image="{{asset('storage/images/cec/2.jpg')}}">
          <img alt="CEC Image 11" src="{{asset('storage/images/cec/3.jpg')}}" data-image="{{asset('storage/images/cec/3.jpg')}}">
          <img alt="CEC Image 12" src="{{asset('storage/images/cec/4.jpg')}}" data-image="{{asset('storage/images/cec/4.jpg')}}">
          <img alt="CEC Image 13" src="{{asset('storage/images/cec/7.jpg')}}" data-image="{{asset('storage/images/cec/7.jpg')}}">
          <img alt="CEC Image 14" src="{{asset('storage/images/cec/8.jpg')}}" data-image="{{asset('storage/images/cec/8.jpg')}}">
          <img alt="CEC Image 15" src="{{asset('storage/images/cec/9.jpg')}}" data-image="{{asset('storage/images/cec/9.jpg')}}">
          <img alt="CEC Image 16" src="{{asset('storage/images/cec/10.jpg')}}" data-image="{{asset('storage/images/cec/10.jpg')}}">
          <img alt="CEC Image 17" src="{{asset('storage/images/cec/11.jpg')}}" data-image="{{asset('storage/images/cec/11.jpg')}}">
          <img alt="CEC Image 18" src="{{ asset('storage/images/cec/12.jpg')}}" data-image="{{asset('storage/images/cec/12.jpg')}}">
          <img alt="CEC Image 19" src="{{ asset('storage/images/cec/13.jpg')}}" data-image="{{asset('storage/images/cec/13.jpg')}}">
          <img alt="CEC Image 20" src="{{ asset('storage/images/cec/14.jpg')}}" data-image="{{asset('storage/images/cec/14.jpg')}}">
          <img alt="CEC Image 21" src="{{ asset('storage/images/cec/15.jpg')}}" data-image="{{asset('storage/images/cec/15.jpg')}}">
          <img alt="CEC Image 22" src="{{ asset('storage/images/cec/16.jpg')}}" data-image="{{asset('storage/images/cec/16.jpg')}}">
          <img alt="CEC Image 23" src="{{asset('storage/images/cec/17.jpg')}}" data-image="{{asset('storage/images/cec/17.jpg')}}">
          <img alt="CEC Image 24" src="{{ asset('storage/images/cec/18.jpg')}}" data-image="{{asset('storage/images/cec/18.jpg')}}">
          <img alt="CEC Image 25" src="{{ asset('storage/images/cec/19.jpg')}}" data-image="{{asset('storage/images/cec/19.jpg')}}">
          <img alt="CEC Image 26" src="{{ asset('storage/images/cec/20.jpg')}}" data-image="{{asset('storage/images/cec/20.jpg')}}">
          <img alt="CEC Image 27" src="{{ asset('storage/images/cec/21.jpg')}}" data-image="{{asset('storage/images/cec/21.jpg')}}">
          <img alt="CEC Image 28" src="{{ asset('storage/images/cec/22.jpg')}}" data-image="{{asset('storage/images/cec/22.jpg')}}">
        </div>
      </div>
      <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 pt-5 pb-5">
        <h2>Customer Experience Centre</h2>
        <p class="mt-3">The CAD MicroSolutions Customer Experience Centre (CEC) opened it’s doors in June 2018 to
          showcase the technology driving the new industrial revolution - Industry 4.0. As innovation enablers with
          over 30 years of experience providing 3D technology and training for the entire product development
          lifecycle, CAD MicroSolutions is uniquely positioned to help companies innovate, design and succeed in this
          new industrial era.</p>
        <p>As CAD MicroSolutions continues to expand in the areas of additive manufacturing, virtual reality and
          augmented reality, the new facility gives us the opportunity to demonstrate the potential these innovative
          technologies possess.</p>
      </div>
    </div>
  </div>
</section>

<section class="section-secondary">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
        <div class="section-title center-block mx-auto  mb-4">
          <h2 class=" h1"  >FACILITATING GROWTH & DRIVING
            INNOVATION</h2>
          <div class="section-title-divider "  ></div>
        </div>
        <p>
          Additive manufacturing is transforming the way businesses operate and manufacture, with almost limitless
          potential. This investment is geared towards helping our clients better understand additive manufacturing
          processes and technologies, including those by industry leaders HP, Markforged, Nano Dimension and BigRep.
          The new CEC offers partners and clients the ability to validate their business cases by leveraging our
          unique, state-of-the-art facility and ground-breaking technology.
        </p>
        <p>
          Let’s discuss your additive strategy – visit our Customer Experience Centre today.
        </p>
      </div>
      <div class="col-lg-6">
        <div class="section-title center-block mx-auto  mb-4">
          <h2 class=" h1"  ><br />HANDS-ON EXPERIENCE</h2>
          <div class="section-title-divider "  ></div>
        </div>
        <p>Our CEC provides an opportunity for customers to see, touch and interact with the technology behind Industry
          4.0, including innovations in additive manufacturing and VR/AR. The facility is designed to help customers
          understand the entire additive process from design through prototyping and production, and offers the
          additional benefit of hands-on training courses, ranging from design for 3D printing and/or mixed reality,
          through machine operations and support.</p>
        <p>Schedule a visit to come see the new Customer Experience Centre for yourself!</p>
      </div>
      <div class="col-lg-12">
        <div class="section-title center-block mx-auto mb-4 mt-4">
          <h2 class=" h1"  >Visionary Render 2 / 2 HTC Vive VR
            Headsets / Meta 2 AR Headset</h2>
          <div class="section-title-divider "  ></div>
        </div>
        <p>Come and experience Visionary Render 2 at Cad MicroSolutions Experience Centre. We believe that Visionary
          Render 2 has the potential to become THE software for Industry 4.0. Visionary Render has been designed to
          foster working alone, in small groups, or collaborating with distant colleagues in a common virtual
          environment. Its adaptability as a rapid, decision-making platform means that performing detailed design
          reviews, rehearsing in-depth training tasks, validating maintenance procedures or verifying assembly and
          manufacturing processes become enterprise wide. Bring in your CAD data and experience the power of immersive
          display technology in a real-time environment using head mounted VR systems, and Meta2 AR head mounted
          display.</p>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6  order-last order-md-first">
        <h3>WHERE TO FIND US</h3>
        <p>30 International Blvd, Unit 1<br />
          Etobicoke, ON<br />
          M9W 5P3</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11542.313533743165!2d-79.5890978!3d43.6777377!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc1e4684fc18c218a!2sCAD+MicroSolutions+Inc.!5e0!3m2!1sen!2sca!4v1531151133897"
          width="100%" height="350px" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="col-lg-6">
        <h3 class="main-title">Schedule an Appointment to Visit the Customer Experience Centre</h3>
        <div data-form-block-id="9e92a7b4-baac-e911-a987-000d3a3702ca"></div>
        <div id="d83bZlSq8bZbPoTlYlNjcnB7nM8-qWWLiDZ14579-6cU"></div>
      </div>
    </div>
  </div>
</section>
@stop

@push('after-scripts')
<script type='text/javascript' src='{{asset('js/unitegallery-master/dist/js/unitegallery.js')}}'></script>
<script type='text/javascript' src='{{asset('js/unitegallery-master/dist/themes/default/ug-theme-default.js')}}'></script>

<script type="text/javascript">
  $(function () {
    var gallery = jQuery("#gallery2").unitegallery({
      theme_enable_text_panel: false,
      carousel_autoplay: true,
      gallery_width: "100%",
    });
  });
</script>
@endpush