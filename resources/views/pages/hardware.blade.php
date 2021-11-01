@extends('layouts.layout')
@section('title')
  Hardware &amp; High Performance Work Stations
@stop
@section('body')
<section data-z-index="0" class="parallax-window parallax-section trans-header-window parallax"
style="min-height:450px; background-image:url(http://www.boxx.com/Files/Images/workstations-bg.jpg)">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid mt-5">
    <div class=" d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto wow fadeIn" data-wow-duration="0.8s"
          data-wow-delay="0.5s">
          <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">HARDWARE &amp; HIGH PERFORMANCE WORK STATIONS</h1>
          <div class="section-title-divider"></div>
          <h2 class="h3">Contact us for custom configurations and pricing</h2>
        </div>
        {{-- <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
          <p class="parallax-section__description"></p>
        </div> --}}
        <div>
          @include('layouts.generic_contact_buttons')
        </div>
      </div>
    </div>
  </div>
</section>
<section id="solidworks-products">
  <div class="container-fluid">
    <div class="content">
      <div class="col-lg-5" style="z-index:1">
        <h1 class="main-title wow fadeInLeft" data-wow-duration="1s" style="margin-top:0" data-wow-delay="0.2s">BOXX WORKSTATIONS</h1>
        <h3 style="font-size:16px; font-weight:700">THE RIGHT TOOL FOR THE JOB</h3>
        <p>BOXX is the leading innovator of high performance workstation computers and rendering systems for VFX, animation, engineering, architectural visualization and more.</p>
        <p>
          The software application market is populated with a broad range of professional 3D applications, so naturally, there are a wide variety of workflows, each with their own distinct hardware requirements. Is your software application single threaded or multi-threaded? Does it take advantage of multiple GPUs? What about high speed storage or sizable amounts of memory? There are multiple factors to consider when purchasing the ideal workstation, so abandon the "one-size-fits-all" approach. All BOXX products have a purpose, each with their own distinct features and capabilities designed to accelerate specific workflows.
        </p>
        <button class="btn btn-sm btn-white wow fadeInUp btn-dialog" id="contact-boxx" data-wow-duration="1s" data-toggle="modal" data-target="#contactModal" data-wow-delay="0.2s" data-type="contact-boxx" data-title="Contact us for custom configurations and pricing" style="width: 70%;
    margin: 0 auto; max-width:none; margin-top:30px; padding:15px">Contact us for custom configurations and pricing</button>
      </div>
      <div style="width:100%;height:500px;display: block; z-index:0">
        <img style="position:absolute;right: 0;width: 80%;" src="http://www.boxx.com/Files/Images/Products/GoBOXX_SLM_Hero_ForWeb.png"  alt="">
      </div>
    </div>
  </div>

  <div class="section-secondary" style="margin-top:50px;">
    <div class="container-fluid">
      <div class="content">
        <div class="col-lg-3" style="z-index:1"><img style="width:100%; margin: 0 auto; display:block; max-width:250px; margin-bottom:20px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/48/Dell_Logo.svg/768px-Dell_Logo.svg.png"  alt=""></div>
        <div class="col-lg-7" style="z-index:1;">
          <h1 class="main-title wow fadeInLeft" data-wow-duration="1s" style="margin-top:0" data-wow-delay="0.2s">DELL WORKSTATIONS</h1>
          <p>Powerful, easy-to-use SOLIDWORKS software solutions enable companies like yours to speed up product development, reduce manufacturing costs, and improve product quality.</p>
          <button class="btn btn-sm btn-white wow fadeInUp btn-dialog" id="contact-dell" data-wow-duration="1s" data-toggle="modal" data-target="#contactModal" data-wow-delay="0.2s" data-type="contact-dell" data-title="Contact us for custom configurations and pricing" style="width: 70%;
      margin: 0 auto; max-width:none; margin-top:30px; padding:15px">Contact us for custom configurations and pricing</button>
        </div>
      </div>
    </div>
  </div>
  <section style="padding-bottom:0;">
    <div class="container-fluid">
      <div class="content">
        <div class="col-lg-7" style="z-index:1;">
          <h1 class="main-title wow fadeInLeft" data-wow-duration="1s" style="margin-top:0" data-wow-delay="0.2s">LENOVO WORKSTATIONS</h1>
          <p>CAD Micro offers a portfolio of Lenovo laptops. Buy new products and services with Lenovo’s Business Partner CAD Micro</p>
          <button class="btn btn-sm btn-white wow fadeInUp btn-dialog" id="contact-lenovo" data-wow-duration="1s" data-toggle="modal" data-target="#contactModal" data-wow-delay="0.2s" data-type="contact-lenovo" data-title="Contact us for custom configurations and pricing" style="width: 70%;
      margin: 0 auto; max-width:none; margin-top:30px; padding:15px">Contact us for custom configurations and pricing</button>
        </div>
        <div class="col-lg-3" style="z-index:1"><img style="width:100%; margin: 0 auto; display:block; max-width:250px; margin-bottom:20px;" src="http://www3.lenovo.com/medias/lenovo-workstation-thinkstation-p900-p300-sff-laptop-thinkpad-w540.png?context=bWFzdGVyfHJvb3R8NTA4Njl8aW1hZ2UvcG5nfGhkZC9oMjIvOTM1Mzc3MDc2MjI3MC5wbmd8ZjAzNWQ0MTFlYjQyNmZjN2MzYjFhNGI1NDg4ZTExOTY1MmUyM2U3N2NmYWY4ZTllYTU5NGQzODY5ZWE2ZjE1ZQ"  alt=""></div>
      </div>
    </div>
  </section>
</section>
@stop
