@extends('layouts.layout')
@section('title')
BigRep PRO Demo
@stop
@section('meta')
<link rel="canonical" href="{{route('bigrep-one')}}" />@stop
@section('description')Get a free Virtual Demo of the New BigRep Pro @stop
@section('keywords')3D, 3D CAD, BigRep, Pro, 3D Printers, One, Large, Scale, Industrial @stop
@push("before-scripts")

@endpush

@push('after-styles')
<style>
   .form-block {
      margin-top: -30%;
      z-index: 99;
      border: 0;
      border-radius: 0;
   }

   @media only screen and (max-width: 768px) {
      .form-block {
         margin-top: 0 !important;
      }
   }

   section {
      overflow: visible;
   }
</style>
@endpush
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
style="height:400px; background-image:url({{asset('/storage/images/bigrep/pro-demo-web-1.jpg')}});">
   <div class="parallax-section__shadow"></div>
   <div class="container-fluid mt-5">
      <div class="content white-content d-flex justify-content-center align-items-center">
         <div>
            <div class="section-title parallax-section__title center-block mx-auto wow fadeIn" data-wow-duration="0.8s"
               data-wow-delay="0.5s">
               <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">BigRep PRO Demo</h1>
               <div class="section-title-divider"></div>
               <h2 class="h3">The Most Advanced Large Scale 3D Printing Experience</h2>
            </div>
            <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
               <p class="parallax-section__description">Get a free Virtual Demo of the New BigRep Pro</p>
            </div>
            <div>
            </div>
         </div>
      </div>
   </div>
</section>
<section>
   <div class="container-fluid">
      <div class="section-block row">
         <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 mb-5">
            <h2 class="main-title">THE LEADER IN INDUSTRIAL
               LARGE-SCALE ADDITIVE MANUFACTURING</h1>
               <p>Powered by BigRep’s all new proprietary MXT and
                  state-of-the art Bosch Rexroth motion controls, the BigRep PRO delivers
                  unprecedented speed, precision and quality – with the full connectivity to integrate additive
                  manufacturing with
                  Industry 4.0. The PRO also allows you to print with engineering grade materials to ensure you can
                  manufacture the
                  applications you need in large scale. Whether it’s functional prototypes, composite tooling or end-use
                  products, the
                  PRO
                  responds to industrial demands with a range of new features including:</p>

               <ul>
                  <li>Ability to print with high quality materials like ASA, nylon and more
                  <li>New BigRep Metering Extrusion Technology (MXT)
                  <li>Printing speed of over 600 millimeters/second
                  <li>CNC motion control system for maximum responsiveness, accuracy and superior connectivity
               </ul>

               <p>Fill out the form to see the virtual demo of BigRep’s Next Gen 3D Printer.</p>
               <div class="row d-flex justify-content-center align-items-center">
                  <div class="text-right text-right justify-content-end">
                     <h3>Learn more about BigRep PRO.<br> Download the datasheet now.</h3>
                  </div>
                  <div class="justify-content-center mx-auto d-flex">
                     <a target="_blank" href="{{asset('storage/pdfs/bigrep/Bigrep PRO - Factsheet.pdf')}}"
                        class="pdf-item">
                        <figure >
                           <div class="figimg">
                              <img src="{{asset('storage/pdfs/bigrep/Bigrep PRO - Factsheet.png')}}" style="width:100%;"
                                 alt="Brochure: BigRep PRO 3D Printer">
                           </div>
                           <figcaption>Brochure: BigRep PRO 3D Printer</figcaption>
                        </figure>
                     </a>
                  </div>
               </div>
         </div>
         <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
            <div class="card card-body img-shadow form-block">
               <h3 class="pb-4">REQUEST A DEMO</h3>
               <div data-form-block-id="8bca84d5-b1ac-e911-a987-000d3a3702ca"></div>
               <div id="dqPD1Xlg0245WUDGj8aGKt6pP2nz3r5z2XtFkn6m_kyM"></div>
            </div>
         </div>
      </div>
   </div>
</section>
@stop