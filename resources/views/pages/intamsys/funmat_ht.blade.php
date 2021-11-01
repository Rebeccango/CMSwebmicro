@extends('layouts.layout')
@section('title') Intamsys FUNMAT HT @stop
@section('meta')
<link rel="canonical" href="{{route('intamsys.funmat.ht')}}" />
@stop
@section('description')Intamsys - INTelligent Additive Manufacturing SYStems @stop
@section('keywords')intamsys, 3d printing, additive, manufacturing, affordable, reliable, precision @stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
   style="min-height:450px; background-image:url({{asset('images/pages/intamsys/intamsys-hero-styled.jpg')}})">
   <div class="parallax-section__shadow"></div>
   <div class="container-fluid">
      <div class="content white-content d-flex justify-content-center align-items-center">
         <div>
            <div class="section-title parallax-section__title center-block mx-auto">
               <h1 class="wow fadeIn">INTAMSYS FUNMAT HT</h1>
               <div class="section-title-divider"></div>
               <h2 class="h3">DESIGNED FOR PEEK 3D PRINTING</h2>
            </div>
            <div>
               @include('layouts.generic_contact_buttons')
            </div>
         </div>
      </div>
   </div>
</section>
<section class="section--grey">
   <div class="container-fluid">
      <div class="row justify-content-center align-items-center">
         <div class="d-flex align-items-center col-md-6 col-sm-12 mt-0 mt-sm-3 order-md-1 order-sm-2 order-xs-2 ">
            <img width="100%" height="auto" class="m-auto" style="margin-top:-50px; max-width:400px"
               src="{{asset('images/pages/intamsys/funmat-ht.png')}}" />
         </div>
         <div class="col-md-6 col-sm-12 order-md-2 order-sm-1 order-xs-1Right">
            <h2 class="h1 mb-3">INTAMSYS FUNMAT HT</h2>
            <p class="">Designed for industrial quality 3D printing, the FUNMAT HT is capable of printing
               high-performance functional materials
               including PEEK, ULTEM and PPSU, in addition to a broad range of engineering thermoplastics. Advanced
               thermal system
               design of the FUNMAT HT includes a 90°C constant temperature chamber, 160°C heated build plate, and 450°C
               high-temperature extruder with all-metal hotend.</p>
            <p>Advanced thermal system design of this 3D printer includes a 90°C constant temperature chamber, 160°C
               heated build
               plate, and 450°C high-temperature extruder with all-metal hotend.</p>
            <p><strong>Build volume:</strong> 260 x 260 x 260 mm.</p>
            <p><strong>Resolution:</strong> 50-micron</p>

            <button data-toggle="modal" data-target="#download" class="btn btn-md btn-primary btn-rounded"
               target="_blank">VIEW BROCHURE</button>
         </div>
      </div>
   </div>
</section>

<section>
   <div class="container-fluid">
      <div class="custom-nav-pills">
         <ul class="nav nav-pills" role="tablist">
            <li class="nav-item">
               <a class="nav-link active in" data-toggle="tab" href="#product-family" role="tab">Product Family</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" data-toggle="tab" href="#case-studies" role="tab">Case Studies</a>
            </li>
         </ul>
         <div class="tab-content">
            <div class="tab-pane fade show active in" id="product-family" role="tabpanel">
               <div
                  class="d-flex flex-row w-100 justify-content-center align-items-center flex-wrap flex-md-nowrap p-3">
                  <div class="">
                     <img width="200px" src="{{ asset('images/pages/intamsys/funmat-ht.png') }}" />
                  </div>
                  <div class="pl-5 my-4">
                     <h3>FUNMAT HT</h3>
                     <p class="lead">DESIGNED FOR PEEK 3D PRINTING</p>
                     <p>The FUNMAT HT is fully capable of 3D printing high-performance functional materials like PEEK,
                        ULTEM and PPSU, in
                        addition to a broad range of engineering thermoplastics.</p>
                     <a href="{{ route('intamsys.funmat.ht') }}" class="btn btn-md btn-primary btn-rounded">LEARN
                        MORE</a>
                  </div>
               </div>
               <div
                  class="d-flex flex-row w-100 justify-content-center align-items-center flex-wrap flex-md-nowrap p-3">
                  <div class="">
                     <img width="200px" src="{{ asset('images/pages/intamsys/funmat-pro-410.png') }}" />
                  </div>
                  <div class="pl-5 my-4">
                     <h3>FUNMAT PRO 410</h3>
                     <p class="lead">A MULTIPLE FUNCTIONAL MATERIALS ALL-IN-ONE SOLUTION</p>
                     <p>The FUNMAT PRO 410 is an industrial additive manufacturing 3D printer designed and manufactured
                        by INTAMSYS.</p>
                     <a href="{{ route('intamsys.funmat.pro410') }}" class="btn btn-md btn-primary btn-rounded">LEARN
                        MORE</a>
                  </div>
               </div>
               <div
                  class="d-flex flex-row w-100 justify-content-center align-items-center flex-wrap flex-md-nowrap p-3">
                  <div class="">
                     <img width="200px" src="{{ asset('images/pages/intamsys/funmat-pro-610-ht.png') }}" />
                  </div>
                  <div class="pl-5 my-4">
                     <h3>FUNMAT PRO 610 HT</h3>
                     <p class="lead">FULL-SIZE HIGH PERFORMANCE FUNCTIONAL MATERIALS 3D PRINTER</p>
                     <p>The FUNTMAT PRO 610 HT is an industrial high-end machine designed for critical requirement
                        functional part test & low volume production.</p>
                     <a href="{{ route('intamsys.funmat.pro610ht') }}" class="btn btn-md btn-primary btn-rounded">LEARN
                        MORE</a>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade" id="case-studies" role="tabpanel">
               <div class="row" style="margin:0; padding:0">
                  <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
                     <a href="https://www.intamsys.com/case-study-bioneek/" target="_blank" class="pdf-item">
                        <figure>
                           <div class="figimg">
                              <img src="{{asset('images/pages/intamsys/BIoNEEK-Web.png')}}" style="width:100%;"
                                 alt="Pioneering The PEEK 3D Printing of Bionic Knee Brace">
                           </div>
                           <figcaption>Case Study: Pioneering The PEEK 3D Printing of Bionic Knee Brace</figcaption>
                        </figure>
                     </a>
                  </div>
                  <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
                     <a href="https://www.intamsys.com/case-study-automotive-pc-gauge/" target="_blank"
                        class="pdf-item">
                        <figure>
                           <div class="figimg">
                              <img src="{{asset('images/pages/intamsys/casestudy.jpg')}}" style="width:100%;"
                                 alt="Expediting Development and Production of Customized Quality Control Gauge">
                           </div>
                           <figcaption>Case Study: Expediting Development and Production of Customized Quality Control
                              Gauge</figcaption>
                        </figure>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection

@push('foot')
<div class="modal fade" id="download" tabindex="-1" role="dialog" aria-labelledby="sell" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Download Brochure</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div id="loaderSpinner"></div>
            <div data-form-block-id="2604de8a-5eec-e911-a812-000d3a33fc30"></div>
            <div id="dfaDGrEUNoFxLaDdia1695Hvxs5ecKOPR41g3ZErpdjc"></div>
         </div>
      </div>
   </div>
</div>
@endpush