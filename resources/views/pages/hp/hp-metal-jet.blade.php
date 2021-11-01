@extends('layouts.layout')
@section('title')
HP Metal Jet (Coming Soon) | HP 3D Printing Solutions
@stop
@section('meta')
<link rel="canonical" href="{{route('hp-metal-jet')}}" />
@stop
@section('description')HP METAL JET. REINVENT OPPORTUNITIES. Propel your business with the most advanced metals 3D
printing technology for mass production. @stop
@section('keywords')3D printed metals, 3D printed parts in metal, Metal 3D Printer, Metal 3D Printer, Metal 3D Printing,
Metal 3D Printing Service, Metal 3D Printing Systems, Metal Additive Manufacturing, Steel 3D printer @stop
@section('body')
<section class="parallax-window parallax-section trans-header-window d-flex parallax"
  style="min-height:450px; background-image:url({{asset('storage/images/hp/hp_metal_jet_banner.jpg')}})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto ">
          <h1 class="">HP Metal Jet 3D Printing Solution</h1>
          <div class="section-title-divider"></div>
          <h2 class="h3">REINVENT OPPORTUNITIES</h2>
        </div>
        <div class="" data-wow-delay="0.2s">
          <p class="parallax-section__description">Propel your business with the most advanced metals 3D printing
            technology for mass production.</p>
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
    <div class="row">
      <div class="col-lg-6 pt-5">
        <h2 class="main-title Left">HP METAL
          JET. REINVENT OPPORTUNITIES.</h2>
        <p class="lead">Propel your business with the most advanced metals 3D printing technology for mass production.</p>
        <a href="{{asset('storage/images/hp/hp_printers_lineup.jpg')}}" class="mp-popup-image mp-single"><img
            src="{{asset('storage/images/hp/hp_printers_lineup.jpg')}}"
            alt="Preview of the new HP Metal Jet 3D Printers" class="my-4 img-shadow" width="100%" height="auto" /></a>
      </div>
      <div class="col-lg-6 py-5 text-center">
        <div class="videoWrapper">
          <iframe width="100%" src="https://www.youtube.com/embed/6cSOFBTJxX0" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="videoCaption text-left">Video: Introducing HP Metal Jet Technology Into Mainstream Manufacturing</div>
        <img src="https://www.cadmicro.com/storage/images/hp/Custom-Insignia.png" width="300px" height="auto" class="pt-5 text-center" />
      </div>
    </div>
  </div>
</section>
<section class="section--grey">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-7">
        <a href="{{asset('storage/images/hp/metal_part.jpg')}}" class="mp-popup-image mp-single"><img
            src="{{asset('storage/images/hp/metal_part.jpg')}}"
            alt="HP Metal Jet 3D Printed Part, Courtesy of GKN Powder Metallurgy" class="img-shadow" width="100%"
            height="auto" /></a>
      </div>
      <div class="col-lg-5">
        <h1 class="main-title Right" style="margin-top:0" data-wow-delay="0.2s">LEARN
          MORE ABOUT THE HP METAL JET PRINTING PROCESS</h1>
        <div class="list-group">
          <a href="{{asset('storage/pdfs/hp/4AA7-3333ENW.pdf')}}" target="_blank"
            class="list-group-item list-group-item-action active mb-2">VIEW WHITEPAPER</a>
          <a href="{{asset('storage/pdfs/hp/4AA7-3432ENW.pdf')}}" target="_blank"
            class="list-group-item list-group-item-action active">VIEW INFOGRAPHIC</a>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="section-title center-block mx-auto">
    <h2 class="">TAKE ON NEW JOBS AND UNLOCK NEW REVENUE STREAMS
    </h2>
    <p class="text-center">Now you can produce complex parts and new applications that were simply not possible before,
      in cost-effective high-volume runs.</p>
    <div class="section-title-divider "></div>
  </div>
  <div class="container mt-5">
    <div class="section-icon-group row">
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12Up">
        <div class='icon-content' style="max-width:100%;">
          <div class="icon-link">
            <div class="icon mb-5 w-auto"
              style="background-image:url('{{asset('storage/images/hp/hp_icon_2.png')}}'); background-size: contain; height:100px;">
            </div>
            <h3 class="icon-title mt-5">UP TO 50X MORE PRODUCTIVE</h3>
          </div>
          <div class="icon-body row">
            <div class="col-lg-12">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Produce high volumes of parts—and large parts—with a binder jetting build
                  size of 430 x 320 x 200 mm (16.9 x 12.6 x 7.9 in).</li>
                <li class="list-group-item">Accelerate product development cycles with multiple design iterations in
                  just days.</li>
                <li class="list-group-item">Produce parts faster, in fewer steps with no debinding required and
                  eliminate tooling.</li>
                <li class="list-group-item">Gain manufacturing process efficiency with HP Metal Jet Solution Services.
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12Up">
        <div class='icon-content' style="max-width:100%;">
          <div class="icon-link">
            <div class="icon mb-5 w-auto"
              style="background-image:url('{{asset('storage/images/hp/hp_icon_3.png')}}'); background-size: contain; height:100px;">
            </div>
            <h3 class="icon-title mt-5">LOW COST</h3>
          </div>
          <div class="icon-body">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Get final metal parts faster with a low price industrial production-grade 3D
                printer, at less than $399,000 USD.</li>
              <li class="list-group-item">Drive new business growth by producing high-quality final metal parts at a low
                cost per part.</li>
              <li class="list-group-item">Look to HP's Open Platform for industry-standard, low-cost materials and
                industry-standard sintering solution compatibility.</li>
              <li class="list-group-item">High reusability of materials can reduce materials cost and waste.</li>
              <li class="list-group-item">Eliminate up-front tooling costs.</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12Up">
        <div class='icon-content' style="max-width:100%;">
          <div class="icon-link">
            <div class="icon mb-5 w-auto"
              style="background-image:url('{{asset('storage/images/hp/hp_icon_1.png')}}'); background-size: contain; height:100px;">
            </div>
            <h3 class="icon-title mt-5">HIGH-QUALITY METAL PRINTS</h3>
          </div>
          <div class="icon-body">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Easily produce geometrically complex parts without trade-offs, with HP
                voxel-level 1200 x 1200 dpi 3D printing accuracy.</li>
              <li class="list-group-item">Get strong, functional final metal parts with HP’s isotropic mechanical
                properties and proprietary binding agent.</li>
              <li class="list-group-item">Count on HP Thermal Inkjet expertise for industrial production-grade quality
                and consistent output at speed.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section--grey">
  <div class="container mt-5">
    <div class="d-flex justify-content-center align-items-center flex-column w-100">
      <div class="section-title center-block mx-auto">
        <h2 class="">Learn More about the HP Metal Jet</h2>
        <div class="section-title-divider "></div>
      </div>
      <div data-form-block-id="4c252229-b36b-eb11-a812-00224804d6bc"></div>
      <div id="dE5W1Eps_iGJhIbGQrCGLIKM3rbMOfE7wgTVzLIpkdyo"></div>
    </div>
  </div>
</section>
@stop